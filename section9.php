<?php
$args = wp_parse_args( $args, [
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
] );
?>
 <main>
            <section class="box-container">
                <article class="box-title">
                    <h6>a soma perfeita</h6>
                    <h1>Para multiplicar negócios</h1>
                    <p>A PYXYS Inteligência Digital entra com o planejamento, a
                        execução estratégica e o conteúdo data-driven para <br>
                        alta
                        performance. A Ilustraria 3D entra com a concepção
                        criativa da persona virtual e a tecnologia de ponta <br>
                        para
                        aplicações da marca no universo digital</p>
                </article>
                <section class="box-legends">
                    <article class="box-persons">
                        <img src="<?php echo get_template_directory_uri() ;?>/assets/images/person1.png" alt="">
    
                        <div class="box-text1">
                            <p> <span> Cintia Santana, sócia da PYXYS
                                    Inteligência
                                    Digital,</span> <br>
                                que tem expertise em estratégia digital e já
                                acelerou resultados de marcas fortes como <br>
                                Estadão, Banco BS2 e Inflr, em parcerias de
                                negócio:</p>
                        </div>
                        <div class="box-text2">
                            <p>
                                “Somos pioneiros em unir dois grandes serviços
                                que precisam <br> caminhar juntos: estratégia de
                                performance e execução criativa <br> digital. O
                                avatar já nasce alinhado com o propósito da
                                marca e <br> garantia de resultados. Brand
                                Persona
                                não é só um avatar. É o jeito <br> mais
                                eficiente de
                                guiar a presença digital de uma marca na nova
                                <br>
                                realidade virtual”
                            </p>
                        </div>
                    </article>
                    <article class="box-persons">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/person2.png" alt="">
                        <div class="box-text1">
                            <p> <span> Igor Alexandroff, sócio da Ilustraria
                                    3D,</span> <br>
                                que tem mais de 10 anos de produção de imagens e
                                animações de alta qualidade para <br> grandes
                                marcas
                                como Nestlé, Purina e Editora Abril:
                            </div>
                            <div class="box-text2">
                                <p>
                                    “Nossa metodologia é única porque sincroniza
                                    a concepção criativa <br> do personagem 3D e a
                                    gestão de sua presença digital, já <br>
                                    considerando o engajamento e a performance
                                    desses conteúdos <br> nas redes sociais da marca.
                                    Nenhum estúdio ou agência no Brasil e <br> no
                                    mundo entrega um combo tão completo de
                                    estratégia digital, <br> competência artística e
                                    resultados concretos”
                                </p>
                            </div>
                        </article>
                    </section>
                </section>
            </main>