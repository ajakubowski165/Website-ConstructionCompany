<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="" type="image">
    <title>Jakubowski - remont dla kazdego</title>
    <link rel="stylesheet" href="galeria-salon.css">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
</head>

<body>

    <header class="header">               
        <div>
            <a href="index.php" class="nav_logo">JAKUBOWSKI</a> 
        </div>

        <div class="nav__menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="index.php" class="nav__link">
                        <i class="bx bx-home-alt nav__icon"></i>
                        <span class="nav__name">START</span>
                    </a>
                </li>
                <li class="nav__item">
                    <a href="about.php" class="nav__link">
                        <i class="bx bx-user nav__icon"></i>
                        <span class="nav__name">O FIRMIE</span>
                    </a>
                </li>
                <li class="nav__item">
                    <a href="realizacje.php" class="nav__link">
                        <i class="bx bx-book-content nav__icon"></i>
                        <span class="nav__name">REALIZACJE</span>
                    </a>
                </li>
                <li class="nav__item">
                    <a href="#oferta" class="nav__link">
                        <i class="bx bx-book-content nav__icon"></i>
                        <span class="nav__name">OPINIE</span>
                    </a>
                </li>
                <li class="nav__item">
                    <a href="index.php#contact" class="nav__link">
                        <i class="bx bx-message-square-dots nav__icon"></i>
                        <span class="nav__name">KONTAKT</span>
                    </a>
                </li>
            </ul>
        </div>          
    </header>

    <main>
    <section id = "home">
        <article>
            <div class="main-text">
                <h1>GALERIA</h1>
                <h2>SALONY</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque ratione aliquam facere, consectetur consequatur doloribus ex cupiditate unde minus. Id consequuntur iste harum illum enim minus sit ut accusantium fugit!</p>
            </div>
        </article>
    </section>

        <section id="gallery">
                <div class="frame">
                    <img src="photos/20200711_121114.jpg">
                </div>
                <div class="frame">
                    <img src="photos/20211209_184441.jpg">
                </div>
                <div class="frame">
                    <img src="photos/20200717_114151.jpg">
                </div>
                <div class="frame">
                    <img src="photos/20200717_114151.jpg">
                </div>
                <div class="frame">
                    <img src="photos/20200717_114151.jpg">
                </div>
                <div class="frame">
                    <img src="photos/20200717_114151.jpg">
                </div>
                <div class="frame">
                    <img src="photos/20200717_114151.jpg">
                </div>
                <div class="frame">
                    <img src="photos/20200717_114151.jpg">
                </div>
                <div class="frame">
                    <img src="photos/20200717_114151.jpg">
                </div>

            <div class="popup hidden">
                <button aria-label="Zamknij popup" class="popup__close">X</button>
                <img src="" alt="" class="popup__img" />
                <button aria-label="Poprzednie zdjęcie" class="popup__arrow popup__arrow--left"> < </button>
                <button aria-label="Następne zdjęcie" class="popup__arrow popup__arrow--right"> > </button>
            </div>
        </section>
    
    </main>
          
    <script src="galeria.js"></script>

</body>

</html>