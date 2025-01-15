<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ProxiWork</title>
    <link rel="stylesheet" href="css/signIn.css">
</head>
<body>
    <h1>ProxiWork</h1>
    <div>
        <div class="midle">
            <img class="logo-index" src="assets/img/logo.png">
            <form action="login.php" method="post" class="formulaire">
                <h2>Login Form</h2>
                <?php if (isset($_GET['error'])) { ?>
     		        <div class="error"><?php echo  $_GET['error']; ?></div>
     	        <?php } ?>
    
                <div class="info">
                    <input name="uname" type="email" placeholder="   Email Address">
                    <input name="password" type="password" placeholder="   Password"> 
                </div>

                <a class="text" href="">Forgot password?</a>
                <button class="button" type="submit">Login</button>
            </form>
        </div>
    </div>
    </form>
</body>
</html>