<?php
/**
 * Template Part: Section 6
 * Recebe via $args:
 *  - 'titulo_pequeno'
 *  - 'titulo_grande'
 *  - 'boxes_info' (array com ['imagem' => string, 'titulo' => string, 'texto' => string])
 */

// Definindo valores padrão para os argumentos
$args = wp_parse_args($args, [
    'titulo_pequeno' => 'um processo completo para obter resultados',
    'titulo_grande'  => 'As 4 etapas integradas de implementação',
    'boxes_info'     => [
        [
            'imagem' => 'sect6-1.jpg',
            'titulo' => 'Consultoria Estratégica',
            'texto'  => 'Naming, identidade, moodboard, tom de voz alinhados à estratégia do negócio, entregues no Brand Persona Book',
        ],
        [
            'imagem' => 'sect6-2.jpg',
            'titulo' => 'Criação 3D',
            'texto'  => 'Modelagem, texturização, rig (esqueleto para animação), enxoval de poses e skins, entregues no Kit Brand Persona',
        ],
        [
            'imagem' => 'sect6-4.jpg',
            'titulo' => 'Prompt',
            'texto'  => 'Grade de conteúdo integrado, gestão e monitoramento de interações, SAC 4.0, incluídos no plano Content Brand Persona',
        ],
        [
            'imagem' => 'sect6-3.jpg',
            'titulo' => 'Growth e Performance',
            'texto'  => 'Plano de mídia, relatórios de métricas, campanhas de awareness, captação e conversão no plano Growth Brand Persona',
        ],
    ],
]);
?>

<section class="box-container">
    <article class="box-title">
        <p><?php echo esc_html($args['titulo_pequeno']); ?></p>
        <h1><?php echo esc_html($args['titulo_grande']); ?></h1>
    </article>
    <div class="vector-background">
        <article class="box-imgs">
            <?php foreach ($args['boxes_info'] as $box): ?>
                <div class="box-texts-imgs">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $box['imagem']); ?>" alt="">
                    <h2><?php echo esc_html($box['titulo']); ?></h2>
                    <p><?php echo wp_kses_post($box['texto']); ?></p>
                </div>
            <?php endforeach; ?>
        </article>
    </div>
</section>
