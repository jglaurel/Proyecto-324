<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="js/jquery-1.12.4-jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<title>Formulario Datos</title>
		
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
<!--Cierra div login-->
 
<div class="wrapper">
	
	<div class="container">
		<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h1> Registro de Datos.<h1>
                        </div>
                        <!-- /.panel-heading -->
                        <form method="get" action="">
                        <div class="panel-body">
                            <div class="table-responsive">
                            <div class="login-form">
                                <div class="form-group">
                                  <label class="col-sm-6 text-left">Nombres</label>
                                  <div class="col-sm-12">
                                      <input type="text" name="nombres" id ="nombres"class="form-control" placeholder="Ingrese Nombre" />
                                  </div>
                                </div>
                                    
                                <div class="form-group">
                                  <label class="col-sm-6 text-left">Apellido paterno</label>
                                      <div class="col-sm-12">
                                      <input type="text" id="aPaterno" name="aPaterno" class="form-control" placeholder="Ingrese su Apellido paterno" />
                                      </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-6 text-left">Apellido materno</label>
                                      <div class="col-sm-12">
                                      <input type="text" id="aMaterno" name="aMaterno" class="form-control" placeholder="Ingrese su Apellido materno" />
                                      </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-6 text-left">Monto</label>
                                      <div class="col-sm-12">
                                      <input type="number" id="monto" name="monto" class="form-control" placeholder="Ingrese el monto" />
                                      </div>
                                </div>

                              </div>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                      </form>
                    </div>
                    <!-- /.panel -->
                </div>
		
	</div>
			
	</div>

										
	</body>
</html>