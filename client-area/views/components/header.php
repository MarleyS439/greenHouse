<?php
session_start();    
?>
<!-- Cabeçalho -->
<header id="home" class="cabecalho">
    <div class="overlay"></div>
    <!-- Menu de navegação -->
    <?php
    if (isset($_SESSION['usuario'])) {
        include('nav-userlogged.php');
    } else {
        include('navbar-unlogged.php');
    }
    ?>

    <div class="search">
        <h2 class="title">Explore o futuro dos negócios corporativos<br></h2>
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

                <div class="filters">
                    <div class="filter-tipo">
                        <label for="tipo">Tipo de imóvel</label>
                        <div id="tipo">
                            <label for="mansao" id="labelOption">Mansão</label>
                            <input type="radio" name="" id="mansao">
                            <label for="mansao" id="labelOption">Flat</label>
                            <input type="radio" name="" id="flat">
                            <label for="mansao" id="labelOption">Prédio</label>
                            <input type="radio" name="" id="predio">
                            <label for="mansao" id="labelOption">Sala</label>
                            <input type="radio" name="" id="sala">
                        </div>
                    </div>

                    <div class="filter-valor">
                        <label for="valor">Valor</label>
                        <div class="itens-filter-valor">
                            <span>Min R$ 1.000,00</span>
                            <input type="range" id="valor" min="1000" max="5000000">
                            <span>Max R$ 5.000.000,00</span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</header>