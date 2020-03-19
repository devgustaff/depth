<div class="menu-conteudo">
    <nav>
        <ul>
            <li><a href="<?php echo URL ?>conteudos/adicionar">Adicionar</a></li>
            <li><a href="<?php echo URL ?>conteudos/exibir">Exibir todos</a></li>
        </ul>
    </nav>
</div>
<h3>Alterar Conteúdo</h3>
<div class="content-primary">
    <form class="form-banner" method="POST" enctype="multipart/form-data">
        <textarea name="conteudos" id="" cols="30" rows="10"></textarea>
        <input type="file" name="file" id="upload" required>
        <img src="" id="img-preview" width="410">
        <button type="submit">Alterar</button>
    </form>
</div>