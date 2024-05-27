<?php
    if(!isset($_SESSION['uid'])){
        echo '<script>document.location.href="index.php"</script>';
    }    
?>

<?php
   if($SIGNIN_USER['role']!=2){
        echo '<script>document.location.href="?page=katalog"</script>';
    }    
?>


<head><title>ADMIN</title></head>

<div class="container">
    <p id="pop">Добавить товар</p>

    <?php 

$name='';

$artikul='';
$price='';
$opis='';
$sovet='';
$genus='';
$type='';
$sort='';
$height='';
$width='';
$category='';
    
    if(isset($_POST['add_tovar'])){
        $name=$_POST['name'];
        $artikul=$_POST['artikul'];
        $price=$_POST['price'];
        $opis=$_POST['opis'];
        $sovet=$_POST['sovet'];
        $type=$_POST['type'];
        $genus=$_POST['genus'];
        $sort=$_POST['sort'];
        $height=$_POST['height'];
        $width=$_POST['width'];
        $category=$_POST['category'];



        $error_name = '';
        $error_artikul = '';
        $error_price = '';
        $error_sovet = '';
        $error_type= '';
        $error_genus= '';
        $error_sort = '';
        $error_height = '';
        $error_width = '';
        $error_opis = '';
        $error_kat = '';
    
        if($name === ''){
            $error_name = "Введите наименование товара!";
        } else if (preg_match('/[0-9@\$]/', $name)) {
            $error_name = "Наименование не должно содержать цифры и специальные символы";
        }else if (preg_match('/[a-zA-Z]+$/u', $name)) {
            $error_name = "Наименование должно содержать только русские буквы";
        }
        if ($artikul === '') {
            $error_artikul = "Введите артикул товара!";
        } else if (strlen($artikul) < 5) {
            $error_artikul = "Артикул должен содержать не менее 5 символов";
        } 
    
        if ($sovet === '') {
            $error_sovet = "Введите поле советов!";
        } else if (strlen($sovet) < 15) {
            $error_sovet = "Совет долджен иметь не менее 15 символов";
        } 

        if ($opis === '') {
            $error_opis = "Введите поле описания!";
        } else if (strlen($opis) < 15) {
            $error_opis = "Описание  должно иметь не менее 15 символов";
        } 


        if ($price === '') {
            $error_price = "Введите стоимость!";
        }  elseif (preg_match('/[a-zA-Z]/', $price)) {
            $error_price = "Стоимость не должна содержать буквы!";
        }else if (preg_match('/[а-яА-Я]/u', $price)) {
            $error_price = "Стоимость не должна содержать  буквы!";
        }

        if ($width === '') {
            $error_width = "Введите ширину!";
        }  else if (preg_match('/[a-zA-Z]/', $width)) {
            $error_width = "Ширина не должна содержать буквы!";
        }else if (preg_match('/[а-яА-Я]/u', $width)) {
            $error_width = "Ширина не должна содержать  буквы!";
        }

        if ($height === '') {
            $error_height = "Введите высоту!";
        } else if (preg_match('/[а-яА-Я]/u', $height)) {
            $error_height = "Высота не должна содержать  буквы!";
        } else if (preg_match('/[a-zA-Z]/', $height)) {
            $error_height = "Высота не должна содержать  буквы!";
        }else if (preg_match('/[а-яА-Я]/u', $height)) {
            $error_height = " не должна содержать  буквы!";
        }


        if($type === ''){
            $error_type = "Введите тип товара!";
        } else if (preg_match('/[0-9@\$]/', $type)) {
            $error_type = "Наименование типа не должно содержать цифры и специальные символы";
        }else if (preg_match('/^[a-zA-Z]+$/u', $type)) {
            $error_type = "Наименование типа должно содержать только русские буквы";
        }

        if($genus === ''){
            $error_genus = "Введите род товара!";
        } else if (preg_match('/[0-9@\$]/', $genus)) {
            $error_genus = "Род товара не должен содержать цифры и специальные символы";
        }else if (preg_match('/^[a-zA-Z]+$/u', $genus)) {
            $error_genus = "Род товара  должен содержать только русские буквы";
        }

        if($sort === ''){
            $error_sort = "Введите род товара!";
        } else if (preg_match('/[0-9@\$]/', $sort)) {
            $error_sort = "Сорт товара не должен содержать цифры и специальные символы";
        }else if (preg_match('/^[a-zA-Z]+$/u', $sort)) {
            $error_sort = "Сорт товара  должен содержать только русские буквы";
        }
        if($_POST['category'] == 0){
            $error_kat = "Выберите категорию!";}
       
        if(empty($error_name) && empty($error_artikul) && empty($error_price) && empty($error_sovet) && empty($error_type) && empty($error_genus) && empty($error_sort) && empty($error_height) && empty($error_width)  && empty($error_opis) && empty($error_kat)){

            $sql = "INSERT INTO  tovar (`name`, `artikul`, `price`, `category`, `opis`, `sovet`, `type`, `genus`, `sort`, `height`, `width`) VALUES ('$name', '$artikul', '$price', '$category', '$opis', '$sovet', '$type', '$genus', '$sort', '$height', '$width')";
            $link ->query($sql);
            echo '<script>document.location.href="?page=admin_tovar"</script>';
            
            }
        }?>

    <form method="POST" name ="add_tovar" id="add">
   <label >Имя</label>
    <input type="text"  id="m" name="name" value="<?=$name?>">
        <h4><?php if(isset($error_name)){echo $error_name;}?></h4>
        <label >Артикул</label>
        <input type="text"  id="m" name="artikul" value="<?=$artikul?>">
        <h4><?php if(isset($error_artikul)){echo $error_artikul;}?></h4>
        <label >Категория</label>
        <select name="category" id="category">
            <option value="0">-Выберите из списка-</option>

            <?php
