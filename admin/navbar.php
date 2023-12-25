
<style>
<style>
    nav#sidebar {
        background: url(assets/uploads/<?php echo $_SESSION['system']['cover_img'] ?>) !important;
        background-size: cover; /* Ensure the background image covers the entire container */
        background-position: center; /* Center the background image */
        color: #fff; /* Text color for better readability on a dark background */
        padding-top: 20px; /* Add some padding at the top */
    }

    .sidebar-list {
        list-style: none; /* Remove default list styles */
        padding: 0;
    }

    .nav-item {
        display: block;
        padding: 10px 15px;
        text-decoration: none;
        color: #fff;
        transition: background-color 0.3s ease;
    }

    .nav-item:hover {
        background-color: #555; /* Change background color on hover */
    }

    .icon-field {
        margin-right: 10px;
    }

    .collapse a {
        text-indent: 25px; /* Indent text for better visibility in collapsed state */
        display: block; /* Ensure links fill the entire width */
        padding: 10px 15px;
        color: #fff;
        transition: background-color 0.3s ease;
    }

    .collapse a:hover {
        background-color: #555;
    }

    .collapse.show {
        background-color: #333; /* Background color for expanded collapse items */
    }

    .active {
        background-color: #555; /* Background color for the active link */
    }

</style>

</style>

<nav id="sidebar" class='mx-lt-5 bg-dark' >
		
		<div class="sidebar-list">
				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
				<a href="index.php?page=venue" class="nav-item nav-venue"><span class='icon-field'><i class="fa fa-map-marked-alt"></i></span> Venues</a>
				<a href="index.php?page=events" class="nav-item nav-events"><span class='icon-field'><i class="fa fa-calendar"></i></span> Events</a>
				<a  class="nav-item nav-reports" data-toggle="collapse" href="#reportCollpase" role="button" aria-expanded="false" aria-controls="reportCollpase"><span class='icon-field'><i class="fa fa-file"></i></span> Reports <i class="fa fa-angle-down float-right"></i></a>
				<div class="collapse" id="reportCollpase">
					<a href="index.php?page=audience_report" class="nav-item nav-audience_report"><span class='icon-field'></span> Audience Report</a>
				</div>
				<?php if($_SESSION['login_type'] == 1): ?>
				<!--<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>-->
				<a href="index.php?page=site_settings" class="nav-item nav-site_settings"><span class='icon-field'><i class="fa fa-cogs"></i></span> System Settings</a>
			<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav_collapse').click(function(){
		console.log($(this).attr('href'))
		$($(this).attr('href')).collapse()
	})
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
