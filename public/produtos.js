var produtos = {

    gravar: function(){

        $('#gravar').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url:"api/gravar",
                method:"POST",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(data)
                {

                    if(data.success == true){

                        swal.fire({
                            title: "Cadastrado com sucesso!",
                            text:  ""+data.mensagem+"",
                            icon: "success"
                        });

                    }else{
                        swal({
                            title: "Ooops!",
                            text: ""+data.mensagem+"",
                            icon: "error",
                        });

                    }
                }
            })
        });


    },
    excluir: function(){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $("#produtos").on("click",".deletar", function(){

            swal.fire({
                title: 'Deseja realmente excluir? ',
                text: "Não será possível reverter essa ação!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Confirmar!',
                cancelButtonText: "Fechar",
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        type:'DELETE',
                        url:"api/produto/deletar/"+$(this).data("id"),
                        // data:{id:$(this).data("id")},
                        dataType: 'json',
                        success:function (json){
                            if(json.success == true){

                                swal.fire({
                                    title: "Excluido com sucesso!",
                                    text: ""+json.mensagem+"",
                                    icon: "success"
                                });

                                setTimeout(function () {
                                    location.reload(true)
                                }, 3000);

                            }else{
                                swal.fire({
                                    title: "Ooops!",
                                    text: ""+json.mensagem+"",
                                    icon: "error",
                                });

                            }

                        }

                    })


                }
            })

        });



    },
    visualizarProduto: function(){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $("#visualizar").on("click", function(){

            $.ajax({
                type:'GET',
                url:"/api/produtos/"+$(this).data("id"),
                data:{id:$(this).data("id")},
                dataType: 'json',
                success:function (json){

                    $("#nome").val(json.nome);
                    $("#marca").val(json.marca);
                    $("#tensao").val(json.tensao);
                    $("#descricao").val(json.descricao);
                    $("#id").val(json.id);

                }

            })



        });


    },
    editar: function() {


        $('#editar').on('submit', function (event) {

            event.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var nome      = $("input[name=nome]").val();
            var descricao = $("#descricao").val();
            var marca     = $("input[name=marca]").val();
            var tensao    = $("input[name=tensao]").val();
            var id        = $("input[name=id]").val();

                console.log(descricao);
            $.ajax({
                url: "api/editar",
                type: 'POST',
                data: {nome: nome, descricao: descricao, marca: marca, tensao: tensao, id: id},
                dataType: 'json',
                success: function (json) {

                    if (json.success == true) {

                        swal.fire({
                            title: "Editado com sucesso!",
                            text: "" + json.mensagem + "",
                            icon: "success"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $('#myModal').modal('hide');
                            }
                            $('.modal').each(function () {
                                $(this).modal('hide');
                                $('.modal-backdrop.show').css('opacity', '0');
                                $('.modal-backdrop').css('z-index', '-1')
                            });
                        });

                        location.reload(true);

                    } else {
                        swal.fire({
                            title: "Ooops!",
                            text: "" + json.mensagem + "",
                            icon: "error",
                        });

                    }

                }

            })




        });

    },



}


$(document).ready(function () {

    produtos.gravar();
    produtos.visualizarProduto();
    produtos.editar();
    produtos.excluir();


});
