<?php
include "ArrayList.php";

$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(7);
$listInteger->add(4);
//var_dump($listInteger->toArray());


echo $listInteger->get(2);

?>