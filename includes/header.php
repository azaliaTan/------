   <!-- ШАПКА -->

   <header>
     <div class="container">
        <ul class="header-ul">
             <li class="logo">
                 <a href="index.php"> <img src="assets/img/logoPK.png" alt="logo"></a>
                <p>botanica</p>
            </li>          
            
            <input type="text" placeholder="поиск" id="header_input">

            <li class="icons">
                <ul class="nav-buttons">
                    <li><a href="?page=izbr"><img src="assets/img/love.png" alt="love"></a></li>
                    <li><a href="?page=korzina"><img src="assets/img/shop.png" alt="shop"></a></li>
                   
                    <?php 
            if(isset($_SESSION['uid']) && $SIGNIN_USER['role'] == 2){
                echo '<li><a href="?page=admin_prof"><img src="assets/img/adm.png" alt="adminpanel"></a></li>';
            }else{
                echo '<li><a href="?page=vhod"><img src="assets/img/user.png" alt="user"></a></li>';
            }
        ?>
                    <li class="nav-buttons__burger"><a href="#burger-nav"><img src="assets/img/bur.png" alt="burger"></a></li>
                </ul>

            </li>
        
        </ul>
         <div class="header_two">

            
         <input type="text" name="" id="input_two_header" placeholder="поиск">
            
        <ul class="nav" id="burger-nav">
            <li class="nav__close-button">
                <a href="#">
                    <img src="assets/img/close.png" alt="">
                </a>
            </li>
            <li>
                <a href="?">Главная</a>
            </li>
            <li>
                <a href="?page=katalog">Каталог</a>
            </li>
            <li>
                <a href="?page=infor">О нас</a>
            </li>
            <li>
                <a href="#">Контакты</a>
            </li>
        </ul>

        <ul class="svyaz">
            <p id="ss">Связаться с нами: </p>
            <img src="assets/img/tel.png" alt="telephone" id="tel">
            <a href="tel:+">+7 (999) 999 99 99</a>

</ul>
        </div>

     </div>
    </header>

    <!--------------------------------------ШАПКА-------------------------->