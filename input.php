<?php
if($_POST['type'] == "Citizen"){
	if($_POST['service'] && $_POST['title'] && $_POST['service'] && $_POST['firstName'] && $_POST['lastName']) {	
		$type = $_POST['type'];
		$service = $_POST['service'];
		$title = $_POST['title'];
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$name = $title." ".$firstName." ".$lastName;

		include 'db.php';
		$db = new PDO('mysql:host='.$host.';dbname=firmstep', $user, $password);

		$query = $db->prepare("INSERT INTO `customers` (`type`, `name`, `service`, `time`) VALUES (:type, :name, :service, :t)");

		if (!$query->execute([
			'type' => $type,
			'name' => $name,
			'service' => $service,
			't' => time()
		])) {
			echo "Unknown error when adding sustomer.";
		}
	} else {
		echo "All fielfd must be filled out.";
	}
} else if($_POST['type'] == "Organisation"){
	if($_POST['service'] && $_POST['name']) {	
		$type = $_POST['type'];
		$service = $_POST['service'];
		$name = $_POST['name'];

		$db = new PDO('mysql:host=localhost;dbname=firmstep', 'root', '');

		$query = $db->prepare("INSERT INTO `customers` (`type`, `name`, `service`, `time`) VALUES (:type, :name, :service, :t)");

		if (!$query->execute([
			'type' => $type,
			'name' => $name,
			'service' => $service,
			't' => time()
		])) {
			echo "Unknown error when adding sustomer.";
		}
	} else {
		echo "All fielfd must be filled out.";
	}
} else {
	if($_POST['service']) {	
		$type = $_POST['type'];
		$service = $_POST['service'];
		$name = $_POST['type'];

		$db = new PDO('mysql:host=localhost;dbname=firmstep', 'root', '');

		$query = $db->prepare("INSERT INTO `customers` (`type`, `name`, `service`, `time`) VALUES (:type, :name, :service, :t)");

		if (!$query->execute([
			'type' => $type,
			'name' => $name,
			'service' => $service,
			't' => time()
		])) {
			echo "Unknown error when adding sustomer.";
		}
	} else {
		echo "All fielfd must be filled out.";
	}
}
?>