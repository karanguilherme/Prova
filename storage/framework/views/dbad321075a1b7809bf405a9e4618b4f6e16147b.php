<div id="editar" class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="edita" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Editar Página</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="gravar_edicao" method="post">
                <?php echo e(csrf_field()); ?>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="form-label" for="nome_pagina_edt">Nome da página</label>
                                    <input type="text" class="form-control" id="nome_pagina_edt" name="nome_pagina_edt" placeholder="Ex: Quem Somos"  required>
                                    <input type="hidden" id="id_edt" name="id_edt" required>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="url_pagina">Url da página</label>
                                    <input type="text" class="form-control" id="url_pagina_edt" name="url_pagina_edt" placeholder="Ex: quem-somos"  required>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <legend>SEO</legend>
                                        <div class="col-md-12">
                                            <label class="form-label" for="meta_title">Meta Titulo</label>
                                            <input type="text" class="form-control" id="meta_title_edt" name="meta_title_edt" placeholder=""  >
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="keywords_pagina_edt">Meta Keywords</label>
                                            <input type="text" class="form-control" id="meta_keywords_edt" name="meta_keywords_edt" placeholder=""  >
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="meta_description_edt">Meta Descrição</label>
                                            <input type="text" class="form-control" id="meta_description_edt" name="meta_description_edt" placeholder=""  >
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="col-md-12">
                                    <label class="form-label" for="conteudo">Conteúdo</label>
                                    <textarea id="conteudo" name="conteudo_edt"></textarea>
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
</style><?php /**PATH /home/phmultimarcas/dash.phmultimarcas.com.br/resources/views/adm/modulos/paginas/edit.blade.php ENDPATH**/ ?>