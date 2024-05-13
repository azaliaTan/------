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




<div class="container">
    <p id="pop">Добавить товар</p>

    <form method="" name ="" id="add">

        <input type="text" placeholder="Наименование товара" id="m">
        
        <select id="category" name="category">
        <option value="" disabled selected>Выберите категорию</option>
        <option value="PLOD">Плодовые и цитрусовые</option>
        <option value="LIST">Лиственные и цветущие</option>
        <option value="CVET">Экзотические</option>
    </select>

       <textarea name=""  cols="1" rows="1" id="m">Описание</textarea>

       <textarea name="" cols="1" rows="1" id="m" >Советы по уходу</textarea>

       <input type="text" placeholder="Тип растения" id="m">

       <input type="text" placeholder="Ширина" id="m">

       <input type="text" placeholder="Высота" id="m">

       <input type="file" placeholder="Фотография" id="mm">

       <input type="submit" value="Добавить" id="subbb" name="">

    </form>
</div>
