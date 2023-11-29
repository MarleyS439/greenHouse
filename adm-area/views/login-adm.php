<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Marley de Sousa Santos, Renan de Castro Teixeira">
    <title>Login Administrativo</title>
    <link rel="stylesheet" type="text/css" href="../views/assets/css/login-adm.css">
    <link rel="shortcut icon" href="../assets/img/icones/ícone-logo.png" type="image/x-icon">
</head>

<body>

    <div class="container">

        <div class="fundo-imagem"></div>
        <form action="" method="post">

            <div class="title-form">
                <img src="../../assets/img/icones/ícone-logo.png" alt="">
                <h2>Login Administrativo</h2>
            </div>

            <div class="item">
                <label for="emailUSer">E-mail</label>
                <input type="email" name="emailUSer" id="emailUSer" required placeholder="Digite seu e-mail">
            </div>

            <div class="item">
                <label for="passwdUser">Senha</label>
                <input type="password" name="passwdUser" id="passwdUser" required placeholder="Digite sua senha">
            </div>

            <button type="submit">Entrar</button>

            <div class="non-cadastre">
                <span>Esqueceu a senha? </span><a href="#">Redefinir senha</a>
            </div>

            <div class="return">
                <a href="../../client-area/views/index.php">Voltar para o início</a>
            </div>

        </form>

    </div>

</body>

</html>