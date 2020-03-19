<div class="menu-banner">
    <nav>
        <ul>
            <li><a href="<?php echo URL ?>banner/adicionar">Adicionar</a></li>
            <li><a href="<?php echo URL ?>banner/exibir">Exibir todos</a></li>
            <li><a href="<?php echo URL ?>banner/texto">Texto/Slogan</a></li>
        </ul>
    </nav>
</div>
<h3>Banners</h3>
<div class="content-primary">
    <table>
        <!-- <thead>
            <tr>
                <th>Imagem</th>
                <th>Ações</th>
            </tr>
        </thead> -->
        <tbody>
            <?php foreach ($banners as $banner) : ?>
                <tr>
                    <td><img src="<?php echo URL; ?>assets/upload-banner/<?php echo $banner["url"] ?>" width="150" height="100"></td>
                    <td>
                        <a href="<?php echo URL ?>banner/alterar/<?php echo $banner["id"] ?>" class="bt-acoes bt-alterar">Alterar</a>
                        <a href="<?php echo URL ?>banner/excluir/<?php echo $banner["id"] ?>" class="bt-acoes bt-excluir">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>