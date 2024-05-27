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
    $sql="SELECT * FROM question WHERE id='$get_id'";
    $result=$link->query($sql);
    $novost=$result-> fetch();
}

?> <head> <title>PROFIL</title></head>
  
<div class="container">
    <p id="pop">Твой профиль</p>

    <div class="prof_inf">

      <img src="assets/img/ava.png" alt="avatarka">
       
      <div class="name_pr">
            <p id="name_profile"><?=$SIGNIN_USER['name']?> <?=$SIGNIN_USER['fullname']?> </p>
            <p id="pocta_prof"><?=$SIGNIN_USER['email']?></p>
        </div>

      <a href="?do=exit"><button>Выйти из аккаунта</button></a>
      </div>
      

    <div class="prof_red">
        <a href="?page=red_prof&id=<?=$SIGNIN_USER['id']?>"><button>редактировать</button></a>
      
     <a href="?page=admin"> <button id="panel_admin">открыть панель администратора</button></a>
     
    
    </div>

    <div class="que">
        <p id="pop">Активные вопросы</p>

       
        
        <div class="que_ta">

        <?php

            $sql=" SELECT * FROM question";
            $result= $link -> query($sql);
            foreach($result as $novost){?>

           
           
            <div class="queone">
                <p id="za">Заявка №<?=$novost['id']?></p>

                <p id="quuu"><?=$novost['text']?></p>

                <p id="tq">Номер заявки: <a href="tel:+"><?=$novost['number']?></a></p>
                <p id="ta">Автор вопроса: <?=$novost['name']?></p>
    
                <div class="icons_pan">
                    <a href="?page=admin_prof&id=<?=$novost['id']?>&ok"><img src="assets/img/gal.png" alt="del" title="вопрос решен"></a>
                    <a href="?page=admin_prof&id=<?=$novost['id']?>&ok"> <img src="assets/img/panDel.png" alt="del" title="удалить вопрос"></a>
                 
                </div>

            </div>

    

        <?  }?>

        <?php
if(isset($_GET['ok'])){
    $sql="DELETE FROM question WHERE id='$get_id'";
    $link -> query($sql);
  echo  '<script> document.location.href="?page=admin_prof"</script>';
 
   }?> 
 


        </div>

            </div>
    







    

   </div>