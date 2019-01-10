<?php
/**
 * Created by PhpStorm.
 * User: annel
 * Date: 9-1-2019
 * Time: 13:11
 */

session_start();
session_destroy();
header('Location: Start.php');

?>