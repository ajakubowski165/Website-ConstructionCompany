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
    $rand = rand(9999,1000);
    $_SESSION['captcha-rand'] = $rand;
    $message = "";
    
    if (isset($_REQUEST['action']) && $_REQUEST['action'] == "login") {
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $captcha = isset($_POST['captcha']) ? $_POST['captcha'] : '';
        $captcharandom = isset($_REQUEST['captcha-rand']) ? $_REQUEST['captcha-rand'] : null;

        $email = htmlentities($email, ENT_QUOTES, "UTF-8");
        $password = htmlentities($password, ENT_QUOTES, "UTF-8");

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
                if(empty($captcharandom) || $captcha != $captcharandom){
                    $message = "Niepoprawna captcha";
                } else{
                //hasło poprawne
                $_SESSION['zalogowany'] = true;
                $message = "Zalogowano poprawnie";
                $_SESSION['email'] = $email;
                header('Location: opinie-login.php');
                exit();
                }
            } else {
                //hasło niepoprawne
                $message = "Błędny login lub hasło";
            }
        }
    }
    $rand = rand(1000, 9999);
    $_SESSION['captcha-rand'] = $rand;
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
                <br><br><br>
                <input type="text" name="captcha" id="captcha" placeholder="Wpisz Captche" required class="form-control"/>
                <input type="hidden" name="captcha-rand" value="<?php echo $rand; ?>">
                <br><br><br>
                <label for="captcha-code">Kod Captchy</label>
                <br>
                <div class="captcha"><?php echo $rand; ?></div>
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