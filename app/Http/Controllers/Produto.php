<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Models\Produtos;

class Produto extends Controller
{
     public function index(){
        $produto    = new Produtos();
        $produtos   = $produto->produto();
        return view('index',compact('produtos'));
    }

    public function cadastro(){
        return view('cadastro');
    }


    /*Função que recebe post para gravação de dados*/
    public function gravar(Request $request)
    {
        $nome      = $request->input('nome');
        $descricao = $request->input('descricao');
        $tensao    = $request->input('tensao');
        $marca     = $request->input('marca');


        $data = array(
                'nome'      => $nome      ,
                'descricao' => $descricao ,
                'tensao'    => $tensao  ,
                'marca'     => $marca
        );

        $produto = new Produtos();
        $query   = $produto->gravar($data);

        if(!empty($query))
        {
            return response()->json(['success'=> true, 'mensagem'=>'Produto cadastrado com sucesso']);
        }
    }


    /*
    Esta Função poderá ser utilizada tanto para listar todos os produtos cadastrados,
    quanto para trazer um produto especifico através do id de produto ja cadastrado
    */
    public function produto($id=null)
    {
        $produto = new Produtos();
        $query   = $produto->produto($id);

        if(!empty($query))
        {
            return json_encode($query);

        }else{
            return response()->json(['error' => true, 'mensagem' => 'Não foi encontrado nenhum resultado cadastrado']);
        }
    }



    /*Função que recebe post para edição de dados*/
    public function editar(Request $request)
    {
        $nome      = $request->input('nome');
        $descricao = $request->input('descricao');
        $tensao    = $request->input('tensao');
        $marca     = $request->input('marca');
        $id        = $request->input('id');


        $data = array(
            'nome'      => $nome      ,
            'descricao' => $descricao ,
            'tensao'    => $tensao    ,
            'marca'     => $marca
        );

        $produto = new Produtos();
        $query   = $produto->editar($data, $id);

        if($query)
        {
            return response()->json(['success'=> true, 'mensagem'=>'Produto editado com sucesso']);
        }
    }


    /*Função que recebe id  para deletar produto do banco de dados*/
    public function deletar($id)
    {
        if(!empty($id))
        {
            $produto = new Produtos();
            $query   = $produto->deletar($id);

            if(!empty($query))
            {
                return response()->json(['success'=> true, 'mensagem'=>'Produto excluído com sucesso']);
            }

        }else{
            return response()->json(['success'=> true, 'mensagem'=>'Não foi passado um codigo de identificação!']);
        }


    }


}
