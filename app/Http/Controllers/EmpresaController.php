<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
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

        $ip = $request->ip(); // Pega o IP do servidor
        $public_ip = $request->header('X-Forwarded-For'); // Tenta pegar o IP público do cliente através dos cabeçalhos HTTP

        if ($public_ip) {
            // Use o endereço IP público do cliente se disponível
            $data['ip'] = $public_ip;
        } else {
            // Use o endereço IP do servidor se não houver um endereço IP público disponível
            $data['ip'] = $ip;
        }
        

        // Cria a empresa com os dados fornecidos
        $empresa = Empresa::create($data);
        

        Mail::send('emails.empresa', ['empresa' => $empresa], function($message) use ($empresa) {
            $message->to(['cadastro.suprimentos@grupocargopolo.com.br', 'amanda.bellomo@grupocargopolo.com.br' ]);
            $message->subject('Nova Empresa Registrada');
        });

        return redirect()->route('empresa.success');

    }
}