<link href='https://fonts.googleapis.com/css?family=Raleway:400,500,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/gayalogin.css">
<div id="mainButton">
    <div class="btn-text" onclick="openForm()">SIK Dr.Zul</div>
    <div class="modal">
        <div class="input-group">
            <input type="text" id="name" onblur="checkInput(this)" />
            <label for="name">Username</label>
        </div>
        <div class="input-group">
            <input type="password" id="password" onblur="checkInput(this)" />
            <label for="password">Password</label>
        </div>
        <div class="form-button" onclick="closeForm()">Login</div>
    </div>
</div>
