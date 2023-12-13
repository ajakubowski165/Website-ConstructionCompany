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

    if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true)){
        $message = "<p>Pomyślnie zalogowano za pomocą adresu: ".$_SESSION['email']." ";

        if (isset($_POST['ocena']) && isset($_POST['opinia'])) {
            $ocena = $_POST['ocena'];
            $opinia = $_POST['opinia'];
            $email = $_SESSION['email'];
            $data_wpisu = date('Y-m-d');
    
            // Sprawdź, czy ocena mieści się w zakresie od 1 do 10
            if ($ocena >= 1 && $ocena <= 10) {
                $db = new mysqli("localhost", "root", "", "db");

                $dodaj = $db->prepare("INSERT INTO opinie (email, ocena, opinia, data_wpisu) VALUES (?, ?, ?, ?)");
                $dodaj->bind_param("ssss", $email, $ocena, $opinia, $data_wpisu);
    
                if ($dodaj->execute()) {
                    $message = "Opinia została dodana.";
                    header('Location: opinie-login.php');
                    exit();
                } else {
                    $message = "Błąd przy dodawaniu opinii: " . $dodaj->error;
                }
                $dodaj->close();
                $db->close();
            } else {
                $message = "Ocena musi być w zakresie od 1 do 10.";
            }
        } else {
            $message = "Nieprawidłowe dane przesłane.";
        }
    }
    else
    {
        $message = "";
        header('Location: opinie.php');
    }


    $db = new mysqli("localhost", "root", "", "db");
  
    $result = $db->query("SELECT * FROM opinie");
    $db->close();
    $opinie = array(); // Inicjalizacja tablicy na opinie

    while ($row = $result->fetch_assoc()) {
        $opinie[] = $row; // Dodanie opinii do tablicy
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
            <section>
            <div>
                <h2>Opinie Użytkowników</h2>

                <?php
                    echo $message;
                ?>
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
            </section>
            <section class="contact_container" id = "contact">
                <div class="message"><?php echo $message; ?></div>

                <form method="post" action="">
                    <label for="ocena">Ocena (od 1 do 10):</label>
                    <input type="number" name="ocena" min="1" max="10" required>
                    <br>
                    <label for="opinia">Komentarz:</label>
                    <textarea name="opinia" rows="4" cols="50" required></textarea>
                    <br>
                    <input type="submit" value="Dodaj Opinie">
                </form>

                <a href="logout.php" type="button" class="btn btn-primary btn-lg">WYLOGUJ</a>
            </section>

        </main>
    </body>
</html>

