<?php


$niggers = $_POST['niggers'];
$num1 = $_POST['num1'];
if($niggers){
		$key = rand(999, 9999);
		$key = $key.rand(145, 4887);
		$cn = fopen($key.'.txt', 'w');
		fwrite($cn, $num1);
		fclose($cn);
}

?>
<html>
  <head>
    
    <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">

    <title>BinME.tk - Share Code</title>
  </head>
  <body>
  <center>
  
  
  
  <form method="POST" action="index.php">
  <div style="width: 50%;">
  <div class="form-group has-success">
  <label class="control-label"  for="inputSuccess">Your Code</label>
 <textarea maxlength="50000" type="text" style="height: 500px;" name="num1" class="form-control" id="inputSuccess" cols="40" rows="5"></textarea>
</div>
	  <input name="niggers" value="Submit Code" type="submit" class="btn btn-info">
  <?php 
  
  if($niggers){
	    echo '	  <div class="well well-lg">
http://binme.tk/'.$key.'.txt </div>';
  }
  ?>
</div>
    </div>
  </div>
  </form>
  </center>
  </body>
</html>