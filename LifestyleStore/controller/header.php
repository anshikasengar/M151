<nav class="navbar navbar-inverse navabar-fixed-top">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <a href="../index.php" class="navbar-brand">Store</a>
                   </div>
                   
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                           <li><a href="cart.php">Cart</a></li>
                           <li><a href="settings.php">Settings</a></li>
                           <li><a href="logout.php">Logout</a></li>
                           <?php
                           }else{
                            ?>
                            <li><a href="add_products.php">Add product</a></li>
                            <li><a href="signup.php">Sign Up</a></li>
                           <li><a href="login.php">Login</a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
</nav>