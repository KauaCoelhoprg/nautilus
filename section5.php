<?php
// section5.php

$args = wp_parse_args($args, [
  'descricao' => '2 versões para performar melhor em cada ambiente digital',
  'titulo_pergunta' => 'Qual estilo é mais adequado para sua marca?',
  'versoes' => [
    [
      'imagem' => get_template_directory_uri() . '/assets/images/boneca normal.jpg',
      'titulo' => 'Versão estilizada',
      'caracteristicas' => [
        'proporções de cartoon',
        'expressões acentuadas',
        'detalhes minimalistas',
      ],
    ],
    [
      'imagem' => get_template_directory_uri() . '/assets/images/boneca realista.jpg',
      'titulo' => 'Versão realista',
      'caracteristicas' => [
        'proporções humanas',
        'expressões naturais',
        'detalhes hiper‑realistas',
      ],
    ],
  ],
]);
?>

<section class="box-container">
  <div class="box-text">
    <p><?php echo esc_html($args['descricao']); ?></p>
    <h1><?php echo esc_html($args['titulo_pergunta']); ?></h1>
  </div>
  <section class="box-imgs-container">
    <?php foreach ($args['versoes'] as $versao): ?>
      <article class="box-imgs">
        <img src="<?php echo esc_url($versao['imagem']); ?>" alt="<?php echo esc_attr($versao['titulo']); ?>">
        <div class="box-text-imgs">
          <h1><?php echo esc_html($versao['titulo']); ?></h1>
          <div class="column-texts">
            <?php foreach ($versao['caracteristicas'] as $item): ?>
              <div class="individual-box-text">
                <div class="circle">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/okzin.svg" alt="">
                </div>
                <p><?php echo esc_html($item); ?></p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </article>
    <?php endforeach; ?>
  </section>
</section>
