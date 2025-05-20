<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../omuratec/img/OmuraST.svg" type="image/x-icon" />
    <title>OmuraTech - Soluções Tecnológicas</title>

    <!-- CSS Reset -->
    <link rel="stylesheet" href="../omuratec/css/reset.css">

    <!-- Slick Carousel -->
    <link rel="stylesheet" href="../omuratec/css/slick.css">
    <link rel="stylesheet" href="../omuratec/css/slick-theme.css">

    <!-- Video Animation -->
    <link rel="stylesheet" href="../omuratec/css/lity.css">

    <!-- animete  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>




    <!-- Custom Styles -->
    <link rel="stylesheet" href="../omuratec/css/estilo.css?v=1.0">
</head>

<body>
    <header>
        <!-- menu -->
        <?php require_once('conteudo-home/menu.php'); ?>
    </header>

    <main>

        <!-- banner-sobre -->
        <div class="banner-sobre">
            <img src="../omuratec/img/fundo-claro.png" alt="Banner 2">
            <!-- <img src="../omuratec/img/banner2.jpg" alt="Banner 2"></ -->
        </div>

        <section class="site">
            <div class="texto-banner-sobre">
                <h2>Nossa História</h2> 
                <div>
                    <h3 id="texto-animado"></h3>
                </div>
            </div> 
        </section>

        <!-- sobre -->
        <?php require_once('conteudo-sobre/sobre-nos.php'); ?>

        <section class="valores_sobre">
            <div class="site">
                <h2>Nossos Valores</h2>
                <div class="valores-sobre">
                    <div>
                        <img src="../omuratec/img/sobre.png" alt="valores 1">
                        <h3>Qualidade e Excelência</h3>
                        <p>Nosso foco é entregar serviços de alta qualidade, superando as expectativas dos clientes com atenção aos detalhes e as melhores tecnologias.
                        </p>
                     </div>
                    <div>
                        <img src="../omuratec/img/sobre2.png" alt="valores 2">
                        <h3>Transparência</h3>
                        <p>Valorizamos a confiança, mantendo uma comunicação clara e aberta em todas as etapas, desde o orçamento até a execução dos serviços.
                        </p>
                    </div>
                    <div>
                        <img src="../omuratec/img/sobre3.png" alt="valores 3">
                        <h3>Profissionalismo</h3>
                        <p>Com uma equipe qualificada que assegura um atendimento de excelência, oferecendo soluções eficazes nós serviços prestados.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- contrate -->
        <?php require_once('conteudo-home/contrate.php'); ?>

    </main>

    <footer>
        <!-- rodape -->
        <?php require_once('conteudo-home/rodape.php'); ?>
    </footer>

   <!-- JS Scripts -->
<!-- jQuery para animações -->
<script type="text/javascript" src="//code.jquery.com/jquery-3.7.1.min.js" defer></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-3.5.0.min.js" defer></script>

<!-- Plugins de animação -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js" defer></script>

<!-- Slick Carrossel -->
<script type="text/javascript" src="../omuratec/js/slick.min.js" defer></script>

<!-- Animação do vídeo -->
<script src="js/lity.js" defer></script>

<!-- Animação de seções -->
<script src="js/wow.min.js" defer></script>

<!-- Seu código de animação -->
<script type="text/javascript" src="js/animation.js" defer></script>

</body>

</html>