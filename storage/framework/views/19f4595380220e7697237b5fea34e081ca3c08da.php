<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Prova</title>

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="<?php echo e(URL::asset('produtos.css')); ?>" rel="stylesheet" >
</head>
<body>


<div class="container " id="produtos">
    <div class="row">
        <div class="col-12 col-md-12 com-sm-12">
            <h1 class="card-title">Produtos Cadastrados</h1>
        </div>
    </div>

    <div class="row">

        <div class="col-12 col-md-12 com-sm-12">
            <a href="<?php echo e(url('cadastro')); ?>" class="btn btn-primary">Novo Produto</a>
        </div>
    </div>
    <div class="row cabecalho">
        <div class="col-12 col-md-2 col-sm-12">Nome</div>
        <div class="col-12 col-md-2 col-sm-12">Descrição</div>
        <div class="col-12 col-md-2 col-sm-12">Voltagem</div>
        <div class="col-12 col-md-2 col-sm-12">Marca</div>
        <div class="col-12 col-md-2 col-sm-12">Editar</div>
        <div class="col-12 col-md-2 col-sm-12">Excluir</div>
    </div>
    <?php if(!empty($produtos)): ?>
        <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row">
                <div class="col-12 col-md-2 col-sm-12"><?php echo e($p->nome); ?></div>
                <div class="col-12 col-md-2 col-sm-12"><?php echo e($p->descricao); ?></div>
                <div class="col-12 col-md-2 col-sm-12"><?php echo e($p->tensao); ?></div>
                <div class="col-12 col-md-2 col-sm-12"><?php echo e($p->marca); ?></div>
                <div class="col-12 col-md-2 col-sm-12">
                    <button class="btn btn-dark" id="visualizar" data-id="<?php echo e($p->id); ?>" data-bs-toggle="modal" data-bs-target="#exampleModal"> Editar </button>
                </div>
                <div class="col-12 col-md-2 col-sm-12">
                    <button class="btn btn-danger deletar" data-id="<?php echo e($p->id); ?>">
                        Excluir
                    </button>
                </div>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div>





<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
               <?php echo $__env->make('editar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="<?php echo e(URL::asset('produtos.js')); ?>"></script>

</body>
</html><?php /**PATH /home/servidor/Prova/resources/views/index.blade.php ENDPATH**/ ?>