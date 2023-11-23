<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Green House - Imobiliária para imóveis corporativos">
    <meta name="keywords" content="Imóveis, Comercial, Empresa, Corporativo">
    <meta name="author" content="Marley de Sousa Santos, Renan de Castro Teixeira">
    <title>Green House | Home</title>
    <script src="https://kit.fontawesome.com/5bf5514c29.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/icones/ícone-logo.png">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="../../assets/libraries/slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="../../assets/libraries/slick-1.8.1/slick/slick-theme.css">
</head>

<body>
    <!--Header-->
    <?php
    include('../../../greenHouse/client-area/views/components/header.php')
    ?>

    <main id="about">
        <!-- Sobre nós -->
        <?php
        include('../../../greenHouse/client-area/views/components/about.php');
        ?>

        <!-- Imóveis à venda -->
        <section id="venda" class="section-imoveis">
            <span>à venda</span>
            <div class="section-item">
                <h2>Imóveis</h2>
            </div>
            <?php
            include('../../../greenHouse/client-area/views/components/imoveis-venda.php');
            ?>
        </section>

        <section class="section-imoveis section-two" id="locacao">
            <span>à locação</span>
            <div class="section-item">
                <h2>Imóveis</h2>
            </div>
            <?php
            include('../../../greenHouse/client-area/views/components/imoveis-locacao.php');
            ?>
        </section>
    </main>

    <section class="depoimentos" id="depoimentos">
        <div class="title-depoiment">
            <h2>Depoimentos</h2>
        </div>

        <div class="cards-testimonials">
            <?php
            include('../../../greenHouse/client-area/views/components/testimonials.php');
            ?>
        </div>
    </section>

    <!-- Rodapé -->
    <footer>
        <div class="items-footerdivs">
            <div class="item-footer">
                <div class="item-footer-in">
                    <img id="logoFooter" src="../../assets/img/outros/Logo (1).png" alt="Logo Green House">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita nihil nulla placeat tenetur, libero </p>

                    <div class="titulo">
                        <h3>Siga-nos</h3>
                    </div>

                    <div class="socialmedia">
                        <div class="icon-social">
                            <a href="https://facebook.com"><i class="fa-brands fa-facebook-f" style="width: 25px; height: 25px;"></i></a>
                        </div>

                        <div class="icon-social">
                            <a href="https://www.twitter.com">
                                <i class="fa-brands fa-x-twitter" style="width: 25px; height: 25px"></i>
                            </a>
                        </div>

                        <div class="icon-social">
                            <a href="https://www.instagranm.com">
                                <i class="fa-brands fa-instagram" style="width: 25px; height: 25px"></i>
                            </a>
                        </div>

                        <div class="icon-social">
                            <a href="https://www.youtube.com">
                                <i class="fa-brands fa-youtube" style="width: 25px; height: 25px"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="item-footer">

                <div class="item-footer-in">
                    <h3>Endereço</h3>

                    <div class="ico">
                        <a href="https://maps.app.goo.gl/fSaY2upRwS2Wykwy7" target="_blank">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Av. Paulista, 1230 - São Paulo/SP</p>
                        </a>
                    </div>

                    <div class="ico">
                        <a href="tel:+551140028922">
                            <i class="fa-solid fa-phone"></i>
                            <p>+55 (11) 4002-8922</p>
                        </a>
                    </div>

                    <div class="ico">
                        <a href="mailto:contato@greenhouse.com.br">
                            <i class="fa-solid fa-envelope"></i>
                            <p>contato@greenhouse.com.br</p>
                        </a>
                    </div>

                    <div class="access">
                        <h3>Área administrativa</h3>
                        <a href="../../adm-area/views/login-adm.php">Adminitrador</a>
                    </div>
                </div>
            </div>

            <div class="item-footer">
                <div class="item-footer-in">
                    <div class=iframe>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.1974904582994!2d-46.65906922543827!3d-23.561349561590383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c8da0aa315%3A0xd59f9431f2c9776a!2sAv.%20Paulista%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1700166788262!5m2!1spt-BR!2sbr" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
            <div class="item-footer">
                <div class="item-footer-in">
                    <h3>Contato</h3>
                    <form action="">
                        <input type="email" placeholder="E-mail">
                        <textarea name="messagem" id="messagem" cols="30" rows="8" placeholder="Sua mensagem"></textarea>
                        <button id="submitbutton" type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>


        <div class="copy">
            <span>Created By
                <a href="https://www.instagram.com/marleysantos4390" class="name">Marley Santos</a> &
                <a href="https://www.instagram.com/renan.teixx" class="name">Renan Teixeira</a>

                <p>&copy; Green House 2023 All right reserved.</p>
            </span>
        </div>
    </footer>




    <script src="../../../greenHouse/client-area/views/js/redirect.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".menu").hide();

            $(".container").click(function() {
                $(".menu").slideToggle(400, function() {
                    if ($(".menu").is(":visible")) {
                        $("body").css("overflow", "hidden");
                    } else {
                        $("body").css("overflow", "auto");
                    }
                });
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../assets/libraries/slick-1.8.1/slick/slick.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.carousel').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2500,
                prevArrow: '<button class="slick-prev">Anterior</button>',
                nextArrow: '<button class="slick-next">Próximo</button>',
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
            });
        });
    </script>

    <script>
        $('.cards-testimonials').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1000,
            prevArrow: '<button class="slick-prev">Anterior</button>',
            nextArrow: '<button class="slick-next">Próximo</button>',
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        })
    </script>
</body>

</html>