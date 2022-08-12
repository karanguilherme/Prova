<div id="myModal" class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Nova Página</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="salvar" method="post">
            <?php echo e(csrf_field()); ?>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="form-label" for="nome_pagina">Nome da página</label>
                                    <input type="text" class="form-control" id="nome_pagina" name="nome_pagina" placeholder="Ex: Quem Somos"  required>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="url_pagina">Url da página</label>
                                    <input type="text" class="form-control" id="url_pagina" name="url_pagina" placeholder="Ex: quem-somos"  required>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <legend>SEO</legend>
                                        <div class="col-md-12">
                                            <label class="form-label" for="meta_title">Meta Titulo</label>
                                            <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder=""  >
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="meta_keywords">Meta Keywords</label>
                                            <input type="text" class="form-control" id="url_pagina" name="meta_keywords" placeholder=""  >
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="meta_keywords">Meta Descrição</label>
                                            <input type="text" class="form-control" id="meta_description" name="meta_description" placeholder=""  >
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="col-md-12">
                                    <label class="form-label" for="conteudo">Conteúdo</label>
                                    <textarea id="elm1" name="conteudo"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-ganger waves-effect" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" name="upload" id="upload" class="btn btn-success waves-effect waves-light" data-dismiss="modal" data-backdrop="false">Salvar</button>
                </div>
            </form>


    </div>

</div>
</div>
<style>
    .form-label {
        margin: 0.5rem 0;
    }
</style><?php /**PATH /home/phmultimarcas/dash.phmultimarcas.com.br/resources/views/adm/modulos/paginas/create.blade.php ENDPATH**/ ?>