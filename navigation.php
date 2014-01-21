<header>
	<div class="logo">
		<img src="img/pmts-logo.png" alt="Panama Maritime Training Services">
	</div>
	<nav>
			<ul class="main-navigation">
				<?php 
					function current_menu_item($the_page){
						$page = basename($_SERVER['SCRIPT_NAME']);
						return ($page == $the_page) ? 'current-menu-item' : '';
					}
				?>
				<li class="certificate <?php echo current_menu_item('index.php'); ?>"><a href="index.php">Create Certificate</a></li>
				<li class="instructor <?php echo current_menu_item('add-instructor.php'); ?>"><a href="add-instructor.php">Add Instructor</a></li>
				<li class="search <?php echo current_menu_item('search-certificate.php'); ?>"><a href="search-certificate.php">Search Certificate</a></li>
			</ul>
	</nav>
</header>
<main class="animated fadeIn">