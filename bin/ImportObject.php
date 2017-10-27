<?php

require(__DIR__.'/../vendor/autoload.php');
require(__DIR__.'/../lib/GetAllLineItems.php');
require(__DIR__.'/../lib/GetAllOrders.php');
require(__DIR__.'/../lib/GetAllLicas.php');


if ($argv[1] == 'LineItem') {
  GetAllLineItems::main();
}elseif($argv[1] == 'Order'){
  GetAllOrders::main();
}elseif($argv[1] == 'Lica'){ 
  GetAllLicas::main();
}else{
  print "wtf?? no object?";
}