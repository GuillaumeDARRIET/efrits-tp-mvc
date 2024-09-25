<?php
require_once(ROOT.'/core/ImportView.php');

class Controller {
  public function __construct($uri = []) {
    $this->uri = $uri;
  }

  public function view() {
    echo('DEFAULT VIEW');
  }

}
