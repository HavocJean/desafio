<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;
use Illuminate\Routing\Redirector;

class ClientesController extends Controller
{
    public function index()
    {

        return view('cliente');

    }

    public function create(Request $r)
    {
            // dd($r->all());
            // $cliente = New Clientes();
            // $cliente->create($r->except(['token']));
        $cliente = Clientes::create([
            'nome_usuario' => $r['nome_usuario'],
            'altura' => preg_replace('/[,]+/','.',$r['altura']),
            'lactose' => $r['lactose'],
            'peso' => preg_replace('/[,]+/','.',$r['peso']),
            'atleta' => $r['atleta'],
        ]);
    
        return redirect('cliente')->with('mensagem', 'Cliente cadastrado com sucesso!');
    }

    public function todo(Request $r)
    {
        // filtro peso
        if (request()->has('peso')) {
            if(request('peso') == "acima") {
                $clientes = Clientes::where('peso', '>', '90')->get();

                return view('filtro', ['clientes' => $clientes]);

            } elseif(request('peso') == "abaixo") {
                $clientes = Clientes::where('peso', '<', '69')->get();

                return view('filtro', ['clientes' => $clientes]);

            } else {
                $clientes = Clientes::where('peso', '>', '70')->where('peso', '<', '89')->get();
                
                return view('filtro', ['clientes' => $clientes]);
            } // filtro altura
        } elseif (request()->has('altura')) {
            if(request('altura') == "altos") { 
                $clientes = Clientes::where('altura', '>', '1.80')->get();

                return view('filtro', ['clientes' => $clientes]);

            } elseif(request('altura') == "medianos") {
                $clientes = Clientes::where('altura', '>', '1.60')->where('peso', '<', '1.79')->get();

                return view('filtro', ['clientes' => $clientes]);

            } else {
                $clientes = Clientes::where('altura', '<', '1.59')->get();

                return view('filtro', ['clientes' => $clientes]);
            } // filtro lactose
        } elseif (request()->has('lactose')) {
            if(request('lactose') == "sim") { 
                $clientes = Clientes::where('lactose','=', '1')->get();

                return view('filtro', ['clientes' => $clientes]);

            } elseif(request('lactose') == "nao") {
                $clientes = Clientes::where('lactose', '=', '0')->get();

                return view('filtro', ['clientes' => $clientes]);
            } // filtro atleta
        } elseif (request()->has('atleta')) {
            if(request('atleta') == "sim") { 
                $clientes = Clientes::where('atleta','=', '1')->get();

                return view('filtro', ['clientes' => $clientes]);

            } elseif(request('atleta') == "nao") {
                $clientes = Clientes::where('atleta', '=', '0')->get();

                return view('filtro', ['clientes' => $clientes]);
            } // search para buscar nome do usuario
        } elseif (request()->has('busca')) { 
            $clientes = Clientes::where('nome_usuario','LIKE', $r['busca'])->get();

            return view('filtro', ['clientes' => $clientes]);
        } else {
            $clientes = Clientes::simplePaginate(8);
            return view('filtro', ['clientes' => $clientes]);
        }
    }
}