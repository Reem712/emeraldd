<?php
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $address=$_POST["address"];
    $visa=$_POST["visa"];
    $code=$_POST["code"];
    try {
        require_once "dbh2.inc.php";
        $query="INSERT INTO cart (address,visa,code) VALUES (:address,:visa,:code);";
        $stmt=$pdo->prepare($query);
        $stmt->bindParam(":address",$address);
        $stmt->bindParam(":visa",$visa);
        $stmt->bindParam(":code",$code);
        $stmt->execute();
        $pdo=null;
        $stmt=null;
        header("location:../cart.php");
        die();
    } catch (PDOException $e) {
        die("Query faild: ".$e->getMessage());
    }
}else{
    header("location:../cart.php");
}