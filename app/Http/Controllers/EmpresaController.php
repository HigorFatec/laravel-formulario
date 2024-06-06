<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmpresaController extends Controller
{
    public function create()
    {
        return view('empresa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'razao_social' => 'required|string',
            'inscricao_estadual' => 'required|integer',
            'cnpj' => 'required|integer',
            'banco' => 'required|string',
            'agencia' => 'required|integer',
            'conta' => 'required|integer',
            'tipo_conta' => 'required|string',
            'pix' => 'required|string',
            'telefone_1' => 'required|integer',
            'telefone_2' => 'required|integer',
            'direto_com' => 'required|string',
            'email' => 'required|email',
        ]);

        // Adiciona o IP e o endereço da máquina aos dados da empresa
        $data = $request->all();

        Mail::send('emails.empresa', ['dados' => $data], function($message) {
            $message->to('higor.05@hotmail.com');
            // $message->to(['cadastro.suprimentos@grupocargopolo.com.br', 'amanda.bellomo@grupocargopolo.com.br' ]);
            $message->subject('Nova Empresa Registrada');
        });

        return redirect()->route('empresa.success');
    }
}
