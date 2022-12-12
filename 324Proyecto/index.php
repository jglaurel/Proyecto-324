<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="js/jquery-1.12.4-jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style type="text/css">
	.login-form {
		width: 340px;
    	margin: 20px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
  </head>
  <body>
    <br><br><br><br><br><br><br><br>
   <div class="login-form">         
            <form method="get" class="form-horizontal" action="indexcontrol.php">
            <h2>INICIO DE SESION</h2>
              <div class="form-group">
              <label class="col-sm-6 text-left">Usuario</label>
              <div class="col-sm-12">
              <input type="text" name="usuario" id = "usuario" class="form-control" placeholder="Ingrese Usuario" />
              </div>
              </div>
                  
              <div class="form-group">
              <label class="col-sm-6 text-left">Password</label>
              <div class="col-sm-10">
              <input type="password" id="password" name="password" class="form-control" placeholder="Ingrese passowrd" />
              </div>
              <div class="col-md-2">
              
                
            </div>
              
              </div>
              
                <div class="form-group">
                <div class="col-sm-12">
                <input type="submit" class="btn btn-danger btn-block" value="Iniciar Sesion">
                </div>
              </div>
                
          </form>
    </div> 
  </body>
</html>