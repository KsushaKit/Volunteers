<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/alert.css">
    <link rel="stylesheet" href="./css/request.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/unpkg.com_swiper@9.4.1_swiper-bundle.min.css"/>
    <!-- SWIPER -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!-- SWIPER -->

    <title>#МЫВМЕСТЕ</title>
</head>
<body class="col-12">
    <header class="parallax col-12">
        <div class="overlay col-12">
            <div class="paralax-content container col-md-9 col-sm-12">
                <nav class="navbar navbar-expand-md navbar-dark col-12">
                    <div class="container-fluid">
                        <div class="header_logo">
                            <div class="header_logo_lonk">
                                <a href="https://www.sstu.ru/obshchestvennaya-zhizn/profkom-studentov/"><img src="./img/logo2.png" class="logo_profcom" alt="Профком ИнПИТа"></a>
                            </div>
                        </div>
                        <div class="header_logo">
                            <div class="header_logo_lonk">
                                <a href="https://www.sstu.ru/"><img src="./img/sstu.png" class="logo_sgtu" alt="СГТУ"></a>
                            </div>
                        </div>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Переключатель навигации">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                        <div class="collapse navbar-collapse" id="navbarToggleExternalContent" >
                            <ul class="menu_list">
                                <li class="header_item">
                                    <div class="link_fon">
                                        <a href="#about_project" class="header_link">О проекте</a> 
                                    </div>
                                </li>
                                <li class="header_item">
                                    <div class="link_fon">
                                        <a href="#types_help" class="header_link">Виды помощи</a> 
                                    </div>
                                </li>
                                <li class="header_item">
                                    <div class="link_fon">
                                        <a href="#contacts" class="header_link">Контакты</a> 
                                    </div>
                                </li>
                            </ul>                             
                        </div>
                    </div>
                </nav>
                <div class="parallax-conteiner col-md-12">
                    <div class=" col-md-12 col-sm-12">
                        <h1 class="parallax-conteiner-title">Добровольческий штаб #МЫВМЕСТЕ СГТУ имени Гагарина Ю.А.</h1>
                        <div class="parallax-conteiner-text">
                            <div class="text_inform col-md-6 col-sm-12">
                                <p>
                                    Добровольческий штаб #МЫВМЕСТЕ на базе СГТУ имени Гагарина Ю.А. создан для помощи гражданам, попавшим в тяжёлые жизненные ситуации.
                                    <p></p>
                                    Иногда помощь приходит оттуда, откуда её не ждешь!
                                    <p></p>
                                    Обратись за помощью!
                                </p>
                            </div>

                            <!-- ФОРМА ЗАЯВКИ -->
                            <div class="application col-md-6 col-sm-12">
                                <h3 class="title_application">Оставить заявку</h3>
                                <h3 class="title_application_2">Заявка на помощь</h3>
                                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" id="application_form" class="guest_request_form">
                                    <div class="form-input">
                                        <div>
                                            <label for="Фамилия">Укажите своё имя</label>
                                            <input class="input-text" name="name" type="text"  pattern="^[А-Яа-яЁё\s]+$" name="Имя" placeholder="имя" id="name_guest_request" required>
                                        </div>
                                        <div>
                                            <label for="Фамилия">Укажите свою фамилию</label>
                                            <input class="input-text" name="surname" type="text"  pattern="^[А-Яа-яЁё\s]+$" name="Фамилия" id="family_guest_request" placeholder="фамилия" required>
                                        </div>
                                    </div>
                                    <p></p>
                                    <div class="form-input">
                                        <div style="width: 58%">
                                            <label for="phone">Номер телефона</label>
                                            <input class="input-text" name="phone" type="text" pattern="\+?[0-9\s\-\(\)]+" id="phone_guest_request" name="phone"  placeholder="номер телефона" required>
                                        </div>
                                        <div>
                                            <label for="phone">Вид помощи</label>
                                            <select name="type_of_assistance">
                                                <option>Адресная</option>
                                                <option>Гуманитарная</option>
                                                <option>Психологическая</option>
                                            </select>
                                        </div>
                                    </div>
                                    <p></p>
                                    <li>
                                        <li><label for="comment">Комментарий:</label></li>
                                        <li><textarea name="comment" type="text" id="comment_body_guest_request" pattern="^[А-Яа-яЁё\s]+$"></textarea></li>
                                        <li class="input-checkbox-text"><input class="input-checkbox" type="checkbox" name="agree" id="agree_guest_request" required> Согласен на обработку <a href="./documents/politika.pdf">персональных данных</a></li>
                                    </li> 
                                    <p></p>
                                    <li>
                                        <button type="submit" id="button-applecation" class="col-md-3 col-sm-12">Оставить заявку</button>
                                    </li>

                                </form>
                            </div>

                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="col-12">
        <section id="about_project" class="parallax_about col-12">
            <div class="container-about col-md-9 col-sm-12">
                <div class="about_title">
                    <div class="blue_line"></div>
                    <h2 class="title_item">О проекте</h2>
                </div>
                <p class="inner_text">

                    Основные направления деятельности:
                    оказание адресной (бытовой) помощи гражданам, 
                    сбор и отправка гуманитарной помощи,
                    оказание консультационной (психологической) помощи гражданам.
               
                <br> 
                <br> 

                    Также в рамках штаба проходят:
                    донорские акции, мастер-классы по изготовлению расходных материалов для действующих участников СВО на передовой, привлечение детей участников СВО в существующие творческие коллективы СГТУ имени Гагарина Ю.А., проведение для них ряда различных мастер-классов, а также работа в формате наставничества и менторинга.

                </p>
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <img
                        src="./img/photo_2.jpeg"
                        class="gallery_photo w-100 shadow-1-strong mb-4"
                        alt="счастливый человек"
                        />
                        
                        <img
                        src="./img/photo_11.png"
                        class="gallery_photo w-100 shadow-1-strong mb-4"
                        alt="счастливый человек"
                        />
                    </div>
                        
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img
                        src="./img/photo_12.png"
                        class="gallery_photo w-100 shadow-1-strong mb-4"
                        alt="счастливый человек"
                        />

                        <img
                        src="./img/photo_9.jpeg"
                        class="gallery_photo w-100 shadow-1-strong mb-4"
                        alt="счастливый человек"
                        />
                    </div>
                        
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img
                        src="./img/photo_5.jpeg"
                        class="gallery_photo w-100 shadow-1-strong mb-4"
                        alt="счастливый человек"
                        />

                        <a href="/html/photos.html">
                            <div class="end-photo-wrapper">
                                <div class="end-photo-container">
                                    <img
                                    src="./img/photo_13.png"
                                    class="w-100 shadow-1-strong mb-4"
                                    alt="счастливый человек"
                                    />
                                </div>
                            </div>
                        </a> 
                        
                    </div>
                </div>
            </div>
        </section>

        <section id="types_help" class="parallax_about col-12">

            <div class="container-about col-md-9 col-sm-12">
                <div class="helps_title col-md-9 col-sm-12">
                    <div class="blue_line"></div>
                    <h2 class="title_item">На базе штаба Вы можете получить:</h2>
                </div>


                <div class="help_cards col-md-6 col-sm-12">

                    <div class="card_fon col-lg-5 col-md-12 col-sm-12">
                        <div data-modal-btn="popup2" class="card_text">
                            <div class="help_text_item col-md-5">Адресная помощь</div>
                            <img class="header_logo_lonk" src="./img/адресная помощь.png" alt="адресная помощь">
                        </div>
                        <!-- <div class="button_card">
                            <button class="button_card_disign">Подробнее</button>
                        </div> -->
                       
                    </div>    
                    <div data-modal-btn="popup3" class="card_fon col-lg-5 col-md-12 col-sm-12">
                        <div class="card_text">
                            <div class="help_text_item col-md-5">Психологическая помощь</div>
                            <img class="header_logo_lonk" src="./img/психологическая помощь.png" alt="психологическая помощь">
                        </div>                     
                    </div>   

                    <div data-modal-btn="popup4" class="card_fon col-lg-5 col-md-12 col-sm-12">
                        <div class="card_text">
                            <div class="help_text_item col-md-5">Гуманитарная помощь</div>
                            <img class="header_logo_lonk" src="./img/гуманитарная помощь.png" alt="гуманитарная помощь">
                        </div>
                    </div>
                    
                    <!-- <a href="./help.html" class="card_fon col-lg-5 col-md-12 col-sm-12"> 
                        <div class="card_text">
                            <div class="help_text_item col-md-5">Иная помощь</div>
                            <img class="header_logo_lonk" src="./img/иная помощь.png" alt="иная помощь">
                        </div>                        
                    </a>     -->

                </div>
            </div>
            
            <!-- модальное окно 1 -->
            <div data-modal-window="popup2" class="modal_comment">
                <div class="modal_content col-md-6 col-sm-12">

                    <div class="modal_wrapper">
                        <div class="modal_inner">
                            <div class="modal_title">Адресная (бытовая) помощь</div>
                            <div class="close_modal_window">&times;</div>
                        </div>
                        <div class="filling_wrapper">

                            <div class="form_text">
                                Волонтеры добровольческого штаба #МЫВМЕСТЕ на базе СГТУ имени Гагарина Ю.А. окажут Вам помощь в быту (приготовление пищи, уборка территории). 
                            </div>
                            
                            <!-- Слайдер -->
                            <div class="swiper slider1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="./img/photo_4.jpeg"></div>
                                    <div class="swiper-slide"><img src="./img/photo_1.jpeg"></div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            
                        </div>
                    </div>

                </div>
            </div>
           

            <!-- модальное окно 2 -->
            <div data-modal-window="popup3" class="modal_comment">
                <div class="modal_content col-md-6 col-sm-12">

                    <div class="modal_wrapper">
                        <div class="modal_inner">
                            <div class="modal_title">Психологическая помощь</div>
                            <div class="close_modal_window">&times;</div>
                        </div>
                        <div class="filling_wrapper">

                            <div class="form_text">
                                Если у вас наблюдаются перечисленные симптомы, тревожное и депрессивное состояние, невротическое состояние, подавленное и угнетенное состояние, апатия, депрессия, стресс и развитие навыков саморегуляции, работа с различными видами страха, обращайтесь к психологам СГТУ имени Гагарина Ю.А.. 
                            </div>
                            
                            <!-- Слайдер -->
                             <div class="swiper slider2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="./img/photo_4.jpeg"></div>
                                    <div class="swiper-slide"><img src="./img/photo_1.jpeg"></div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                                                        
                        </div>
                    </div>

                </div>
            </div>


             <!-- модальное окно 3 -->
             <div data-modal-window="popup4" class="modal_comment">
                <div class="modal_content col-md-6 col-sm-12">

                    <div class="modal_wrapper">
                        <div class="modal_inner">
                            <div class="modal_title">Гуманитарная помощь</div>
                            <div class="close_modal_window">&times;</div>
                        </div>
                        <div class="filling_wrapper">

                            <div class="form_text">
                                Если Вы нуждаетесь в гуманитарной помощи - мы предоставим одежду, а если у вас есть вещи или продукты и т.п., и вы готовы поделиться, ждем вас по адресу ул. Политехническая д. 77 с 9:00 до 18:00 с понедельника по пятницу.
                            </div>
                            
                            <!-- Слайдер -->
                             <div class="swiper slider3">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="./img/photo_4.jpeg"></div>
                                    <div class="swiper-slide"><img src="./img/photo_1.jpeg"></div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                                                        
                        </div>
                    </div>

                </div>
            </div>


        </section>

                                <!-- если нужна будет фотока
                                 <div class="image-content">
                                    <span class="overlay_card"></span>
                                    <div class="card-review-image">
                                        <img src="" alt="" class="card-img">
                                    </div>   
                                </div> -->

        <!-- <section id="reviews" class="parallax_comment col-12">
            <div class="container-help col-md-9 col-sm-12">
                <div class="helps_title">
                    <div class="blue_line"></div>
                    <h2 class="title_item">Отзывы</h2>
                </div>
                <div class="slide-container swiper col-sm-12">
                    <div class="slide-content">
                        <div id="feedback-comments" class="card-wrapper swiper-wrapper">
                            <div class="card-review swiper-slide">
                                
                                МЕСТО ФОТКИ

                                <div class="card-review-content">
                                    <div class="date_comment">
                                        30 Июня 2023
                                    </div>
                                    <div class="card-review-text">
                                        <h2 class="name_reviewer">Попрыга Екатерина</h2>
                                        <p class="description">Спасибо ребятам за работу, очень помогли</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-review swiper-slide">
                                <div class="card-review-content">
                                    <div class="date_comment">
                                        30 Июня 2023
                                    </div>
                                    <div class="card-review-text">
                                        <h2 class="name_reviewer">Кушникова Елена</h2>
                                        <p class="description">Спасибо ребятам за работу, очень помогли</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-review swiper-slide">
                                <div class="card-review-content">
                                    <div class="date_comment">
                                        30 Июня 2023
                                    </div>
                                    <div class="card-review-text">
                                        <h2 class="name_reviewer">Тер-Погосова Ольга</h2>
                                        <p class="description">Спасибо ребятам за работу, очень помогли</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-review swiper-slide">
                                <div class="card-review-content">
                                    <div class="date_comment">
                                        30 Июня 2023
                                    </div>
                                    <div class="card-review-text">
                                        <h2 class="name_reviewer">Федина Анастасия</h2>
                                        <p class="description">Спасибо ребятам за работу, очень помогли</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-review swiper-slide">
                                <div class="card-review-content">
                                    <div class="date_comment">
                                        30 Июня 2023
                                    </div>
                                    <div class="card-review-text">
                                        <h2 class="name_reviewer">Овчинников Александр</h2>
                                        <p class="description">Спасибо ребятам за работу, очень помогли</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-review swiper-slide">
                                <div class="card-review-content">
                                    <div class="date_comment">
                                        30 Июня 2023
                                    </div>
                                    <div class="card-review-text">
                                        <h2 class="name_reviewer">Моисеенко Сергей</h2>
                                        <p class="description">Спасибо ребятам за работу, очень помогли</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-review swiper-slide">
                                <div class="card-review-content">
                                    <div class="date_comment">
                                        13 Июля 2023
                                    </div>
                                    <div class="card-review-text">
                                        <h2 class="name_reviewer">Середенкина Виктория</h2>
                                        <p class="description">Спасибо ребятам за работу, очень помогли. Жду от профкома стипедию 50к за сайт.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev swiper-navBtn"></div>
                    <div class="swiper-button-next swiper-navBtn"></div>
                    <div class="swiper-pagination"></div>
                </div> 
                <div class="btn_comment col-9">
                    <button data-modal-btn="popup1" class="button-review col-md-3 col-sm-12">Оставить отзыв</button>
                </div>
                <div data-modal-window="popup1" class="modal_comment">
                    <div class="modal_content col-md-6 col-sm-12">
                        <div class="modal_inner">
                            <div class="modal_title">Оставить отзыв</div>
                            <div class="close_modal_window">&times;</div>
                        </div>
                        <form class="feedback_form" id="application_form" >
                            <li>
                                <li><label for="Фамилия">Укажите имя, используемое при составлении заявки</label></li>
                                <li><input type="text"  pattern="^[А-Яа-яЁё\s]+$" name="Имя" placeholder="имя" id="name_feedback" required>
                                    <input type="text"  pattern="^[А-Яа-яЁё\s]+$" name="Фамилия" id="family_feedback" placeholder="фамилия" required>
                                </li>
                            </li>
                            <p></p>
                            <li>
                                <li><label for="заявка">Номер заявки</label></li>
                                <li><input type="number" id="number_zayavki_feedback" name="заявка"  placeholder="номер заявки" required></li>
                            </li>
                            <p></p>
                            <li>
                                <li><label for="comment">Отзыв:</label></li>
                                <li><textarea name="comment" id="comment_feedback" pattern="^[А-Яа-яЁё\s]+$"></textarea></li>
                            </li> 
                            <p></p>
                            <li>
                                <button id="send_review" class="button-review col-md-4 col-sm-12">Отправить отзыв</button>
                            </li>     
                        </form>
                    </div>
                </div>
            </div>
        </section> -->


        <section id="news" class="parallax_about col-12">


            <div class="container-help col-md-9 col-sm-12">
                <div class="about_title">
                    <div class="blue_line"></div>
                    <h2 class="title_item">Новости</h2>
                </div>
    
                <!-- ________________________________НОВОСТИ______________________________ -->
                <div class="news_cards col-md-9 col-sm-12 mb-4">


                    <div class="news_cards_fon col-lg-5 col-md-12 col-sm-12 ">
                        <div class="news_cards_text">
                            <div class="news_cards_photo"><img class="photo_news"src="./img/новость1.jpg" alt="новость1"></div>
                            <div class="news_text_title">День России</div>
                            <div class="button_card">
                                <div class="news_text_item">Надпись поменьше</div>
                                <a href="./news.html" class="button_card_disign"><img src="./img/strela.png" alt=""></a>
                            </div>     
                        </div>     
                    </div>  
                    <div class="news_cards_fon col-lg-5 col-md-12 col-sm-12">
                        <div class="news_cards_text">
                            <div class="news_cards_photo"><img class="photo_news" src="./img/новость2.jpg" alt="новость2"></div>
                            <div class="news_text_title">День молодёжи</div>
                            <div class="button_card">
                                <div class="news_text_item">Надпись поменьше</div>
                                <a href="./news.html" class="button_card_disign"><img src="./img/strela.png" alt=""></a>
                            </div>     
                        </div>       
                    </div>  
                    <div class="news_cards_fon col-lg-5 col-md-12 col-sm-12">
                        <div class="news_cards_text">
                            <div class="news_cards_photo"><img class="photo_news" src="./img/новость3.jpg"alt="новость3"></div>
                            <div class="news_text_title">Стипендия раньше</div>
                            <div class="button_card">
                                <div class="news_text_item">Надпись поменьше</div>
                                <a href="./news.html" class="button_card_disign"><img src="./img/strela.png" alt=""></a>
                            </div>     
                        </div>
                    </div>  

                </div>
                
