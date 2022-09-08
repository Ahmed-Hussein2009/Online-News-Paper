<?php


if(isset($_POST['comments']))
{

	$user = json_decode($_POST['comments'],true);
	$newsid = $user['id'];
	$name = $user['name'];
	$email = $user['email'];
	$comment = $user['comment'];
   	$datetime = date("Y/m/d h:i:sa");

	include_once 'login/database.php';
	$stmt = $conn->prepare('INSERT INTO comments(newsid,name,email,comment ,date_time) VALUES (?,?,?,?,?)');
    $stmt->execute(array($newsid , $name , $email , $comment, $datetime));
    echo "1";
	
}


?>