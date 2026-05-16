<?php
$conn = new PDO("mysql:host=localhost;dbname=petshop1", "root", "");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>