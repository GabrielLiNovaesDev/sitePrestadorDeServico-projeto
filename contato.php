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
        <section class="contato">
            <article class="site">
                <!-- Texto do lado esquerdo -->
                <div class="contato-info">
                    <h1>Vamos conversar.<br>Conte-me sobre seu projeto.</h1>
                    <p>Vamos criar algo juntos ✨</p>
                    <div class="email-box">
                        <span>📧 envie um E-mail para</span>
                        <a href="mailto:gabrielnovaes654@gmail.com">gabrielnovaes654@gmail.com</a>
                    </div>
                </div>

                <!-- Formulário do lado direito -->
                <div class="contato-form">
                    <h2>Envie uma mensagem 🚀</h2>
                    <form action="email.php" method="POST">
                        <input type="text" name="nome" placeholder="Nome completo*" >
                        <input type="email" name="email" placeholder="Email*" >
                        <input type="text" name="assunto" placeholder="Assunto*">
                        <textarea name="mensagem" placeholder="Conte-nos mais sobre*" ></textarea>
                        <div>
                            <input type="submit" value="ENVIAR">
                        </div>
                    </form>
                </div>
            </article>
        </section>

        <!-- servico -->
        <?php require_once('conteudo-home/servico.php'); ?>


        <!-- valores-->
        <?php require_once('conteudo-sobre/valores.php'); ?>

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