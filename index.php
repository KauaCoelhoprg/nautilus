<?php get_header(); ?>
<?php
get_template_part(
  'section2',   
  null,
  [
'titulo' => 'Afinal, por que minha empresa precisa do combo Brand Persona?',
    'descricao' => 'Com a realidade virtual batendo à porta e as novas formas de relações híbridas com o consumidor, as marcas precisam ter uma persona 3D com a estratégia certa de conteúdo e performance data-driven para novas plataformas digitais.',
    'dicas' => array(
        array(
            'imagem' => 'digital.svg',
            'titulo' => 'Dar vida à sua marca',
            'descricao' => 'Ter um influenciador virtual multiplica meios de interação com o consumidor.'
        ),
        array(
            'imagem' => 'coracao.svg',
            'titulo' => 'Gerar identificação',
            'descricao' => 'O cliente se reconhece na persona 3D e se relaciona com ela afetivamente.'
        ),
        array(
            'imagem' => 'papo.svg',
            'titulo' => 'Falar a língua do cliente',
            'descricao' => 'O diálogo da marca com o usuário se torna mais personalizado e acessível.'
        ),
        array(
            'imagem' => 'diamante.svg',
            'titulo' => 'Personificar valores',
            'descricao' => 'A persona 3D é construída sob medida com o que é relevante para a empresa.'
        )
    ),
    'imagem' => 'boneca-marketing.png'
]);
get_template_part(
  'section3',   
  null,
  [
    'titulo_pequeno' => 'os números comprovam',
    'titulo_grande'  => 'Influenciador virtual traz resultados concretos para grandes marcas',
  ]
);
?>
<?php
get_template_part(
  'section4',   
  null,
  [
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
<?php
get_template_part(
  'section5',   
  null,
  [
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
<?php
get_template_part(
    'section6',
    null,
    [
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
    ]
);
?>
<?php
get_template_part(
    'section7',
    null,
    [
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


<?php
get_template_part(
    'section8',
    null,
    [
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


<?php
get_template_part(
    'section9',
    null,
    [
        'titulo_pequeno' => 'a soma perfeita',
        'titulo_grande'  => 'Para multiplicar negócios',
        'descricao'      => 'A PYXYS Inteligência Digital entra com o planejamento, a execução estratégica e o conteúdo data-driven para alta performance. A Ilustraria 3D entra com a concepção criativa da persona virtual e a tecnologia de ponta para aplicações da marca no universo digital.',
        'pessoas'        => [
            [
                'nome'      => 'Cintia Santana',
                'cargo'     => 'sócia da PYXYS Inteligência Digital',
                'imagem'    => get_template_directory_uri() . '/assets/images/person1.png',
                'descricao' => 'Cintia tem expertise em estratégia digital e já acelerou resultados de marcas fortes como Estadão, Banco BS2 e Inflr.',
                'depoimento' => '“Somos pioneiros em unir dois grandes serviços que precisam caminhar juntos: estratégia de performance e execução criativa digital.”',
            ],
            [
                'nome'      => 'Igor Alexandroff',
                'cargo'     => 'sócio da Ilustraria 3D',
                'imagem'    => get_template_directory_uri() . '/assets/images/person2.png',
                'descricao' => 'Igor tem mais de 10 anos de produção de imagens e animações de alta qualidade para grandes marcas como Nestlé, Purina e Editora Abril.',
                'depoimento' => '“Nossa metodologia é única porque sincroniza a concepção criativa do personagem 3D e a gestão de sua presença digital.”',
            ],
        ],
    ]
);
?>

<?php get_footer(); ?>
