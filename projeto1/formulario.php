<?php

    if(isset($_POST['submit']))
    {

         
         include_once('conex.php');
         
         $nome = $_POST['nome'];
         $email =  $_POST['email'];
         $telefone = $_POST['telefone'];
         $sexo = $_POST['genero'];
         $data_nasc = $_POST['data_nascimento'];
         $cidade = $_POST['cidade'];
         $estado = $_POST['estado'];
         $endereco = $_POST['endereco'];
         $senha = $_POST['senha'];

         $result = mysqli_query($conexao, "INSERT INTO formulario(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco) 
         VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

         header('Location: login.php');

    }

?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(202, 97, 202), #6c25be) ;
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
            min-width:  350px;
            max-width:  800px;
        }

        fieldset{
            border: 3px solid dodgerblue;
        }
        
        legend{
            border: 1px, solid, dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;   
        }

        .inputbox{
            position: relative;
        }

        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .inputUser:focus ~ .inputLabel,
        .inputUser:valid ~ .inputLabel{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }

        #data_nascimento{
            border: none;
            padding: 8px;
            font-size: 15x;
            outline: none;
            border-radius: 10px;  
        }

        #submit{
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            font-size: 15px;
            color: white;
            padding: 15px;
            border-radius: 10px;
            cursor: pointer;

        }

        #submit:hover{
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195)); ;
        }

        
    </style>
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Clientes</b></legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="inputLabel">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="inputLabel">Senha</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="inputLabel">Email</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="inputLabel">Telefone</label>
                </div>
                
                <p>Sexo:</p>
                <input type="radio" id="femenino" name="genero" value="femenino" required>
                <label for="femenino">Femenino</label>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br><br>
                <div>
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento"  required>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="inputLabel">Cidade</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="estado" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="inputLabel">Estado</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="endereco" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="inputLabel"> Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
                
            </fieldset>
        </form>
    </div>
    
</body>
</html>