<!--                 
                <div class="news_cards col-md-9 col-sm-12 mb-4">

                    <div class="news_cards_fon col-lg-5 col-md-12 col-sm-12 ">
                        <div class="news_cards_text">
                            <div class="news_cards_photo"><img class="photo_news"src="./img/новость4.jpg" alt="новость1"></div>
                            <div class="news_text_title">Книги для развития</div>
                            <div class="button_card">
                                <div class="news_text_item">Надпись поменьше</div>
                                <a href="./news.html" class="button_card_disign"><img src="./img/strela.png" alt=""></a>
                            </div>     
                        </div>     
                    </div>  
                    <div class="news_cards_fon col-lg-5 col-md-12 col-sm-12">
                        <div class="news_cards_text">
                            <div class="news_cards_photo"><img class="photo_news" src="./img/новость4.jpg" alt="новость2"></div>
                            <div class="news_text_title">Книги для развития</div>
                            <div class="button_card">
                                <div class="news_text_item">Надпись поменьше</div>
                                <a href="./news.html" class="button_card_disign"><img src="./img/strela.png" alt=""></a>
                            </div>     
                        </div>       
                    </div>  
                    <div class="news_cards_fon col-lg-5 col-md-12 col-sm-12">
                        <div class="news_cards_text">
                            <div class="news_cards_photo"><img class="photo_news" src="./img/новость4.jpg"alt="новость3"></div>
                            <div class="news_text_title">Книги для развития</div>
                            <div class="button_card">
                                <div class="news_text_item">Надпись поменьше</div>
                                <a href="./news.html" class="button_card_disign"><img src="./img/strela.png" alt=""></a>
                            </div>     
                        </div>
                    </div>       
                </div>  -->

            </div>
            <!-- ________________________________НОВОСТИ______________________________ -->

        </section>


        <section id="contacts" class="parallax_about col-12">
            <div class="container-contact col-md-9 col-sm-12">
                <div class="about_title">
                    <div class="blue_line"></div>
                    <h2 class="title_item">Контакты</h2>
                </div>
                <p class="inner_text">
                    г. Саратов, ул.Политехническая, 77
                    <br>
                    Ответственный за штаб #МЫВМЕСТЕ на базе СГТУ имени Гагарина Ю.А. 
                    <br>
                    +7 (8452) 99-89-33
                </p>
                
            </div>
        </section>


    </main>
    <footer id="footer" class="footer col-12">
        <div class="container_footer col-12">
            <div class="header_menu_logo_footer">
                <a href="https://www.sstu.ru/obshchestvennaya-zhizn/profkom-studentov/"><img src="./img/logo2.png" class="logo_profcom" alt="Профком ИнПИТа"></a>
                <a href="https://www.sstu.ru/"><img src="./img/sstu.png" class="logo_sstu" alt="СГТУ"></a>
                <a href="https://vk.com/volontcentrlis"><img src="./img/VK.png" class="logo_vk" alt="VK"></a>
            </div>

            <p class="footer_description">© 2023 СГТУ имени Гагарина Ю.А.</p>
            <p class="footer_description">Копирование материалов возможно только с разрешения авторов проекта.</p>
        </div>
    </footer>
</body>


<!-- SWIPER -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- ??галерея комментариев -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<!-- Прочие скрипты -->
<script src="./js/scripts.js"></script>

<!-- Бургер-меню -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>

<!-- ОТПРАВКА ДАННЫХ ИЗ ФОРМЫ -->
<?php

    // Проверяем, была ли отправлена форма
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Подключение к базе данных
        require './php/db.php';
        // Получение данных из HTML-формы
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $phone = $_POST['phone'];
        $type_of_assistance = $_POST['type_of_assistance'];
        $comment = $_POST['comment'];
        $date = date("d-m-Y H:i");
            
        if ($name!= null) {
            try {
                
                if ($comment == null ) $comment = 'Без комментария';

                $sql = "INSERT INTO applications (name, surname, phone, type_of_assistance, comment, date)
                        VALUES ('$name', '$surname', '$phone', '$type_of_assistance', '$comment', '$date')";
                $conn->exec($sql);
                
                echo '<script>alert("Заявка отправлена")</script>';

            } catch(PDOException $e) {
                echo '<script>alert("Что-то пошло не так...")</script>';
            }
        }

        $conn = null;
        die();
    }
   
?>