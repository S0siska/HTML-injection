<?php
$dbh = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');


$username = $_GET["user"];
$password = $_GET["pass"];
echo "<p>User: " . $username . "</p>";
echo "<p>Password: " . $password . "</p>";


$sql = "SELECT * FROM `test`.`testTable` WHERE user = :username AND password = :password";
$stmt = $dbh->prepare($sql);
$stmt->bindParam(':username', $username, PDO::PARAM_STR);
$stmt->bindParam(':password', $password, PDO::PARAM_STR);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
if($result){
    echo "<p>Login successful</p>";
    header ('Location: attack.php');
}
else {
    echo "<p>Wrong password/username</p>";
}


