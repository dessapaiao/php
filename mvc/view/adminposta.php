<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Área do Administrador</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="/mvc/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="/mvc/css/styles.css" rel="stylesheet">
	</head>
	<body>
<!-- header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Área do Administrador</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                
                <li><a href="https://trabalho-php-paiao.c9users.io/login/logout"></i>Logout</a></li>
            </ul>
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <!-- Left column -->
            <a href="#"><strong><i></i> Ferramentas</strong></a>

            <hr>

                 <ul class="nav nav-stacked">
                    <ul class="nav nav-stacked collapse in" id="userMenu">
                        <li class="active"><a href="https://trabalho-php-paiao.c9users.io/login/adminposta">Notícias</a></li>
                        <li><a href="https://trabalho-php-paiao.c9users.io/login/adminresenha">Resenha</a></li>
                        <li><a href="https://trabalho-php-paiao.c9users.io/login/admincadastro"> Usuario</a></li>
                    </ul>
                </li>

            <hr>

            <a href="https://trabalho-php-paiao.c9users.io/login/admincomentario"><strong> Comentários</strong></a>

            <hr>

            <ul class="nav nav-pills nav-stacked">
                <li class="nav-header"></li>
                <li><a href="https://trabalho-php-paiao.c9users.io/login/adminnewsletter"> newsletter </a></li>
            </ul>

        </div>
        <!-- /col-3 -->
        <div class="col-sm-9">

            
            <a href="#"><strong>Meu Painel</strong></a>
            <hr>

            <div class="row">
              
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                
                                <h4>Adicionar um novo usuario</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form  action="/usuario/cadastroPosta" method="POST"  class="form form-vertical"/>
                                <div class="control-group">
                                    <label>Titulo </label>
                                    <div class="controls">
                                        <input type="text" name="tiulo" class="form-control" placeholder="Filme"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label>Data</label>
                                    <div class="controls">
                                        <input type="date" name="data"  class="form-control"/>
                                         
                                    </div>
                                <div class="control-group">
                                    <label>Conteúdo</label>
                                    <div class="controls">
                                        <input type="text" name="posti" class="form-control" placeholder="Digite aqui o conteúdo"/>
                                </div>
                                </div>
                                 <div class="control-group">
                                    <label>Autor do post</label>
                                    <div class="controls">
                                        <input type="text" name="autor" class="form-control" placeholder="autor"/>
                                    </div>
                                    </div>
                                    <div class="control-group">
                                    <label></label>
                                    <div class="controls">
                                    <input type="submit"  class="btn btn-primary" value="cadastrar"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--/panel content-->
                    </div>
                    <!--/panel-->

        <!--/col-span-9-->
    </div>
</div>
<!-- /Main -->


<div class="modal" id="addWidgetModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Ã—</button>
                <h4 class="modal-title">Add Widget</h4>
            </div>
            <div class="modal-body">
                <p>Add a widget stuff here..</p>
            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dalog -->
</div>
<!-- /.modal -->
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/scripts.js"></script>
	</body>
</html>