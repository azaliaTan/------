
<!--каталог-->

<div class="container">

    <p id="pop">каталог растений</p>

<div class="katalog_sort">
    

    <ul class="sort_kat">
        <form>
            <label for="sort_select">Категория</label>
            <select name="sort" id="sort_select_kat">
            <option value="0">-Выберите из списка-</option>

            <?php
$kat_t = $link->query("SELECT * FROM category")->fetchAll(PDO::FETCH_ASSOC); 
foreach($kat_t as $KAT){ 
    ?>
    <option value="<?=$KAT['id']?>"><?=$KAT['name']?></option>
           <?  }?>
           </select>
       
           
              
            </select>
          </form>
    </ul>

    <ul class="sort">
        <form>
            <label for="sort_select">Сортировать по</label>
            <select name="sort" id="sort_select_kat">
              <option value="">-- Выберите --</option>
              <option value="popul">По популярности</option>
              <option value="tsena">По цене</option>
              <option value="data">По дате</option>
            </select>
          </form>
    </ul>
    
 </div>
    
    

    <div class="tovar_kat">

            
            <?php

            $sql=" SELECT * FROM tovar";
            $result= $link -> query($sql);
            foreach($result as $tovar){?>

           <div class="tovar_katalog">
        <a href="?page=tovar&id=<?=$tovar['id']?>">
            <div class="cart_kat">
                <img src="assets/img/kat1.png" alt="tovar">
                
            </div> 
            <a href=""> <img src="assets/img/love.png" alt="love" id="kut_love"></a>

            <div class="text_tovar_kat">
                <p><?=$tovar['name']?></p>
                <p><?=$tovar['price']?></p>
                </a>
                <a href="?page=korzina">
                    <button>
                        в корзину
                    </button>                
                </a>
            </div>
        </div>

        <?  }?>
    
    </div>

    <ul class="pagi">
        <li id="fpag">1</li>
        <li>2</li>
        <li>3</li>
        <li>...</li>
        <li>30</li>
    </ul>

  </div>
 <!--------------------------------------каталог-------------------------->