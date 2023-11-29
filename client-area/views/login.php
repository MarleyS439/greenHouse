<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Marley de Sousa Santos, Renan de Castro Teixeira">
    <title>Faça login na Green House</title>
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/icones/ícone-logo.png">
</head>

<body>

    <div class="container">

        <div class="fundo-imagem"></div>
        <form action="../../config/loginUser.php" method="post">
            <div class="title-form">
                <img src="../../assets/img/icones/ícone-logo.png" alt="">
                <h2>Acesse sua conta</h2>
            </div>

            <div class="item">
                <label for="emailUSer">E-mail</label>
                <input type="email" name="emailUser" id="emailUser" required placeholder="Digite seu e-mail">
            </div>

            <div class="item">
                <label for="passwdUser">Senha</label>
                <input type="password" name="senha" id="passwdUser" required placeholder="Digite sua senha">
            </div>

            <button type="submit">Entrar</button>

            <div class="non-cadastre">
                <span>Não possui cadastro? </span><a href="./cadastro.php">Cadastre-se agora</a>
            </div>

            <div class="return">
                <a href="./index.php">Voltar para o início</a>
            </div>

            <div class="log">

                <div class="options-login">

                    <p>Faça login com </p>

                    <div class="items-icons">

                        <div class="icons">

                            <div class="icon">
                                <a href="https://www.facebook.com/" target="_blank">
                                    <img src="../../assets/img/icones/facebook.png" alt="">
                                    <p class="title-icon">Facebook</p>
                                </a>
                            </div>

                            <div class="icon">
                                <a href="https://accounts.google.com/v3/signin/identifier?hl=pt-br&ifkv=AVQVeyxSEaCdJd6XMsdS6k1ILG_A9t1sHhubbQxdjJmrFKDcfQXjji28D7ZaS9g8wir2IJw9eMYQcQ&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S-2147310452%3A1699887663516111&theme=glif" target="_blank">
                                    <img src="../../assets/img/icones/google-icon.png" alt="">
                                    <p class="title-icon">Google</p>
                                </a>
                            </div>

                            <div class="icon">
                                <a href="https://appleid.apple.com/sign-in" target="_blank">
                                    <img src="../../assets/img/icones/logotipo-da-apple.png" alt="">
                                    <p class="title-icon">Apple</p>
                                </a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </form>

    </div>

</body>

</html>