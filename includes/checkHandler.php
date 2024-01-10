<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    try {
        require_once "dbh.inc.php";
        $query = "SELECT * FROM users WHERE username = :username AND password = :password";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->execute();  // No need to pass parameters again
        $registration1 = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($registration1) {
            header("location: ../index.html");
            die();
        } else {
            echo '<script>alert("Invalid credentials. Please try again.");';
            echo 'window.location.href="../login.php?error=InvalidCredentials";</script>';
            die();
        }
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else { header("location: ../register.php");
    die();}