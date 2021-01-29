<?php 
$this->load->library('session');
if (!isset($_SESSION['username'])) {
	redirect('admin');
}

 ?>
 	<nav id="menu" class="navbar navbar-default navbar-fixed-top" style="background-color: #333">
	  <div class="container"> <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
	      <a class="navbar-brand page-scroll" href="#">EKSPEDISI OUTDOOR PADANG</a> </div>
	    
	    <!-- Collect the nav links, forms, and other content for toggling -->
	     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="<?php echo base_url(); ?>/page" class="page-scroll">Home</a></li>
	        <li><a href="<?php echo base_url(); ?>/data" class="page-scroll">Member</a></li>
	        <li><a href="<?php echo base_url(); ?>/logout" class="page-scroll">Logout</a></li>
	      </ul>
	    </div>
	    <!-- /.navbar-collapse --> 
	  </div>
	  <!-- /.container-fluid --> 
	</nav>
	<header id="header">
	  <div class="intro">
	    <div class="overlay">
	      <div class="container">
	        <div class="row">
	          <div class="col-md-8 col-md-offset-2 intro-text">
	            <h1>Welcome, Admin</h1>
	              <p>Login Success!</p></div>
	        </div>
	      </div>
	    </div>
	  </div>
	</header>
