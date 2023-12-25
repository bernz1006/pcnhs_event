<style>
  body {
    padding-top: 3.5rem;
    background-color: #f8f9fa;
    font-family: 'Arial', sans-serif;
  }

  .navbar {
    padding: 0;
    min-height: 3.5rem;
    background-color: #343a40; /* Updated navbar background color */
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  }

  .navbar-brand {
    font-size: 1.5rem;
    color: #ffffff;
    font-weight: bold;
  }

  .navbar-toggler {
    border: none;
    outline: none;
  }

  .navbar-light .navbar-toggler-icon {
    background-color: #ffffff;
  }

  .dropdown-menu {
    left: -2.5em;
    border: none;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  }

  .account-dropdown a {
    color: #000;
    text-decoration: none;
    transition: background-color 0.3s ease;
  }

  .account-dropdown a:hover {
    background-color: #e9ecef;
  }
.icon {
  cursor: pointer;
  height: 3rem;
}
</style>



<nav class="navbar navbar-light fixed-top bg-primary">

  <div class="container-fluid">

		  
    <div class="col-md-1 float-left">
      <!-- Add your logo or other content here -->
    </div>
	
    <div class="col-md-4 float-left text-white">

      <a class="navbar-brand" href="#">
	  	<img
            src="./images/pcnhs2.png"
            alt="pcnhs logo"
            class="icon"
          />
        <strong><?php echo isset($_SESSION['system']['name']) ? $_SESSION['system']['name'] : '' ?></strong>
      </a>
    </div>
    <div class="float-right">
      <div class="dropdown account-dropdown mr-4">
        <a href="#" class="text-white dropdown-toggle" id="account_settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $_SESSION['login_name'] ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="account_settings">
          <!--<a class="dropdown-item" href="javascript:void(0)" id="manage_my_account"><i class="fa fa-cog"></i> Manage Account</a>-->
          <a class="dropdown-item" href="ajax.php?action=logout"><i class="fa fa-power-off"></i> Logout</a>
        </div>
      </div>
    </div>
  </div>
</nav>

<script>
  $('#manage_my_account').click(function () {
    uni_modal("Manage Account", "manage_user.php?id=<?php echo $_SESSION['login_id'] ?>&mtype=own")
  })
</script>
