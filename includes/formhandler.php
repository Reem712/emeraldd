<?php
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $Username=$_POST["Username"];
    $EMAIL=$_POST["EMAIL"];
    $password=$_POST["password"];
    $Phone_Number=$_POST["Phone_Number"];
    try {
        require_once "dbh.inc.php";
        $query="INSERT INTO users (Username,EMAIL,password,Phone_Number) VALUES (:Username,:EMAIL,:password,:Phone_Number);";
        $stmt=$pdo->prepare($query);
        $stmt->bindParam(":Username",$Username);
        $stmt->bindParam(":EMAIL",$EMAIL);
        $stmt->bindParam(":password",$password);
        $stmt->bindParam(":Phone_Number",$Phone_Number);
        $stmt->execute();
        $pdo=null;
        $stmt=null;
        header("location:../login.php");
        die();
    } catch (PDOException $e) {
        die("Query faild: ".$e->getMessage());
    }
}else{
    header("location:../register.php");
}