<!DOCTYPE html>
<html lang="PL=pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="stylesheet" href="cs.css">
</head>
<body>
    <div id="login">
    <h2>Zaloguj Sie </h2>
        <form action="#" method='Post'>
            <input type="text" name="login" placeholder="login"><br>
            <input type="password" name="haslo" placeholder="haslo"><br><br>
            <input type="submit" value="zaloguj">
        </form>
        <a href="rejestracja.php">utwórz konto</a>
<?php
if(isset($_POST['login']) && isset($_POST['haslo'])){
$login=$_POST['login'];
$h1=$_POST['haslo'];
$sql = "SELECT `login`,`haslo` FROM `uzytkownicy`;";
$connect = mysqli_connect("127.0.0.1", "root", "", "krzychu");
$zap = mysqli_query($connect, $sql);
while ($conect = mysqli_fetch_array($zap)){
    if($login==$conect['login']  && $h1==$conect['haslo']){
        header("Location: http://127.0.0.1/ak/strona/main.php#/");
        exit;
    }
}
}

?>
</div>
</body>
</html>