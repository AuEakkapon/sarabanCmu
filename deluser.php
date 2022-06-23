<?php
include('function.php');
if (isset($_GET['del'])) {
    $del = $_GET['del'];
    $delete = new dbcon();
    $deletedata = $delete->del($del);
    header("location: test.php");
}