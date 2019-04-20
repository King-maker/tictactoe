
<?php
session_start();


if(!empty($_POST["remember"])) {
    setcookie ("name",$_POST["name"],time()+ 3600);
    echo 'Welcome back ' . $_COOKIE['name'];
} else {
    setcookie("name","");
    echo "Cookies Not Set";
}
if(!empty($_POST["name"])){
    echo $_POST["name"];
    echo $_COOKIE['name'];
    header('Location: board.php');
}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tic Tac Toe!</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css'>
</head>
<body>
<section>
<div class="main">
    <h1>Tic Tac Toe</h1>
<form action="index.php" method="post">
    <p>Is this you?</p>
   <input type="text" name="name" value="<?php if(isset($_COOKIE["name"])) { echo $_COOKIE["name"]; }?>"class="input-field" placeholder="please enter your name">
    <button type="submit" name="remember" value="remember">Submit</a></button>
    
</form>

    </div>

</section>

</body>
</html>
