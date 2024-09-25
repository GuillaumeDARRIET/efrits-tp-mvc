<?php 

require_once(ROOT.'/core/Database.php');

Class Model {

  protected function query($query) {
    return DB::query($query);
  }

  protected function getLastId() {
    return DB::getLastId();
  }
  
}
