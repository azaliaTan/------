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
    $sql="SELECT * FROM tovar WHERE id='$get_id'";
    $result=$link->query($sql);
    $tovar=$result-> fetch();
}

?>
<div class="container">

       
<p id="pop">Вы хотите удалить этот товар?</p>
<div class="delete">
<p ><?=$tovar['name']?></p>
<div class="knop">
<a href="?page=del&id=<?=$get_id?>&ok"><button id="pol">Да,удалить</button></a>
<a href="?page=admin_tovar"><button id="net">Нет,назад</button></a> 
</div>

<?php
if(isset($_GET['ok'])){
   $sql="DELETE FROM tovar WHERE id='$get_id'";
   $link -> query($sql);
 echo  '<script> document.location.href="?page=admin_tovar"</script>';

  }?> 
</div>




</div>