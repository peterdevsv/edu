	<div class="nav_menu">
		<div class="nav toggle">
			<a id="menu_toggle"><i class="fa fa-bars"></i></a>
		</div>
		<nav class="nav navbar-nav">
			<ul class=" navbar-right">
				<li class="nav-item dropdown open" style="padding-left: 15px;">
					<a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
						<img src="user/img/user.png" alt=""><?php  $session = session(); 
						echo $session->usuario?>
					</a>
					<div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?= base_url('/SeleccionarCiclo') ?>"><i class="fa fa-exchange pull-right"></i>Seleccionar ciclo</a>
						<a class="dropdown-item" href="<?= base_url('/logout') ?>"><i class="fa fa-sign-out pull-right"></i>Cerrar sesión</a>
					</div>
				</li>

			</ul>
		</nav>
	</div>