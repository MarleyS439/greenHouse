<?php
$pesquisa = $_GET['pesquisa'];
if ($pesquisa == '') {
    echo "Você não pesquisou nada...";
    echo "Tá achando que a vida é brincadeira?";
} else {
    echo "Você pesquisou por:" . "<h4>" . $pesquisa . "</4>";
}
