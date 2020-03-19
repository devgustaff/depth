<div class="menu-conteudo">
    <nav>
        <ul>
            <li><a href="<?php echo URL ?>conteudos/adicionar">Adicionar</a></li>
            <li><a href="<?php echo URL ?>conteudos/exibir">Exibir todos</a></li>
        </ul>
    </nav>
</div>
<h3>Conteúdos</h3>
<div class="content-primary">
    <table>
        <thead>
            <tr>
                <th>Imagem</th>
                <th>Texto</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lista as $conteudo) : ?>
                <tr>
                    <td><img src="<?php echo URL; ?>assets/upload-conteudo/<?php echo $conteudo["url"] ?>" width="150" height="100"></td>
                    <td width="200px"><?php echo $conteudo["texto_conteudo"] ?></td>
                    <td>
                        <a href="<?php echo URL ?>conteudos/alterar/<?php echo $conteudo["id"] ?>" class="bt-acoes bt-alterar">Alterar</a>
                        <a href="<?php echo URL ?>conteudos/excluir/<?php echo $conteudo["id"] ?>" class="bt-acoes bt-excluir">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div class="paginacao">
    <?php for ($i = 1; $i <= $paginas; $i++) : ?>
        <?php if ($paginaAtual == $i) : ?>
            <a href="<?php echo URL; ?>conteudos/exibir/?pagina=<?php echo $i; ?>" class="active"><span><?php echo $i; ?></span></a>
        <?php else : ?>
            <a href="<?php echo URL; ?>conteudos/exibir/?pagina=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>
</div>