<?php
include('connection.php');
if(isset($_POST['submit']))
$name= $_POST['name'];
$contact= $_POST['contact'];
$date= $_POST['date'];
$response= $_POST['response'];
$address= $_POST['address'];
$suggest= $_POST['suggest'];
$quere= $_POST['query'];
$query= INSERT INTO 'registration form'('id','name','contact','date','response','address','suggest','query')VALUES(NULL,$name,$contact,$date,$response,
$address,$suggest,$quere,$query)

mysqli_query($con,$query);
?>