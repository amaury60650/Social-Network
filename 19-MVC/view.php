<?php

class View
{
  private $data;
  public function setData($data)
  {
    $this->data = $data;
  }
  public function renderHTML()
  {
    include 'views/view_personn.phtml';
  }
}
