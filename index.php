<html>
<head>
        <title>E-challan system</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
       <link type="text/css" rel="stylesheet" href="applications.css">
       <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
</head>  
<body style="  background: linear-gradient(135deg, orange 30%, cyan);">

    <div class="container" style="padding-top:200px;">
    
        <div class="row">
        <h1 style="text-align:center;Margin-bottom:60px;font-family: 'Kaushan Script', cursive;font: size 6px;0px;">Registration Form </h1>
            <div class="col-lg-12" style="    width: 38%;
    text-align: center;
    /* margin: auto; */
    margin-left: 360px;"> 
            
            <h2>Login </h2>
            
            <form action="loginscript.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" class="form-control">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <button type="submit" name="btn-click" class="btn btn-primary">Login</button>
            </form>

        </div>

        </div>
    </div>

</body>
</html>