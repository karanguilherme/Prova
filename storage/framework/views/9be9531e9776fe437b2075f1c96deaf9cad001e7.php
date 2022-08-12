<!DOCTYPE html>
<html lang="pt-br">
<?php echo $__env->make('adm.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body data-topbar="colored">

<div id="layout-wrapper">


<?php echo $__env->make('adm.top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->make('adm.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="main-content" >

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title">
                                <h4 class="mb-0 font-size-18">Marcas</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-content-wrapper">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive order-table">
                                        <table class="table table-hover align-middle mb-0" >
                                            <thead>
                                            <tr>
                                                <th scope="col">(#) Id</th>
                                                <th scope="col">Banner</th>
                                                <th scope="col">Campanha</th>
                                                <th scope="col">Data Inicio</th>
                                                <th scope="col">Data Final</th>
                                                <th scope="col text-right">Ações</th>
                                            </tr>
                                            </thead>
                                            <tbody  id="result">

                                            <?php foreach($mkt as $m){ ?>
                                            <tr>
                                                <th scope="row line" id="id">#<?php echo $m->id?></th>
                                                <td>
                                                    <div>
                                                        <img src="<?php echo e(asset('imgs/marketing/'.$m->banner)); ?>" alt="" class="avatar-md rounded-circle me-2">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <?php echo $m->campanha?>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <?php echo $m->datainicio?>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <?php echo $m->datafim?>
                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                    <div>
                                                        <a  class="btn btn-danger btn-sm delele-marketing"  data-id="<?php echo $m->id?>">Excluir</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php }?>

                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <script>document.write(new Date().getFullYear())</script> © Agência Digital Vertex <span class="d-none d-sm-inline-block"></span>
                    </div>
                </div>
            </div>
        </footer>
    </div>


</div>





<?php echo $__env->make('adm.modulos.marketing.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('adm.modulos.marketing.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>





<div class="rightbar-overlay"></div>

<?php echo $__env->make('adm.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<script>
    $(document).ready(function () {
        $("#createNewDropdown").click(function(){
            $('.modal-backdrop.show').css('opacity','');
            $('.modal-backdrop').css('z-index','')
        });
    });

</script>
</body>

</html><?php /**PATH /home/phmultimarcas/dash.phmultimarcas.com.br/resources/views/adm/modulos/marketing/index.blade.php ENDPATH**/ ?>