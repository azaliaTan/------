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
   
   <p id="pop">Панель администратора</p>
   <p id="name_admin">Здравствуй,Админ-<?=$SIGNIN_USER['name']?></p>

   <div class="vibor_pan">
       <a href="?page=admin"><p>Пользователи</p></a>
       <a href="?page=admin_tovar"><p>Товары</p></a>
       <a href="?page=admin_kategoryy"><p>Категории</p></a>
   </div>
       

   <div class="adm_kat">

   <?php

$sql=" SELECT * FROM category ";
$result= $link -> query($sql);
foreach($result as $kat){?>

       <div class="kat_p">
           <p> <?=$kat['name']?> растения</p>

           <div class="icons_pan">
               <a href="?page=red_kat&id=<?=$kat['id']?>"><img src="assets/img/panREd.png" alt="red"></a>
               <a href="?page=del_kat&id=<?=$kat['id']?>">  <img src="assets/img/panDel.png" alt="del"></a>
            
           </div>
       </div>

    <?}?>

    </div>
     
     

       <ul class="pagi">
           <li id="fpag">1</li>
           <li>2</li>
           <li>3</li>
           <li>...</li>
           <li>30</li>
       </ul>
       </div>
       <div class="pan_but_add">
           <a href="?page=add_kat"><button id="pan_add_kat">добавить категорию</button></a>
       </div>
        
  