<div id="editarAuto" class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Editar Automóvel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="editar_auto" method="post" enctype="multipart/form-data" >
                <?php echo e(csrf_field()); ?>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label" for="tipo_edt">Tipo</label>
                                    <select class="form-control" id="tipo_edt" name="tipo_edt" required>
                                        <option>Selecione o Tipo</option>
                                        <?php foreach($tipos as $t){?>
                                        <option value="<?php echo $t->id_tipo ?>"><?php echo $t->tipo ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-3">

                                    <label class="form-label" for="fabricante_edt">Fabricante</label>
                                    <select class="form-control" id="fabricante_edt" name="fabricante_edt" required>
                                        <option>Selecione o Fabricante</option>

                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label" for="modelo_edt">Modelo</label>
                                    <select class="form-control" id="modelo_edt" name="modelo_edt" required>
                                        <option>Selecione o Modelo</option>

                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label" for="cor_edt">Cor</label>
                                    <select class="form-control" id="cor_edt" name="cor_edt" required>
                                        <option>Selecione a Cor</option>
                                        <?php foreach($cores as $c){?>
                                        <option value="<?php echo $c->id_cor ?>"><?php echo $c->cor ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label" for="ano_fabricacao_edt">Ano de Fabricação</label>
                                    <input type="text" class="form-control" id="ano_fabricacao_edt" name="ano_fabricacao_edt" placeholder="Ex: 2022"  required>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label" for="ano_modelo">Ano Modelo</label>
                                    <input type="text" class="form-control" id="ano_modelo_edt" name="ano_modelo_edt" placeholder="Ex: 2023"  required>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label" for="quilometragem_edt">Quilometragem(KM)</label>
                                    <input type="text" class="form-control" id="quilometragem_edt" name="quilometragem_edt" placeholder="Ex: 100.000"  required>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label" for="cambio_edt">Tipo de Câmbio</label>
                                    <select class="form-control" id="tipo_cambio_edt" name="tipo_cambio_edt" required>
                                        <option>Selecione o Tipo do câmbio</option>
                                        <?php foreach($cambios as $ca){?>
                                        <option value="<?php echo $ca->id ?>"><?php echo $ca->cambio ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label" for="combustivel_edt">Combustível</label>
                                    <select class="form-control" id="combustivel_edt" name="combustivel_edt" required>
                                        <option>Selecione o Tipo do combustível</option>
                                        <option value="G">Gasolina</option>
                                        <option value="A">Etanol</option>
                                        <option value="F">Flex</option>
                                        <option value="E">Elétrico</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label" for="qtde_portas_edt">Portas</label>
                                    <select class="form-control" id="qtde_portas_edt" name="qtde_portas_edt" required>
                                        <option>Quantidade de Portas</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="titulo_edt">Titulo</label>
                                    <input type="text" class="form-control" id="titulo_edt" name="titulo_edt" placeholder="Ex: Volkswagen Gol 1000 Mi 16v 4p Turbo"  required>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label " for="valor_edt">Valor</label>
                                    <input type="text" class="form-control" id="valor_edt" name="valor_edt" placeholder="Ex: 35.000,00"  required>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label " for="destaque_edt">É Destaque?</label>
                                    <div>
                                        <input type="checkbox" id="switch3" switch="bool" checked />
                                        <label class="form-label" for="switch3" data-on-label="Sim" data-off-label="Não"></label>
                                    </div>
                                </div>

                                <div class="col-md-12 ">
                                    <label class="form-label " for="qtde_portas_edt">Opcionais</label>

                                    <?php
                                    if(!empty($auto[0]->id_opcionais)){
                                        $opArr = explode(",",$auto[0]->id_opcionais);
                                    }


                                    ?>

                                    <select id="js-choice2" name="opcionais" multiple>
                                        <option>Selecione os Opcionais</option>


                                                <?php foreach($opcionais as $op){?>

                                                <option value="<?php echo $op->id ?>"><?php echo $op->nome ?></option>

                                                <?php } ?>



                                    </select>


                                </div>

                                <div class="col-md-12">
                                    <label class="form-label" for="descricao_edt">Descrição</label>
                                    <textarea id="conteudo" name="descricao_edt"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12">
                        <label class="form-label" for="fotos">Fotos</label>

                        <div class="card">


                            <div class="card-body">

                                <div >
                                    <div class="fallback">
                                        <input name="fotos[]" type="file" multiple="multiple">
                                    </div>
                                    <div class="dz-message needsclick">
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-12">
                        <label class="form-label" for="video">Video</label>

                        <div class="card">

                            <input type="text" class="form-control" id="video" name="video" placeholder="Video do Youtube">

                        </div>

                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-ganger waves-effect" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" name="upload" id="upload" class="btn btn-success waves-effect waves-light" data-dismiss="modal" data-backdrop="false">Salvar</button>
                </div>
            </form>


        </div>

    </div>
</div>
<style>
    .form-label {
        margin: 0.5rem 0;
    }
</style><?php /**PATH /home/phmultimarcas/dash.phmultimarcas.com.br/resources/views/adm/modulos/automoveis/edit.blade.php ENDPATH**/ ?>