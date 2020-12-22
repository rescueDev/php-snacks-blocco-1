<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
            font-family: sans-serif;
            background-color: coral;
        }


        .container {
            border: 1px solid white;
            text-align: center;
            padding: 20px;
        }

        h3 {
            margin: 10px auto;
        }

        .esito {
            display: block;
            border: 1px solid whitesmoke;
            width: fit-content;
            padding: 10px;
        }
    </style>
</head>

<body>

    <!-- PHP Snack 2:
    Passare come parametri GET name, mail e age e
    verificare (cercando i metodi che non
    conosciamo nella documentazione) che:
    1. name sia più lungo di 3 caratteri,
    2. che mail contenga un punto e una chiocciola
    3. e che age sia un numero.
    Se tutto è ok stampare “Accesso riuscito”, altrimenti
    “Accesso negato” -->

    <?php
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    $lenName = strlen($name);
    //var_dump('Length name :' . $lenName);

    $atMail = strpos($mail, '@');
    $dotMail = strpos($mail, '.');
    $checkAge = is_numeric($age);
    //var_dump($checkAge);
    ?>

    <div class="container">

        <h3>
            <?php echo $name . '<br>';
            echo $mail . '<br>';
            echo $age . '<br>';
            ?>
        </h3>

        <?php
        if ($lenName > 3 && $atMail !== false && $dotMail !== false && $checkAge == true) { ?>


            <div class="esito">

                <h3>Accesso riuscito</h3>

            </div>

        <?php  } else { ?>
            <div class="esito">

                <h3>Accesso negato</h3>

            </div>
        <?php  }

        ?>


    </div>



</body>

</html>