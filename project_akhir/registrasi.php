<html>
  <head></head>
  <style>
  *{
    margin: 0;
    padding: 0;
  }

  body{
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .card{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 320px;
    flex-direction: column;
    gap: 35px;
    border-radius: 10px;
    background: #778899;
    box-shadow: 16px 16px 32px #c8c8c8, -16px -16px 32px #fefefe;
  }

  .card h2{
    letter-spacing: 3px;
    margin-top: 1.6em;
  }

  .inputBox{
    position: relative;
    width: 86%;
  }

  .inputBox input{
    width: 100%;
    padding: 10px;
    border: none;
    background: transparent;
    border-left: 2px solid;
    border-bottom: 2px solid;
    border-bottom-left-radius: 8px;
  }

  .inputBox span{
    margin-top: 5px;
    position: absolute;
    left: 10;
    top: -6;
    padding: 10px;
    pointer-events: none;
    font-size: 0.8em;
    letter-spacing: 3px;
    border-radius: 8px;
    transition: 0.5s;
  }

  .inputBox input:focus, .inputBox input:valid{
    border: 2px solid black;
    border-radius: 8px;
  }

  .inputBox input:focus~span, .inputBox input:valid~span{
    transform: translateX(140px) translateY(-15px);
    font-size: 0.8em;
    padding: 5px 10px;
    background:#2E8B57;
    color: #fff;
  }

  button.submit{
    height: 45px;
    width: 100px;
    border-radius: 5px;
    border: 2px solid;
    cursor: pointer;
    background: #778899;
    font-size: 0.7em;
    letter-spacing: 3px;
    margin-bottom: 3.5em;
    transition: 0.5s;
  }

  button.submit:hover{
    background: #2E8B57;
    color: white;
  }
  </style>
  <body>
    <form class="card" action="" method="post">
      <h2>REGISTRASI</h2>
      <div class="inputBox">
        <input type="text" name="nama_lengkap" required>
        <span>NAMA LENGKAP</span>
      </div>

      <div class="inputBox">
        <input type="text" name="email" required>
        <span>EMAIL</span>
      </div>

      <div class="inputBox">
        <input type="password" name="password" required>
        <span>PASSWORD</span>
      </div>

      <div class="inputBox">
        <input type="password" name="confirmpassword" required>
        <span>KONFIRMASI PASSWORD</span>
      </div>

      <button type="submit" name="submit" class = "submit">SUBMIT</button>
    </form>
  </body>
</html>
<?php
require 'config.php';

if(isset($_POST["submit"])){
  $nama_lengkap = $_POST["nama_lengkap"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];

  if($password != $confirmpassword){
    echo
    "
    <script> alert('Password Tidak Sesuai!'); </script>
    ";
    exit;
  }

  $query = "INSERT INTO users VALUES('', '$nama_lengkap', '$email', '$password')";
  mysqli_query($conn, $query);
  echo
  "
  <script> alert('Registrasi Berhasil'); 
  location='data_peserta.php'</script>
  ";
}
?>