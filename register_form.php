<?php
@include 'config.php';

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $telephone = mysqli_real_escape_string($conn, $_POST['telephone']);
    $adresse = mysqli_real_escape_string($conn, $_POST['adresse']);
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    $select = " SELECT * FROM user WHERE EmailUser = '$email' ";

    $result = mysqli_query($conn, $select);

    $present = mysqli_num_rows($result);

    if($present > 0){
        $error[] = 'Email déjà utilisé!';
    } else {
        if($password != $cpassword){
            $error[] = 'Le mot de passe ne correspond pas!';
        } else {
            $insert = " INSERT INTO user(NomUser, EmailUser, TelephoneUser, AdresseUser, PasswordUser) VALUES('$name','$email','$telephone','$adresse','$password') ";
            mysqli_query($conn, $insert);
            header('location:index.php');
        }
    }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - MiniMarket</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

<div class="form-container">
    <form action="" method="post">
        <h2>Rejoignez-nous sur <span class="minimarket-title">MiniMarket</span> dès aujourd'hui !</h2>
        <h2 class="sec-title">Créer un compte pour démarrer .</h2>
        <img src="img/landing/design2.png" alt="" class="design-img">
        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?>
        <input type="text" name="name" required placeholder="Nom">
        <input type="email" name="email" required placeholder="Email">
        <input type="text" name="telephone" required placeholder="Numéro de téléphone">
        <input type="text" name="adresse" required placeholder="Adresse">
        <input type="password" name="cpassword" required placeholder="Mot de passe">
        <input type="password" name="password" required placeholder="Confirmer votre mot de passe">
            
        <input type="submit" name="submit" value="S'inscrire" class="form-btn">
        <p>Déjà inscrit ? <a href="index.php">Connectez-vous</a> maintenant .</p>
    </form>
</div>

    
</body>
</html>