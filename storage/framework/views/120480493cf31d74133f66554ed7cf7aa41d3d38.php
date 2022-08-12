<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="<?php echo e(url('/painel')); ?>" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?php echo e(asset('adm/imgs/logo-m.png')); ?>" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="<?php echo e(asset('adm/imgs/logo.png')); ?>" alt="" height="50">
                    </span>
                </a>
            </div>

            <button type="button" class="btn px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>

            <div class="dropdown d-none d-lg-inline-block align-self-center">
                <?php if(!empty($page)){?>

                    <?php if($page == 'tipos'){?>
                    <button class="btn btn-header waves-effect  dropdown-toggle" type="button" id="createNewDropdown" data-bs-toggle="modal" data-bs-target="#myModal">
                        Novo Tipo
                    </button>
                    <?php }?>

                    <?php if($page == 'fabricantes'){?>
                        <button class="btn btn-header waves-effect  dropdown-toggle" type="button" id="createNewDropdown" data-bs-toggle="modal" data-bs-target="#myModal">
                            Nova Marca
                        </button>
                    <?php }?>
                    <?php if($page == 'modelo'){?>
                    <button class="btn btn-header waves-effect  dropdown-toggle" type="button" id="createNewDropdown" data-bs-toggle="modal" data-bs-target="#myModal">
                        Novo Modelo
                    </button>
                    <?php }?>
                    <?php if($page == 'opcionais'){?>
                    <button class="btn btn-header waves-effect  dropdown-toggle" type="button" id="createNewDropdown" data-bs-toggle="modal" data-bs-target="#myModal">
                        Novo Opcional
                    </button>
                    <?php }?>
                    <?php if($page == 'automoveis'){?>
                    <button class="btn btn-header waves-effect  dropdown-toggle" type="button" id="createNewDropdown" data-bs-toggle="modal" data-bs-target="#myModal">
                        Novo Automovel
                    </button>
                    <?php }?>

                    <?php if($page == 'marketing'){?>
                    <button class="btn btn-header waves-effect  dropdown-toggle" type="button" id="createNewDropdown" data-bs-toggle="modal" data-bs-target="#myModal">
                        Novo Banner
                    </button>
                    <?php }?>

                    <?php if($page == 'paginas'){?>
                    <button class="btn btn-header waves-effect  dropdown-toggle" type="button" id="createNewDropdown" data-bs-toggle="modal" data-bs-target="#myModal">
                        Nova Página
                    </button>
                    <?php }?>


                    <?php if($page == 'cores'){?>
                    <button class="btn btn-header waves-effect  dropdown-toggle" type="button" id="createNewDropdown" data-bs-toggle="modal" data-bs-target="#myModal">
                        Nova Cor
                    </button>
                    <?php }?>

                    <?php if($page == 'cambio'){?>
                    <button class="btn btn-header waves-effect  dropdown-toggle" type="button" id="createNewDropdown" data-bs-toggle="modal" data-bs-target="#myModal">
                        Nova Câmbio
                    </button>
                    <?php }?>

                <?php }?>


            </div>
        </div>

        <div class="d-flex">
            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                     aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group search">
                                <input type="text" class="form-control" placeholder="Pesquisar ..."  name="search" aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i
                                                class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        <?php if(!empty($page)){?>
            <?php if($page == 'fabricantes'){?>
            <!-- App Search -->
            <form class="app-search d-none d-lg-block">
                <?php echo csrf_field(); ?>
                <div class="position-relative search">
                    <input type="text" class="form-control" name="search" placeholder="Pesquisa ...">
                    <span class="mdi mdi-magnify"></span>
                </div>
            </form>
            <?php }?>

            <?php if($page == 'modelo'){?>
            <!-- App Search -->
                <form class="app-search d-none d-lg-block">
                    <?php echo csrf_field(); ?>
                    <div class="position-relative search">
                        <input type="text" class="form-control" name="search" placeholder="Pesquisa ...">
                        <span class="mdi mdi-magnify"></span>
                    </div>
                </form>
            <?php }?>


            <?php if($page == 'opcionais'){?>
            <!-- App Search -->
                <form class="app-search d-none d-lg-block">
                    <?php echo csrf_field(); ?>
                    <div class="position-relative search">
                        <input type="text" class="form-control" name="search" placeholder="Pesquisa ...">
                        <span class="mdi mdi-magnify"></span>
                    </div>
                </form>
            <?php }?>

            <?php if($page == 'automoveis'){?>
             <!-- App Search -->
            <form class="app-search d-none d-lg-block">
                <?php echo csrf_field(); ?>
                <div class="position-relative search">
                    <input type="text" class="form-control" name="search" placeholder="Pesquisa ...">
                    <span class="mdi mdi-magnify"></span>
                </div>
            </form>
        <?php }?>


          <?php }?>


            <!-- Notification Dropdown -->











































































































            <!-- User -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="https://picsum.photos/200/300.jpg"
                         alt="Header Avatar">
                </button>




















            </div>

            <!-- Setting -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="mdi mdi-cog bx-spin"></i>
                </button>
            </div>

        </div>
    </div>
</header>




<?php /**PATH /home/phmultimarcas/dash.phmultimarcas.com.br/resources/views/adm/top.blade.php ENDPATH**/ ?>