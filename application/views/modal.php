<?php 
	
	// var_dump($data['nama']);
	echo $data['nama'];

		

 ?>
<form method="post" action="http://localhost/CI/Home/insert">
	
 <input type="hidden" name="data[]"  value="<?php $data['nama']; ?>">

 <input type="submit" class="btn btn-primary"></input>
</form>

