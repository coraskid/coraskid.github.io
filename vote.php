<?php

error_reporting(E_ALL);
ini_set('display_errors', 1); // Ensure errors are displayed for debugging

$id = $_GET['id'];
$type = $_GET['type'];
$upvotes = 'upvotes'; // Correct the variable name to reflect the column you're updating
$db = new PDO('sqlite:forum.db');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// SQL query to increment the upvotes column
if ($type === 'post') {
    $sql = "UPDATE posts SET $upvotes = $upvotes + 1 WHERE id = :id";
} elseif ($type === "comment") {
    $sql = "UPDATE comments SET $upvotes = $upvotes + 1 WHERE id = :id";
} elseif ($type === "reply") {
    $sql = "UPDATE replies SET $upvotes = $upvotes + 1 WHERE id = :id";
} else {
    die("Invalid");
}


$statement = $db->prepare($sql);
$statement->bindParam(':id', $id);
$statement->execute();

// Redirect to the main page after updating
header("Location: fetch.php");
exit();
?>