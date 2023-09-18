<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
       
    <style>
        body { font-family: Arial, Helvetica, sans-serif; }
        .cadastro { width: 100%; max-width: 500px; }
        .form { display: flex; flex-direction: column; }
        textarea { height: 150px; }
    </style>
</head>

<body>
    <section class="content">
        <div class="cadastro">
            <h1>Cadastro de dados</h1>
            <p>Complete suas informações para concluir seu cadastro.</p>
            <br>
        </div>

            <?php
                if(isset($_SESSION['msg'])){
                echo $_SESSION ['msg'];
                unset($_SESSION['msg']);
                }
            ?>

        <form class="form" method="post" action="email.php">
            <fieldset>
                <div>
                    <label for="nome">Nome:</label>
                    <input type="text" name="Nome" id="nome">
                </div>

                <div>
                    <label for="sobrenome">Sobrenome:</label>
                    <input type="text" name="Sobrenome" id="sobrenome">
                </div>

                <div>
                    <label for="email">Email:</label>
                    <input type="email" name="Email" id="email">
                </div>

                <div>
                    <label for="mensagem">mensagem:</label>
                    <textarea name="mensagem" id="mensagem" cols="30" rows="10">Deixe sua mensagem aqui...</textarea>
                </div>
            </fieldset>
        
            <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>
