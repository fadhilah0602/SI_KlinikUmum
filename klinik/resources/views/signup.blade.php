<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Form</title>
   <!-- Boxicons -->
   <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="css/gayasignup.css">
</head>
<body>

 
<div class="signup-container">
  <h2>Sign Up</h2>

  <div class="signup-columns">
    <div class="signup-column">
      <form class="signup-form">
        <!-- Formulir kolom pertama -->
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required>
        </div>

        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
          <label for="date">Alamat:</label>
          <input type="text" id="address" name="address" required>
        </div>

        <div class="form-group">
          <label for="date">Tanggal Lahir:</label>
          <input type="date" id="date" name="date" required>
        </div>

      </form>
    </div>

    <div class="signup-column">
      <form class="signup-form">
        <!-- Formulir kolom kedua -->
        <div class="form-group">
          <label for="name">Nama Lengkap:</label>
          <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
        </div>

        

        <div class="form-group">
          <label for="date">No Hp:</label>
          <input type="number" id="nohp" name="nohp" required>
        </div>

        <div class="form-group">
          <label for="date">Jenis Kelamin :</label>
          <!-- <input type="gender" id="gender" name="gender" required> -->
          <td>
            <!-- <input> -->
                <select class="custom-select">
                    <option value="perempuan">Perempuan</option>
                    <option value="laki-laki">Laki-laki</option>
                </select>
            </td>
        </div>
        
        </div>
      </form>
    </div>
    <div class="form-group">
          <button type="submit">Sign Up</button>
           
  </div>
  <h>Sudah Memiliki Akun? <a href="/login" class="login">Sign In</a></h>

</div>

</body>
</html>