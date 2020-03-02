

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>

        <form action="cart.php" name="form" method='post'>
            <input type="number" name="nummer">
            <input type="submit" name="submit">
        </form>

        <?php

            
        

        if(isset($_POST['submit'])) {
            $nummer = $_POST['nummer'];
            if(($nummer < 4) && ($nummer > 0)) {
                setcookie("gekozenNummer", $nummer, time() + (60));
            }
        }
        if(isset($_COOKIE["gekozenNummer"])) {
            echo ($_COOKIE['gekozenNummer']);
        }





        ?>




    </body>
</html>