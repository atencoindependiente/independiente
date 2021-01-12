<!DOCTYPE html>
<html lang="es">
<head>
    <?php include("./ra.web/includes/Head.php"); ?>
    <link rel="stylesheet" href="./ra.web/css/login.css" id="bootstrap-css">
</head>
<body >
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <br><br>
          <!-- Tabs Titles -->
          <!-- Icon -->
          <div class="fadeIn first">
            <img src="img/user.jpg" id="icon" alt="User Icon" style="border-radius: 10px;"/>
          </div>
          <!-- Login Form -->
          <form>
            <input type="text" id="input_login" class="fadeIn second" placeholder="Usuario">
            <input type="password" id="input_password" class="fadeIn third" placeholder="password">
            <!--<input type="submit" class="fadeIn fourth" value="Entrar" id="btn_login">-->
            <button type="button" class="btn btn-primary btn-lg" id="btn_login">Entrar</button>
          </form>
          <br>
          <a href="./index.php">Entrar como invitado</a>
          <br><br>
        </div>
    </div>
    <?php //include("includes/HeaderEnd.php");?>
    <?php include("./ra.web/includes/HeadEnd.php");?>		
</body>
    <script src="./ra.web/js/login.js"></script>
</html>

<script src="./ra.web/js/login.js"></script>

