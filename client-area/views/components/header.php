<!-- Cabeçalho -->
<header id="home" class="cabecalho">
    <div class="overlay"></div>
    <!-- Menu de navegação -->
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
                    <button type="button">
                        <a href="../login.php"><img src="../../assets/img/icones/pessoa-icone.png" alt="Ícone de pessoa"><span>Entrar</span></a>
                    </button>
                </div>
            </ul>
        </div>

        <div class="container">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>

        <!-- Botão de login -->
        <div class="login-btn">
            <button id="btn-login" type="button" onclick="redirectToIndex()">
                <img src="../../assets/img/icones/pessoa-icone.png" alt="Ícone de pessoa"><span>Entrar</span>
            </button>
        </div>
    </nav>


    <div class="search">
        <h2>Explore o futuro dos negócios corporativos<br></h2>
        <div class="title-header">

            <form action="../../config/search.php" method="get">
                <div class="call-to-action">
                    <input type="radio" id="option1" name="group1" checked>
                    <label for="option1" id="labelOption">ALUGUEL</label>

                    <input type="radio" id="option2" name="group1">
                    <label for="option2" id="labelOption">COMPRA</label>
                </div>

                <div class="search-bar">
                    <input type="search" name="pesquisa" id="" placeholder="Busque imóveis aqui">
                    <button type="submit" id="srch1"><i class="fa-solid fa-magnifying-glass"></i>Buscar</button>
                    <button type="submit" id="srch2"><i class="fa-solid fa-magnifying-glass"></i></button>
                    <button type="button" id="filter1"><i class="fas fa-sliders-h"></i>Filtrar</button>
                    <button type="button" id="filter2"><i class="fas fa-sliders-h"></i></button>
                </div>

                <!--
                <div class="filters">
                    
                </div>
                -->
            </form>
        </div>
    </div>
</header>