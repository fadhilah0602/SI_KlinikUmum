<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Klinik</title>
    <link rel="stylesheet" href="css/newlogin.css">
    
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&display=swap"> -->

    <script src="https://kit.fontawesome.com/93ce107040.js" crossorigin="anonymous"></script>
</head>


<body>
    <div id="header">
        <img src="Images/img9.png">
       
         <div class="login-form">
         <h2>Welcome!</h2>
         <form method="POST" action="{{ url('login') }}">
            @csrf
            <div class="form-group">
                <label for="username">Email:</label>
                <input type="text" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <button type="submit">Login</button>
            </div>

            <div class="text">
                 <h>Belum Memiliki Akun? <a href="/signup" >Sign Up</a></h>
            </div>
        </form>
    </div>
    <!----------about----------->
  
</body>
</html>