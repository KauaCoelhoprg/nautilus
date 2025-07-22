<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <header>
        
        <main class="container-main">
            <div class="geometric-box">
                <section class="box-header">
                    <div class="logo-box">
                        <img src="<?php echo get_template_directory_uri() ;?>/assets/images/logo.png" alt="">
                    </div>
                    <div class="box-boneca">
                         <img src="<?php echo get_template_directory_uri() ;?>/assets/images/boneca.png" alt="">
                    </div>
                    <nav class="menu-box">
                        <ul>
                            <li>HOME</li>
                            <li>POR QUE BREND PERSONA</li>
                            <li>O MERCADO</li>
                            <li>VANTAGENS</li>
                            <li>COMO FUNCIONA</li>
                            <li>O COMBO</li>
                            <li>CONTATO</li>
                        </ul>
                    </nav>
                    <section class="box-principal-container">
                        <div class="box-principal">
                            <h5>leve sua empresa para a nova realidade
                                digital</p>
                            <h1>A sua persona virtual <br> com alta
                                performance</h1>
                            <p>Para marcas inovadoras: Brand Persona PYXYS +
                                Ilustraria
                                é o primeiro combo do Brasil <br>
                                de construção de avatares 3D, com tecnologia
                                de ponta em
                                computação gráfica,<br> combinada à mais
                                completa Estratégia
                                de Content, Growth e Performance
                                Data-driven</p>
                            <button>QUERO SABER MAIS</button>
                        </div>
                        <div class="imgs-box">
                            <p>Um produto:</p>
                            <img src="<?php echo get_template_directory_uri() ;?>/assets/images/logo pyxys.png " alt="">
                            <img src="<?php echo get_template_directory_uri() ;?>/assets/images/logo ilustraria.jpg" alt="">
                        </div>
                    </section>
                </section>
            </div>
        </main>
    </header>