<div class="vertical-menu">

    <div data-simplebar class="h-100">
        <div class="user-details">
            <div class="d-flex">
                <div class="me-2">
                    <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-md rounded-circle">
                </div>
                <div class="user-info w-100">
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            <i class="mdi mdi-chevron-down"></i>
                        </a>

                    </div>

                    <p class="text-white-50 m-0">Administrator</p>
                </div>
            </div>
        </div>


        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <li>
                    <a href="index.html" class="waves-effect">
                        <i class="mdi mdi-home"></i><span class="badge bg-primary float-end">3</span>
                        <span>Inicial</span>

                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-car"></i>
                        <span>Cadastros</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(url('dash/tipo')); ?>">Tipo</a></li>
                        <li><a href="<?php echo e(url('dash/fabricantes')); ?>">Fabricantes</a></li>
                        <li><a href="<?php echo e(url('dash/modelos')); ?>">Modelos</a></li>
                        <li><a href="<?php echo e(url('dash/opcionais')); ?>">Opcionais</a></li>
                        <li><a href="<?php echo e(url('dash/automoveis')); ?>">Automóveis</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-target"></i>
                        <span>Marketing</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(url('dash/marketing')); ?>">Banners</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-account-group"></i>
                        <span>Anunciantes</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-email"></i>
                        <span>Pedido de Orçamentos (Breve)</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-share-variant"></i>
                        <span>Integrações  (Breve)</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Olx Brasil  (Breve)</a></li>
                        <li><a href="#">Facebook  (Breve)</a></li>
                        <li><a href="#">Sitemap  (Breve)</a></li>
                    </ul>
                </li>

                <li>
                    <a href="" class="has-arrow waves-effect">
                        <i class="mdi mdi-api"></i>
                        <span>API  (Breve)</span>
                    </a>
                </li>









            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div><?php /**PATH /home/servidor/Sites/ph/resources/views/adm/nav.blade.php ENDPATH**/ ?>