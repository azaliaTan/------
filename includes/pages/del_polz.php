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

if(isset($_GET['id'])){
    $get_id=$_GET['id'];
    $sql="SELECT * FROM users WHERE id='$get_id'";
    $result=$link->query($sql);
    $user=$result-> fetch();
}

?>
<head><title>ADMIN</title></head>

<div class="container">


<p id="pop">Вы хотите удалить этого пользователя?</p>
<div class="delete">
<p ><?=$user['name']?> <?=$user['fullname']?></p>
<div class="knop">
<a href="?page=del_polz&id=<?=$get_id?>&ok"><button id="pol">Да,удалить</button></a>
<a href="?page=admin"><button id="net">Нет,назад</button></a> 
</div>

<?php
if(isset($_GET['ok'])){
   $sql="DELETE FROM users WHERE id='$get_id'";
   $link -> query($sql);
 echo  '<script> document.location.href="?page=admin"</script>';

  }?> 


</div>




</div>