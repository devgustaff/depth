<div class="menu-banner">
    <nav>
        <ul>
            <li><a href="<?php echo URL ?>banner/adicionar">Adicionar</a></li>
            <li><a href="<?php echo URL ?>banner/exibir">Exibir todos</a></li>
            <li><a href="<?php echo URL ?>banner/texto">Texto/Slogan</a></li>
        </ul>
    </nav>
</div>
<h3>Adicionar Banner</h3>
<div class="content-primary">
    <form action="<?php echo URL ?>banner/adicionar" class="form-banner" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" id="upload" required>
        <img src="" id="img-preview" width="410">
        <button type="submit">Adicionar</button>
    </form>
</div>