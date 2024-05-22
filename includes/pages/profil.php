<?php 
if(!isset($_SESSION['uid'])){
  echo '<script>document.location.href="?page=vhod"</script>';
} 

if($SIGNIN_USER['role'] == 0){
    echo '<script>document.location.href="?page=ban"</script>';
}
if($SIGNIN_USER['role'] == 2){
    echo '<script>document.location.href="?page=admin_prof"</script>';
}

?>
<title>PROFILE</title>
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

      </div>
     
      <p id="pop">МОИ заказы</p>

      <div class="panel">

        <div class="pan_tovar">

            <div class="pan_img">
                <img src="assets/img/kat3.png" alt="tovar">
            </div>

            <div class="pan_tovar_name">
               <a href="tovar.html"><p>Ананас Микс</p></a>
                <p id="a">Aртикул : 01010101</p>
                     <div class="tovar_pan">
                        <p>-</p>
                        <p>1</p>
                        <p>+</p>
                     </div>

                    </div>
            <div class="pan_price">
                <p>3500 ₽</p>
            
            </div>

        </div>

        <div class="pan_tovar">

            <div class="pan_img">
                <img src="assets/img/kat3.png" alt="tovar">
            </div>

            <div class="pan_tovar_name">
               <a href="tovar.html"><p>Ананас Микс</p></a>
                <p id="a">Aртикул : 01010101</p>
                     <div class="tovar_pan">
                        <p>-</p>
                        <p>1</p>
                        <p>+</p>
                     </div>

             </div>
            <div class="pan_price">
                <p>3500 ₽</p>
            
            </div>

        </div>
          
    <p id="poka">Показать все</p>
 
    <p id="pop">Адрес доставки</p>
    <p id="adres_pr"><?=$SIGNIN_USER['adress']?></p>
    
    </div>
   </div>
