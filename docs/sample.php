<?php
  require_once "Net/Traceroute.php";
  $traceroute = Net_Traceroute::factory();
  if(PEAR::isError($traceroute)) {
    echo $traceroute->getMessage();
  } else {
    $traceroute->setArgs(array('numeric' => NULL));
    var_dump($traceroute->traceroute('example.com'));
  }
?>