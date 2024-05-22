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
<?php

$error_name='';

if(!isset($_GET['id'])){
    echo 'ошибка';
}else{
    $get_id=$_GET['id'];
    $sql="SELECT * FROM category WHERE id='$get_id'"; 
    $result=$link -> query($sql);
    $kat=$result ->fetch();
    
    if(isset($_POST['kat_red'])){
        $name=$_POST['name'];
        
        if($name === ''){
            $error_name = "Введите наименование категории!";
        } else if (preg_match('/[0-9@\$]/', $name)) {
            $error_name = "Наименование не должно содержать цифры и специальные символы";
        }else if (preg_match('/[a-zA-Z]+$/u', $name)) {
            $error_name = "Наименование должно содержать только русские буквы";
        }

        if(empty($error_name)){
       
        $sql="UPDATE category SET name='$name'
        WHERE id='$get_id'";
        $link -> query ($sql); 
        echo '<script>document.location.href="?page=admin_kategoryy"</script>';} }?>

<title>ADMIN</title>
<div class="container">
    <p id="pop">Изменить категорию</p>

    <form method="POST" name ="kat_red" id="add">
        <p>Категория товара</p>
        <input type="text" placeholder="Название категории" id="m" name="name" value="<?=$kat['name']?>">
        <h4><?php if(isset($error_name)){echo $error_name;}?></h4>
        

       <input type="submit" value="Сохранить" id="subbb" name="kat_red">

    </form>
</div> <?}?>