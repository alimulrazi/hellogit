<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
/*function addValues()
{
    $sum =0;
    for($i=0; $i<= func_get_args(); $i++)
    {
        $sum += func_get_args($i);
    }
    return $sum;
}

echo addValues(1,2,3);
*/

/*
$v1 = 1;
$v2 = 2;
$v3 = 3;
function myFunction(){
    $GLOBALS['v1'] *=2;
    $v2 *=2;
    global $v3;
    $v3 *= 2; 
}
myFunction();
echo "$v1$v2$v3";
 * /
 */
/*
class A {
    public function __call($name, $arguments) {
      return static::who();
    }
    static function who(){echo __CLASS__;}
}
class B extends A{
    static function who(){echo __CLASS__;}
}

$b = new B;
echo $b->test();
*/

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