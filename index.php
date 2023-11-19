<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="LoginForm.css"/>
</head>
<body>
    <form action="kayit.php" method="post">
        <div class="form-structor">
            <div class="signup">
                <h2 class="form-title" id="signup">Kayit Ol</h2>
                <div class="form-holder">
                    <input type="email" class="input" name="email" placeholder="Email" />
                    <input type="password" class="input" name="password" placeholder="Sifre" />
                </div>
                <button type="submit" class="submit-btn" value="register" name="add">Kayit ol</button>
            </div>
    </form>     
    <form action="giris.php" method="post">
        <div class="login slide-up">
            <div class="center">
                <h2 class="form-title" id="login">Giris Yap</h2>
                <div class="form-holder">
                    <input type="email" class="input" name="email" placeholder="Email" />
                    <input type="password" class="input" name="password" placeholder="Sifre" />
                </div>
                    <button class="submit-btn" value="login" name="take" type="submit">Giris Yap</button>
                </div>
            </div>
        </div>
    </form>  
    

    <script type="text/javascript" src="js.js"></script>
</body>
</html>