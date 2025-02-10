<?php
    $host='localhost';
    $user='root';
    $password='';
    $db = 'livraisonBD';

    

    //$conn = mysqli_connect($host, $user, $password, $db);
    

    if(isset($_POST['email']))
    {
        $email=$_POST['email'];
        $mdp=$_POST['password'];
        
        $conx = new PDO("mysql:host=$host;dbname=$db", $user, $password);
        $sql = "select * from client where motdepasseclient like '".$mdp."' and nomclient like '".$email."'";
        $stm = $conx->prepare($sql);
        $stm->execute();
        $lignes = $stm->fetchAll(PDO::FETCH_ASSOC);
        if($stm->rowCount() == 1)
        {
            $_SESSION['connect']=true;
            header("location: index.php");
        }
        else{
            $_SESSION['connect']=false;
            echo '<script>alert("'.$email.' et' .$mdp.' et '.$_SESSION['connect'].'")</script>';
        }
    };


    if(isset($_POST['addtocart']))
    {
        if($_SESSION['connect']==true)
        {
            echo '<script>alert("bien ajoutee")</script>';
        }
        else
        {
            header("location: loginv.php");
        }
    };
?>