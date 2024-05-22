<?php 
if(!isset($_SESSION['uid'])){
  echo '<script>document.location.href="?page=vhod"</script>';
} 

if($SIGNIN_USER['role'] == 0){
    echo '<script>document.location.href="?page=ban"</script>';
}

if ($_GET['id'] != $USER_ID && $SIGNIN_USER['role'] == 1) {
    echo '<script>document.location.href="?page=profil"</script>';
}
?>
<title>ADMIN</title>
<div class="container">
         <p id="pop">Редактировать профиль</p>

         <?php 

$error_name = '';
$error_fullname = '';
$error_adress = '';
$error_email = '';


if(!isset($_GET['id'])){
    echo 'ошибка';
}else{
    $get_id=$_GET['id'];
    $sql="SELECT * FROM users WHERE id='$get_id'"; 
    $result=$link -> query($sql);
    $user=$result ->fetch();
    
    if(isset($_POST['red'])){
        $name=$_POST['name'];
        $fullname=$_POST['fullname'];
        $adress=$_POST['adress'];
        $email=$_POST['email'];
       
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
       



        if(empty($error_email) && empty($error_adress)  && empty($error_fullname) && empty($error_name)){



        $sql="UPDATE users SET name='$name',
        fullname='$fullname',
        adress='$adress',
        email = '$email'
        WHERE id='$get_id'";
        $link -> query ($sql);
        if ($SIGNIN_USER['role'] == 1) {
            echo '<script>document.location.href="?page=profil&id='.$get_id.'"</script>';
        } elseif ($SIGNIN_USER['role'] == 2) {
            echo '<script>document.location.href="?page=admin"</script>';
        }
        }
     }?>



    <form method="POST" name ="red" id="add">
           <label>Имя</label>
        <input type="text"  id="m" name="name" value="<?=$user['name']?>">
        <h4><?php if(isset($error_name)){echo $error_name;}?></h4>
        <label>Фамилия</label>
        <input type="text" id="m" name="fullname" value="<?=$user['fullname']?>">
        <h4><?php if(isset($error_fullname)){echo $error_fullname;}?></h4>
        <label>Адрес доставки</label>
       <input type="text"  id="m" name="adress" value="<?=$user['adress']?>">
       <h4><?php if(isset($error_adress)){echo $error_adress;}?></h4>
       <label>Почта </label>
       <input type="text" id="m" name="email" value="<?=$user['email']?>">
       <h4><?php if(isset($error_email)){echo $error_email;}?></h4>

       <input type="file" placeholder="Изменить аватарку" id="m" name="photo">


       

       <input type="submit" value="Сохранить" id="subbb" name="red">
     

    </form> <?}?>
      
   


</div>