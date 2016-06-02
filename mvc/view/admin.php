<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Área do Administrador</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
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
                
                <li><a href="#"></i>Logout</a></li>
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
                <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">Configurações</a>
                    <ul class="nav nav-stacked collapse in" id="userMenu">
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-home"></i> Tabelas</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-envelope"></i> Notícias <span class="badge badge-info">4</span></a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Options</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-comment"></i> Shoutbox</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-user"></i> Staff List</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-flag"></i> Transactions</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-exclamation-sign"></i> Rules</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
                    </ul>
                </li>

            <hr>

            <a href="#"><strong><i class="glyphicon glyphicon-link"></i> Comentários</strong></a>

            <hr>

            <ul class="nav nav-pills nav-stacked">
                <li class="nav-header"></li>
                <li><a href="#"><i class="glyphicon glyphicon-list"></i> Comentários</a></li>
            </ul>

           
           

        </div>
        <!-- /col-3 -->
        <div class="col-sm-9">

            <!-- column 2 -->
            <ul class="list-inline pull-right">
                <li><a href="#"><i class="glyphicon glyphicon-cog"></i></a></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-comment"></i><span class="count">3</span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">1. Is there a way..</a></li>
                        <li><a href="#">2. Hello, admin. I would..</a></li>
                        <li><a href="#"><strong>All messages</strong></a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="glyphicon glyphicon-user"></i></a></li>
                <li><a title="Add Widget" data-toggle="modal" href="#addWidgetModal"><span class="glyphicon glyphicon-plus-sign"></span> Add Widget</a></li>
            </ul>
            <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></a>
            <hr>

            <div class="row">
                <!-- center left-->
                <div class="col-md-6">
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>New Requests</h4></div>
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item active">Hosting virtual mailbox serv..</a>
                                <a href="#" class="list-group-item">Dedicated server doesn't..</a>
                                <a href="#" class="list-group-item">RHEL 6 install on new..</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/col-->
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Notices</h4></div>
                        <div class="panel-body">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">Ã—</button>
                                This is a dismissable alert.. just sayin'.
                            </div>
                            <p>This is a dashboard-style layout that uses Bootstrap 3. You can use this template as a starting point to create something more unique.</p>
                            <p>Visit the Bootstrap Playground at <a href="http://bootply.com">Bootply</a> to tweak this layout or discover more useful code snippets.</p>
                        </div>
                    </div>
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <i class="glyphicon glyphicon-wrench pull-right"></i>
                                <h4>Post Request</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="form form-vertical">
                                <div class="control-group">
                                    <label>Name</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label>Message</label>
                                    <div class="controls">
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label>Category</label>
                                    <div class="controls">
                                        <select class="form-control">
                                            <option>options</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label></label>
                                    <div class="controls">
                                        <button type="submit" class="btn btn-primary">
                                            Post
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--/panel content-->
                    </div>
                    <!--/panel-->

                    
                    <!--/panel-->

                </div>
                <!--/col-span-6-->

            </div>
            <!--/row-->

        <!--/col-span-9-->
    </div>
</div>
<!-- /Main -->

<footer class="text-center">This Bootstrap 3 dashboard layout is compliments of <a href="http://www.bootply.com/85850"><strong>Bootply.com</strong></a></footer>

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