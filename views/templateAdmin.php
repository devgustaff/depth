<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/template.css">
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/admin.css">
    <title><?php echo $viewTitle; ?></title>
</head>

<body>
    <section>
        <div class="container">
            <div class="logout">
                <a href="<?php echo URL ?>admin/logout">Sair</a>
            </div>
        </div>
    </section>
    <section>
        <div class="container main">
            <aside>
                <div class="aside-left">
                    <div class="logo-admin">
                        <a href="<?php echo URL ?>admin"><img src="<?php echo URL ?>assets/image/logo.png" alt=""></a>
                    </div>
                    <div class="menu-aside">
                        <nav>
                            <ul>
                                <li><a href="<?php echo URL ?>admin">Home</a></li>
                                <li><a href="<?php echo URL ?>banner">Banner</a></li>
                                <li><a href="<?php echo URL ?>conteudos">Conteúdos</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </aside>
            <section class="content">
                <div class="content-admin">
                    <?php $this->loadView($viewName, $viewData); ?>
                </div>
            </section>
        </div>
    </section>

    <footer class="footer-secundary">
        <div class="copy">
            <p>&copy; Depth Worship Oficial <?php echo date("Y"); ?>. Todos os direitos reservados.</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="<?php echo URL ?>assets/js/preview.js"></script>
</body>

</html>