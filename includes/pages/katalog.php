
<!--каталог-->
<head>
<title>CATALOG</title></head>


<div class="container">

    <p id="pop">каталог растений</p>

<div class="katalog_sort">
    

<ul class="sort_kat">
    <form id="k" name="sort22" method="GET">
        <label for="sort_select">Категория</label>
        <select name="sort" id="sort_select_kat" onchange="window.location.href=this.options[this.selectedIndex].value">
            <option value=>-Выберите--</option>
            <option value="?page=katalog">ВСЕ РАСТЕНИЯ</option>
            

            <?php
            $kat_t = $link->query("SELECT * FROM category")->fetchAll(PDO::FETCH_ASSOC);
            foreach($kat_t as $KAT){
            ?>
                <option value="?page=katalog&category=<?=$KAT['id']?>"><?=$KAT['name']?></option>

            <?php } ?>

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
             

            if (isset($_GET['category'])) {
                $get_category = $_GET['category'];
            
                $sql = "SELECT * FROM category WHERE id='$get_category'";
                $result = $link->query($sql);
                $temp_categ = $result->fetch();
                
                if ($temp_categ != false) {
                    $dop_sql = "WHERE category='$get_category'";
                } else {
                    echo '<script>document.location.href="?page=katalog"</script>';
                }
                
            } else {
                $dop_sql = '';
            }
$result=$link -> query("SELECT * FROM tovar $dop_sql")->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as $tovar){?>

           <div class="tovar_katalog">
        <a href="?page=tovar&id=<?=$tovar['id']?>">
            <div class="cart_kat">
                <img src="assets/img/kat1.png" alt="tovar">
                
            </div> 
             <img src="assets/img/love.png" alt="love" id="kut_love">

            <div class="text_tovar_kat">
                <p><?=$tovar['name']?></p>
                <p><?=$tovar['price']?> ₽</p>
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