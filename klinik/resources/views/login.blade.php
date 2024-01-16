<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
   <!-- Boxicons -->
   <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="css/gayasignin.css">
</head>
<body>


<div class="login-container">
  <h2>Sign In</h2>

  <div class="login-form">
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
 
    <h>Belum Memiliki Akun? <a href="/signup" class="login">Sign Up</a></h>
    
  </form>
</div>

</body>
</html>