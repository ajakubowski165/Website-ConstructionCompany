<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="" type="image">
        <title>Jakubowski - remont dla kazdego</title>
        <link rel="stylesheet" href="logowanie.css">
        <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>


    <?php

    session_start();

    $message = "";

    if (isset($_REQUEST['action']) && $_REQUEST['action'] == "login") {
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    
        //obiektowo
        $db = new mysqli("localhost", "root", "", "db");

        //prepared statements
        $q = $db->prepare("SELECT * FROM user WHERE email = ? LIMIT 1");
        //podstaw wartości
        $q->bind_param("s", $email);
        //wykonaj
        $q->execute();
        $result = $q->get_result();
    
        $userRow = $result->fetch_assoc();
        if ($userRow == null) {
            //konto nie istnieje
            $message = "Błędny login lub hasło";
        } else {
            //konto istnieje
            if (password_verify($password, $userRow['haslo'])) {
                //hasło poprawne
                $_SESSION['zalogowany'] = true;
                $message = "Zalogowano poprawnie";
                $_SESSION['email'] = $email;
                header('Location: opinie-login.php');
                exit();
            } else {
                //hasło niepoprawne
                $message = "Błędny login lub hasło";
            }
        }
    }
    ?>

    <body>
        <div class="container">
            <h1>Zaloguj się</h1>
            <br>
            <div class="formularz">
                <form action="logowanie.php" method="post">
                    <label for="emailInput">Email:</label>
                    <input type="email" name="email" id="emailInput">
                    <br>
                    <br>
                    <label for="passwordInput">Hasło:</label>
                    <input type="password" name="password" id="passwordInput">
                    <input type="hidden" name="action" value="login">
                    <br><br>
                    <input type="submit" value="Zaloguj">
                </form>
            </div>
            <div class="message"><?php echo $message; ?></div>
            <div class="powrot">
                <a href="opinie.php" type="button" class="przycisk">POWRÓT</a>
            </div>  
        </div>
    </body>

</html>