<?php 
if(!isset($_SESSION['uid'])){
  echo '<script>document.location.href="?page=vhod"</script>';
} 

if($SIGNIN_USER['role'] == 0){
    echo '<script>document.location.href="?page=ban"</script>';
}

if (!isset($_GET['id']) || $_GET['id'] != $USER_ID) {
   echo  '<script>document.location.href="?page=profil"</script>';
}
?>


<div class="container">
         <p id="pop">Редактировать профиль</p>

         <?php 

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
       


        $sql="UPDATE users SET name='$name',
        fullname='$fullname',
        adress='$adress',
        email = '$email'
        WHERE id='$get_id'";
        $link -> query ($sql);
        echo '<script>document.location.href="?page=profill&id='.$get_id.'"</script>';
    
     }?>



    <form method="POST" name ="red" id="add">

        <input type="text" placeholder="Изменить имя" id="m" name="name" value="<?=$user['name']?>">
        
        <input type="text" placeholder="Изменить фамилию" id="m" name="fullname" value="<?=$user['fullname']?>">

       <input type="text" placeholder="Изменить адрес доставки" id="m" name="adress" value="<?=$user['adress']?>">

       <input type="text" placeholder="Изменить почту" id="m" name="email" value="<?=$user['email']?>">
        
       <input type="file" placeholder="Изменить аватарку" id="m" name="photo">


       

       <input type="submit" value="Сохранить" id="subbb" name="red">
     

    </form> <?}?>
      
   


</div>