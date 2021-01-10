<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="index.php" method="POST">
       Username: <input type="text" name="username" /> <br>
       <input type="submit" name='submit' />
    </form>

    <?php
        if(isset($_POST['submit'])) {
            $_SESSION['name'] = $_POST['username'];
            header("Location: http://localhost/PhpBasic/01Session/success.php");
        }
    ?>


    <p>Hello: <?php echo $_SESSION['name']; ?></p>

</body>
</html>