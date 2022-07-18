<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Login! CRUD João</title>
        <link rel="stylesheet" type= "text/css" href="../crud-project/css/styles.css" />
    </head>
    <body>
        <div class="containerCad">
            <div class="blur">
            <h1 id="title">Bem-vindo(a)!</h1> 
                <form action="login.php" method="get">
                <div class="input">
                        <label>Email:</label>
                        <input type="email" id="email">
                </div>
                <div class="senha">
                        <label>Senha:</label>
                        <input type="password" id="senha">
                </div>
                    <div class="button">
                        <input type="submit" id="botao" value="Login">
                        <br/>
                        <br/>
                        <a href="cadastro.php"><label id="cadastro">Ainda não é cadastrado?</label></a>
                        </form>
                    </div>
           </div>
        </div>
    </body>
        <script src="js/script.js"></script>
</html>