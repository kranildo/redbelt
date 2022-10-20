<?php

namespace App\Http\Controllers;

use App\Models\Crudspas;
use Illuminate\Http\Request;

class Crudspa extends Controller
{
    //
    protected $crudspas;



    public function __construct(
        Crudspas $crudspas
    ) {
        $this->crudspas = $crudspas;
    }


    /**
     * Cria um novo SPA
     * @param  string  $titulo
     * @param  string  $nome
     * @param  string  $descricao
     * @param  string  $criticidade
     * @param  string  $tipo
     * @param  string  $status
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $titulo = $request->input('titulo');
        $nome = $request->input('nome');
        $descricao = $request->input('descricao');
        $criticidade = $request->input('criticidade');
        $tipo = $request->input('tipo');
        $status = $request->input('status');

        $crudspas = $this->crudspas->create([
            'nome' =>  $nome,
            'titulo' =>  $titulo,
            'descricao' => $descricao,
            'criticidade' => $criticidade,
            'tipo' => $tipo,
            'status' => $status,
        ]);

        if ($crudspas) {
            return $this->retornoJson(201, "Salvo com sucesso");
        }

        return  $this->retornoJson(304, "Erro ao salvar");
    }

    /**
     * Lista um novo SPA
     * @return \Illuminate\View\View
     */
    public function read()
    {
        $crudspas = Crudspas::all();
        if ($crudspas) {
            return $this->retornoJson(201, "Listagem com sucesso", $crudspas->toArray());
        }
        return  $this->retornoJson(304, "Erro ao salvar");
    }


    /**
     * Atualiza um novo SPA
     * @param  int  $id
     * @param  string  $titulo
     * @param  string  $nome
     * @param  string  $descricao
     * @param  string  $criticidade
     * @param  string  $tipo
     * @param  string  $status
     * @return \Illuminate\View\View
     */
    public function update($id, Request $request)
    {
        $titulo = $request->input('titulo');
        $nome = $request->input('nome');
        $descricao = $request->input('descricao');
        $criticidade = $request->input('criticidade');
        $tipo = $request->input('tipo');
        $status = $request->input('status');

        $crudspas = Crudspas::where('id', '=', $id)->update([
            'nome' =>  $nome,
            'titulo' =>  $titulo,
            'descricao' => $descricao,
            'criticidade' => $criticidade,
            'tipo' => $tipo,
            'status' => $status,
        ]);

        if ($crudspas) {
            return $this->retornoJson(201, "Atualizado com sucesso");
        }

        return  $this->retornoJson(304, "Erro ao salvar");
    }

    /**
     * Deleta um novo SPA
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function delete($id)
    {
        $crudspas = Crudspas::where('id', '=', $id)->delete();

        if ($crudspas) {
            return $this->retornoJson(201, "Deletado com sucesso");
        }

        return  $this->retornoJson(304, "Erro ao salvar");
    }
}