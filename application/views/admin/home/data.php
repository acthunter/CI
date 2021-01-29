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
	      <a class="navbar-brand page-scroll" href="<?php echo base_url(); ?>/page">EKSPEDISI OUTDOOR PADANG</a> </div>
	    
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
		<div style="margin : 15px">
			<div style="margin-top: 150px" align="center">
				<h1>Data Member Ekspedisi Outdoor Padang</h1>
				<div class="container">	
				<div class="table-responsive">
				  <table class="table" style="margin : 10px">
					  <thead>
					    <tr>
					      <th scope="col">No.</th>
					      <th scope="col">Full Name</th>
					      <th scope="col">Place of Birth</th>
					      <th scope="col">Date of Birth</th>
					      <th scope="col">Country</th>
					      <th scope="col">State/Province</th>
					      <th scope="col">City</th>
					      <th scope="col">Address</th>
	      				  <th scope="col">Postal Code</th>
					      <th scope="col">Email Adress</th>
					      <th scope="col">Phone Number</th>
					      <th scope="col">Mountainering Proficiency</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php
					  		$no = 0; 
					  		foreach ($member as $pst) { 
					  			$no++;
					  			?>
						    <tr>
						      <th scope="row"><?php echo $no; ?></th>
						      <td><?php echo $pst->nama; ?></td>
						      <td><?php echo $pst->tempat_lahir; ?></td>
						      <td><?php echo $pst->tanggal_lahir; ?></td>
						      <td><?php echo $pst->country; ?></td>
						      <?php if ($pst->provinsi == 1) {
						      	echo "<td>Aceh</td>";	
						      } elseif ($pst->provinsi == 2) {
						      	echo "<td>Bali</td>";
						      } elseif ($pst->provinsi == 3) {
						      	echo "<td>Bangka Belitung Islands</td>";
						      } elseif ($pst->provinsi == 4) {
						      	echo "<td>Banten</td>";
						      } elseif ($pst->provinsi == 5) {
						      	echo "<td>Bengkulu</td>";
						      } elseif ($pst->provinsi == 6) {
						      	echo "<td>Central Java</td>";
						      } elseif ($pst->provinsi == 7) {
						      	echo "<td>Central Kalimantan</td>";
						      } elseif ($pst->provinsi == 8) {
						      	echo "<td>Central Sulawesi</td>";
						      } elseif ($pst->provinsi == 9) {
						      	echo "<td>East Java</td>";
						      } elseif ($pst->provinsi == 10) {
						      	echo "<td>East Kalimantan</td>";
						      } elseif ($pst->provinsi == 11) {
						      	echo "<td>East Nusa Tenggara</td>";
						      } elseif ($pst->provinsi == 12) {
						      	echo "<td>Gorontalo</td>";
						      } elseif ($pst->provinsi == 13) {
						      	echo "<td>Jambi</td>";
						      } elseif ($pst->provinsi == 14) {
						      	echo "<td>Lampung</td>";
						      } elseif ($pst->provinsi == 15) {
						      	echo "<td>Maluku</td>";
						      } elseif ($pst->provinsi == 16) {
						      	echo "<td>North Kalimantan</td>";
						      } elseif ($pst->provinsi == 17) {
						      	echo "<td>North Maluku</td>";
						      } elseif ($pst->provinsi == 18) {
						      	echo "<td>North Sulawesi</td>";
						      } elseif ($pst->provinsi == 19) {
						      	echo "<td>North Sumatra</td>";
						      } elseif ($pst->provinsi == 20) {
						      	echo "<td>Papua</td>";
						      } elseif ($pst->provinsi == 21) {
						      	echo "<td>Riau</td>";
						      } elseif ($pst->provinsi == 22) {
						      	echo "<td>Riau Islands</td>";
						      } elseif ($pst->provinsi == 23) {
						      	echo "<td>Southeast Sulawesi</td>";
						      } elseif ($pst->provinsi == 24) {
						      	echo "<td>South Kalimantan</td>";
						      } elseif ($pst->provinsi == 25) {
						      	echo "<td>South Sulawesi</td>";
						      } elseif ($pst->provinsi == 26) {
						      	echo "<td>South Sumatra</td>";
						      } elseif ($pst->provinsi == 27) {
						      	echo "<td>Special Capital Region of Jakarta</td>";
						      } elseif ($pst->provinsi == 28) {
						      	echo "<td>Special Region of Yogyakarta</td>";
						      } elseif ($pst->provinsi == 29) {
						      	echo "<td>West Java</td>";
						      } elseif ($pst->provinsi == 30) {
						      	echo "<td>West Kalimantan</td>";
						      } elseif ($pst->provinsi == 31) {
						      	echo "<td>West Nusa Tenggara</td>";
						      } elseif ($pst->provinsi == 32) {
						      	echo "<td>West Papua</td>";
						      } elseif ($pst->provinsi == 33) {
						      	echo "<td>West Sulawesi</td>";
						      }
						      else {
						      	echo "<td>West Sumatra</td>";
						      }
						       ?>
						      <td><?php echo $pst->kota; ?></td>
						      <td><?php echo $pst->alamat; ?></td>
						      <td><?php echo $pst->kode_pos; ?></td>
						      <td><?php echo $pst->email; ?></td>
						      <td><?php echo $pst->no_hp; ?></td>
						      <?php if ($pst->mountain == 1) {
						      	echo "<td>Beginner</td>";	
						      } elseif ($pst->mountain == 2) {
						      	echo "<td>Amateur</td>";
						      } elseif ($pst->mountain == 3) {
						      	echo "<td>Intermediate</td>";
						      } elseif ($pst->mountain == 4) {
						      	echo "<td>Upper-Intermediate</td>";
						      } elseif ($pst->mountain == 5) {
						      	echo "<td>Professional</td>";
						      }
						      else {
						      	echo "<td>Advanced</td>";
						      }
						       ?>
						      <td>
                    			<a href="<?php echo base_url().'Home/form_edit/'.$pst->id; ?>" type="button" class="btn btn-success" style="margin-bottom: 10px">Edit</a> 
                    			<a href="<?php echo base_url().'Home/delete/'.$pst->id; ?>" type="button" class="btn btn-danger">Delete</a>
                    		  </td>
						    </tr>
					  	<?php } ?>
					  </tbody>
					</table>				
				</div>
			</div>
			</div>
		</div>
