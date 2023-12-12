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

<?php
    session_start();
    $message = "<p>Pomyślnie zalogowano za pomocą adresu:  ".$_SESSION['email']." ";
?>

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
                        <a href="#about" class="nav__link">
                            <i class="bx bx-book-content nav__icon"></i>
                            <span class="nav__name">OFERTA</span>
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
            <section>
            <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur placeat quos quam corrupti aliquam, nulla nostrum officiis molestias animi quod delectus mollitia eos asperiores tenetur repellendus exercitationem vel quo. Unde cum maxime veniam iure aliquid corporis exercitationem, ut ratione vel ullam odio? Assumenda, eaque. Unde a iusto, quis hic adipisci quaerat vel similique magnam corporis aut aperiam. Quia quo laboriosam autem, perferendis accusamus delectus nobis voluptatem aspernatur fugit, earum quis amet incidunt officiis mollitia libero impedit asperiores! Necessitatibus ducimus, perspiciatis libero voluptatem laboriosam omnis deserunt cum repellat molestiae sequi nihil dolore saepe unde, fugiat ea repudiandae, dolorum eos architecto soluta.
         
            <br>
            </section>
       
            <section class="contact_container" id = "contact">
            <div class="message"><?php echo $message; ?></div>
            </section>
        </main>
    </body>
</html>

