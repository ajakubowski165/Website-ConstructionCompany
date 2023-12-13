<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="" type="image">
        <title>Jakubowski - remont dla kazdego</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>


    <body>
        <header class="header">               
            <div>
                <a href="#home" class="nav_logo">JAKUBOWSKI</a> 
            </div>

            <div class="nav__menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link">
                            <i class="bx bx-home-alt nav__icon"></i>
                            <span class="nav__name">START</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">
                            <i class="bx bx-user nav__icon"></i>
                            <span class="nav__name">O FIRMIE</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#realizacje" class="nav__link">
                            <i class="bx bx-book-content nav__icon"></i>
                            <span class="nav__name">REALIZACJE</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#opinie" class="nav__link">
                            <i class="bx bx-book-content nav__icon"></i>
                            <span class="nav__name">OPINIE</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#contact" class="nav__link">
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
                        <h1>FIRMA REMONTOWO-BUDOWLANA</h1>
                        <h2>MARIUSZ JAKUBOWSKI<br>
                        <span>Remont dla każdego</span></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore fuga debitis distinctio doloribus quis adipisci asperiores soluta quidem nemo aperiam maiores tempora, accusamus minus odit magni corporis molestias dignissimos porro? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione assumenda recusandae earum totam fuga!</p>
                    </div>
                </article>
            </section>

            <section id="about">
                <h2 class="section__title">O FIRMIE</h2>
                <div class="mini_container">
                    <article>
                        <p>Lorem ipsum dolor sit amet consectetur, Lorem ipsum dolor sit amet consectetur 
                            adipisicing elit. Excepturi exercitationem nobis quos rem illum explicabo aperiam perspiciatis odit aut? Quaerat nobis sequi minima cupiditate ex soluta quisquam eligendi eveniet saepe dolorem, tempora laudantium necessitatibus sapiente, fugiat nihil. Quod officia vel porro earum ad delectus, 
                            harum eveniet ducimus doloremque eum quas.<br><br>adipisicing elit. Cupiditate deseru
                            nt magni sint mollitia similique corporis quis voluptatibus, eos tempora ealias
                            illo nemo excepturi blanditiis vitae impedit minus tempore praesentium harum.Quis, temporibus dolorum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit maxime minima quod eius aspernatur. Accusantium sed sunt corrupti sapiente deleniti?<br><hr>
                        <a href="about.php">Czytaj wiecej...</a>
                    </article>
                    <aside><img src="photos/DSC_0683.JPG"></aside>
                </div>
            </section>

            <section id="realizacje">
                <div class="mini_container">
                    <aside><img src="photos/DSC_0673.JPG"></aside>
                    <article>
                        <h2 class="section__title">REALIZACJE</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, Lorem ipsum dolor sit amet consectetur 
                            adipisicing elit. Excepturi exercitationem nobis quos rem illum explicabo aperiam perspiciatis odit aut? Quaerat nobis sequi minima cupiditate ex soluta quisquam eligendi eveniet saepe dolorem, tempora laudantium necessitatibus sapiente, fugiat nihil. Quod officia vel porro earum ad delectus, 
                            harum eveniet ducimus doloremque eum quas.<br><br>adipisicing elit. Cupiditate deseru
                            nt magni sint mollitia similique corporis quis voluptatibus, eos tempora ealias
                            illo nemo excepturi blanditiis vitae impedit minus tempore praesentium harum.Quis, temporibus dolorum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit maxime minima quod eius aspernatur. Accusantium sed sunt corrupti sapiente deleniti?<br><hr>
                        <a href="realizacje.php">Zobacz realizacje</a>
                    </article>
                </div>
            </section>

            <section id="about">
                <span id="opinie">
                <h2 class="section__title">OPINIE</h2>
                <div class="mini_container">
                    <article>
                        <p>Lorem ipsum dolor sit amet consectetur, Lorem ipsum dolor sit amet consectetur 
                            adipisicing elit. Excepturi exercitationem nobis quos rem illum explicabo aperiam perspiciatis odit aut? Quaerat nobis sequi minima cupiditate ex soluta quisquam eligendi eveniet saepe dolorem, tempora laudantium necessitatibus sapiente, fugiat nihil. Quod officia vel porro earum ad delectus, 
                            harum eveniet ducimus doloremque eum quas.<br><br>adipisicing elit. Cupiditate deseru
                            nt magni sint mollitia similique corporis quis voluptatibus, eos tempora ealias
                            illo nemo excepturi blanditiis vitae impedit minus tempore praesentium harum.Quis, temporibus dolorum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit maxime minima quod eius aspernatur. Accusantium sed sunt corrupti sapiente deleniti?<br><hr>
                        <a href="opinie.php">Zobacz wiecej...</a>
                    </article>
                    <aside><img src="photos/DSC_0683.JPG"></aside>
                </div>
            </section>
            

            <section class="contact_container" id="contact">
                <div class="google_map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41011.952017814794!2d21.979585850000003!3d50.02546735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473cfbae554b096b%3A0xfb1f78d1a4df278d!2sPolitechnika%20Rzeszowska%20im.%20Ignacego%20%C5%81ukasiewicza!5e0!3m2!1spl!2spl!4v1702295110732!5m2!1spl!2spl" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="dane_kontaktowe">
                        <h1>+48 123 456 789</h1>
                        <br>
                        <h1>mjakubowski@wp.pl</h1>
                        <br>
                        <h1>+48 123 456 789</h1>
                    </div>
                </div>          
            </section>
        </main>
    </body>
</html>

