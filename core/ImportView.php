<?php
$__insertMap__ = [];

/**
 * Clean file path to import
 */
function getImportPathView($filePath, $error = true) {
  if(substr($filePath, 0, 1) === '/') {
    if(substr($filePath,0, strlen(ROOT)) === ROOT) {
      $path = $filePath;
    } else {
      $path = ROOT.'/view'.$filePath;
    }
  } else if(substr($filePath, 0, 1) === '.') {
    $stack = debug_backtrace();
    $stackFile = $stack[0]['file'] === __FILE__ ? $stack[1]['file'] : $stack[0]['file'];
    $dir = dirname($stackFile);
    $path = realpath($dir.'/'.$filePath);
  } else {
    $path = realpath($filePath);
  }
  if($path && file_exists($path)) {
    return $path;
  }
  throw new Exception('[IMPORT FILE] '.$filePath.' not found');
  return false;
}

/**
 * Import Function
 * $file => file to load, absolute or relative path
 * $params => passing variable
 */
function importView($file, $params = []) {
  $path = getImportPathView($file);
  extract(is_array($params) ? $params : get_object_vars($params));
  include($path);
}

/**
 * Use at top of view's file to extends it
 */
function insertIntoView($filePath, $params = []) {
  global $__insertMap__;
  $path = getImportPathView($filePath);
  $stack = debug_backtrace();
  $file = $stack[0]['file'];

  if (!isset($__insertMap__[$path])) {
    $__insertMap__[$path] = $file;
    importView($path, $params);
    exit;
  }
}

/**
 * Use in extended view to add content
 */
function insertContentView($params = []) {
  global $__insertMap__;

  $stack = debug_backtrace();
  $file = $stack[0]['file'];
  if (isset($__insertMap__[$file])) {
    importView($__insertMap__[$file], $params);
    unset($__insertMap__[$file]);
  }
}
