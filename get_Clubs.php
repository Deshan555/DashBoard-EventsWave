<?php

require('connection.php');

$stmt = $con->prepare("SELECT * FROM users WHERE USER_TYPE = 0");

$stmt->execute();

$clubs = $stmt->get_result();
