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
<div class="container">
    <p id="pop">Редактировать товар</p>
    <?php 

if(!isset($_GET['id'])){
    echo 'ошибка';
}else{
    $get_id=$_GET['id'];
    $sql="SELECT * FROM tovar WHERE id='$get_id'"; 
    $result=$link -> query($sql);
    $tovar=$result ->fetch();
    
    if(isset($_POST['red_tovar'])){
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
            // Успешная авторизация
       
    
        


        $sql="UPDATE tovar SET name='$name',
        artikul='$artikul',
        price='$price',
        opis='$opis',
        sovet='$sovet',
        type='$type',
        genus='$genus',
        sort='$sort',
        height='$height',
        width='$width',
        category='$category'
        WHERE id='$get_id'";
        $link -> query ($sql);
        echo '<script>document.location.href="?page=admin_tovar"</script>';

    } }?>
       

    <form method="POST" name ="red_tovar" id="add">

        <input type="text" placeholder="Наименование товара" id="m" name="name" value="<?=$tovar['name']?>">
        <h4><?php if(isset($error_name)){echo $error_name;}?></h4>
        <input type="text" placeholder="Артикул товара" id="m" name="artikul" value="<?=$tovar['artikul']?>">
        <h4><?php if(isset($error_artikul)){echo $error_artikul;}?></h4>
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
        
       

       <textarea name="opis"  cols="1" rows="1" id="m"><?=$tovar['opis']?></textarea>
       <h4><?php if(isset($error_opis)){echo $error_opis;}?></h4>

       <textarea name="sovet" cols="1" rows="1" id="m" ><?=$tovar['sovet']?></textarea>
       <h4><?php if(isset($error_sovet)){echo $error_sovet;}?></h4>

       <input type="text" placeholder="Тип растения" id="m" name="type" value="<?=$tovar['type']?>">
       <h4><?php if(isset($error_type)){echo $error_type;}?></h4>
       <input type="text" placeholder="Стоимость товара" id="m" name="price" value="<?=$tovar['price']?>">
       <h4><?php if(isset($error_price)){echo $error_price;}?></h4>
       <input type="text" placeholder="Ширина" id="m" name="width" value="<?=$tovar['width']?>">
       <h4><?php if(isset($error_width)){echo $error_width;}?></h4>
       <input type="text" placeholder="Сорт растения" id="m" name="sort" value="<?=$tovar['sort']?>">
       <h4><?php if(isset($error_sort)){echo $error_sort;}?></h4>
       <input type="text" placeholder="Род растения" id="m" name="genus" value="<?=$tovar['genus']?>">
       <h4><?php if(isset($error_genus)){echo $error_genus;}?></h4>


       <input type="text" placeholder="Высота" id="m" name="height" value="<?=$tovar['height']?>">
       <h4><?php if(isset($error_height)){echo $error_height;}?></h4>

       <input type="file" placeholder="Фотография" id="mm">

       <input type="submit" value="Сохранить" id="subbb" name="red_tovar">

    </form><?}?>
</div>
