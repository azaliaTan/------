<?php
if(!isset($_SESSION['uid'])){
  echo '<script>document.location.href="?page=katalog"</script>';
} 


if($SIGNIN_USER['role'] != 0){
    echo '<script>document.location.href="?page=profil"</script>';
}


?> <head><title>BAN</title></head>

<p id="pop">Вы заблокированы Администратором</p>
<div class="container">

<p id="uuu">Напишите нам на почту, чтобы Мы решили Вашу ситуацию: <a href="mailto:">botanica@mail.ru</a></p>

</div>
