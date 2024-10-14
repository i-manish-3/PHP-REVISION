<?php

$host = 'localhost';
$dbname = 'phprevision';
$username = 'root';
$password = '';

//mysqli

// $conn = mysqli_connect($host, $username, $password, $dbname);

// if(!$conn)
// {
//     die("Connection failed ".mysqli_connect_error());
// }
// // $sql = "insert into user (FirstName) values('Kumar')";
// $sql = "select * from user";
// $res = mysqli_query($conn, $sql);

// while($row = mysqli_fetch_assoc($res))
// {
//     echo '<pre>';
//     print_r($row);
// }


// PDO

$conn = new PDO("mysql:host=$host; dbname=$dbname",$username,$password);
// $sql = "insert into user (FirstName) values('Deepak')";
$sql = "select * from user";
$stmt = $conn->prepare($sql);
$stmt->execute();

$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
print_r($row);
?>