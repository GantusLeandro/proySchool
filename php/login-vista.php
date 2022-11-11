<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta class="description" content="b" >
    <script src="css/Semantic-UI-CSS-master/semantic.js"></script>
  <!-- <link rel="stylesheet" href="css/Semantic-UI-CSS-master/semantic.min.css"> -->
    
    <link rel="stylesheet" href="icon/style.css">
    <link rel="stylesheet" href="css/similo.css">
    
    <title>Login / Register</title>
    <meta name="viewport" content="width=device-width, user-scalable=si, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    
    
    
</head>
<body>
    
<div class="container-form">
        <div class="header">
        <div class="logo-title">
                <h2>Proyecto School</h2>
            </div>
            <div class="menu">
                <a href="login.php"><ul><li class="module-login active">Login</li></ul></a>
                <a href="register.php"><ul><li class="module-register">Register</li></ul></a>
            </div>
        </div>
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
            <div class="welcome-form"><h1>Bienvenido a</h1><h2>Proyecto School</h2></div>
            <div class="user line-input">
                <label class="lnr lnr-user"></label>
                <input type="text" placeholder="Nombre Usuario" name="usuario">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="password" placeholder="Contraseña" name="clave">
            </div>
            
             <?php if(!empty($error)): ?>
            <div class="mensaje">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>
            
            <button class="btn btn-primary" type="submit">Entrar<label class="lnr lnr-chevron-right"></label></button>
        </form>
    </div>
    
    
    
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</body>
</html>