<?php

    include_once('conex.php');

    if(!empty($_GET['id']))
    {
         $id = $_GET['id'];

         $sqlSelect = "SELECT * FROM formulario WHERE id=$id";

         $result = $conexao->query($sqlSelect);

         if($result->num_rows > 0 ){

            while ($user_data = mysqli_fetch_assoc($result)) {
               
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $telefone = $user_data['telefone'];
                $sexo = $user_data['sexo'];
                $data_nasc = $user_data['data_nasc'];
                $cidade = $user_data['cidade'];
                $estado = $user_data['estado'];
                $endereco = $user_data['endereco'];
                $senha = $user_data['senha'];

            }
         }
         else
         {
            header('Location: sistema.php');
         }  
    }
    else
    {
        header('Location: sistema.php');
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

        #update{
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            font-size: 15px;
            color: white;
            padding: 15px;
            border-radius: 10px;
            cursor: pointer;

        }

        #update:hover{
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195)); ;
        }

        
    </style>
</head>
<body>
    <a href="sistema.php"> Voltar</a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Clientes</b></legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome?>" required>
                    <label for="nome" class="inputLabel">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="senha" id="senha" class="inputUser" value="<?php echo $senha?>" required>
                    <label for="senha" class="inputLabel">Senha</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email?>"required>
                    <label for="email" class="inputLabel">Email</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone?>" required>
                    <label for="telefone" class="inputLabel">Telefone</label>
                </div>
                
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : '' ;?> required>
                <label for="feminino">Feminino</label>
                <input type="radio" id="masculino" name="genero" value="masculino" <?php echo $sexo == 'masculino' ? 'checked' : '' ;?> required>
                <label for="masculino">Masculino</label>
                <br><br>
                <div>
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento"  value="<?php echo $data_nasc?>" required>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" value="<?php echo $cidade?>" required>
                    <label for="cidade" class="inputLabel">Cidade</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="estado" name="estado" id="estado" class="inputUser" value="<?php echo $estado?>" required>
                    <label for="estado" class="inputLabel">Estado</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="endereco" name="endereco" id="endereco" class="inputUser" value="<?php echo $endereco?>" required>
                    <label for="endereco" class="inputLabel"> Endereço</label>
                </div>
                <br><br>
                <input type = "hidden" name="id" value="<?php echo $id; ?>">
                <input type="submit" name="update" id="update">
                
            </fieldset>
        </form>
    </div>
    
</body>
</html>