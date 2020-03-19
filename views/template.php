<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/template.css">
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/main.css">
    <title><?php echo $viewTitle; ?></title>
</head>

<body>
    <header>
        <div class="container space-class">
            <div class="logo">
                <a href="<?php echo URL ?>"><img src="<?php echo URL ?>assets/image/logo.png" alt=""></a>
            </div>
            <div class="menu">
                <nav>
                    <div class="menu-mobile">
                        <div class="mm-line"></div>
                        <div class="mm-line"></div>
                        <div class="mm-line"></div>
                    </div>
                    <ul>
                        <li><a href="<?php echo URL ?>">Home</a></li>
                        <li><a href="<?php echo URL ?>contato">Contato</a></li>
                        <li><a href="<?php echo URL ?>sobre">Sobre</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <section>
        <?php $this->loadView($viewName, $viewData); ?>
    </section>
    <footer class="footer-main">
        <div class="social-icons">
            <a href="" class="fab fa-facebook"></a>
            <a href="" class="fab fa-instagram"></a>
            <a href="" class="fab fa-youtube"></a>
        </div>
    </footer>
    <footer class="footer-secundary">
        <div class="copy">
            <p>&copy; Depth Worship Oficial <?php echo date("Y"); ?>. Todos os direitos reservados.</p>
        </div>
        <!-- <div class="created">
            <p>Por Gustavo Silva</p>
        </div> -->
    </footer>

    <script src="<?php echo URL; ?>assets/js/menu.js"></script>
    <script src="<?php echo URL; ?>assets/js/banner.js"></script>
</body>

</html>