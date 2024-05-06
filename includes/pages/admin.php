<div class="container">
   
   <p id="pop">Панель администратора</p>
   <p id="name_admin"><?=$admin['name']?><</p>

   <div class="vibor_pan">
       <a href="?page=admin"><p>Пользователи</p></a>
       <a href="?page=admin_tovar"><p>Товары</p></a>
       <a href="?page=admin_kategoryy"><p>Категории</p></a>
   </div>
  
   <table class="panel-table adaptive-table">
       <thead>
           <tr>
               <th>ID</th>
               <th>Фамилия</th>
               <th>Имя</th>
               <th>Почта</th>
               <th>Действия</th>
           </tr>
       </thead>
      
       <tbody>
           <tr>
               <td data-label="ID">1</td>
               <td data-label="Фамилия">Иван</td>
               <td data-label="Имя">Иванов</td>
               <td data-label="Почта">rgeg</td>
               <td data-label="Действия">
                   <div class="icons_pan">
                       <a href="red.html"><img src="assets/img/panREd.png" alt="red"></a>
                       <a href="del.html">  <img src="assets/img/panDel.png" alt="del"></a>
                       <a href="block.html">  <img src="assets/img/panZAb.png" alt="del"></a>
                   </div>
               </td>
           </tr>
           <tr>
               <td>2</td>
               <td>Иван</td>
               <td>Иванов</td>
               <td>ушашцаьдц</td>
               <td >
                   <div class="icons_pan">
                       <a href="red.html"><img src="assets/img/panREd.png" alt="red"></a>
                       <a href="del.html">  <img src="assets/img/panDel.png" alt="del"></a>
                       <a href="block.html">  <img src="assets/img/panZAb.png" alt="del"></a>
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
  
