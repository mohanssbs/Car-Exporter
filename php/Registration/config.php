<?php

$conn=mysql_connect("localhost", "root", "") or
die("Not connected Database");

$select=mysql_select_db("mycar") or
die("Not selected Database");

?>