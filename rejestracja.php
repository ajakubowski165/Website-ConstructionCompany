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
    if (isset($_REQUEST['action']) && $_REQUEST['action'] == "register") {
    //rejestracja nowego użytkownika
        $db = new mysqli("localhost", "root", "", "db");
        $email = $_REQUEST['email'];
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $captcha = isset($_POST['captcha']) ? $_POST['captcha'] : '';
        $captcharandom = isset($_REQUEST['captcha-rand']) ? $_REQUEST['captcha-rand'] : null;

        $password = $_REQUEST['password'];

        $email = htmlentities($email, ENT_QUOTES, "UTF-8");
        $password = htmlentities($password, ENT_QUOTES, "UTF-8");

        $passwordRepeat = $_REQUEST['passwordRepeat'];

        if ($password == $passwordRepeat) {
            if (empty($captcharandom) || $captcha != $captcharandom) {
                $message = "Niepoprawna captcha";
            } else {
                //hasła są identyczne - kontynuuj
                $q = $db->prepare("INSERT INTO user VALUES (NULL, ?, ?)");
                $haslo = password_hash($password, PASSWORD_ARGON2I);
                $q->bind_param("ss", $email, $haslo);
                $result = $q->execute();
                if ($result) {
                    $message = "Konto utworzono poprawnie";
                } else {
                    $message =  "Coś poszło nie tak!";
                }
            }
        } else {
            $message =  "Hasła nie są zgodne - spróbuj ponownie!";
        }
        $rand = rand(1000, 9999);
        $_SESSION['captcha-rand'] = $rand;
    }
    ?>


    <body>
        <div class="container">
        <h1>Zarejestruj się</h1>
            <div class="formularz">
                <form action="rejestracja.php" method="post">
                    <label for="emailInput">Email:</label>
                    <input type="email" name="email" id="emailInput">
                    <br>
                    <label for="passwordInput">Hasło:     </label>
                    <input type="password" name="password" id="passwordInput">
                    <br>
                    <label for="passwordRepeatInput">Hasło ponownie:</label>
                    <input type="password" name="passwordRepeat" id="passwordRepeatInput">
                    <br>
                    <br><br><br>
                    <input type="text" name="captcha" id="captcha" placeholder="Wpisz Captche" required class="form-control"/>
                    <input type="hidden" name="captcha-rand" value="<?php echo $rand; ?>">
                    <br><br><br>
                    <label for="captcha-code">Kod Captchy</label>
                    <br>
                    <div class="captcha"><?php echo $rand; ?></div>
                    <br><br>
                    <input type="hidden" name="action" value="register">
                    <input type="submit" value="Zarejestruj">
                </form>
            </div>
            <div class="message"><?php echo $message; ?></div>
            <div class="powrot">
                <a href="opinie.php" type="button" class="przycisk">POWRÓT</a>
            </div>  
        </div>
    </body>

</html>