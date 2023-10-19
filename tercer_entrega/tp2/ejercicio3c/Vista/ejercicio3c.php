<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" style="display: flex; flex-direction: column; align-items: center;"> <!-- Usar flexbox -->                    
                <div style="margin-top: auto; margin-bottom: auto;">
                    <div margin-top: auto; margin-bottom: auto;> <h1>Member Login</h1></div>
                </div>     

                <div style="padding-top:30px" class="panel-body" >
                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        
                    <form action="../Control/verificaPass.php" method="post" id="loginform" class="form-horizontal" role="form" >
                                
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="username" type="text" class="form-control" name="username" value="" placeholder="Username">                                        
                        </div>
                    
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                        </div>

                        <div style="margin-top:10px" class="form-group">
                            <!-- Button -->
                            <div class="col-sm-12 controls">
                            <button id="btn-login" class="btn btn-success btn-block" type="submit">Login</button>
                            </div>
                        </div>
                    </form>
                </div>                     
            </div>  
        </div>
    </div>
    <a class="button" href="../../../menu/indexMenu.html">Volver</a>
</body>
</html>
