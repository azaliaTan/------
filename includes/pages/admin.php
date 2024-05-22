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
   <p id="name_admin">Здравствуй, Админ-<?=$SIGNIN_USER['name']?></p>

   <div class="vibor_pan">
      <b><a href="?page=admin"><p>Пользователи</p></a></b>
       <a href="?page=admin_tovar"><p>Товары</p></a>
       <a href="?page=admin_kategoryy"><p>Категории</p></a>
   </div>
  
   <table class="panel-table adaptive-table">
       <thead>
           <tr>
               <th>ID</th>
               <th>Фамилия</th>
               <th>Имя</th>
               <th>Почта</th>
               <th>Действия</th>
           </tr>
       </thead>
      
       <tbody>

       <?php

            $sql=" SELECT * FROM users WHERE role <> 2";
            $result= $link -> query($sql);
            foreach($result as $user){?>
        
        <tr>
    <td data-label="ID"><?=$user['id']?></td>
    <td data-label="Фамилия"><?=$user['name']?></td>
    <td data-label="Имя"><?=$user['fullname']?></td>
    <td data-label="Почта"><a href="?page=profilADM&id=<?= $user['id'] ?>"><?=$user['email']?></a></td>
    <td data-label="Действия">
                   <div class="icons_pan"><?php
     
                    if($user['role']==1){
                        echo 
                      '<a href="?page=red_prof&id='.$user['id'].'"><img src="assets/img/panREd.png" alt="red"></a>
                      <a href="?page=del_polz&id='.$user['id'].'"><img src="assets/img/panDel.png" alt="del"></a>
                       <a href="?page=admin&block='.$user['id'].'">  <img src="assets/img/panZAb.png" alt="block"></a>';
                    }elseif ($user['role']==0){
                        echo  '<a href="?page=red_prof&id='.$user['id'].'"><img src="assets/img/panREd.png" alt="red"></a>
                        <a href="?page=del_polz&id='.$user['id'].'"><img src="assets/img/panDel.png" alt="del"></a>
                        <a href="?page=admin&unblock='.$user['id'].'">  <img src="assets/img/ytyt.png" alt="block"></a>';
                    }?>
                   </div>
               </td>
           </tr>



           <?  }?>

   
  



       
<?php
if (isset($_GET['block'])) {
    if ($SIGNIN_USER['role'] == 2) {
        $block_id = $_GET['block'];
        $sql = "UPDATE users SET role = 0 WHERE id = '$block_id'";
        $link->query($sql);
        echo '<script>document.location.href="?page=admin"</script>';
    } else {
        echo 'нельзя ';
    }
} elseif (isset($_GET['unblock'])) {
    if ($SIGNIN_USER['role'] == 2) {
        $block_id = $_GET['unblock'];
        $sql = "UPDATE users SET role = 1 WHERE id = '$block_id'";
        $link->query($sql);
        echo '<script>document.location.href="?page=admin"</script>';
    } else {
        echo 'нельзя ';
    }
}
?>

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

            
        
  
