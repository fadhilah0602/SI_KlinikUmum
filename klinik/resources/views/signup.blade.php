<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Klinik</title>
    <link rel="stylesheet" href="css/newsignup.css">
    
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&display=swap"> -->

    <script src="https://kit.fontawesome.com/93ce107040.js" crossorigin="anonymous"></script>
</head>


<body>
    <div id="header">
        <img src="Images/img6.png">
       
         <div class="login-form">
         <h2>Create an account</h2>
        
            <form method="POST" action="{{ url('signup') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="username">Email:</label>
                <input type="text" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <button type="submit">Sign Up</button>
            </div>
            
            <div class="text">
            <h>Sudah Memiliki Akun? <a href="/login" class="signup">Login</a></h>
            </div>
        </form>
    </div>
    <!----------about----------->
  
</body>
</html>