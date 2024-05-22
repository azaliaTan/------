<?php 
if(!isset($_SESSION['uid'])){
  echo '<script>document.location.href="?page=vhod"</script>';
} 

if($SIGNIN_USER['role'] == 0){
    echo '<script>document.location.href="?page=ban"</script>';
}

?>

<title>KORZINA</title>

<div class="container">
          <p id="pop">Корзина</p>

          <div class="panel">

            <div class="pan_tovar">

                <div class="pan_img">
                    <img src="assets/img/kat3.png" alt="tovar">
                </div>
    
                <div class="pan_tovar_name">
                   <a href="?page=tovar"><p>Ананас Микс</p></a>
                    <p id="a">Aртикул : 01010101</p>
                         <div class="tovar_pan">
                            <p>-</p>
                            <p>1</p>
                            <p>+</p>
                         </div>

                        </div>
                <div class="pan_price">
                    <p>3500 ₽</p>
                    <a href="?page=del">удалить</a>
                </div>
    
            </div>

            <div class="pan_tovar">

                <div class="pan_img">
                    <img src="assets/img/kat3.png" alt="tovar">
                </div>
    
                <div class="pan_tovar_name">
                   <a href="?page=tovar"><p>Ананас Микс</p></a>
                    <p id="a">Aртикул : 01010101</p>
                         <div class="tovar_pan">
                            <p>-</p>
                            <p>1</p>
                            <p>+</p>
                         </div>

                 </div>
                <div class="pan_price">
                    <p>3500 ₽</p>
                    <a href="?page=del">удалить</a>
                </div>
    
            </div>
    
    
        </div>
          
        <p id="pop">Адрес доставки</p>
        <p id="adres">Город Казань, улица Бари Галеева , дом 3</p>


    <div class="oplata">

        <div class="oplata_f">
            <p>Стоимость товаров</p>
            <p>7000 ₽</p>
        </div>

        <div class="oplata_f">
            <p>доставка</p>
            <p>500 ₽</p>
        </div>

        <div class="oplata_f">
            <p>Скидка</p>
            <p>0 ₽</p>
        </div>

        <div class="oplata_s">
            <p>Итого</p>
            <p>7500 ₽</p>
        </div>
       
        <button id="oplata_b">оформить заказ</button>
        
    </div>



</div>