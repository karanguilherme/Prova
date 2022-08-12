<head>
    <meta charset="UTF-8">
    <title>Painel do Cliente</title>

    <link rel="icon" type="image/x-icon" href="<?php echo e(URL::asset('adm/imgs/logo-m.png')); ?>">

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <?php if(!empty($page)){?>


            <?php if($page == 'modelos'){?>
                <link href="<?php echo e(URL::asset('adm/libs/select2/css/select2.min.css')); ?>" rel="stylesheet" type="text/css" />
                <link href="<?php echo e(URL::asset('adm/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')); ?>" rel="stylesheet" />
            <?php }?>

            <?php if($page == 'automoveis'){?>
                <link href="<?php echo e(URL::asset('adm/libs/dropzone/min/dropzone.min.css')); ?>" rel="stylesheet" />
            <?php }?>
    <?php }?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="<?php echo e(URL::asset('adm/main.css')); ?>" rel="stylesheet" >
    <!-- Bootstrap Css -->
    <link href="<?php echo e(URL::asset('adm/css/bootstrap.min.css')); ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?php echo e(URL::asset('adm/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?php echo e(URL::asset('adm/css/app.min.css')); ?>" id="app-style" rel="stylesheet" type="text/css" />


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.19/sweetalert2.min.js" integrity="sha512-8EbzTdONoihxrKJqQUk1W6Z++PXPHexYlmSfizYg7eUqz8NgScujWLqqSdni6SRxx8wS4Z9CQu0eakmPLtq0HA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.19/sweetalert2.all.js" integrity="sha512-/vz9zuhaRh2nY4tgFy//B52ghWGt9+iOCYKr1OOmjYpCb68khSixntYopw1vgEdO3620Pmq3gi4WmwTQhv7Zrg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>

    :root {
        --color_primary: #fd0000;
        --bs-indigo: #6610f2;
        --bs-purple: #6f42c1;
        --bs-pink: #d63384;
        --bs-red: #dc3545;
        --bs-orange: #fd7e14;
        --bs-yellow: #ffc107;
        --bs-green: #198754;
        --bs-teal: #20c997;
        --bs-cyan: #0dcaf0;
        --bs-white: #fff;
        --bs-gray: #6c757d;
        --bs-gray-dark: #343a40;
        --bs-primary: #0d6efd;
        --bs-secondary: #6c757d;
        --bs-success: #198754;
        --bs-info: #0dcaf0;
        --bs-warning: #ffc107;
        --bs-danger: #dc3545;
        --bs-light: #f8f9fa;
        --bs-dark: #212529;
        --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
    }

</style>
</head><?php /**PATH /home/servidor/Sites/ph/resources/views/adm/layout/header.blade.php ENDPATH**/ ?>