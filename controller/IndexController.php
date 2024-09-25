<?php
require_once(ROOT.'/classes/Controller.php');
require_once(ROOT.'/model/IndexModel.php');

final class IndexController extends Controller {

  public function __construct($uri) {
    parent::__construct($uri);
    $this->model = new IndexModel();
  }

  public function view() {
    $data = $this->model->GetHomeData();
    
    importView('/index.php', [
      'meta_title' => $data['home_meta_title'],
      'meta_desc' => $data['home_meta_desc'],
      'title' => $data['home_meta_title'],
      'description' => $data['home_meta_desc'],
    ]);

  }
}