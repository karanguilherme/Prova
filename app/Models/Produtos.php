<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    /*
     * A Função pode receber  um o ID do produto para selecionado
     * ou pode fazer uma collection com todos os resultados da tabela
    */
    public function produto($id=null)
    {

      if(!empty($id))
      {
          $produtos = Produtos::find($id);
      }
      else
      {
          $produtos = Produtos::all();
      }

        if(!empty($produtos)){

           return $produtos;

        }else{

            return false;

        }
    }

    public function gravar($data)
    {
        if(!empty($data))
        {
            $produtos = Produtos::insert($data);

            if(!empty($produtos)){
                return true;
            }else{
                return false;
            }

        }
    }

    public function editar($data ,$id )
    {


            $produtos = Produtos::where('id', $id)
                ->update($data);


            if(!empty($produtos)){
                return $produtos;
            }else{
                return false;
            }


    }
    
    /*a Função Recebe o ID do produto para remoção no banco de dados*/
    public function deletar($id=null)
    {
        if(!empty($id))
        {
            $produtos = Produtos::where('id',$id)
            ->delete();

            if(!empty($produtos)){
                return true;
            }else{
                return false;
            }

        }

    }


}
