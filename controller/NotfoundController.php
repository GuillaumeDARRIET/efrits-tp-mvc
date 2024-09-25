<?php
require_once(ROOT.'/classes/Controller.php');

final class NotfoundController extends Controller {
  public function view() {
    echo('Not found');
  }
}