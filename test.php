<?php
class Animal{
 
  public function __construct() {
    $this->created = time();
    $this->logfile_handle = fopen('/tmp/log.txt', 'w');
  }
 
  public function __destruct() {
    fclose($this->logfile_handle);
  }
  
  public function __set($field, $value) {
      if($field=='name'){
          return $this->username;
      }
  }

  public function __call($method, $arguments) {
      echo 'Unknown method'.$method;
      return false;
  }
}
?>