<?php

require('connection.php');

$stmt = $con->prepare("SELECT * FROM users WHERE USER_TYPE = 1");

$stmt->execute();

$users = $stmt->get_result();
