<?php
include 'db.php';
$db = new PDO('mysql:host='.$host.';dbname=firmstep', $user, $password);

$query = $db->prepare("SELECT * FROM `customers` ORDER BY `id` ASC");
$query->execute();
$queue = $query->fetchAll();

echo "<table width='100%'><tr><td id='bold' width='20'>#</td><td id='bold' width='80'>Type</td><td id='bold' width='170'>Name</td><td id='bold'>Service</td><td id='bold'>Queued at</td></tr>";
foreach ($queue as $item) {
	echo "<tr class='queue-item'><td>".$item['id']."</td><td>".$item['type']."</td><td>".$item['name']."</td><td>".$item['service']."</td><td>".date('d/m/y h:i', $item['time'])."</td></tr>";
}
echo "</table>";
?>