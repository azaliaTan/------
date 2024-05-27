<?php 
if(!isset($_SESSION['uid'])){
  echo '<script>document.location.href="?page=vhod"</script>';
} 

if($SIGNIN_USER['role'] == 0){
    echo '<script>document.location.href="?page=ban"</script>';
}elseif($SIGNIN_USER['role'] == 1){
        echo '<script>document.location.href="?profil"</script>';
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

<head><title>PROFILE</title></head>

<div class="container">
      <p id="pop"> профиль</p>

      <div class="prof_inf">

        <img src="assets/img/ava.png" alt="avatarka">
         
        <div class="name_pr">
            <p id="name_profile"><?=$user['name']?> <?=$user['fullname']?> </p>
            <p id="pocta_prof"><?=$user['email']?></p>
        </div>
        </div>

     
      <p id="pop">заказы</p>

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
    <p id="adres_pr"><?=$user['adress']?></p>
    
    </div>
   </div>
