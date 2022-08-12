<div id="myModal" class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Novo Automóvel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="salvar" method="post" enctype="multipart/form-data" novalidate>
            <?php echo e(csrf_field()); ?>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label" for="tipo">Tipo <span style="color: red">*</span></label>
                                    <select class="form-control" id="tipo" name="tipo" required>
                                            <option>Selecione o Tipo</option>
                                            <?php foreach($tipos as $t){?>
                                                 <option value="<?php echo $t->id_tipo ?>"><?php echo $t->tipo ?></option>
                                            <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-3">

                                    <label class="form-label" for="fabricante">Fabricante <span style="color: red">*</span></label>
                                    <select class="form-control" id="fabricante" name="fabricante" required>
                                        <option>Selecione o Fabricante</option>

                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label" for="modelo">Modelo <span style="color: red">*</span></label>
                                    <select class="form-control" id="modelo" name="modelo" required>
                                        <option>Selecione o Modelo</option>

                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label" for="cor">Cor <span style="color: red">*</span></label>
                                    <select class="form-control" id="cor" name="cor" required>
                                        <option>Selecione a Cor</option>
                                        <?php foreach($cores as $c){?>
                                        <option value="<?php echo $c->id_cor ?>"><?php echo $c->cor ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label" for="ano_fabricacao">Ano de Fabricação <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="ano_fabricacao" name="ano_fabricacao" placeholder="Ex: 2022"  required>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label" for="ano_modelo">Ano Modelo <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="ano_modelo" name="ano_modelo" placeholder="Ex: 2023"  required>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label" for="quilometragem">Quilometragem(KM) <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="quilometragem" name="quilometragem" placeholder="Ex: 100.000"  required>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label" for="cambio">Tipo de Câmbio <span style="color: red">*</span></label>
                                    <select class="form-control" id="tipo_cambio" name="tipo_cambio" required>
                                        <option>Selecione o Tipo do câmbio</option>
                                        <?php foreach($cambios as $ca){?>
                                        <option value="<?php echo $ca->id ?>"><?php echo $ca->cambio ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label" for="combustivel">Combustível <span style="color: red">*</span></label>
                                    <select class="form-control" id="combustivel" name="combustivel" required>
                                        <option>Selecione o Tipo do combustível</option>
                                        <option value="Gasolina">Gasolina</option>
                                        <option value="Etanol">Etanol</option>
                                        <option value="Flex">Flex</option>
                                        <option value="Elétrico">Elétrico</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label" for="qtde_portas">Portas <span style="color: red">*</span></label>
                                    <select class="form-control" id="qtde_portas" name="qtde_portas" required>
                                        <option>Quantidade de Portas</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="titulo">Titulo</label>
                                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ex: Volkswagen Gol 1000 Mi 16v 4p Turbo"  required>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label " for="valor">Valor <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="valor" name="valor" placeholder="Ex: 35.000,00"  required>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label" for="final_placa">Final da Placa <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="final_placa" name="final_placa" placeholder="Ex: 9"  required>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label " for="destaque">É Destaque? </label>
                                    <div>
                                        <input type="checkbox" id="destaque" switch="bool" name="destaque" checked />
                                        <label class="form-label" for="destaque" data-on-label="Sim" data-off-label="Não"></label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label " for="mostrar_valor">Mostrar valor?</label>
                                    <div>
                                        <input type="checkbox" id="mostrar_valor" switch="bool" name="mostrar_valor" checked />
                                        <label class="form-label" for="mostrar_valor" data-on-label="Sim" data-off-label="Não"></label>
                                    </div>
                                </div>

                                <div class="col-md-12 ">
                                    <label class="form-label " for="qtde_portas">Opcionais <span style="color: red">*</span></label>


                                    <select id="js-choice" name="opcionais[]" multiple>
                                        <option>Selecione os Opcionais</option>
                                        <?php foreach($opcionais as $op){?>
                                        <option value="<?php echo $op->id ?>"><?php echo $op->nome ?></option>
                                        <?php } ?>
                                    </select>

                                </div>

                                <div class="col-md-12">
                                    <label class="form-label" for="opcional">Descrição</label>
                                    <textarea id="elm1" name="descricao"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12">
                        <label class="form-label" for="opcional">Fotos <span style="color: red">*</span></label>

                        <div class="card">



                            <div class="card-body">

                                <div >
                                    <div class="fallback">
                                        <input name="fotos[]" type="file" multiple="multiple">
                                        <pre style="color: red">Atenção: Use apenas imagens na Horizontal para meior experiência do usuário, fotos na vertical poderão ficarem distorcidas.</pre>
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
</style><?php /**PATH /home/phmultimarcas/dash.phmultimarcas.com.br/resources/views/adm/modulos/automoveis/create.blade.php ENDPATH**/ ?>