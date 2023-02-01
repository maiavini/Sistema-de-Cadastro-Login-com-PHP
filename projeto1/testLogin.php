<?php

//print_r($_REQUEST);
session_start();

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
    //Acessa
    include_once('conex.php');
    $email=$_POST['email'];
    $senha=$_POST['senha'];

    //print_r('Email '. $email);
    //print_r('<br>');
    //print_r('Senha '. $senha);

    $sql = "SELECT * FROM formulario WHERE email = '$email' AND senha = '$senha'";

    $result = $conexao->query($sql);

    if (mysqli_num_rows($result) < 1) {
        
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    else 
    {   
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: sistema.php');    
    }


}
else
{
    //Não Acessa
    header('Location: login.php');
}



?>