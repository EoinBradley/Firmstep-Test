<?php
include 'db.php';

mysql_connect($host, $user, $password);
mysql_query("CREATE DATABASE `firmstep`");

$db = new PDO('mysql:host='.$host.';dbname=firmstep', $user, $password);
$query = $db->prepare("CREATE TABLE `customers` (`id` int(11) NOT NULL, `type` varchar(255) NOT NULL, `name` varchar(255) NOT NULL, `service` varchar(255) NOT NULL, `time` text NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1; ALTER TABLE `customers` ADD PRIMARY KEY (`id`); ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;");
$query->execute();
header("Location:index.php");
?>