$kat_t = $link->query("SELECT * FROM category")->fetchAll(PDO::FETCH_ASSOC); 
foreach($kat_t as $KAT){ 
    ?>
    <option value="<?=$KAT['id']?>"><?=$KAT['name']?></option>
           <?  }?>
           </select>
           
           <h4><?php if(isset($error_kat)){echo $error_kat;}?></h4>
        
           <label >Описание</label>
       <textarea name="opis"  cols="1" rows="1" id="m"><?=$opis?></textarea>
       <h4><?php if(isset($error_opis)){echo $error_opis;}?></h4>
          
       <label >Советы по уходу</label>
       <textarea name="sovet" cols="1" rows="1" id="m" ><?=$sovet?></textarea>
       <h4><?php if(isset($error_sovet)){echo $error_sovet;}?></h4>


       <label >Тип растения</label>
       <input type="text"  id="m" name="type" value="<?=$type?>">
       <h4><?php if(isset($error_type)){echo $error_type;}?></h4>
       <label >Стоимость</label>
       <input type="text"  id="m" name="price" value="<?=$price?>">
       <h4><?php if(isset($error_price)){echo $error_price;}?></h4>
       <label >Сорт растения</label>
       <input type="text"  id="m" name="sort" value="<?=$sort?>">
       <h4><?php if(isset($error_sort)){echo $error_sort;}?></h4>
       <label >Род растения</label>
       <input type="text"  id="m" name="genus" value="<?=$genus?>">
       <h4><?php if(isset($error_genus)){echo $error_genus;}?></h4>
       <label >Ширина растения</label>
       <input type="text"  id="m" name="width" value="<?=$width?>">
       <h4><?php if(isset($error_width)){echo $error_width;}?></h4>
       <label >Высота растения</label>
       <input type="text"  id="m" name="height" value="<?=$height?>">
       <h4><?php if(isset($error_height)){echo $error_height;}?></h4>

       <input type="file" placeholder="Фотография" id="mm">

       <input type="submit" value="Сохранить" id="subbb" name="add_tovar">

    </form>
</div>
