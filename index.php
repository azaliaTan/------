<?php 
include('includes/connect.php');
include('includes/session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="assets/img/fav.png">
</head>


<?php 

include('includes/header.php');
If(isset($_GET['page'])){
    $page=$_GET['page'];
    if($page=='add_kat'){include('includes/pages/add_kat.php');}
    if($page=='add'){include('includes/pages/add.php');}
    if($page=='admin_kategoryy'){include('includes/pages/admin_kategoryy.php');}
    if($page=='tovar'){include('includes/pages/tovar.php');}
    if($page=='katalog'){include('includes/pages/katalog.php');}
    if($page=='infor'){include('includes/pages/infor.php');}
    if($page=='vhod'){include('includes/pages/vhod.php');}
    if($page=='korzina'){include('includes/pages/korzina.php');}
    if($page=='izbr'){include('includes/pages/izbr.php');}
    if($page=='reg'){include('includes/pages/reg.php');}
    if($page=='admin_prof'){include('includes/pages/admin_prof.php');}
    if($page=='red_prof'){include('includes/pages/red_prof.php');}
    if($page=='del'){include('includes/pages/del.php');}
    if($page=='red'){include('includes/pages/red.php');}
    if($page=='red_kat'){include('includes/pages/red_kat.php');}
    if($page=='profil'){include('includes/pages/profil.php');}
    if($page=='admin_tovar'){include('includes/pages/admin_tovar.php');}
    if($page=='admin'){include('includes/pages/admin.php');}
    if($page=='block'){include('includes/pages/block.php');}
    if($page=='del_kat'){include('includes/pages/del_kat.php');}
    if($page=='del_polz'){include('includes/pages/del_polz.php');}
    if($page=='ban'){include('includes/pages/ban.php');}
    if($page=='profilADM'){include('includes/pages/profilADM.php');}
} else{
    
include('includes/start.php');}

include('includes/footer.php')


?>


</html>