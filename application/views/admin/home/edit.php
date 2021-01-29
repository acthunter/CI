<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<nav id="menu" class="navbar navbar-default navbar-fixed-top" style="background-color: #564A4A">
  <div class="container"> <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="index.html">EKSPEDISI OUTDOOR PADANG</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<h1 style="margin-top: 150px" align="center">Edit Form</h1>
	<form style="margin-top: 50px; margin-left: 100px; margin-right: 100px;" method="POST" action="http://localhost/CI/Home/update/">
		<div class="form-group">
	    	<label for="formGroupExampleInput">Full Name</label>
	    	<input type="text" class="form-control" id="formGroupExampleInput" name="nama" value="<?php echo $member[0]->nama ?>" >
		</div>
  		<div class="form-group">
	    	<label for="formGroupExampleInput">Place of Birth</label>
	  		<input type="text" class="form-control" id="formGroupExampleInput" name="tempat_lahir" value="<?php echo $member[0]->tempat_lahir ?>">
    	</div>
		<div class="form-group">
		    <label for="formGroupExampleInput">Date of Birth</label>
	  		<input type="date" class="form-control" id="formGroupExampleInput" name="tanggal_lahir" value="<?php echo $member[0]->tanggal_lahir ?>" >
	    </div>
		<div class="form-group">	
		  	<label for="formGroupExampleInput">Country</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" name="country" value="<?php echo $member[0]->country ?>">
		</div>
		<div class="form-group">	
		  	<label for="formGroupExampleInput">State/Province</label>
			<input type="hidden" name="id" value="<?php echo $member[0]->id; ?>">
			<br>
			<select class="form-control" id="formGroupExampleInput" name="provinsi">
	                        <option value="<?php echo $member[0]->provinsi ?>" selected>
	                        	<?php if ($member[0]->provinsi == 1) {
							      	echo "<td>Aceh</td>";	
							      } elseif ($member[0]->provinsi == 2) {
							      	echo "<td>Bali</td>";
							      } elseif ($member[0]->provinsi == 3) {
							      	echo "<td>Bangka Belitung Islands</td>";
							      } elseif ($member[0]->provinsi == 4) {
							      	echo "<td>Banten</td>";
							      } elseif ($member[0]->provinsi == 5) {
							      	echo "<td>Bengkulu</td>";
							      } elseif ($member[0]->provinsi == 6) {
							      	echo "<td>Central Java</td>";
							      } elseif ($member[0]->provinsi == 7) {
							      	echo "<td>Central Kalimantan</td>";
							      } elseif ($member[0]->provinsi == 8) {
							      	echo "<td>Central Sulawesi</td>";
							      } elseif ($member[0]->provinsi == 9) {
							      	echo "<td>East Java</td>";
							      } elseif ($member[0]->provinsi == 10) {
							      	echo "<td>East Kalimantan</td>";
							      } elseif ($member[0]->provinsi == 11) {
							      	echo "<td>East Nusa Tenggara</td>";
							      } elseif ($member[0]->provinsi == 12) {
							      	echo "<td>Gorontalo</td>";
							      } elseif ($member[0]->provinsi == 13) {
							      	echo "<td>Jambi</td>";
							      } elseif ($member[0]->provinsi == 14) {
							      	echo "<td>Lampung</td>";
							      } elseif ($member[0]->provinsi == 15) {
							      	echo "<td>Maluku</td>";
							      } elseif ($member[0]->provinsi == 16) {
							      	echo "<td>North Kalimantan</td>";
							      } elseif ($member[0]->provinsi == 17) {
							      	echo "<td>North Maluku</td>";
							      } elseif ($member[0]->provinsi == 18) {
							      	echo "<td>North Sulawesi</td>";
							      } elseif ($member[0]->provinsi == 19) {
							      	echo "<td>North Sumatra</td>";
							      } elseif ($member[0]->provinsi == 20) {
							      	echo "<td>Papua</td>";
							      } elseif ($member[0]->provinsi == 21) {
							      	echo "<td>Riau</td>";
							      } elseif ($member[0]->provinsi == 22) {
							      	echo "<td>Riau Islands</td>";
							      } elseif ($member[0]->provinsi == 23) {
							      	echo "<td>Southeast Sulawesi</td>";
							      } elseif ($member[0]->provinsi == 24) {
							      	echo "<td>South Kalimantan</td>";
							      } elseif ($member[0]->provinsi == 25) {
							      	echo "<td>South Sulawesi</td>";
							      } elseif ($member[0]->provinsi == 26) {
							      	echo "<td>South Sumatra</td>";
							      } elseif ($member[0]->provinsi == 27) {
							      	echo "<td>Special Capital Region of Jakarta</td>";
							      } elseif ($member[0]->provinsi == 28) {
							      	echo "<td>Special Region of Yogyakarta</td>";
							      } elseif ($member[0]->provinsi == 29) {
							      	echo "<td>West Java</td>";
							      } elseif ($member[0]->provinsi == 30) {
							      	echo "<td>West Kalimantan</td>";
							      } elseif ($member[0]->provinsi == 31) {
							      	echo "<td>West Nusa Tenggara</td>";
							      } elseif ($member[0]->provinsi == 32) {
							      	echo "<td>West Papua</td>";
							      } elseif ($member[0]->provinsi == 33) {
							      	echo "<td>West Sulawesi</td>";
							      }
							      else {
							      	echo "<td>West Sumatra</td>";
							      }
							       ?>
	                        </option>
	                        <option value="1">Aceh</option>
	                        <option value="2">Bali</option>
	                        <option value="3">Bangka Belitung Islands</option>
	                        <option value="4">Banten</option>
	                        <option value="5">Bengkulu</option>
	                        <option value="6">Central Java</option>
	                        <option value="7">Central Kalimantan</option>
	                        <option value="8">Central Sulawesi</option>
	                        <option value="9">East Java</option>
	                        <option value="10">East Kalimantan</option>
	                        <option value="11">East Nusa Tenggara</option>
	                        <option value="12">Gorontalo</option>
	                        <option value="13">Jambi</option>
	                        <option value="14">Lampung</option>
	                        <option value="15">Maluku</option>
	                        <option value="16">North Kalimantan</option>
	                        <option value="17">North Maluku</option>
	                        <option value="18">North Sulawesi</option>
	                        <option value="19">North Sumatra</option>
	                        <option value="20">Papua</option>
	                        <option value="21">Riau</option>
	                        <option value="22">Riau Islands</option>
	                        <option value="23">Southeast Sulawesi</option>
	                        <option value="24">South Kalimantan</option>
	                        <option value="25">South Sulawesi</option>
	                        <option value="26">South Sumatra</option>
	                        <option value="27">Special Capital Region of Jakarta</option>
	                        <option value="28">Special Region of Yogyakarta</option>
	                        <option value="29">West Java</option>
	                        <option value="30">West Kalimantan</option>
	                        <option value="31">West Nusa Tenggara</option>
	                        <option value="32">West Papua</option>
	                        <option value="33">West Sulawesi</option>
	                        <option value="34">West Sumatra</option>
	                      </select>
		</div>
		<div class="form-group">	
		  	<label for="formGroupExampleInput">City</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" name="kota" value="<?php echo $member[0]->kota ?>">
		</div>
	    <div class="form-group">	
		  	<label for="formGroupExampleInput">Address</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" name="alamat" value="<?php echo $member[0]->alamat ?>">
		</div>
	    <div class="form-group">	
		  	<label for="formGroupExampleInput">Postal Code</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" name="kode_pos" value="<?php echo $member[0]->kode_pos ?>">
		</div>
	    <div class="form-group">
		    <label for="formGroupExampleInput">Email Address</label>
		    <input type="email" class="form-control" id="formGroupExampleInput" name="email" value="<?php echo $member[0]->email ?>">
		</div>
		<div class="form-group">
		    <label for="formGroupExampleInput">Phone Number</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" name="no_hp" value="<?php echo $member[0]->no_hp ?>">
		</div>
  		<div class="form-group">	
		  	<label for="formGroupExampleInput">Mountainering Proficiency</label>
		    <select class="form-control" name="mountain">
	                        <option value="<?php echo $member[0]->mountain ?>" selected>
	                        	<?php if ($member[0]->mountain == 1) {
							      	echo "<td>Beginner</td>";	
							      } elseif ($member[0]->mountain == 2) {
							      	echo "<td>Amateur</td>";
							      } elseif ($member[0]->mountain == 3) {
							      	echo "<td>Intermediate</td>";
							      } elseif ($member[0]->mountain == 4) {
							      	echo "<td>Upper-Intermediate</td>";
							      } elseif ($member[0]->mountain == 5) {
							      	echo "<td>Professional</td>";
							      }
							      else {
							      	echo "<td>Advanced</td>";
							      }
							       ?>
	                        </option>
	                        <option value="1">Beginner</option>
	                        <option value="2">Amateur</option>
	                        <option value="3">Intermediate</option>
	                        <option value="4">Upper-Intermediate</option>
	                        <option value="5">Professional</option>
	                        <option value="6">Advanced</option>
	                      </select>
	                      <br>	
		</div>
        <input type="submit" class="btn btn-primary">
  		<a class="btn btn-primary" href="<?php echo base_url(); ?>/data" role="button">Back</a>
        <br>
        <br>
	</form>

</body>
</html>