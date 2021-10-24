<?php
class Account {
  // Properties
  public $name;
  public $number; 
  public $balance;
  public $deposite;
  //public $withdraw;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
 function set_number($number) {
    $this->number = $number;
 }
  
  function get_number() {
    return $this->number;
  }
  function set_balance($balance){
	  $this->balance = $balance;
  }
  function get_balance() 
  {
	  return $this->balance;
  }
  
  function set_deposite($deposite) {
    $this->deposite = $deposite ;
}
  function get_deposite() {
    return $this->deposite;
  }
 }
  

$ac = new Account();
$ac->set_name('Sakib');
$ac->set_number('1');
$ac->set_balance('500');
$ac->set_deposite('500');
echo "Name: ".$ac->get_name();
echo "<br>";
echo "Number: ".$ac->get_number();
echo "<br>";
echo "Current Balance: ".$ac->get_balance();
echo "<br>";
echo "Deposite: ".$ac->get_deposite();
?>
