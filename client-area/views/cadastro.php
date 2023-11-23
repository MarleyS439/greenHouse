<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Marley de Sousa Santos, Renan de Castro Teixeira">
    <title>Crie sua conta na Green House</title>
    <link rel="stylesheet" href="../views/css/cadastro.css">
    <link rel="shortcut icon" href="../../assets/img/icones/ícone-logo.png" type="image/x-icon">
</head>

<body>

    <div class="container">

        <div class="fundo-imagem"></div>
        <form action="../../config/registerUser.php" method="post">

            <div class="title-form">
                <img src="../../assets/img/icones/ícone-logo.png" alt="Ícone Green House">
                <h2>Crie sua conta</h2>
            </div>

            <div class="user-information-name">
                <div class="identify">
                    <label for="nameUser">Nome*</label>
                    <input type="text" name="nameUser" id="nameUser" placeholder="Digite seu primeiro nome" required>
                </div>

                <div class="identify">
                    <label for="lastNameUser">Sobrenome*</label>
                    <input type="text" name="lastNameUser" id="lastNameUser" placeholder="Digite seu sobrenome" required>
                </div>
            </div>

            <div class="item">
                <label for="emailUSer">E-mail*</label>
                <input type="email" name="emailUser" id="emailUser" required placeholder="Digite seu e-mail">
            </div>

            <div class="item">
                <label for="passwdUser">Senha*</label>
                <input type="password" name="passwdUser" id="passwdUser" required placeholder="Digite sua senha">
            </div>

            <div class="item">
                <label for="confirmPasswdUser">Confirme sua senha*</label>
                <input type="password" name="confirmaPasswdUser" id="confirmaPasswdUser" required placeholder="Digite sua senha novamente">
            </div>

            <div class="check">
                <p><input type="checkbox" name="recipeInformations">Desejo receber informações e notícias</p>
            </div>

            <button type="submit">Cadastrar</button>

            <div class="non-cadastre">
                <span>Já possui um cadastro? </span><a href="./login.php">Faça login</a>
            </div>

            <div class="return">
                <a href="./index.php">Voltar para o início</a>
            </div>

            <div class="log">

                <div class="options-login">

                    <p>Cadastre-se com </p>

                    <div class="items-icons">

                        <div class="icons">

                            <div class="icon">
                                <a href="https://www.facebook.com/" target="_blank">
                                    <img src="../../assets/img/icones/facebook.png" alt="Ícone do Facebook">
                                    <p class="title-icon">Facebook</p>
                                </a>
                            </div>

                            <div class="icon">
                                <a href="https://accounts.google.com/v3/signin/identifier?hl=pt-br&ifkv=AVQVeyxSEaCdJd6XMsdS6k1ILG_A9t1sHhubbQxdjJmrFKDcfQXjji28D7ZaS9g8wir2IJw9eMYQcQ&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S-2147310452%3A1699887663516111&theme=glif" target="_blank">
                                    <img src="../../assets/img/icones/google-icon.png" alt="Ícone do Google">
                                    <p class="title-icon">Google</p>
                                </a>
                            </div>

                            <div class="icon">
                                <a href="https://appleid.apple.com/sign-in" target="_blank">
                                    <img src="../../assets/img/icones/logotipo-da-apple.png" alt="ícone da Apple">
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