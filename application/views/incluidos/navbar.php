<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">

					<a class="navbar-brand brand-logo" style="cursor: default;">
						<img src="<?= base_url() ?>/assets/images/logo.svg" alt="logo"/>
					</a>

          <a class="navbar-brand brand-logo" style="cursor: default;">
						<img src="<?= base_url() ?>/assets/images/logoname.svg" alt="logoname"/>
					</a>

          <a class="navbar-brand brand-logo-mini" href="<?php echo site_url('principal');?>">
						<img src="<?= base_url() ?>/assets/images/logo.svg" alt="logo"/>
					</a>

          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>
			</div>
			
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav navbar-nav-right">

				<li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <span class="nav-profile-name"><i class="mdi mdi-settings"></i>Maestros</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="<?php echo site_url('genero');?>">
                <i class="mdi mdi-apps text-primary"></i>
                Género
              </a>
              <a class="dropdown-item" href="<?php echo site_url('plataforma');?>">
                <i class="mdi mdi-gamepad-variant text-primary"></i>
                Plataforma
              </a>
            </div>

          </li>

          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <span class="nav-profile-name"><i class="mdi mdi-account-key"></i>Administrador</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="<?php echo site_url('salir');?>">
                <i class="mdi mdi-logout text-primary"></i>
                Cerrar sesión
              </a>
            </div>
          </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
