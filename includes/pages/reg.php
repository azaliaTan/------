<?php

if(isset($_SESSION['uid'])){
    echo '<script>document.location.href="?page=profil"</script>';
} 

$email='';
$name='';
$fullname='';
$password='';
$adress='';
if(isset($_POST['reg'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_repeat = $_POST['password_repeat'];
    $fullname = $_POST['fullname'];
    $adress = $_POST['adress'];
    


    $error_name = '';
    $error_email = '';
    $error_pas = '';
    $error_rep = '';
    $error_adress = '';
    $error_fullname = '';
    $error_sogla = '';



    
    if($name === ''){
        $error_name = "Введите имя!";
    } else if(strlen($name) < 2){
        $error_name = "Имя должно содержать не менее 2 символов";
    }else if (preg_match('/[0-9@\$]/', $name)) {
        $error_name = "Имя не должно содержать цифры и специальные символы";
    }else if (preg_match('/[a-zA-Z]+$/u', $name)) {
        $error_name = "Имя должно содержать только русские буквы";
    }
    if ($adress === '') {
        $error_adress = "Введите адрес доставки!";
    } else if (strlen($adress) < 2) {
        $error_adress = "Адрес должен содержать не менее 10 символов";
    } 

    if ($fullname === '') {
        $error_fullname = "Введите фамилию!";
    } else if (strlen($fullname) < 2) {
        $error_fullname = "Фамилия должна содержать не менее 2 символов";
    } else if (preg_match('/[0-9@\$]/', $fullname)) {
        $error_fullname = "Фамилия не должна содержать цифры и специальные символы";
    }else if (preg_match('/[a-zA-Z]+$/u', $fullname)) {
        $error_fullname = "Фамилия должна содержать только русские буквы";
    }

    if($email === ''){
        $error_email = "Введите адрес почты!";
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error_email = "Введите корректный адрес почты!";
    }
   
    if(!isset($_POST['sogla'])){
        $error_sogla = "Вы должны дать согласие на обработку персональных данных!";
    }
   

    if ($password === '') {
        $error_pas = "Введите пароль!";
    } else if (strlen($password) < 6) {
        $error_pas = "Пароль должен быть не менее 6 символов!";
    }
    if($password_repeat === ''){
        $error_rep = "Введите пароль повторно!";
    } else if($password !== $password_repeat){
        $error_rep = "Пароли не совпадают!";
    }

    if(empty($error_email) && empty($error_pas) && empty($error_adress) && empty($error_sogla) && empty($error_fullname) && empty($error_name) && empty($error_rep) && ($password === $password_repeat)){
        // Успешная авторизация
      

        $sql = "SELECT COUNT(*) FROM users WHERE email = '$email'";
        $user_count = $link->query($sql)->fetchColumn();
        if($user_count == 1){
            echo '<p id="neyspeh">Вы уже зарегистрированы в базе данных</p>';
        } else {
            $hash_password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (`name`,`fullname`,`adress`, `email`, `password`,`role`) VALUES ('$name', '$fullname','$adress','$email', '$hash_password',1)";
            $link->query($sql);
            echo '<p id="neyspeh">Регистрация прошла успешно,войдите в аккаунт</p>';
        }
    } else {
        echo '<p id="neyspeh">Регистрация не удалась</p>';
    }
}

?>
<head><title>
REGISTRATION</title></head>

<div class="container">
         <p id="pop">создать аккаунт</p>

    <form method="POST" name ="reg" id="add">
    <label>Имя</label>
        <input type="text"  id="m" name="name" value="<?=$name?>">
        <h4><?php if(isset($error_name)){echo $error_name;}?></h4>
        <label>Фамилия</label>
        <input type="text"  id="m" name="fullname" value="<?=$fullname?>">
        <h4><?php if(isset($error_fullname)){echo $error_fullname;}?></h4>
        <label>Адрес доставки</label>
       <input type="text" id="m" name="adress" value="<?=$adress?>">
       <h4><?php if(isset($error_adress)){echo $error_adress;}?></h4>
       <label>Почта</label>
       <input type="text"  id="m" name="email" value="<?=$email?>">
       <h4><?php if(isset($error_email)){echo $error_email;}?></h4>
       <label>пароль</label>
       <input type="password"  id="m"  name="password">
       <h4><?php if(isset($error_pas)){echo $error_pas;}?></h4>
       <label>повторите пароль</label>
       <input type="password" id="m" name="password_repeat">
       <h4><?php if(isset($error_rep)){echo $error_rep;}?></h4>
       <input type="file" placeholder="аватарка" id="m" name="avatar"  >

       <div class="sogl">
        <input type="checkbox" name="sogla" id="obrabotka">
        <p id="uyt">Даю свое согласие на  <a href="assets/doc/ПерсональныеДанные.docx" target="_blank" rel="noopener noreferrer"><u> обработку персональных данных</p></u></a>
        </div>
        <h4><?php if(isset($error_sogla)){echo $error_sogla;}?></h4>
   

       <input type="submit" value="Создать аккаунт" id="subbb_reg" name="reg">
      <a href="?page=vhod"> <p id="reg_v">Войти в аккаунт</p></a>

    </form>
      
   


</div>