<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="" type="image">
        <title>Jakubowski - remont dla kazdego</title>
        <link rel="stylesheet" href="opinie.css">
        <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>

    <?php
        session_start();
        $db = new mysqli("localhost", "root", "", "db");
    
        $result = $db->query("SELECT * FROM opinie");
        $db->close();
        $opinie = array(); 

        while ($row = $result->fetch_assoc()) {
            $opinie[] = $row; 
        }
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
            <div class='opinie'>
                <h2>OPINIE UŻYTKOWNIKÓW</h2>

                <?php
                     if (!empty($opinie)) {
                        foreach ($opinie as $row) {
                            echo "<p><strong>Email:</strong> " . $row['email'] . "<br>";
                            echo "<strong>Ocena:</strong> " . $row['ocena'] . "<br>";
                            echo "<strong>Opinia:</strong> " . $row['opinia'] . "<br>";
                            echo "<strong>Data wpisu:</strong> " . $row['data_wpisu'] . "</p><hr>";
                        }
                    } else {
                        echo "<p>Brak opinii do wyświetlenia.</p>";
                    }
                ?>
            </div>
            <section class="contact_container" id = "contact">
                <h1>Jeśli chcesz dodać opinię zaloguj się! Nie masz konta? Zarejestruj się!</h1>
                <div class="przyciski">
                    <a href="logowanie.php" type="button" class="przycisk">ZALOGUJ</a>
                    <br>
                    <a href="rejestracja.php" type="button" class="przycisk">ZAREJESTRUJ</a>
                </div>
            </section>

        </main>
    </body>
</html>

