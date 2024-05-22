<?php 
if(!isset($_SESSION['uid'])){
  echo '<script>document.location.href="?page=vhod"</script>';
} 

if($SIGNIN_USER['role'] == 0){
    echo '<script>document.location.href="?page=ban"</script>';
}elseif ($SIGNIN_USER['role'] == 1){
    echo '<script>document.location.href="?page=profil"</script>';
}

?>
<title>ADMIN</title>
<div class="container">
    <p id="pop">Добавить категорию</p>
    <?php

    $name='';
    $error_name='';
                    
   if(isset($_POST['add_kat'])){
      $name=$_POST['name'];
                         

     $sql="INSERT INTO category (name)  VALUE ('$name')";

if($name === ''){
    $error_name = "Введите название!";
} else if(strlen($name) < 4){
    $error_name = "Название должно содержать не менее 4 символов";
}else if (preg_match('/[0-9@\$]/', $name)) {
    $error_name = "Название не должно содержать цифры и специальные символы";
}else if (preg_match('/^[a-zA-Z]+$/u', $name)) {
    $error_name = "Название должно содержать только русские буквы";
}

if(empty($error_name)){

 $link ->query($sql);
 echo '<script>document.location.href="?page=admin_kategoryy"</script>';}
                            
     }?>

<form method="POST" name ="add_kat" id="add">


<input type="text" placeholder="Название категории" id="m" name="name">
<h4><?php if(isset($error_name)){echo $error_name;}?></h4>
        


<input type="submit" value="Добавить" id="subbb" name="add_kat">

</form>
</div>