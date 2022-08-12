<!-- JAVASCRIPT -->
<script src="<?php echo e(URL::asset('adm/libs/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('adm/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('adm/libs/metismenu/metisMenu.min.js')); ?>"></script>

<!-- App js -->
<script src="<?php echo e(URL::asset('adm/js/app.js')); ?>"></script>

<script src="<?php echo e(URL::asset('adm/js/pages/form-validation.init.js')); ?>"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


<script src="<?php echo e(URL::asset('js/adm/main.js')); ?>"></script>



<?php if(!empty($page)){?>

    <?php if($page == 'fabricantes'){?>
        <script src="<?php echo e(URL::asset('adm/js/pages/dashboard.init.js')); ?>"></script>
    <?php }?>

    <?php if($page == 'fabricantes'){?>
        <script src="<?php echo e(URL::asset('js/adm/fabricantes/fabricantes.js')); ?>"></script>
    <?php }?>

    <?php if($page == 'modelo'){?>
            <script src="<?php echo e(URL::asset('js/adm/modelos/modelos.js')); ?>"></script>
    <?php }?>

    <?php if($page == 'opcionais'){?>
        <script src="<?php echo e(URL::asset('js/adm/opcionais/cms.js')); ?>"></script>
    <?php }?>

    <?php if($page == 'automoveis'){?>
        <script src="<?php echo e(URL::asset('js/adm/automoveis/selectMultiple.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('js/adm/automoveis/cms.js')); ?>"></script>

        <script src="<?php echo e(URL::asset('js/adm/automoveis/maskInput.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('adm/libs/tinymce/tinymce.min.js')); ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
        <script src="<?php echo e(URL::asset('adm/js/pages/form-editor.init.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('js/adm/libs/choices.min.js')); ?>"></script>


    <?php }?>

    <?php if($page == 'paginas'){?>

        <script src="<?php echo e(URL::asset('adm/libs/tinymce/tinymce.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('js/adm/paginas/cms.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('adm/js/pages/form-editor.init.js')); ?>"></script>

    <?php }?>

    <?php if($page == 'marketing'){?>
        <script src="<?php echo e(URL::asset('js/adm/marketing/cms.js')); ?>"></script>
    <?php }?>

    <?php if($page == 'tipos'){?>
         <script src="<?php echo e(URL::asset('js/adm/tipo/cms.js')); ?>"></script>
    <?php }?>

    <?php if($page == 'cores'){?>
        <script src="<?php echo e(URL::asset('js/adm/cores/cms.js')); ?>"></script>
    <?php }?>

    <?php if($page == 'cambio'){?>
    <script src="<?php echo e(URL::asset('js/adm/cambio/cms.js')); ?>"></script>
    <?php }?>
<?php }?>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.19/sweetalert2.min.js" integrity="sha512-8EbzTdONoihxrKJqQUk1W6Z++PXPHexYlmSfizYg7eUqz8NgScujWLqqSdni6SRxx8wS4Z9CQu0eakmPLtq0HA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.19/sweetalert2.all.js" integrity="sha512-/vz9zuhaRh2nY4tgFy//B52ghWGt9+iOCYKr1OOmjYpCb68khSixntYopw1vgEdO3620Pmq3gi4WmwTQhv7Zrg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php /**PATH /home/phmultimarcas/dash.phmultimarcas.com.br/resources/views/adm/layout/footer.blade.php ENDPATH**/ ?>