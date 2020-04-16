<?php
include_once "MyList.php";

$myList = new MyList();
$myList->insert(0,1);
$myList->insert(1,2);
$myList->add(3);
$myList->remove(1);
$newList = $myList->cloneList();
echo implode(' ', $myList->getList()) . "<br>";
echo implode(' ', $newList) . "<br>";
var_dump($myList->contains(1));
var_dump($myList->contains(4));
echo "<br>" . $myList->indexOf(1) . "<br>";
$myList->clear();
var_dump($myList->getList());





