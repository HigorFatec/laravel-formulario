http://ww2.grupocargopolo.com.br:14805/reserva/


Central de Formulários - Grupo CargoPolo
Este projeto é uma central web de formulários corporativos desenvolvida em Laravel, voltada para a gestão de solicitações internas do Grupo CargoPolo.
A plataforma organiza e centraliza formulários de diversos setores, como Financeiro, Fiscal, Sinistro, Pagamentos, Cadastro de Fornecedores, Produtos, entre outros.

Principais Funcionalidades
Centralização de Formulários: Interface moderna e responsiva para acesso rápido a todos os formulários por setor.
Envio de Solicitações: Cada formulário dispara e-mails automáticos para os setores responsáveis, com anexos e validação de dados.
Setores Atendidos: Financeiro, Fiscal, Sinistro, Pagamentos, Cadastro de Fornecedores, Produtos, Saldo, entre outros.
Controle de Fluxo: Aprovação de solicitações, controle de status e histórico.
Experiência do Usuário: Animações, feedback visual e navegação intuitiva.
Segurança: Autenticação de usuários e validação robusta dos dados.
Estrutura do Projeto
resources/views/: Views organizadas por setor e finalidade.
emails/: Templates de e-mail para cada tipo de solicitação.
Controllers: Lógica de negócio para cada fluxo de formulário.
Migrations e Models: Estrutura de banco de dados para armazenar e gerenciar as solicitações.
Tecnologias
Laravel (PHP)
Blade (Template Engine)
Materialize CSS/Bootstrap (Frontend)
JavaScript para animações e UX
Como usar
Clone o repositório.
Configure o .env com os dados do seu banco e e-mail.
Execute as migrations:
php artisan migrate
Inicie o servidor:
php artisan serve
Acesse / para visualizar a central de formulários.
Este projeto facilita a gestão de demandas internas, reduz erros operacionais e agiliza a comunicação entre setores do Grupo CargoPolo.
