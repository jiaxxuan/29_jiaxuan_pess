<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Search Patrol Car</title>
<link href="css/bootstrap-4.3.1.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="container" style="width:900px">
		<?php
		include "header.php";
		?>
		<section class="mt-3">
		<form action="updates.php" method="post">
			<div class="form-group row">
            <label for="patrolCar" class="col-sm-3 col-form-label">
              Patrol Car Number </label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="patrolCarId"
                     name="patrolCarId">
            </div>
			<div class="col-sm-6">
			 <input class="btn btn-primary" name="btnSearch" type="submit"
                     value="Search">
			</div>
			</div>
            </div>
        </form>
		</section>
		<?php
			include "footer.php";
		?>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>       
	<script src="js/bootstrap-4.0.0.js"></script>
	
</body>
</html>