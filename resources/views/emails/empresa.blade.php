<!DOCTYPE html>
<html>
<head>
    <title>Nova Empresa Registrada</title>
</head>
<body>
    <p>Razao Social: {{ $empresa->razao_social }}</p>
    <p>Inscricao Estadual: {{ $empresa->inscricao_estadual }}</p>
    <p>CNPJ: {{ $empresa->cnpj }}</p>
    <p>Banco: {{ $empresa->banco }}</p>
    <p>Agencia {{ $empresa->agencia }}</p>
    <p>Conta: {{ $empresa->conta }}</p>
    <p>Tipo de Conta: {{ $empresa->tipo_conta }}</p>
    <p>Pix: {{ $empresa->pix }}</p>
    <p>Telefone_1: {{ $empresa->telefone_1 }}</p>
    <p>telefone_2: {{ $empresa->telefone_2 }}</p>
    <p>Direto com: {{ $empresa->direto_com }}</p>
    <p>Email: {{ $empresa->email }}</p>

    <p>Atenciosamente <b>Grupo Cargo Polo</b></p>
</body>
