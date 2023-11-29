<?php
$depoimentos = [
    [
        "foto" => "../../assets/img/clientes/cliente1.jpeg",
        "texto" => "Estou muito satisfeito com a qualidade do serviço. A equipe da Green House foi extremamente profissional e ajudou a encontrar o espaço dos meus sonhos!",
        "nome" => "Juan Carlos",
        "profissao" => "Designer de Interiores"
    ],

    [
        "foto" => "../../assets/img/clientes/cliente2.jpeg",
        "texto" => "O atendimento foi excelente! Encontrar uma propriedade moderna era meu sonho, e a Green House tornou isso uma realidade. Recomendo a todos!",
        "nome" => "Marcos Paulo",
        "profissao" => "Arquiteto"
    ],

    [
        "foto" => "../../assets/img/clientes/cliente3.jpeg",
        "texto" => "Estou muito feliz com o novo prédio da minha empresa. A equipe foi muito prestativa durante todo o processo. Recomendo fortemente a Green House Real Estate!",
        "nome" => "Jonathan Gonçalves", 
        "profissao" => "Engenheiro"
    ],

    [
        "foto" => "../../assets/img/clientes/cliente4.jpeg",
        "texto" => "Excelente serviço! Encontrar um ótimo local moderno nunca foi tão fácil. Agradeço à equipe do Green House por tornar meu sonho realidade.",
        "nome" => "Fernanda Wicket",
        "profissao" => "Psicólogo/Psicóloga"
    ],

    [
        "foto" => "../../assets/img/clientes/cliente5.jpeg",
        "texto" => "O Green House fez todo o processo de compra da minha propriedade ser suave e sem estresse. Estou muito satisfeito com a escolha!",
        "nome" => "Bryan Oulgwi",
        "profissao" => "Empresário"
    ],

    [
        "foto" => "../../assets/img/clientes/cliente6.jpeg",
        "texto" => "Recebi um atendimento personalizado do início ao fim. A equipe do Green House realmente se preocupa em encontrar a propriedade perfeita para cada cliente.",
        "nome" => "Nowuld Jonhson",
        "profissao" => "Fotógrafo/Fotógrafa"
    ],

    [
        "foto" => "../../assets/img/clientes/cliente7.jpeg",
        "texto" => "Agradeço muito à equipe do Green House. Eles tornaram o processo de compra da minha casa mais fácil do que eu poderia imaginar. Profissionalismo exemplar!",
        "nome" => "Patricia Sponser",
        "profissao" => "Arquiteta"
    ],

    [
        "foto" => "../../assets/img/clientes/cliente8.jpeg",
        "texto" => "Estou muito feliz com o espalço novo da minha empresa. Recomendo o Green House a todos.",
        "nome" => "Sandra Zaier",
        "profissao" => "Cientista de Dados"
    ],

    [
        "foto" => "../../assets/img/clientes/cliente9.jpeg",
        "texto" => "Encontrar uma propriedade nunca foi tão fácil. O Green House tornou o processo simples e eficiente. Estou muito satisfeito!",        "nome" => "Gabirele Machado",
        "profissao" => "Designer de Interiores"
    ]
];
?>

<?php foreach ($depoimentos as $depoimento) : ?>
    <div class="depoiment">
        <div class="card-depoimento">
            <img src="<?php echo $depoimento['foto']; ?>" alt="Foto de perfil de um cliente">
            <cite><?php echo $depoimento['texto']; ?></cite>
            <p class="nameCliente"><?php echo $depoimento['nome']; ?></p>
            <p class="clienteType"><?php echo $depoimento['profissao']; ?></p>
        </div>
    </div>
<?php endforeach; ?>