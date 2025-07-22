<?php
// section7.php

$args = wp_parse_args( $args, [
  'subtitulo'    => 'um novo mercado',
  'titulo'       => 'Afinal, por que minha empresa precisa do combo Brand Persona?',
  'descricao'    => 'Com a realidade virtual batendo à porta e as novas formas de relações híbridas com o consumidor, as marcas precisam ter uma persona 3D com a estratégia certa de conteúdo e performance data‑driven para novas plataformas digitais.',
  'dicas'        => [
    [
      'titulo' => 'Conteúdo que inova e engaja',
      'descricao' => 'A comunicação da sua Brand Persona é mais criativa e traz mais resultados na interação com o consumidor',
    ],
    [
      'titulo' => 'Economia frente aos influenciadores',
      'descricao' => 'A sua Brand Persona é direcionada e custa bem menos do que ações com influenciadores convencionais',
    ],
    [
      'titulo' => 'Estratégia otimizada',
      'descricao' => 'O processo de implementação é otimizado, com plano estratégico do conceito aos resultados esperados',
    ],
  ],
  'imagem'       => get_template_directory_uri() . '/assets/images/img-section7.png',
] );
?>
<section class="box-container">
  <article class="box-img">
    <img src="<?php echo esc_url( $args['imagem'] ); ?>" alt="<?php echo esc_attr( $args['titulo'] ); ?>">
  </article>
  <article class="box-text">
    <div class="box-title">
      <h6><?php echo esc_html( $args['subtitulo'] ); ?></h6>
      <h1><?php echo esc_html( $args['titulo'] ); ?></h1>
      <p><?php echo nl2br( esc_html( $args['descricao'] ) ); ?></p>
    </div>
    <article class="box-dicas-container">
      <div class="column-texts">
        <?php foreach ( $args['dicas'] as $dica ): ?>
          <div class="individual-box-text">
            <div class="circle">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/okzin.svg' ); ?>" alt>
            </div>
            <div class="texts-box-container">
              <h1><?php echo esc_html( $dica['titulo'] ); ?></h1>
              <p><?php echo esc_html( $dica['descricao'] ); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </article>
  </article>
</section>
