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
    $sql="SELECT * FROM category WHERE id='$get_id'";
    $result=$link->query($sql);
    $kat=$result-> fetch();
}

?>
<div class="container">


<p id="pop">Вы хотите удалить эту категорию?</p>
<div class="delete">
<p ><?=$kat['name']?>  растения</p>
<div class="knop">
  <a href="?page=del_kat&id=<?=$get_id?>&ok"> <button id="pol">Да, удалить</button></a> 
   <a href="?page=admin_kategoryy"><button id="net">Нет, отменить</button></a>
</div>

<?php
if(isset($_GET['ok'])){
   $sql="DELETE FROM category WHERE id='$get_id'";
   $link -> query($sql);
 echo  '<script> document.location.href="?page=admin_kategoryy"</script>';

  }?> 

</div>




</div>
