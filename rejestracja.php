<!DOCTYPE html>
<html lang="PL=pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
    <link rel="stylesheet" href="cs.css">
</head>
<body>
    <div id="login">
        <h2>Utwórz konto </h2>
        <form action="#" method='Post'>
            <input type="text" name="login" placeholder="login"><br>
            <input type="password" name="haslo" placeholder="haslo"><br>
            <input type="password" name="haslo2" placeholder="Powtórz haslo"><br><br>
            <input type="submit" value="Utwórz konto">
        </form>
        <a href="index.php">Masz już konto zaloguj sie</a><br>
    <?php 
     if(isset($_POST['login']) && isset($_POST['haslo']) && isset($_POST['haslo2'])){
        $sql = "SELECT `login` FROM `uzytkownicy`;";
        $login=$_POST['login'];
        $h1=$_POST['haslo'];
        $h2=$_POST['haslo2'];
        $connect = mysqli_connect("127.0.0.1", "root", "", "krzychu");
        $zap = mysqli_query($connect, $sql);
        $k=0;
        while ($conect = mysqli_fetch_array($zap)){
            if($login==$conect['login']){
                $k=1;
            }
        }
        if($k==1){
            echo "Podany login jest już zajęty";
        }
        else if($h1==$h2){
            $sql = "INSERT INTO `uzytkownicy`(`id`, `login`, `haslo`) VALUES ('','$login','$h1');";
            $zap = mysqli_query($connect, $sql);
        }
        else
        echo"Hasła nie są takie same";
        mysqli_close($connect);
    }

    
    ?>
    </div>
</body>
</html>