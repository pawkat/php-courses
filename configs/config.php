<?php

$mysqli = new mysqli("localhost", "root", "root", "php_courses");
if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}

