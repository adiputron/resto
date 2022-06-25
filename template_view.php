<!DOCTYPE html>
<html lang="en">
<head>
	<!--load view header -->
 <?php
 	$this->load->view($header);
 ?>
 <!--/header-->
</head>

<body>

<?php

$this->load->view($navbar);

 ?>	


	
<!--mainbar-->

<div class="col-sm-5 col-sm-offset-3 col-lg-10 col-lg-offset-1 main">			


 <?php

$this->load->view($body);

 ?>	

</div>


 <!--/mainbar-->


</body>
</html>
