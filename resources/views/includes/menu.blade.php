<div class="panel panel-primary">
    <div class="panel-heading">Men&uacute;</div>

    <div class="panel-body">
    	<ul class="nav nav-pills nav-stacked">     
    	@if(auth()->check())
      		<li><a href="#">Dashboard</a></li>
			<li><a href="#">Ver incidencia</a></li>
			<li><a href="#">Reportar Incidencia</a></li>
		    <li role="presentation" class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                Administración <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Usuarios</a></li>
                    <li><a href="#">Proyectos</a></li>
                    <li><a href="#">Configuración</a></li>
                </ul>
            </li>

    	@else
			<li><a href="#">Bienvenidos</a></li>
			<li><a href="#">Instrucciones</a></li>
			<li><a href="#">Cr&eacute;ditos</a></li>
    	@endif
    	<ul>
    </div>
</div>
