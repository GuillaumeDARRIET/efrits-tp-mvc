<?php
require_once(ROOT.'/classes/Model.php');

final class IndexModel extends Model {
  
  public function GetHomeData() {
    // $rows = $this->query("
    //   SELECT * 
    //   FROM `blocks` 
    //   WHERE `key` LIKE 'home_%' 
    // ");
    // $data = [];
    // foreach($rows as $item) {
    //   $data[$item->key] = $item->value;
    // }
    // return $data;

    return [
      'home_meta_title' => 'La home page',
      'home_meta_desc' => 'La description de la home page',
    ];
  }

}