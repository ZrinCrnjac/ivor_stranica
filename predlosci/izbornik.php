<div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle="example-menu"></button>
  <div class="title-bar-title">Izbornik</div>
</div>

<div class="top-bar" id="example-menu">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li><a href="index.php">Home</a></li>
      <li><a href="igre.php">Games</a></li>
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
    	<li><?php if(!isset($_SESSION["logiran"])): ?>
    	<a href="login.php"><button type="button" class="button">Login</button></a>
    	<?php else: ?>
    	<a href="logout.php" class="alert button expanded">Logout 
      		<?php echo $_SESSION["logiran"]->username; ?></a>
    	<?php endif; ?></li>
    </ul>
  </div>
</div>