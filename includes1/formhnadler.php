<?php
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $name1=$_POST["name1"];
    $email1=$_POST["email1"];
    $contact1=$_POST["contact1"];
    $message1=$_POST["message1"];
    try {
        require_once "dbh1.inc.php";
        $query="INSERT INTO contact (name1,email1,contact1,message1) VALUES (:name1,:email1,:contact1,:message1);";
        $stmt=$pdo->prepare($query);
        $stmt->bindParam(":name1",$name1);
        $stmt->bindParam(":email1",$email1);
        $stmt->bindParam(":contact1",$contact1);
        $stmt->bindParam(":message1",$message1);
        $stmt->execute();
        $pdo=null;
        $stmt=null;
        header("location:../contact.php");
        die();
    } catch (PDOException $e) {
        die("Query faild: ".$e->getMessage());
    }
}else{
    header("location:../contact.php");
}