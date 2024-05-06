<div class="container">
   
   <p id="pop">Панель администратора</p>
   <p id="name_admin">Здравствуй,Админ#1!</p>

   <div class="vibor_pan">
       <a href="?page=admin"><p>Пользователи</p></a>
       <a href="?page=admin_tovar"><p>Товары</p></a>
       <a href="?page=admin_kategoryy"><p>Категории</p></a>
   </div>
  
   <table class="panel-table adaptive-table">
       <thead>
           <tr>
               <th>Артикул</th>
               <th>Название</th>
               <th>Категория</th>
               <th>Стоимость</th>
               <th>Действия</th>
           </tr>
       </thead>
      
       <tbody>
           <tr>
               <td data-label="Артикул">1</td>
               <td data-label="Название">Ананас Микс</td>
               <td data-label="Категория">Плодовые и цитрусовые</td>
               <td data-label="Стоимость">3500 Р</td>
               <td data-label="Действия">
                   <div class="icons_pan">
                   <a href="?page=red&id=<?=$tovar['id']?>"><img src="assets/img/panREd.png" alt="red"></a>
                   <a href="?page=del&id=<?=$tovar['id']?>">  <img src="assets/img/panDel.png" alt="del"></a>
                   </div>
               </td>
           </tr>
           <tr>
               <td>1</td>
               <td>Ананас Микс</td>
               <td >Плодовые и цитрусовые</td>
               <td>3500 Р</td>
               <td >
                   <div class="icons_pan">
                       <a href="red.html"><img src="assets/img/panREd.png" alt="red"></a>
                       <a href="del.html">  <img src="assets/img/panDel.png" alt="del"></a>
                   </div>
               </td>
           </tr>
    
       </tbody>
       </table>
   </div>

       <ul class="pagi">
           <li id="fpag">1</li>
           <li>2</li>
           <li>3</li>
           <li>...</li>
           <li>30</li>
       </ul>
         <div class="pan_but_add">
       <a href="?page=add"><button  id="pan_add_kat">добавить товар</button></a>
   </div>