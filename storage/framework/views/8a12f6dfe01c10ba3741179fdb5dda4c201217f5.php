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
        <div class="col-12 col-md-12 com-sm-12">
            <h1 class="card-title">Editar produto</h1>
        </div>
    </div>

    <div class="row" id="app">
        <form id="editar" class="editar">
            <?php echo e(csrf_field()); ?>


            <label for="nome">Nome</label>
            <input type="text" class="form-control" placeholder="Nome do produto" name="nome" id="nome" required>
            <input type="hidden" name="id" id="id" required>

            <label for="tensao">Tensão</label>
            <input type="text" class="form-control" placeholder="Ex: 110v" id="tensao" name="tensao" required>

            <label for="marca">Marca</label>
            <input type="text" class="form-control" placeholder="Marca do produto" id="marca" name="marca" required>

            <label for="descricao">Descrição</label>

            <textarea name="descricao" id="descricao" required rows="10" class="form-control"></textarea>

            <button class="btn btn-success" type="submit"> Editar </button>
        </form>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>
</html><?php /**PATH /home/servidor/Prova/resources/views/editar.blade.php ENDPATH**/ ?>