<?php
// section8.php

$args = wp_parse_args( $args, [
  'subtitulo'       => 'uma dupla hi-tech',
  'titulo'          => 'Brand Persona PYXYS + Ilustraria',
  'descricao'       => 'A parceria entre a startup de inteligência digital PYXYS e o estúdio de computação gráfica Ilustraria 3D inova ao lançar no mercado um combo pioneiro de construção de personas virtuais aliado a um plano de performance data-driven, direcionado para acelerar resultados do negócio e o posicionamento estratégico de grandes empresas, como as marcas atendidas por ambas.',
  'imagem_parceria' => get_template_directory_uri() . '/assets/images/pyxys e ilustraria.jpg',
  'clientes'        => [
    [
      'titulo' => 'Clientes PYXYS',
      'imagens' => [
        get_template_directory_uri() . '/assets/images/estadao.jpg',
        get_template_directory_uri() . '/assets/images/autoline.jpg',
        get_template_directory_uri() . '/assets/images/tegra.jpg',
        get_template_directory_uri() . '/assets/images/fiat.jpg',
        get_template_directory_uri() . '/assets/images/agora.jpg',
        get_template_directory_uri() . '/assets/images/honda.jpg',
      ],
    ],
    [
      'titulo' => 'Clientes Ilustraria',
      'imagens' => [
        get_template_directory_uri() . '/assets/images/nestle.jpg',
        get_template_directory_uri() . '/assets/images/relagicola.jpg',
        get_template_directory_uri() . '/assets/images/uau.jpg',
        get_template_directory_uri() . '/assets/images/maozinha.jpg',
        get_template_directory_uri() . '/assets/images/spaco.jpg',
      ],
    ],
  ],
] );
?>

<section class="box-container">
  <section class="box-general-title">
    <section class="box-title-container">
      <article class="box-title">
        <h6><?php echo esc_html( $args['subtitulo'] ); ?></h6>
        <h1><?php echo esc_html( $args['titulo'] ); ?></h1>
        <p><?php echo nl2br( esc_html( $args['descricao'] ) ); ?></p>
      </article>
    </section>
    <div class="box-img-title">
      <img src="<?php echo esc_url( $args['imagem_parceria'] ); ?>" alt="<?php echo esc_attr( $args['titulo'] ); ?>">
    </div>
  </section>

  <section class="box-patrocinio">
    <?php foreach ( $args['clientes'] as $grupo ): ?>
      <div class="pyxys-ilustraria">
        <h4><?php echo esc_html( $grupo['titulo'] ); ?></h4>
        <div class="box-pyxys-ilustraria">
          <?php foreach ( $grupo['imagens'] as $img_url ): ?>
            <img src="<?php echo esc_url( $img_url ); ?>" alt="">
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </section>
</section>
