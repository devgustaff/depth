<div class="menu-banner">
    <nav>
        <ul>
            <li><a href="<?php echo URL ?>banner/adicionar">Adicionar</a></li>
            <li><a href="<?php echo URL ?>banner/exibir">Exibir todos</a></li>
            <li><a href="<?php echo URL ?>banner/texto">Texto/Slogan</a></li>
        </ul>
    </nav>
</div>
<h3>Alterar</h3>
<div class="content-primary">
    <form class="form-banner" method="POST">
        <textarea name="texto" cols="30" rows="10" required><?php echo $texto["texto"] ?></textarea>
        <button type="submit">Alterar</button>
    </form>
</div>