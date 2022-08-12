<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produto</title>

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="<?php echo e(URL::asset('produtos.css')); ?>" rel="stylesheet" >
</head>
<body>


<div class="container ">
    <div class="row">
        <div class="col-12 col-md-1 com-sm-12">
            <a href="<?php echo e(url('/')); ?>">Voltar</a>
        </div>
        <div class="col-12 col-md-12 com-sm-12">
            <h1 class="card-title">Cadastrado de produto</h1>
        </div>
    </div>

    <div class="row" id="app">
        <form id="gravar" >
            <label for="nome">Nome <span class="required">*</span></label>
            <input type="text" class="form-control" placeholder="Nome do produto" name="nome" required>

            <label for="tensao">Tensão <span class="required">*</span></label>
            <input type="text" class="form-control" placeholder="Ex: 110v" id="tensao" name="tensao" required>

            <label for="marca">Marca <span class="required">*</span></label>
            <input type="text" class="form-control" placeholder="Marca do produto" id="marca" name="marca" required>

            <label for="descricao">Descrição <span class="required">*</span></label>
            <textarea name="descricao" id="descricao" required rows="10" class="form-control"></textarea>

            <button class="btn btn-success" type="submit"> Salvar </button>
        </form>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="<?php echo e(URL::asset('produtos.js')); ?>"></script>

</body>
</html><?php /**PATH /home/servidor/Prova/resources/views/cadastro.blade.php ENDPATH**/ ?>