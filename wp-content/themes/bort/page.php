<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bort
 */

get_header(); ?>


		<main id="main" class="site-main">
            <section id="fullpage">
                <section class="page-1 section">
                    <div class="container">
                        <div class="page-1__title-btn">
                            <h1 class="page-1__title">
	                            <?php echo get_bloginfo('description') ?>
                            </h1>
                            <button class="btn btn__submit-app btn__submit-app--d">Оставить заявку</button>
                        </div>

                    </div>

                </section>


                <section class="page-3 section" >



                    <div class="container container--right">
                        <h1 class="title mob">Тарифы</h1>
                        <div class="tabs flex">

                            <div class="tab tab--active" data-slide="1"><?php echo get_cat_name('7')?> </div>

	                        <?php
	                        $i=2;
	                        while ($i<7){
		                        echo '
                                 <div class="tab" data-slide="'.$i.'">'.get_cat_name($i+6).'</div>
                                ';
		                        $i++;
	                        }
	                        ?>
                            <div class="tab" data-slide="7"></div>
                            <div class="tab" data-slide="8"></div>
                        </div>
                    </div>

                    <div class="page-3__slider owl-carousel">
	                    <?php
	                    function GetCat($catagory){
		                    $query = new WP_Query( array(
			                    'category_name' => $catagory
		                    ) );

		                    while ( $query->have_posts() ) {
			                    $query->the_post();

			                    echo '
                                <div class="page-3__slider-image">
	                               '.get_the_content() .'
                                </div>
                                
                                <div class="container">
                                    <div class="flex flex--a-top flex--j-right page-3__titleInfo">
                                        <div>
                                            <div class="page-3__title">
                                                '. get_the_title() .'
                                            </div>
                                        </div>

                                        <div class="page-3__info">
                                            <div class="flex flex--a-center page-3__infoItem">
                                                <span class="page-3__infoItem-image"><img src="'. get_template_directory_uri().'/images/page-3/combined-shape.svg" alt="combined"></span>
                                                <span class="page-3__infoItem-text"> '. get_field("person").'</span>
                                            </div>
                                            <div class="flex flex--a-center  page-3__infoItem">
                                                <span class="page-3__infoItem-image"><img src="'. get_template_directory_uri().'/images/page-3/suitcase-with-white-details.svg" alt="suitcase"></span>
                                                <span class="page-3__infoItem-text"> '. get_field("baggage").'</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="page-3__priceInfo">
                                        <div class="page-3__price after-plus"> '. get_field("price").'</div>
                                        <div class="page-3__price after-plus"> '. get_field("price_minute").'</div>
                                        <div class="page-3__price"> '. get_field("price_km").'</div>
                                        <div class="page-3__price page-3__price--min"> '. get_field("min_price").'</div>
                                    </div>
                                </div>
                                
                            ';
		                    }
	                    }
	                    ?>
                        <div class="page-3__item">
                          <?php GetCat('business'); ?>
                        </div>
                        <div class="page-3__item">
	                        <?php GetCat('vip'); ?>
                        </div>
                        <div class="page-3__item">
	                        <?php GetCat('luxe'); ?>
                        </div>
                        <div class="page-3__item">
	                        <?php GetCat('plus'); ?>
                        </div>
                        <div class="page-3__item">
	                        <?php GetCat('сhildren'); ?>
                        </div>
                        <div class="page-3__item">
                            <div class="page-3__item">
		                        <?php GetCat('sober'); ?>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="page-4 section" >
                    <div class="container">
                        <h1 class="title mob">Наши водители</h1>
                    </div>
                    <div class="page-4__slider owl-carousel">


                        <?php
                        $query = new WP_Query( array(
	                        'category_name' => 'drivers'
                        ) );

                        while ( $query->have_posts() ) {
	                        $query->the_post();

	                        ?>
                            <div class="page-4__person">
                                <div class="page-4__person-image">
                                    <div class="face__desc">
                                        <?php
                                            the_post_thumbnail()
                                        ?>
                                    </div>
                                    <div class="face__m">
	                                    <?php
                                            the_content()
	                                    ?>
                                    </div>
                                </div>
                                <div class="page-4__person-name">
                                    <h3>
	                                    <?php
                                            the_title();
	                                    ?>
                                    </h3>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                    <!--<button class="btn btn__submit-app btn__submit-app--d btn__submit-app--absoluteRightBottom">Оставить заявку</button>-->
                </section>
                <section class="page-5 section" >
                    <div class="container">
                        <h1 class="page-5__title">
                            Станьте нашим водителем
                        </h1>

                        <?php echo do_shortcode('[contact-form-7 id="16" title="Станьте нашим водителем" html_class="page-5__form"]')?>

                        <!--<form action="" class="page-5__form">
                            <input type="text" class="page-5__input" placeholder="Как вас зовут?">
                            <input type="tel" class="page-5__input" placeholder="Телефон" >
                            <input type="email" class="page-5__input" placeholder="Электронная почта" >
                            <input type="button" class="page-5__submit" value="Отправить">
                        </form>-->
                    </div>
                    <!--<button class="btn btn__submit-app btn__submit-app--d btn__submit-app--absoluteRightBottom">Оставить заявку</button>-->
                </section>
                <section class="page-6 section" >
                    <div class="container ">
                        <h1 class="title mob">
                            Контакты
                        </h1>
                        <div class="page-6__col">

                            <h1 class="page-6__title">

	                            <?php  front_location() ?>

                            </h1>
                            <a href="tel:<?php  front_c_phone() ?>" class="page-6__link"><?php  front_c_phone() ?></a>
                            <a href="mailto:<?php  front_email() ?>" class="page-6__link"><?php  front_email() ?></a>
                        </div>


                    </div>
                    <div id="map"></div>

                </section>
            </section>
		</main><!-- #main -->


<?php
get_footer();
