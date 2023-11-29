<nav class="navbar">
    <!-- Logo -->
    <div class="logo-area" onclick="redirectToIndex()">
        <img src="../../assets/img/outros/Logo.png" alt="Logo Green House">
    </div>

    <div class="nav-items">
        <!-- Links de navegação -->
        <ul class="itens">
            <li><a href="#home">Início</a></li>
            <li><a href="#about">Sobre</a></li>
            <li><a href="#venda">Venda</a></li>
            <li><a href="#locacao">Locação</a></li>
            <li><a href="#depoimentos">Depoimentos</a></li>
        </ul>
    </div>

    <div class="menu">
        <ul class="items-menu-mobile">
            <li><a href="#home">Início</a></li>
            <li><a href="#about">Sobre</a></li>
            <li><a href="#venda">Venda</a></li>
            <li><a href="#locacao">Locação</a></li>
            <li><a href="#depoimentos">Depoimentos</a></li>
            <div class="loginarea">
                <!-- Botão de login -->
                <div class="foto-perfil-logado" id="openb">
                    <img src="../../assets/img/clientes/cliente1.jpeg" alt="Foto de perfil">
                    <p>Nome Cliente</p>
                    <form action="../../client-area/controllers/logout.php" method="post">
                        <div clas="exitsession">
                            <button type="submit">Sair</button>
                        </div>
                    </form>

                </div>
            </div>
        </ul>
    </div>

    <div class="container">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>

    <!-- Botão de login -->
    <div class="foto-perfil" id="openb">
        <img src="../../assets/img/clientes/cliente1.jpeg" alt="Foto de perfil">
        <p>Nome Cliente</p>
        <div>
            <form action="../../client-area/controllers/logout.php" method="post">
                <button class="exitsession" type="submit">Sair</button>
            </form>
        </div>
    </div>
</nav>