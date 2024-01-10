<?php
echo $_SERVER["REQUEST_METHOD"].'request'.'<br>';
if($_SERVER["REQUEST_METHOD"]=="POST"){

    echo "user name is ". $_POST['emaill']."<br>";
    echo "password is ". $_POST['pass']."<br>";
    $admin=array("reem@gmail","habiba@gmail","micheal@gmail","aghabi@gmail","amaar@gmail");
    $name=$_POST['emaill'];
    if(in_array($name,$admin))
    {
        header('Location: index.html');
    }
    else{
        echo "u need sign up";
    }
}
else{
    echo "u cant enter this directly";
    
}