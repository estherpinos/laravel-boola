<header>
    <div class="container">

     <!-- MENU -->

     <nav>
         <ul>
           <li v-for="(item, index) in menuPersone" :key="index">
             <a :href="item.href">{{ item.text }}</a>
           </li>
         </ul>
       </nav>

       <!-- LOGO BOOLEAN -->

       <div class="logo-bar">
         <img src="../assets/img/boolean-logo.png" alt="boolando-logo">

       </div>

       <!-- MENU ICON -->

       <div id="menu-icon-bar">
         <nav>
           <ul>
             <li v-for="(item, index) in menuIcons" :key="index">
             <a :href="item.href"><i :class="item.icon"></i></a></li>

           </ul>

         </nav>
       </div>
     </div>


 </header>
