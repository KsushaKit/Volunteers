<!DOCTYPE html>
<html lang="ru">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/normalize.css">
  <link rel="stylesheet" href="../../css/news.css">
  <link rel="stylesheet" href="../../css/alert.css">
  <link rel="stylesheet" href="../../css/request.css">
  <link rel="stylesheet" href="../../css/bootstrap.css">

  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <title>#МЫВМЕСТЕ</title>

</head>


<body class="col-12">


  <header class="parallax col-12">

    <div class="overlay col-12">
      <div class="paralax-content container col-md-9 col-sm-12">
        <!-- __________________________МЕНЮ______________________________________________________________________ -->
        <nav class="navbar navbar-expand-md navbar-dark col-12">

          <div class="container-fluid">
                
            <div class="header_logo">
              <div class="header_logo_lonk">
                <a href="https://www.sstu.ru/obshchestvennaya-zhizn/profkom-studentov/"><img src="../../img/logo2.png" class="logo_profcom" alt="Профком ИнПИТа"></a>
              </div>
            </div>

            <div class="header_logo">
              <div class="header_logo_lonk">
                <a href="https://www.sstu.ru/"><img src="../../img/sstu.png" class="logo_sgtu" alt="СГТУ"></a>
              </div>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Переключатель навигации">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarToggleExternalContent" >

              <ul class="menu_list">

                <li class="header_item">
                  <div class="link_fon">
                    <a href="../../index.php#about_project" class="header_link">О проекте</a> 
                  </div>
                </li>

                <li class="header_item">
                  <div class="link_fon">
                    <a href="../../index.php#types_help" class="header_link">Виды помощи</a> 
                  </div>
                </li>

                <li class="header_item">
                  <div class="link_fon">
                    <a href="../../index.php#contacts" class="header_link">Контакты</a> 
                  </div>
                </li>

              </ul>   
            </div>
            

          </div>

        </nav>
        <!-- ________________________________________________________________________________________________ -->

        <div class="parallax-conteiner col-md-12">
          <div class=" col-md-12 col-sm-12">

            <h1 class="parallax-conteiner-title">Добровольческий штаб #МЫВМЕСТЕ СГТУ имени Гагарина Ю.А.</h1>

            <div class="parallax-conteiner-text">
                <div class="text_inform col-md-6 col-sm-12">
                  <p>
                    Добровольческий штаб #МЫВМЕСТЕ на базе СГТУ имени Гагарина Ю.А. создан для помощи гражданам, попавшим в тяжёлые жизненные ситуации.
                  <p></p>
                    Иногда помощь приходит оттуда, откуда её не ждешь!
                  <p>
                </div>
            </div>    
          </div>
        </div>

      </div>
    </div>
  </header>


  <main class="col-12">

    <section id="photos" class="parallax_about col-12">

      <!-- НОВОСТЬ -->
      <?php
            require "../db.php";
            // Получение параметра id из URL
            $id = $_GET['id'];

            // Запрос к базе данных для получения нужного текста
            $sql = "SELECT * FROM news WHERE news_id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>

        <?php
            if ($stmt): 
        ?> 
        
            <div class="photos_title">
                <div class="blue_line"></div>
                <div class="title_item"><?php echo $row['title']; ?></div>
            </div>

            <div class="content">
                <div class="photo">
                    <img src="<?php echo $row['photo']; ?>" alt="">
                </div> 
                <div class="text"><?php echo $row['text']; ?></div>
            </div>
            
        <?php else: ?>
            <p>Что-то пошло не так</p>
        <?php endif; ?>
        </div>

        <a class="back" href="../../index.php#news">На главную</a>
    </section>
    
  </main>

  <footer id="footer" class="footer col-12">
    <div class="container_footer col-12">
      <div class="header_menu_logo_footer">
        <a href="https://www.sstu.ru/obshchestvennaya-zhizn/profkom-studentov/"><img src="../../img/logo2.png" class="logo_profcom" alt="Профком ИнПИТа"></a>
        <a href="https://www.sstu.ru/"><img src="../../img/sstu.png" class="logo_sstu" alt="СГТУ"></a>
        <a href="https://vk.com/volontcentrlis"><img src="../../img/VK.png" class="logo_vk" alt="VK"></a>
      </div>

        <p class="footer_description">© 2023 СГТУ имени Гагарина Ю.А.</p>
        <p class="footer_description">Копирование материалов возможно только с разрешения авторов проекта.</p>
    </div>
  </footer>

</body>

<!-- Бургер меню -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>