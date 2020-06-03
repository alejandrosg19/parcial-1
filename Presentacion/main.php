<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Vivienda
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="index.php?pid=<?php echo base64_encode('Presentacion/Vivienda/insertarVivienda.php')?>">Crear</a> 
                    <a class="dropdown-item" href="index.php?pid=<?php echo base64_encode('Presentacion/Vivienda/consultarVivienda.php')?>">Consultar</a> 
                </div>
             </li>
        </ul>
        <ul class="navbar-nav">
			<li class="nav-item active"><a class="nav-link" >Bienvenido Adminitrador</a></li>
		</ul>
    </div>
</nav>