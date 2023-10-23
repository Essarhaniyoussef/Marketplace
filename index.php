<?php
@include 'config.php';

session_start();

if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);

    $select = " SELECT * FROM user WHERE EmailUser = '$email' && PasswordUser = '$password' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_array($result);

        if($row['isAdmin'] == '1'){
            $_SESSION['admin_name'] = $row['NomUser'];
            header('location:admin_page.php');
            
        } elseif ($row['isAdmin'] == '0'){
            $_SESSION['user_name'] = $row['NomUser'];
            header('location:user_page.php');
        }
    } else {
        $error[] = 'Email ou mot de passe incorrect!';
    }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - MiniMarket</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

<div class="form-container">
    <form action="" method="post">
        <h2>Bienvenue sur <span class="minimarket-title">MiniMarket</span> !</h2>
        <h2 class="heureux-title">Heureux de vous revoir !</h2>
        <img src="img/landing/design1.png" alt="" class="design-img">
        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?>
        <input type="email" name="email" required placeholder="Email">
        <input type="password" name="password" required placeholder="Mot de passe">
            
        <input type="submit" name="submit" value="Se connecter" class="form-btn">
        <p>Pas encore de compte ? <a href="register_form.php">Inscrivez-vous ici</a> .</p>
    </form>
</div>

    
</body>
</html>