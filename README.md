Documentação da Aplicação Web: Eris 
1. Visão Geral do Projeto 
• Nome do Projeto: Eris 
• Descrição: Eris é um sebsite que visa facilitar o agendamento de visitas de 
profissionais à casa dos clientes, com um sistema completo de cadastro e 
agendamento para usuários, fornecendo assim, sem burocracia a facilidade de 
orçamentos de profissionais 
• Objetivo: Facilitar e desburocratizar orçamentos diretamente entre clientes e 
profissionais da área elétrica. 
• Tecnologias Utilizadas: 
o Frontend: HTML, Scss, Vue.js 
o Backend: Laravel 
o Banco de Dados: MySQL 
o Autenticação: Sessão em Cookies 
2. Guia de Instalação e Configuração 
• Requisitos: 
o Node.js >= 14.x 
o PHP >= 8.0 
o MySQL >= 8.0 
o Vue.js >= 3.2 
o Laravel >= 11 
Passo a Passo de Instalação 
1. Download dos Arquivos: Baixe os arquivos compactados da 
aplicação, disponibilizados no formato .zip. Após o download, 
extraia o conteúdo para uma pasta de sua preferência. 
2. Instalar Dependências do Backend e Frontend: 
a. No diretório do projeto, execute: 
composer install 
b. Para instalar as dependências do frontend, execute: 
npm install 
3. Configuração do Banco de Dados e Variáveis de Ambiente: 
a. Caso não exista, crie um arquivo .env na raiz do projeto 
e configure as seguintes variáveis: 
DB_CONNECTION=mysql 
DB_HOST=127.0.0.1 
DB_PORT=3306 
DB_DATABASE=nome_do_banco 
DB_USERNAME=seu_usuario 
DB_PASSWORD=sua_senha 
b. Altere outros parâmetros, como APP_NAME, APP_ENV, se 
necessário. 
4. Migrar e Popular o Banco de Dados: 
a. Com o .env e o banco de dados MySQL já configurado, 
execute no terminal: 
php artisan migrate --seed 
5. Iniciar a Aplicação: 
a. Para iniciar o servidor backend, use: 
php artisan serve 
b. Para o frontend, use: 
npm run dev 
3. Estrutura do Código 
• Estrutura de Pastas: 
o app/: Contém a lógica do backend (Controllers, Models, Mails, 
Notifications, Providers). 
o resources/views/: Arquivos de visualização .Blade para páginas 
backend. 
o Resources/js/components: Componentes Vue.js, as views blade 
redirecionam para os componentes. 
o public/: Arquivos públicos do projeto, contem imagens, fonts, regras de 
negócios no .htaccess e o pontapé da aplicação no index.php. 
o routes/: Definições de rotas da API e web. 
• Principais Módulos e Funcionalidades: 
o Cadastro de usuários: Criação, de contas e redefinição de senhas para 
usuários. 
o Gerenciamento de agendamentos: Criação de agendamentos dentro 
da plataforma, assim como sua edição e exclusão. 
4. Guia de Uso 
• Funções Principais: 
o Agendamentos: Página de agendamentos que exibe uma visão geral de 
todos os agendamentos ativos pelo usuário. 
o Criação de conta: Permite criar um novo usuário através de um nome, 
email e senha, contando com verificação de autenticidade e verificação 
de email. 
• Fluxo de Usuário: 
o O usuário faz login ou registro. 
o Verifica seu email caso tenha feito registro. 
o Faz um agendamento fornecendo número de telefone, endereço, data da 
visita, Horário e CEP. 
o Edita ou exclui o agendamento caso queira. 
o Monitora seus agendamentos através da página agendamentos. 
o Recebe notificações via email sobre atualizações sobre seus 
agendamentos. 
5. Estrutura da Aplicação 
3.1 Comunicação Frontend e Backend 
A aplicação Eris é construída usando Vue.js para o frontend e Laravel 11 para o 
backend. A comunicação entre esses dois componentes é feita por meio de 
requisições HTTP tradicionais, utilizando o roteamento e os controladores do 
Laravel para processar e retornar os dados necessários. 
Vue.js: O Vue.js é responsável pela renderização das páginas e pela experiência 
do usuário, interagindo com o backend para carregar ou enviar informações. 
Laravel: O Laravel gerencia a lógica de negócios, manipula o banco de dados, e 
processa as requisições recebidas do frontend. 
3.3 Estrutura de Rotas 
Aqui está uma visão geral das principais rotas do backend: 
• / (GET): Retorna a página de início (index) da aplicação. 
• /about (GET): Informações sobre a empresa. 
• /budget (GET): Página de visualização dos agendamentos. 
• /budget/create (GET): Página com formulário para agendamento. 
• /budget/destroy/{id} (DELETE): Exclusão de agendamento. 
• /budget/edit/{id} (GET): Página de edição do agendamento. 
• /budget/show/{id} (GET): Visualização de agendamento único. 
• /budget/store (POST): Armazena agendamento no banco de dados. 
• /budget/update{id} (POST): Atualização de agendamento. 
• /email/resend (POST): Reenvio de email de verificação. 
• /email/verify (GET): Página de verificação de email. 
• /email/verify/{id}/{hash} (GET): Rota de confirmação de email. 
• /budget/edit (GET): Edição de agendamento. 
• /login (GET): Página de login. 
• /login (POST): Rota de validação e confirmação de login. 
• /logout (POST): Rota de logout de usuário. 
• /budget/edit (GET): Edição de agendamento. 
• /password/reset (GET): Página de redefinição de senha. 
• /password/reset (POST): Rota de envio de email de redefinição. 
• /budget/edit (GET): Edição de agendamento. 
• /password/reset/{token} (GET): Definição de nova senha. 
• /questions (GET): Página de perguntas frequentes. 
• /register (GET): Formulário de registro. 
6. Banco de Dados 
• Modelo ER: 
o Tabelas principais: users, budgets. 
• Descrição das Tabelas: 
o Users: Contém informações de cada usuário. 
o budgets: Contém informações sobre os agendamentos.
