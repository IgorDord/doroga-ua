<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Курсова робота</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Ledger&family=Noto+Sans:wght@700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="modal-wrapper" id="modal">
    <div class="modal">
      <h3 class="modal__title">Дякуємо!</h3>
      <p class="modal__subtitle">Ваша заява успішно оброблена та надіслана</p>
    </div>
  </div>

  <div class="nav-wrapper">
    <nav class="nav">
      <div class="nav__logo">
        <a href="#"><img src="img/logo.png" alt="logo"></a>
      </div>
  
      <ul class="nav__list">
        <li class="nav__list-items">
          <a class="nav__list-link" href="#project">Про проект</a>
        </li>
        <li class="nav__list-items">
          <a class="nav__list-link" href="#instruction">Інструкція</a>
        </li>
        <li class="nav__list-items">
          <a class="nav__list-link" href="#declare">Заява</a>
        </li>
      </ul>

      <button class="menu-btn" type="button" id="menu-btn">
        <div class="menu-btn__burger"></div>
      </button>

      <div class="nav-burger" id="menu">
        <ul class="nav-burger__list">
          <li class="nav-burger__items">
            <a href="#project">Про проект</a>
          </li>
          <li class="nav-burger__items">
            <a href="#instruction">Інструкція</a>
          </li>
          <li class="nav-burger__items">
            <a href="#declare">Заява</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <header class="header">
    <div class="container">

    <div class="header__inner">
      <div class="header__inner-column header__inner-column--left">
      <h1 class="header__inner-title">ДОРОГА <span class="ua">UA</span></h1>
      <h2 class="header__inner-subtitle">Зроби своє місто кращим!</h2>
      <p class="header__inner-text">За допомогою нашого сервісу ви зможете <br> залишити заяву про будь-які проблеми з дорогою</p>
      </div>
      <div class="header__inner-column header__inner-column--right">
        <img src="img/kisspng-road-signs-in-singapore-traffic-sign-roadworks-war-road-views-5aedf81b2fa734.0720544115255449871952.png" alt="">
      </div>
    </div>
    
    </div>
  </header>

  <section class="project" >
    <div class="container">

      <h3 class="project__title"id="project">Про проект</h3>

      <div class="project-row">
        <p class="project-row__text">Згідно з чинним Державним стандартом України <u>3587-97</u>, розміри ям не повинні бути більше <b>0,5 м²</b> або <b>6 см</b> в глибину. Всі ями, які більше хоча б по одному параметру, повинні бути усунені протягом 10-денного терміну (максимум)</p>
      </div>
      <div class="project-row">
        <p class="project-row__text">Стаття 40 Конституції України говорить: «Усі мають право направляти індивідуальні чи колективні письмові звернення або особисто звертатися до органів державної влади, органів місцевого самоврядування, посадових і службових осіб цих органів, що зобов'язані розглянути звернення і дати обґрунтовану відповідь у встановлений законом термін», т . е. - <b>31 день</b>.</p>
      </div>
      <div class="project-row">
        <p class="project-row__text">У разі бездіяльності органів виконавчої влади, відповідно до Закону України «Про прокуратуру», органи прокуратури мають право порушувати провадження про адміністративне правопорушення та вимагати притягнення осіб, які порушили закон, до іншої встановленої законом відповідальності.</p>
      </div>

    </div>
  </section>

  <section class="instruction">
    <div class="container">

      <h3 class="instruction__title" id="instruction">Інструкція</h3>

      <ol class="instruction__list">
        <li class="instruction__items">Зробіть фото пошкодження дорожнього покриття і по можливості зробіть вимір пошкодження за допомогою рулетки або лінійки і зафіксуйте вимірювання на фотографії. Це зробить ваше звернення більш «вагомим» і буде серйозним доказом наявності порушення.</li>
        <li class="instruction__items">На карті яка знаходиться нижче, подвійним кліком встановіть мітку з максимально точним місцем розташування пошкодження дороги.</li>
        <li class="instruction__items">Виберіть один із вказаних типів пошкодження. </li>
        <li class="instruction__items">Заповніть поля вказавши в них свої дані.</li>
        <li class="instruction__items">За бажанням завантажте зроблені вами знімки та натисніть кнопку "відправити".</li>
      </ol>
    </div>
  </section>

  <section class="declare">
    <div class="container">

      <h3 class="declare__title" id="declare">Заява</h3>

      <div class="error" id="error">
        <p class="error__title">Для відправки заяви необхідно заповнити наступні поля:</p>
        <ol class="error__list">
          <li class="error__list-items">Заповнити поле "Адрес" поставивши мітку на карті.</li>
          <li class="error__list-items">Заповнити поле "Ім'я".</li>
          <li class="error__list-items">Заповнити поле "email".</li>
          <li class="error__list-items">Обрати тип проблеми.</li>
        </ol>
      </div>

      <div class="declare__map" id="map"></div>

      <form class="declare__form" enctype="multipart/form-data" method="POST" action="doroga-ua.php">
        <input class="declare__input-road" type="text" name="address" placeholder="Адрес" id="road">
        <div class="declare__user-info">
          <input class="declare__input-user" type="text" name="name" placeholder="Iм'я" id="name">
          <input class="declare__input-user" type="text" name="surname" placeholder="Прізвище" id="surname">
          <input class="declare__input-user" type="email" name="email" placeholder="email" id="email">
        </div>

        <div class="declare__road-problem">
          <h3 class="declare__title">Тип проблеми</h3>
          <label class="declare__label"><input class="declare__input-radio" type="radio" name="road-problem" value="Штучно зруйнована дорога" checked>Штучно зруйнована дорога</label>
          <label class="declare__label"><input class="declare__input-radio" type="radio" name="road-problem" value="Розбита дорога">Розбита дорога</label>
          <label class="declare__label"><input class="declare__input-radio" type="radio" name="road-problem" value="Яма на дорозі">Яма на дорозі</label>
          <label class="declare__label"><input class="declare__input-radio" type="radio" name="road-problem" value="Люк">Люк</label>
          <label class="declare__label"><input class="declare__input-radio" type="radio" name="road-problem" value="Яма у дворі">Яма у дворі</label>
          <label class="declare__label"><input class="declare__input-radio" type="radio" name="road-problem" value="Неякісний ремонт дороги">Неякісний ремонт дороги</label>
          <label class="declare__label"><input class="declare__input-radio" type="radio" name="road-problem" value="Відсутність розмітки">Відсутність розмітки</label>
          <label class="declare__label"><input class="declare__input-radio" type="radio" name="road-problem" value="Сніг">Сніг</label>
          <label class="declare__label"><input class="declare__input-radio" type="radio" name="road-problem" value="Незакінчений ремонт дороги">Незакінчений ремонт дороги</label>
          <label class="declare__label"><input class="declare__input-radio" type="radio" name="road-problem" value="Тротуар">Тротуар</label>
          <label class="declare__label"><input class="declare__input-radio" type="radio" name="road-problem" value="Сторонні предмети на дорозі">Сторонні предмети на дорозі</label>
        </div>

        <input class="declare__input-file" type="file" name="photo">

        <textarea class="declare__textarea" name="message" placeholder="Коментар" changesize></textarea>
        <button class="declare__btn" name="submit" type="submit" id="btn"><span>надіслати</span></button>
      </form>
        <?php
          if (isset($_POST['submit'])) {
              require_once 'connection.php';

              if( !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['address']) ){

                $link = mysqli_connect($host, $user, $password, $database)
                or die("Ошибка" . mysqli_error($link));

                // экранирования символов для mysql
                $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
                $surname = htmlentities(mysqli_real_escape_string($link, $_POST['surname']));
                $email = htmlentities(mysqli_real_escape_string($link, $_POST['email']));
                $address = htmlentities(mysqli_real_escape_string($link, $_POST['address']));
                $problem = htmlentities(mysqli_real_escape_string($link, $_POST['road-problem']));
                $photo = $_FILES['photo']['tmp_name'];
                $folder = "D://Programs/xampp/htdocs/course/request-img/";
                $uploadfile = $folder . basename($_FILES['photo']['name']);
                if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
                  echo "Файл корректен и был успешно загружен.\n";
                }
                //  else {
                //   echo "Возможная атака с помощью файловой загрузки!\n";
                // }
                $message = htmlentities(mysqli_real_escape_string($link, $_POST['message']));

                // создание строки запроса
                $query = "INSERT INTO request VALUES(NULL, '$name', '$surname', '$email', '$address', '$problem', '$folder', '$message')";

                // выполняем запрос
                $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

                if ($result) {
                  echo "<script>
                        const modal = document.getElementById('modal');
                        modal.classList.add('show');
                        setTimeout(()=> {
                          modal.classList.remove('show');
                        }, 2000);

                        const error = document.getElementById('error');
                        if (error.className('error active')) {
                           error.classList.remove('active');
                        }
                      </script>";
                }

                // закрываем подключение
                mysqli_close($link);
              } else {
                echo "<script>
                        const error = document.getElementById('error');
                        const declare = document.getElementById('declare');
                        error.classList.add('active');
                        declare.scrollIntoView(top);
                      </script>";
              }
          }
        ?>
    </div>
  </section>
  
  <footer class="footer">

      <div class="nav-wrapper">
        <nav class="nav">
          <div class="nav__logo">
            <a href="#"><img src="img/logo.png" alt="logo"></a>
          </div>
      
          <ul class="nav__list nav__list--footer">
            <li class="nav__list-items">
              <a class="nav__list-link" href="#project">Про проект</a>
            </li>
            <li class="nav__list-items">
              <a class="nav__list-link" href="#instruction">Інструкція</a>
            </li>
            <li class="nav__list-items">
              <a class="nav__list-link" href="#declare">Заява</a>
            </li>
          </ul>
        </nav>
      </div>

      <div class="footer__copyright">
        <p class="footer__copyright-text">2021 © Дьордь I.B. </p>
      </div>

  </footer>

 

  <script src="app.js"></script>
  <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAm3JvcDLIyC6lcI4coXLM9qoBmgHl_Ok&callback=initMap"></script>
</body>
</html>