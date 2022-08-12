<!DOCTYPE html>
<html lang="pt-br">
<?php echo $__env->make('adm.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body data-topbar="colored">

<div id="layout-wrapper">


<?php echo $__env->make('adm.top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->make('adm.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




<!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <script>document.write(new Date().getFullYear())</script> © Agência Digital Vertex <span
                                class="d-none d-sm-inline-block"></span>
                    </div>

                </div>
            </div>
        </footer>

    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<?php echo $__env->make('adm.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html><?php /**PATH /home/phmultimarcas/dash.phmultimarcas.com.br/resources/views/adm/painel_const.blade.php ENDPATH**/ ?>