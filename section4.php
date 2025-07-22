<?php
/**
 * Template Part: Section 4
 * Recebe via $args:
 *  - 'titulo_pequeno'
 *  - 'titulo_grande'
 *  - 'texto_paragrafo'
 *  - 'boxes_info' (array com ['imagem' => string, 'texto' => string])
 */

$args = wp_parse_args($args, [
    'titulo_pequeno' => 'como posso te ajudar?',
    'titulo_grande'  => 'Oi, eu sou a Bê, do Brand Persona!',
    'texto_paragrafo' => 'O combo Brand Persona PYXYS + Ilustraria vai muito além de
        desenhar um avatar 3D: é o primeiro do Brasil a combinar a criação da persona virtual com um
        plano de performance, voltado para resultados do negócio. “Vem comigo que sua marca vai aprender a escutar e conversar com seu cliente, construindo uma comunidade no universo digital”, convida Bê, a avatar do Brand Persona.',
    'boxes_info' => [
        ['imagem' => 'telescopio.svg', 'texto' => 'Tech hunter, <br>busca tendências'],
        ['imagem' => 'setas.svg', 'texto' => 'Data-driven, <br>escuta a audiência'],
        ['imagem' => 'foguete.svg', 'texto' => 'Business partner, <br> acelera resultados'],
        ['imagem' => 'cima.svg', 'texto' => 'Growth ability,<br> performa mais'],
    ],
]);
?>

<section class="box-container">
    <div class="box-img">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/3 boneca.jpg'; ?>" alt="">
    </div>
    <div class="box-text">
        <h6><?php echo $args['titulo_pequeno']; ?></h6>
        <h1><?php echo $args['titulo_grande']; ?></h1>
        <p><?php echo nl2br($args['texto_paragrafo']); ?></p>
        <article class="four-box-container">
            <?php foreach ($args['boxes_info'] as $box): ?>
                <div class="boxes-info">
                    <div class="circle">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/' . $box['imagem']; ?>" alt="">
                    </div>
                    <p><?php echo $box['texto']; ?></p>
                </div>
            <?php endforeach; ?>
        </article>
    </div>
</section>
