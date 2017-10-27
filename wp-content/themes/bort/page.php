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
                                Премиальный сервис аренды автомобиля для деловых поездок и личных нужд
                            </h1>
                            <button class="btn btn__submit-app btn__submit-app--d">Оставить заявку</button>
                        </div>

                    </div>

                </section>
                <!--<section class="page-2 section">
                    <div class="container">
                        <div class="page-2__content flex flex--a-center">
                            <h1 class="title mob">Услуги</h1>

                            <div class="page-2__line page-2__line--top"></div>

                            <div class="flex flex--j-between">
                                <div class="page-2__left">
                                    <div class="flex flex--a-top page-2__row">
                                        <span><img src="<?php /*echo get_template_directory_uri()*/?>/images/page-2/shape-1.svg" alt="shape"></span>
                                        <p>Аренда автомобиля с водителем
                                            на любой срок</p>
                                    </div>

                                    <div class="flex flex--a-top page-2__row">
                                       <span> <img src="<?php /*echo get_template_directory_uri()*/?>/images/page-2/shape-3.svg" alt="shape"></span>
                                        <p>Трансферы, встречи, проводы в аэропортах и жд вокзалах</p>
                                    </div>

                                    <div class="flex flex--a-top page-2__row">
                                       <span> <img src="<?php /*echo get_template_directory_uri()*/?>/images/page-2/vip.svg" alt="vip"></span>
                                        <p>Корпоративные перевозки руководителей и сотруднико</p>
                                    </div>

                                </div>
                                <div class="page-2__right">
                                    <div class="flex flex--a-top page-2__row">
                                       <span> <img src="<?php /*echo get_template_directory_uri()*/?>/images/page-2/combined-shape.svg" alt="shape"></span>
                                        <p>Семейный водитель на длительный срок</p>
                                    </div>

                                    <div class="flex flex--a-top page-2__row">
                                        <span><img src="<?php /*echo get_template_directory_uri()*/?>/images/page-2/group-3.svg" alt="group"></span>
                                        <p>Услуга трезвый водитель</p>
                                    </div>

                                    <div class="flex flex--a-top page-2__row">
                                        <span><img src="<?php /*echo get_template_directory_uri()*/?>/images/page-2/shape-2.svg" alt="shape"></span>
                                        <p>Обслуживание мероприятий</p>
                                    </div>

                                </div>
                            </div>
                            <div class="page-2__line page-2__line--bottom"></div>
                        </div>
                    </div>

                </section>-->
                <section class="page-3 section" >
                    <div class="container container--right">
                        <h1 class="title mob">Тарифы</h1>
                        <div class="tabs flex">
                            <div class="tab tab--active" data-slide="1">Бизнес</div>
                            <div class="tab" data-slide="2">VIP</div>
                            <div class="tab" data-slide="3">Luxe</div>
                            <div class="tab" data-slide="4">Плюс</div>
                            <div class="tab" data-slide="5">Детский</div>
                            <div class="tab" data-slide="6">Трезвый водитель</div>
                            <div class="tab" data-slide="7"></div>
                            <div class="tab" data-slide="8"></div>
                        </div>
                    </div>

                    <div class="page-3__slider owl-carousel">
                        <div class="page-3__item">
                            <div class="page-3__slider-image">
                                <img src="<?php echo get_template_directory_uri()?>/images/page-3/group.jpg" alt="group">
                            </div>
                            <div class="container">
                                <div class="flex flex--a-top flex--j-right page-3__titleInfo">
                                    <div>
                                        <div class="page-3__title">
                                            Mercedes-Benz E-class, BMW 5, Audi A6 (new)
                                        </div>
                                    </div>

                                    <div class="page-3__info">
                                        <div class="flex flex--a-center page-3__infoItem">
                                            <span class="page-3__infoItem-image"><img src="<?php echo get_template_directory_uri()?>/images/page-3/combined-shape.svg" alt="combined"></span>
                                            <span class="page-3__infoItem-text">4 персоны</span>
                                        </div>
                                        <div class="flex flex--a-center  page-3__infoItem">
                                            <span class="page-3__infoItem-image"><img src="<?php echo get_template_directory_uri()?>/images/page-3/suitcase-with-white-details.svg" alt="suitcase"></span>
                                            <span class="page-3__infoItem-text"> 3 багажных места</span>
                                        </div>
                                    </div>

                                </div>
                                <div class="page-3__priceInfo">
                                    <div class="page-3__price after-plus">250р</div>
                                    <div class="page-3__price after-plus">20 р / мин</div>
                                    <div class="page-3__price">20 р / км</div>
                                    <div class="page-3__price page-3__price--min">Минимум 500 р</div>
                                </div>
                            </div>
                        </div>
                        <div class="page-3__item">
                            <div class="page-3__slider-image">
                                <img src="<?php echo get_template_directory_uri()?>/images/page-3/group-2.jpg" alt="group">
                            </div>
                            <div class="container">
                                <div class="flex flex--a-top flex--j-right page-3__titleInfo">
                                    <div>
                                        <div class="page-3__title">
                                            Mercedes-Benz S-class W222, BMW 7 (new)
                                        </div>
                                    </div>

                                    <div class="page-3__info">
                                        <div class="flex flex--a-center page-3__infoItem">
                                            <span class="page-3__infoItem-image"><img src="<?php echo get_template_directory_uri()?>/images/page-3/combined-shape.svg" alt="combined"></span>
                                            <span class="page-3__infoItem-text">3 персоны</span>
                                        </div>
                                        <div class="flex flex--a-center  page-3__infoItem">
                                            <span class="page-3__infoItem-image"><img src="<?php echo get_template_directory_uri()?>/images/page-3/suitcase-with-white-details.svg" alt="suitcase"></span>
                                            <span class="page-3__infoItem-text"> 3 багажных места</span>
                                        </div>
                                    </div>

                                </div>
                                <div class="page-3__priceInfo">
                                    <div class="page-3__price after-plus">300р</div>
                                    <div class="page-3__price after-plus">28 р / мин</div>
                                    <div class="page-3__price">70 р / км</div>
                                    <div class="page-3__price page-3__price--min">Минимум 1000 р</div>
                                </div>
                            </div>
                        </div>
                        <div class="page-3__item">
                            <div class="page-3__slider-image">
                                <img src="<?php echo get_template_directory_uri()?>/images/page-3/group-3.jpg" alt="group">
                            </div>
                            <div class="container">
                                <div class="flex flex--a-top flex--j-right page-3__titleInfo">
                                    <div>
                                        <div class="page-3__title">
                                            Mercedes-Benz S-class W222, BMW 7 (new)
                                        </div>
                                    </div>

                                    <div class="page-3__info">
                                        <div class="flex flex--a-center page-3__infoItem">
                                            <span class="page-3__infoItem-image"><img src="<?php echo get_template_directory_uri()?>/images/page-3/combined-shape.svg" alt="combined"></span>
                                            <span class="page-3__infoItem-text">3 персоны</span>
                                        </div>
                                        <div class="flex flex--a-center  page-3__infoItem">
                                            <span class="page-3__infoItem-image"><img src="<?php echo get_template_directory_uri()?>/images/page-3/suitcase-with-white-details.svg" alt="suitcase"></span>
                                            <span class="page-3__infoItem-text"> 3 багажных места</span>
                                        </div>
                                    </div>

                                </div>
                                <div class="page-3__priceInfo">
                                    <div class="page-3__price after-plus">250р</div>
                                    <div class="page-3__price after-plus">20 р / мин</div>
                                    <div class="page-3__price">20 р / км</div>
                                    <div class="page-3__price page-3__price--min">Минимум 500 р</div>
                                </div>
                            </div>
                        </div>
                        <div class="page-3__item">
                            <div class="page-3__slider-image">
                                <img src="<?php echo get_template_directory_uri()?>/images/page-3/group.jpg" alt="group">
                            </div>
                            <div class="container">
                                <div class="flex flex--a-top flex--j-right page-3__titleInfo">
                                    <div>
                                        <div class="page-3__title">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis
                                        </div>
                                    </div>

                                    <div class="page-3__info">
                                        <div class="flex flex--a-center page-3__infoItem">
                                            <span class="page-3__infoItem-image"><img src="<?php echo get_template_directory_uri()?>/images/page-3/combined-shape.svg" alt="combined"></span>
                                            <span class="page-3__infoItem-text">4 персоны</span>
                                        </div>
                                        <div class="flex flex--a-center  page-3__infoItem">
                                            <span class="page-3__infoItem-image"><img src="<?php echo get_template_directory_uri()?>/images/page-3/suitcase-with-white-details.svg" alt="suitcase"></span>
                                            <span class="page-3__infoItem-text"> 3 багажных места</span>
                                        </div>
                                    </div>

                                </div>
                                <div class="page-3__priceInfo">
                                    <div class="page-3__price after-plus">250р</div>
                                    <div class="page-3__price after-plus">20 р / мин</div>
                                    <div class="page-3__price">20 р / км</div>
                                    <div class="page-3__price page-3__price--min">Минимум 500 р</div>
                                </div>
                            </div>
                        </div>
                        <div class="page-3__item">
                            <div class="page-3__slider-image">
                                <img src="<?php echo get_template_directory_uri()?>/images/page-3/group.jpg" alt="group">
                            </div>
                            <div class="container">
                                <div class="flex flex--a-top flex--j-right page-3__titleInfo">
                                    <div>
                                        <div class="page-3__title">
                                            Mercedes-Benz E-class, BMW 5, Audi A6 (new)
                                        </div>
                                    </div>

                                    <div class="page-3__info">
                                        <div class="flex flex--a-center page-3__infoItem">
                                            <span class="page-3__infoItem-image"><img src="<?php echo get_template_directory_uri()?>/images/page-3/combined-shape.svg" alt="combined"></span>
                                            <span class="page-3__infoItem-text">4 персоны</span>
                                        </div>
                                        <div class="flex flex--a-center  page-3__infoItem">
                                            <span class="page-3__infoItem-image"><img src="<?php echo get_template_directory_uri()?>/images/page-3/suitcase-with-white-details.svg" alt="suitcase"></span>
                                            <span class="page-3__infoItem-text"> 3 багажных места</span>
                                        </div>
                                    </div>

                                </div>
                                <div class="page-3__priceInfo">
                                    <div class="page-3__price after-plus">250р</div>
                                    <div class="page-3__price after-plus">20 р / мин</div>
                                    <div class="page-3__price">20 р / км</div>
                                    <div class="page-3__price page-3__price--min">Минимум 500 р</div>
                                </div>
                            </div>
                        </div>
                        <div class="page-3__item">
                            <div class="page-3__slider-image">
                                <img src="<?php echo get_template_directory_uri()?>/images/page-3/group.jpg" alt="group">
                            </div>
                            <div class="container">
                                <div class="flex flex--a-top flex--j-right page-3__titleInfo">
                                    <div>
                                        <div class="page-3__title">
                                            Mercedes-Benz E-class, BMW 5, Audi A6 (new)
                                        </div>
                                    </div>

                                    <div class="page-3__info">
                                        <div class="flex flex--a-center page-3__infoItem">
                                            <span class="page-3__infoItem-image"><img src="<?php echo get_template_directory_uri()?>/images/page-3/combined-shape.svg" alt="combined"></span>
                                            <span class="page-3__infoItem-text">4 персоны</span>
                                        </div>
                                        <div class="flex flex--a-center  page-3__infoItem">
                                            <span class="page-3__infoItem-image"><img src="<?php echo get_template_directory_uri()?>/images/page-3/suitcase-with-white-details.svg" alt="suitcase"></span>
                                            <span class="page-3__infoItem-text"> 3 багажных места</span>
                                        </div>
                                    </div>

                                </div>
                                <div class="page-3__priceInfo">
                                    <div class="page-3__price after-plus">250р</div>
                                    <div class="page-3__price after-plus">20 р / мин</div>
                                    <div class="page-3__price">20 р / км</div>
                                    <div class="page-3__price page-3__price--min">Минимум 500 р</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<button class="btn btn__submit-app btn__submit-app--d btn__submit-app--absoluteRightBottom">Оставить заявку</button>-->
                </section>
                <section class="page-4 section" >
                    <div class="container">
                        <h1 class="title mob">Наши водители</h1>
                    </div>
                    <div class="page-4__slider owl-carousel">
                            <div class="page-4__person">
                                <div class="page-4__person-image">
                                    <img src="<?php echo get_template_directory_uri()?>/images/page-4/face-1.jpg" alt="face" class="face__desc">
                                    <img src="<?php echo get_template_directory_uri()?>/images/page-4/face1.jpg" alt="face" class="face__m">


                                </div>
                                <div class="page-4__person-name">
                                    <h3>
                                        Андрей <br>
                                        Золотарев
                                    </h3>
                                </div>
                            </div>
                            <div class="page-4__person">
                                <div class="page-4__person-image">
                                    <img src="<?php echo get_template_directory_uri()?>/images/page-4/face-2.jpg" alt="face" class="face__desc">
                                    <img src="<?php echo get_template_directory_uri()?>/images/page-4/face2.jpg" alt="face" class="face__m">
                                </div>
                                <div class="page-4__person-name">
                                    <h3>
                                        Владимир <br>
                                        Быстров
                                    </h3>
                                </div>
                            </div>
                            <div class="page-4__person">
                                <div class="page-4__person-image">
                                    <img src="<?php echo get_template_directory_uri()?>/images/page-4/face-3.jpg" alt="face" class="face__desc">
                                    <img src="<?php echo get_template_directory_uri()?>/images/page-4/face3.jpg" alt="face" class="face__m">
                                </div>
                                <div class="page-4__person-name">
                                    <h3>
                                        Антон <br>
                                        Заводилов
                                    </h3>
                                </div>
                            </div>
                            <div class="page-4__person">
                                <div class="page-4__person-image">
                                    <img src="<?php echo get_template_directory_uri()?>/images/page-4/face-4.jpg" alt="face" class="face__desc">
                                    <img src="<?php echo get_template_directory_uri()?>/images/page-4/face4-m.jpg" alt="face" class="face__m">
                                </div>
                                <div class="page-4__person-name">
                                    <h3>
                                        Геннадий <br>
                                        Поворотко
                                    </h3>
                                </div>
                            </div>
                            <div class="page-4__person">
                                <div class="page-4__person-image">
                                    <img src="<?php echo get_template_directory_uri()?>/images/page-4/face-4.jpg" alt="face" class="face__desc">
                                    <img src="<?php echo get_template_directory_uri()?>/images/page-4/face4-m.jpg" alt="face" class="face__m">
                                </div>
                                <div class="page-4__person-name">
                                    <h3>
                                        Геннадий <br>
                                        Поворотко
                                    </h3>
                                </div>
                            </div>
                            <div class="page-4__person">
                                <div class="page-4__person-image">
                                    <img src="<?php echo get_template_directory_uri()?>/images/page-4/face-4.jpg" alt="face" class="face__desc">
                                    <img src="<?php echo get_template_directory_uri()?>/images/page-4/face4-m.jpg" alt="face" class="face__m">
                                </div>
                                <div class="page-4__person-name">
                                    <h3>
                                        Геннадий <br>
                                        Поворотко
                                    </h3>
                                </div>
                            </div>
                            <div class="page-4__person">
                                <div class="page-4__person-image">
                                    <img src="<?php echo get_template_directory_uri()?>/images/page-4/face-4.jpg" alt="face" class="face__desc">
                                    <img src="<?php echo get_template_directory_uri()?>/images/page-4/face4-m.jpg" alt="face" class="face__m">
                                </div>
                                <div class="page-4__person-name">
                                    <h3>
                                        Геннадий <br>
                                        Поворотко
                                    </h3>
                                </div>
                            </div>
                            <div class="page-4__person">
                                <div class="page-4__person-image">
                                    <img src="<?php echo get_template_directory_uri()?>/images/page-4/face-4.jpg" alt="face" class="face__desc">
                                    <img src="<?php echo get_template_directory_uri()?>/images/page-4/face4-m.jpg" alt="face" class="face__m">
                                </div>
                                <div class="page-4__person-name">
                                    <h3>
                                        Геннадий <br>
                                        Поворотко
                                    </h3>
                                </div>
                            </div>
                            <div class="page-4__person">
                                <div class="page-4__person-image">
                                    <img src="<?php echo get_template_directory_uri()?>/images/page-4/face-4.jpg" alt="face" class="face__desc">
                                    <img src="<?php echo get_template_directory_uri()?>/images/page-4/face4-m.jpg" alt="face" class="face__m">
                                </div>
                                <div class="page-4__person-name">
                                    <h3>
                                        Геннадий <br>
                                        Поворотко
                                    </h3>
                                </div>
                            </div>
                            <div class="page-4__person">
                                <div class="page-4__person-image">
                                    <img src="<?php echo get_template_directory_uri()?>/images/page-4/face-4.jpg" alt="face" class="face__desc">
                                    <img src="<?php echo get_template_directory_uri()?>/images/page-4/face4-m.jpg" alt="face" class="face__m">
                                </div>
                                <div class="page-4__person-name">
                                    <h3>
                                        Геннадий <br>
                                        Поворотко
                                    </h3>
                                </div>
                            </div>

                    </div>
                    <!--<button class="btn btn__submit-app btn__submit-app--d btn__submit-app--absoluteRightBottom">Оставить заявку</button>-->
                </section>
                <section class="page-5 section" >
                    <div class="container">
                        <h1 class="page-5__title">
                            Станьте нашим водителем
                        </h1>

                        <form action="" class="page-5__form">
                            <input type="text" class="page-5__input" placeholder="Как вас зовут?">
                            <input type="tel" class="page-5__input" placeholder="Телефон" >
                            <input type="email" class="page-5__input" placeholder="Электронная почта" >
                            <input type="button" class="page-5__submit" value="Отправить">
                        </form>
                    </div>
                    <!--<button class="btn btn__submit-app btn__submit-app--d btn__submit-app--absoluteRightBottom">Оставить заявку</button>-->
                </section>
                <section class="page-6 section" >
                    <div class="container ">
                        <h1 class="title mob">
                            Контакты
                        </h1>
                        <div class="page-6__col">

                            <h1 class="page-6__title">Куркинское шоссе стр 2 БЦ Аэросити</h1>
                            <a href="tel:+74953692222" class="page-6__link">+7 (495) 369-22-22</a>
                            <a href="mailto:" class="page-6__link">0-1-1@inbox.ru</a>
                        </div>


                    </div>
                    <div id="map"></div>

                </section>
            </section>
		</main><!-- #main -->


<?php
get_footer();
