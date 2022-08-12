<div class="container-fluid">

    <div class="row">
        <div class="col-12 col-sm-4 col-md-4 bg-login">


            <div class="login" id="login">


                <div class="col">
                    <img src="">
                </div>

                <form name="frm_login" >
                    <?php echo e(csrf_field()); ?>

                    <div class="col">
                        <input type="text" class="form-control inp" id="usuario" name="usuario" placeholder="Usuário">
                    </div>

                    <div class="col">
                        <input type="password" class="form-control inp" id="senha" name="senha" placeholder="Senha">
                    </div>

                    <div>
                        <button class="btnLogin" id="ajaxSubmit">
                            Acessar
                        </button>
                    </div>
                </form>

            </div>


        </div>
        <div class="col-12 col-sm-8 col-md-8">

        </div>

    </div>


</div><?php /**PATH /home/phmultimarcas/dash.phmultimarcas.com.br/resources/views/adm/content.blade.php ENDPATH**/ ?>