<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylelogin.css" />
    <link rel="icon" href="./image2/insc.png">
    <title>Inscription</title>
</head>
<body>
    <header>
        <header class="header">
            <a href="index.php" class="logo">
              <img
                src="./image2/logo111.png"
                alt=""
              />
            </a>
    </header>
    <form method="post">
        <h1> Inscription </h1>
        <div class="inset">
        <p>
          <label for="id">id</label>
          <input type="text" name="id" id="nom">
        </p>

        <p>
          <label for="nom">nom</label>
          <input type="text" name="nom" id="nom">
        </p>
        <p>
          <label for="prenom">prenom</label>
          <input type="text" name="prenom" id="prenom">
        </p>
        <p>
          <label for="email">email</label>
          <input type="text" name="email" id="email">
        </p>
        <p>
          <label for="password">PASSWORD</label>
          <input type="password" name="password" id="password">
        </p>
        <p>
          <label for="localisation">localisation</label>
          <input type="text" name="localisation" id="telephone">
        </p>
        <p>
          <label for="telephone">telephone</label>
          <input type="text" name="telephone" id="telephone">
        </p>
        </div>
        <input type="submit" name="go" id="go" value="s'inscrire">
      </form>

      <?php
        $host='localhost';
        $user='Nick';
        $password='1234';
        $db = 'a'; 
        if(isset($_POST['email']))
        {
            $id=$_POST['id'];
            $email=$_POST['email'];
            $mdp=$_POST['password'];
            $nom=$_POST['nom'];
            $pren=$_POST['prenom'];
            $loca=$_POST['localisation'];
            $tele=$_POST['telephone'];

            
            $conx = new PDO("mysql:host=$host;dbname=$db", $user, $password);
            $sql = "insert into client values(".$id.", '".$mdp."','".$nom."','".$pren."','".$tele."',null);";
            $stm = $conx->prepare($sql);
            $stm->execute();
            $lignes = $stm->fetchAll(PDO::FETCH_ASSOC);
            echo '<script>alert("'.$sql.'")</script>';
            if($stm->rowCount() == 1)
            {
                $_SESSION['connect']=true;
                header("location: index.php");
            }
        };
      ?>
</body>
</html>