<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylelogin.css" />
    <link rel="icon" href="./image2/login.png">
    
    <title>login</title>
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
        <h1> Log in</h1>
        <div class="inset">
        <p>
          <label for="email">IDENTIFIANT</label>
          <input type="text" name="email" id="email">
        </p>
        <p>
          <label for="password">PASSWORD</label>
          <input type="password" name="password" id="password">
        </p>
        <p>
          <input type="checkbox" name="remember" id="remember">
          <label for="remember">Remember me for 14 days</label>
        </p>
        </div>
        <p class="p-container">
          <span><a href="inscription.php" style="padding:5px 20px;
        border:1px solid rgba(0,0,0,0.4);
        text-shadow:0 -1px 0 rgba(0,0,0,0.4);
        box-shadow:
          inset 0 1px 0 rgba(255,255,255,0.3),
          inset 0 10px 10px rgba(255,255,255,0.1);
        border-radius:0.3em;
        background:#0184ff;
        color:white;
        float:right;
        font-weight:bold;
        cursor:pointer;
        font-size:13px;" >s'inscrire</a></span>
          
          
          <input type="submit" name="go" id="go" value="Log in"/>
        </p>
      </form>
      
</body>
</html>