<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login / Register</title>
    <meta class="description" content="c" >
    <!-- <link rel="stylesheet" href="css/Semantic-UI-CSS-master/semantic.css"> -->
    <script src="css/Semantic-UI-CSS-master/semantic.js"></script>
    <meta name="viewport" content="width=device-width, user-scalable=si, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    
    
    <link rel="stylesheet" href="icon/style.css">
    <link rel="stylesheet" href="css/similo.css">
    
</head>
<body>
    
<div class="container-form">
        <div class="header">
            <div class="logo-title">
                <h2>Proyecto School</h2>
            </div>
            <div class="menu">
                <a href="login.php"><li class="module-login">Login</li></a>
                <a href="register.php"><li class="module-register active">Register</li></a>
            </div>
        </div>
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
            <div class="welcome-form"><h1>Bienvenido a </h1><h2>Proyecto School</h2></div>
            
            <div class="user line-input">
                <label class="lnr lnr-envelope"></label>
                <input type="text" placeholder="Correo" name="correo">
            </div>
            <div class="user line-input">
                <label class="lnr lnr-user"></label>
                <input type="text" placeholder="Nombre Usuario" name="usuario">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="password" placeholder="Contraseña" name="clave">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="password" placeholder="Confirmar contraseña" name="clave2">
            </div>
            
            <?php if(!empty($error)): ?>
            <div class="mensaje">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>
            
            <button type="submit">Registrarse<label class="lnr lnr-chevron-right"></label></button>
               
    </form>
    </div>

    
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</body>
</html>