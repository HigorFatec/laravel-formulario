<!DOCTYPE html>
<html>
<head>
    <title>Novo Registro Incluido</title>
</head>
<body>
    <p>Nome Completo: {{ $fornecedor_fisico->nome }}</p>
    <p>CPF {{ $fornecedor_fisico->cpf }}</p>
    <p>RG: {{ $fornecedor_fisico->rg }}</p>
    <p>Rua: {{ $fornecedor_fisico->rua }}</p>
    <p>Numero: {{ $fornecedor_fisico->numero }}</p>
    <p>Bairro: {{ $fornecedor_fisico->bairro }}</p>
    <p>Cidade: {{ $fornecedor_fisico->cidade }}</p>
    <p>Estado: {{ $fornecedor_fisico->estado }}</p>
    <p>CEP: {{ $fornecedor_fisico->cep }}</p>
    <p>Complemento: {{ $fornecedor_fisico->complemento }}</p>
    <p>Banco: {{ $fornecedor_fisico->banco }}</p>
    <p>Agencia {{ $fornecedor_fisico->agencia }}</p>
    <p>Conta: {{ $fornecedor_fisico->conta }}</p>
    <p>Tipo de Conta: {{ $fornecedor_fisico->tipo_conta }}</p>
    <p>Pix: {{ $fornecedor_fisico->pix }}</p>
    <p>Telefone Fixo: {{ $fornecedor_fisico->telefone_fixo }}</p>
    <p>Celular: {{ $fornecedor_fisico->celular }}</p>
    <p>Email: {{ $fornecedor_fisico->email }}</p>

    <p>Atenciosamente <b>Grupo Cargo Polo</b></p>
</body>
