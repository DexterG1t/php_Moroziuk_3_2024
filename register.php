<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" >

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">


</head>
<body>
    <div class="form-conteiner">
        <form action="" method="post">
            <h3>Regisret now</h3>
            <input type="text" name="name"  placeholder="enter your name" required class="box">
            <input type="email" name="email"  placeholder="enter your email" required class="box">
            <input type="password" name="password"  placeholder="enter your password" required class="box">
            <input type="password" name="cpassword" placeholder="confirm your password" required class="box">
            <select name="user_type" class="box">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
            <input type="submit" name="submit" value="register now" class="btn">
            <p>alredy have an account? <a href="login.php">login now</a></p>



        </form>



    </div>


</body>
</html>