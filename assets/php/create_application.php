<?php
require_once("connect.php");

$sql = "INSERT INTO applications (name, tel, application) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_POST['name'], $_POST['tel'], $_POST['application']]);
header("Location: ../../index.php#contacts");