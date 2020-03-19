<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/login.css">
    <title><?php echo $viewName; ?></title>
</head>

<body>
    <div class="container">
        <div class="login">
            <div class="logo">
                <a href="<?php echo URL ?>admin"><img src="<?php echo URL ?>assets/image/logo.png" alt=""></a>
            </div>
            <div class="inputs-login">
                <form action="" method="POST">
                    <div class="input-login">
                        <input type="text" name="usuario" placeholder="Usuário" required>
                    </div>
                    <div class="input-login">
                        <input type="password" name="senha" placeholder="Senha" required>
                    </div>
                    <div class="input-login">
                        <button type="submit">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>