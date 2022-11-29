<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
</head>
<body>
    <nav class="nav">
        <div class ="homePage">
            <a href="welcome.blade.php">Home Page CUNT</a> <br> <br>
        </div>

    </nav>
    <div class="loginBox">
        <div class = "loginTitle">
            <label>Admin Panel</label>
        </div>
        <section class="main">
            <form method="post">
                <div class="formClass">
                    <label class ="formLabel">EMAIL</label>
                    <input class="inputBox" name="email" type="text" placeholder="Email">
                </div>
                <div class="formClass">
                    <label class = "formLabel">PASSWORD</label>
                    <input class="inputBox" name ="password" type="password"  placeholder="Password">
                    <p style="color:red;"><?php echo $errorMessage;?></p>
                </div>
                <button name= "submit" type="submit" class="submit">LOGIN</button>
            </section>
        </div>
    </form>
</body>
</html>