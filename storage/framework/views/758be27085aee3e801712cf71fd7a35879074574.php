<div id="myModal" class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Novo Automóvel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div id="salvar">
            <?php echo e(csrf_field()); ?>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label" for="opcional">Tipo</label>
                                    <select class="form-control" id="tipo" required>

                                    <option value="">Carro</option>
                                    <option value="">Moto</option>
                                    <option value="">Camionete</option>
                                    <option value="">Caminhão</option>
                                    <option value="">Trator</option>

                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="opcional">Automóvel</label>
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex: Volkswagen Gol 1000 Mi 16v 4p Turbo"  required>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label" for="opcional">Ano de Fabricação</label>
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex: Volkswagen Gol 1000 Mi 16v 4p Turbo"  required>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label" for="opcional">Ano Modelo</label>
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex: Volkswagen Gol 1000 Mi 16v 4p Turbo"  required>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label" for="opcional">Cor</label>
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex: Volkswagen Gol 1000 Mi 16v 4p Turbo"  required>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label" for="opcional">Quilometragem(KM)</label>
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex: Volkswagen Gol 1000 Mi 16v 4p Turbo"  required>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label" for="opcional">Tipo de Câmbio</label>
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex: Volkswagen Gol 1000 Mi 16v 4p Turbo"  required>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label" for="opcional">Portas</label>
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex: Volkswagen Gol 1000 Mi 16v 4p Turbo"  required>
                                </div>

                                <div class="col-md-12">
                                    <label class="form-label" for="opcional">Descrição</label>
                                    <textarea id="elm1" name="descricao"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12">
                        <label class="form-label" for="opcional">Fotos</label>

                        <div class="card">

                            <div class="card-body">
                                <form action="#" class="needs-validation dropzone" enctype="multipart/form-data" novalidate>
                                <div >
                                    <div class="fallback">
                                        <input name="file" type="file" multiple="multiple">
                                    </div>
                                    <div class="dz-message needsclick">
                                        <div class="mb-3">
                                            <i class="display-4 text-muted mdi mdi-upload-network-outline"></i>
                                        </div>
                                        <h4>Arraste as fotos para este local.</h4>
                                    </div>
                                </div>
                                </form>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-ganger waves-effect" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" name="upload" id="upload" class="btn btn-success waves-effect waves-light" data-dismiss="modal" data-backdrop="false">Salvar</button>
                </div>
            </div>


    </div>

</div>
</div>
<style>
    .form-label {
        margin: 0.5rem 0;
    }
</style><?php /**PATH /home/servidor/Sites/ph/resources/views/adm/modulos/automoveis/create.blade.php ENDPATH**/ ?>