<?php
// model.php
 
 require_once 'config.php'; 

 
function openConex(){
	$conex=new mysqli(DBHOST, DBUSER, DBPWD, DBNAME); 
	
    return $conex;
}    
 
function getPosts(){	
	$mysqli = openConex();
	
	$result = $mysqli->query('SELECT id, title, content, date, author, year, division, subject, img FROM post ORDER BY id desc');	

	return $result;	
}

function getPostById($id)
{
	$mysqli = openConex();
 
	$result = $mysqli->query('SELECT date, title, content, author, year, division, subject, img FROM post WHERE id ='.$id);
	$row = mysqli_fetch_assoc($result);
	
    return $row;
}

?>

