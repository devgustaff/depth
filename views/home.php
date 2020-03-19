<div class="slider-banner">
    <span id="btn-anterior">
        <</span> <img src="" alt="slide" id="slide">
            <span id="btn-prox">></span>
</div>
<div class="frase-efeito">
    <?php foreach ($texto as $text) : ?>
        <h1><?php echo $text["texto"] ?></h1>
    <?php endforeach; ?>
</div>
<div class="main-home">
    <div class="container flex-wrap">
        <?php foreach ($conteudos as $conteudo) : ?>
            <div class="item main-home-content">
                <img src="<?php echo URL; ?>assets/upload-conteudo/<?php echo $conteudo["url"] ?>">
                <p><?php echo $conteudo["texto_conteudo"] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<script>
    var images = [];
    <?php foreach ($banners as $banner) : ?>
        images.push("<?php echo URL; ?>assets/upload-banner/<?php echo $banner['url']; ?>");
    <?php endforeach; ?>
</script>