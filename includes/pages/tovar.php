<?php 

if(isset($_GET['id'])){
    $get_id=$_GET['id'];
    $sql="SELECT * FROM tovar WHERE id='$get_id'";
    $result=$link->query($sql);
    $tovar=$result-> fetch();
}

?>






<div class="container">
        <div class="tovar_inf">

            <div class="tovar_img">
                <img src="assets/img/tovar.png" alt="tovar_img">
            </div>

     <div class="tovar_text">

               <p id="name_tovar"><?=$tovar['name']?></p>
               <p id="artikul">Артикул <?=$tovar['artikul']?></p>
               <p id="price"><?=$tovar['price']?></p>

               <div class="tovar_act">
                <a href="?page=korzina"><button> в корзину</button></a>
                <img src="assets/img/love.png" alt="love">
               </div>
               
        <div class="tovar_details">

              
                <p>Категория : <?=$tovar['kategory']?></p>
                <p>Тип растения : <?=$tovar['type']?></p>
                <p>Род растений : <?=$tovar['genus']?></p>
                

           
                <p>Сорт : <?=$tovar['sort']?></p>
                <p>Высота : <?=$tovar['height']?></p>
                <p>Ширина : <?=$tovar['width']?></p>
         
            
         </div>
    </div>
</div>


<div class="tovar_opis">
             
    <div class="tovar_opisanie">
        <p id="nazvanie_block">Описание</p>
        <p id="opis"><?=$tovar['opis']?></p>
        <p id="razvernyt"> Подробнее
        </p>
    </div>

    <div class="tovar_opisanie">
        <p id="nazvanie_block">Советы по уходу</p>
        <p id="opis"> <?=$tovar['sovet']?></p>
        <p id="razvernyt"> Подробнее
        </p>
    </div>
   

   


</div>

<div class="tovar_tovar">
    <a href="?page=katalog"><button>в каталог</button></a>
</div>
</div>