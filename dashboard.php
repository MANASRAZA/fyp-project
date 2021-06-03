<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	

	<nav class="nav">
        <div>
           
             <button class="menu" onclick="show()">
                <div id="wrapper" >
                    <div class="circle icon">
                        <span class="line top"></span>
                        <span class="line middle"></span>
                        <span class="line bottom"></span>
                    </div>
                  </div>

            </button> 
        
            
            
            <script type="text/javascript">
            $("#wrapper").click( function() {
                $(".icon").toggleClass("close");
            });
            </script>
       
      
        </div>
        <div class="responsive toggle" id="responsive">


          
            <a href="home.html" class="nav-link">Home</a>
          
      
			<a href="logout.php" id="lg"> LOGOUT </a>

            
        </div>
		
    </nav>
<br>
<br>
<br>
	<div class="container">
		<h2 class="text-center text-success">Welcome <?php echo $_SESSION['username']; ?></h2>
		<!-- <a href="logout.php" id="lg"> LOGOUT </a> -->
	</div>

  <form action="check.php" method="POST" >
  <div class="container">
<div class="num">
  
    <label><b>Number Plate</b></label>
    <input type="text" name="Number_plate" id="Number_plate">

    <button type="submit" name="checkk" class="check">Check</button>
</div>
  </div>
</form>

<script>
    function show(){
    var toggle=document.getElementById('responsive');
    toggle.classList.toggle('toggle');
}

</script>
<br>
<br>
       <div id="dv-1">

        <button class="div-cls1" ><a href="issuechallan.php" target="_blank" >Issue Challan</a></button>
           
       </div>


</body>
</html>