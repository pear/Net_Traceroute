<?php
  // Example to illustrate the use of Net_Traceroute
  // $Id$

  require_once "Net/Traceroute.php";
  $traceroute = Net_Traceroute::factory();
  if(PEAR::isError($traceroute)) {
    echo $traceroute->getMessage();
  } else {
    $traceroute->setArgs(array('numeric' => NULL));
    var_dump($traceroute->traceroute('pear.php.net'));
  }
?>