<?php

//$id = $_GET['id'];
//echo $id;

/*
 $id = $_GET['id'];
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = '1';
}
 */

// $id = isset($_GET['id']) ? $_GET['id'] : '1'; Easier Than above

 $id = $_GET['id'] ?? '1';    //PHP 7.0+

 echo $id;