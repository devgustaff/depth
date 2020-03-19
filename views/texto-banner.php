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
    <table>
        <thead>
            <tr>
                <th>Texto</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($texto as $text) : ?>
                <tr>
                    <td style="width: 400px; padding-left: 20px"><?php echo $text["texto"] ?></td>
                    <td><a href="<?php echo URL ?>banner/alterar_texto/<?php echo $text["id"] ?>" class="bt-acoes bt-alterar">Alterar</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>