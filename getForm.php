<html>
    <head>
    </head>
    <body>
        <?php
            if (isset($_GET["username"]) AND isset($_GET["email"])) {
                echo "Welcome " . $_GET["username"] . "!<br>";
                echo "Your email address is: " . $_GET["email"];
            } else {
                echo "Maaf, Anda harus mengakses halaman ini dari form_1.html";
            }
        ?>
    </body>
</html>