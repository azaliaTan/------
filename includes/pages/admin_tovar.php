<?php 
if(!isset($_SESSION['uid'])){
  echo '<script>document.location.href="?page=vhod"</script>';
} 

if($SIGNIN_USER['role'] == 0){
    echo '<script>document.location.href="?page=ban"</script>';
}elseif ($SIGNIN_USER['role'] == 1){
    echo '<script>document.location.href="?page=profil"</script>';
}

?> <head> <title>ADMIN</title></head>
 
<div class="container">
   
   <p id="pop">Панель администратора</p>
   <p id="name_admin">Здравствуй,Админ -<?=$SIGNIN_USER['name']?></p>

   <div class="vibor_pan">
       <a href="?page=admin"><p>Пользователи</p></a>
       <a href="?page=admin_tovar"><p>Товары</p></a>
       <a href="?page=admin_kategoryy"><p>Категории</p></a>
   </div>
  
   <table class="panel-table adaptive-table">
       <thead>
           <tr>
               <th>Артикул</th>
               <th>Название</th>
               <th>Категория</th>
               <th>Стоимость</th>
               <th>Действия</th>
           </tr>
       </thead>
      
       <tbody>
       <?php

$sql=" SELECT * FROM tovar";
$result= $link -> query($sql);
foreach($result as $tovar){
    
    $kat_id = $tovar["category"]; 
    $kategory = $link->query("SELECT * FROM category WHERE id=$kat_id")->fetch(PDO::FETCH_ASSOC); ?>
           <tr>
               <td data-label="Артикул"><?=$tovar['artikul']?></td>
               <td data-label="Название"> <a href="?page=tovar&id=<?= $tovar['id'] ?>"><?=$tovar['name']?></td></a>
               <td data-label="Категория" ><?=$kategory['name']?></td>
               <td data-label="Стоимость"><?=$tovar['price']?> Р</td>
               <td data-label="Действия">
                   <div class="icons_pan">
                   <a href="?page=red&id=<?=$tovar['id']?>"><img src="assets/img/panREd.png" alt="red"></a>
                   <a href="?page=del&id=<?=$tovar['id']?>"><img src="assets/img/panDel.png" alt="del"></a>
                   </div>
               </td>
           </tr>
         <?  }?>
               
    
       </tbody>
       </table>
   </div>

       <ul class="pagi">
           <li id="fpag">1</li>
           <li>2</li>
           <li>3</li>
           <li>...</li>
           <li>30</li>
       </ul>
         <div class="pan_but_add">
       <a href="?page=add"><button  id="pan_add_kat">добавить товар</button></a>
   </div>