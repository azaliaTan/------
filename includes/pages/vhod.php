<?php

if(isset($_SESSION['uid'])){
  echo '<script>document.location.href="?page=profil"</script>';
} 

$SIGNIN_USER = array();
$error_email='';
$error_pas='';
$error_sogla = '';
$error='';
$email='';

if(isset($_POST['vhod'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE email='$email'";
  $result = $link->query($sql);
  $temp_user = $result->fetch();

  if(empty($email)){
    $error_email="<p>Введите почту</p>";
} elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $error_email="<p>Неверный формат почты</p>";
} elseif($temp_user == false){
    $error="<p>Вас нет в базе</p>";
} elseif(empty($password)){
    $error_pas="<p>Введите пароль</p>";
} elseif(!password_verify($password,$temp_user['password'])){
    $error_pas="<p>Неверный пароль</p>";
}elseif(!isset($_POST['sogla'])){
  $error_sogla = "Вы должны дать согласие на обработку персональных данных!";
}
if(empty($error) && empty($error_email) && empty($error_sogla) && empty($error_pas)){
  $_SESSION['uid'] = $temp_user['id'];
  
  // Установка значения роли пользователя (по вашей логике)
  $SIGNIN_USER['role'] = $temp_user['role']; // Предположим, что роль пользователя хранится в базе данных как 'role'

  if($SIGNIN_USER['role'] == 1){
      echo '<script>document.location.href="?page=profil"</script>';
  } elseif ($SIGNIN_USER['role'] == 0) {
    echo '<script>document.location.href="?page=ban"</script>';
  }elseif ($SIGNIN_USER['role'] == 2) {
    echo '<script>document.location.href="?page=admin_prof"</script>';
  }
}
}
?>
<div class="container">
         <p id="pop">войти в аккаунт</p>

    <form method="POST" name ="vhod" id="add">

      
       <input type="text" placeholder="Введите почту" id="m"  name="email" value="<?=$email?>">
       <h4><?php if(isset($error_email)){echo $error_email;}?></h4>

       <input type="password" placeholder="Введите пароль" id="m" name="password">
       <h4><?php if(isset($error_pas)){echo $error_pas;}?></h4>

       

       <div class="sogl">
        <input type="checkbox" name="sogla" id="obrabotka">
        <p>Даю свое согласие на  <a href="assets/doc/ПерсональныеДанные.docx" target="_blank" rel="noopener noreferrer"><u> обработку персональных данных</p></u></a>
        </div>
        <h4><?php if(isset($error_sogla)){echo $error_sogla;}?></h4>

       <input type="submit" value="войти" id="subbb_reg" name="vhod">
      <a href="?page=reg"> <p id="reg_v">Создать аккаунт</p></a>

    </form>
      
   


</div>