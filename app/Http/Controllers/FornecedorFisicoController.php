<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FornecedorFisico;
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

            $ip = $request->ip(); // Pega o IP do servidor
            $public_ip = $request->header('X-Forwarded-For'); // Tenta pegar o IP público do cliente através dos cabeçalhos HTTP
    
            if ($public_ip) {
                // Use o endereço IP público do cliente se disponível
                $data['ip'] = $public_ip;
            } else {
                // Use o endereço IP do servidor se não houver um endereço IP público disponível
                $data['ip'] = $ip;
            }
         

            // Criar o fornecedor físico
            $fornecedor_fisico = FornecedorFisico::create($data);

            Mail::send('emails.fornecedor_fisico', ['fornecedor_fisico' => $fornecedor_fisico], function($message) use ($fornecedor_fisico) {
                $message->to(['cadastro.suprimentos@grupocargopolo.com.br', 'amanda.bellomo@grupocargopolo.com.br' ]);
                $message->subject('Novo Fornecedor Físico Registrado');
            });
            

            return redirect()->route('fisico.success');

        }
    }
