<?php

$postBody = $_POST['body'];
$title = $_POST['title'];
$author = $_POST['author'];
$date = date('l, M d, o');
$db = new mysqli('sheekssoftwaresoluti.fatcowmysql.com','tester','GWQs9Hv1@','test');

$query1 = $db->query("SELECT id, date FROM posts WHERE title = '".$title."'");
if($query1->num_rows > 0) {
	$row = $query1->fetch_row();
	if($row['date'] == $date) {
		$query = $db->query('UPDATE posts SET entry = "'.$postBody.'" WHERE id = "'.$row['id'].'"');
		exit;
	}
}

$query = $db->query('INSERT INTO posts VALUES ("","'.$title.'","'.$author.'","'.$date.'","'.$postBody.'")');
