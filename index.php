<?

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    
    

    <?php
        $link = mysqli_connect('std-mysql', 'std_961', 'sungur05', 'std_961');

        if(mysqli_connect_errno()) {
            echo 'Ошибка в подключении ('.mysqli_connect_errno().'): '.mysqli_connect_error().'<br>';
            exit();
        } else {
            echo 'БД подключена!<br>';
        }
    ?>

    <?php
        require 'admin.php';

        // require 'ssilka.php';

    ?>

    
    <a href="user.php">Форма</a>
    <!-- <form method="post" action="/">
        <input type="submit" value="Сгенерировать ссылку">
    </form> -->
    

</body>
</html>