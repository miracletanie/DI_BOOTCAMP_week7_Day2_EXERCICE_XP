<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accept The User Name</title>
</head>

<body>

  <form action="" method="post">
    <label for="formulaire"> Nom </label>
    <input type="text" id="formulaire" name="name">
    <br>
    <label for="formulaire"> Age</label>
    <input type="text" id="formulaire" name="age">
    <br>
    <input type="submit" name="submit" value=" save">
    <br><br>
    <?php
    //creation des variables pour afficher le nom et l'age de l'utilisateur
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
    $age = htmlspecialchars($_POST['age'], ENT_QUOTES);
    echo " Hi " . $name . " You are " . $age . " years old ";
    ?>

  </form>
</body>

</html>