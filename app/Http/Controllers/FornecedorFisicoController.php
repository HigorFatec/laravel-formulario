<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class FornecedorFisicoController extends Controller
{
    public function create()
    {
        return view('fisico.fornecedor_fisico');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'cpf' => 'required|integer',
            'rg' => 'required|integer',
            'rua' => 'required|string',
            'numero' => 'required|integer',
            'bairro' => 'required|string',
            'cidade' => 'required|string',
            'estado' => 'required|string',
            'cep' => 'required|integer',
            'complemento' => 'required|string',
            'banco' => 'required|string',
            'agencia' => 'required|integer',
            'conta' => 'required|integer',
            'tipo_conta' => 'required|string',
            'pix' => 'required|string',
            'telefone_fixo' => 'required|string',
            'celular' => 'required|string',
            'email' => 'required|email',
        ]);

        // Adicionar debug para verificar se os dados estão corretos
        Log::info('Dados do formulário:', $request->all());

        // Adiciona o IP e o endereço da máquina aos dados da empresa
        $data = $request->all();

        // Envia o email com os dados do fornecedor físico
        Mail::send('emails.fornecedor_fisico', ['dados' => $data], function($message) {
            $message->to(['cadastro.suprimentos@grupocargopolo.com.br', 'amanda.bellomo@grupocargopolo.com.br' ]);
            $message->subject('Novo Fornecedor Físico Registrado');
        });

        return redirect()->route('fisico.success');
    }
}
