# Eris

Eris é um site desenvolvido para simplificar o processo de agendamento de visitas de profissionais especializados, oferecendo um sistema completo para cadastro e agendamentos. O objetivo é facilitar e desburocratizar a interação entre clientes e profissionais da área elétrica.

---

## Visão Geral do Projeto

**Nome do Projeto:** Eris

**Descrição:** Uma plataforma que visa facilitar o agendamento de visitas de profissionais à casa dos clientes, com um sistema completo de cadastro e agendamento para usuários, fornecendo orçamentos de forma simplificada.

**Objetivo:** Desburocratizar e facilitar orçamentos diretos entre clientes e profissionais da área elétrica.

**Tecnologias Utilizadas:**
- **Frontend:** HTML, SCSS, Vue.js
- **Backend:** Laravel
- **Banco de Dados:** MySQL
- **Autenticação:** Sessão em Cookies

---

## Guia de Instalação e Configuração

### Requisitos

- **Node.js** >= 14.x
- **PHP** >= 8.0
- **MySQL** >= 8.0
- **Vue.js** >= 3.2
- **Laravel** >= 11

### Passo a Passo de Instalação

1. **Download dos Arquivos:** Baixe os arquivos compactados da aplicação (.zip) e extraia-os para uma pasta de sua preferência.
2. **Instalar Dependências do Backend e Frontend:**
   - No diretório do projeto, execute:
     ```bash
     composer install
     ```
   - Para instalar as dependências do frontend, execute:
     ```bash
     npm install
     ```
3. **Configuração do Banco de Dados e Variáveis de Ambiente:**
   - Crie um arquivo `.env` na raiz do projeto (caso ainda não exista) e configure as variáveis:
     ```env
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=nome_do_banco
     DB_USERNAME=seu_usuario
     DB_PASSWORD=sua_senha
     ```
   - Altere outros parâmetros, como `APP_NAME` e `APP_ENV`, conforme necessário.
4. **Migrar e Popular o Banco de Dados:**
   - Com o `.env` configurado, execute:
     ```bash
     php artisan migrate --seed
     ```
5. **Iniciar a Aplicação:**
   - Para iniciar o servidor backend, use:
     ```bash
     php artisan serve
     ```
   - Para o frontend, use:
     ```bash
     npm run dev
     ```

---

## Estrutura do Código

### Estrutura de Pastas

- **app/**: Lógica do backend (Controllers, Models, Mails, Notifications, Providers)
- **resources/views/**: Arquivos de visualização `.Blade` para páginas backend
- **resources/js/components**: Componentes Vue.js, com views Blade redirecionando para eles
- **public/**: Arquivos públicos do projeto, incluindo imagens, fontes, regras no `.htaccess` e `index.php`
- **routes/**: Definições de rotas da API e web

### Principais Módulos e Funcionalidades

- **Cadastro de Usuários:** Criação de contas e redefinição de senhas
- **Gerenciamento de Agendamentos:** Criação, edição e exclusão de agendamentos

---

## Guia de Uso

### Funções Principais

- **Agendamentos:** Exibição de todos os agendamentos ativos do usuário
- **Criação de Conta:** Criação de um novo usuário com verificação de email

### Fluxo de Usuário

1. O usuário faz login ou se registra.
2. Se registrado, verifica o email.
3. Cria um agendamento fornecendo dados como telefone, endereço, data, horário e CEP.
4. Pode editar ou excluir o agendamento.
5. Monitora seus agendamentos na página dedicada.
6. Recebe notificações por email sobre atualizações.

---

## Estrutura da Aplicação

### Comunicação Frontend e Backend

- **Frontend (Vue.js):** Responsável pela experiência do usuário e renderização de páginas.
- **Backend (Laravel):** Gerencia a lógica de negócios, banco de dados e processamento de requisições.

### Estrutura de Rotas

- **GET /**: Página de início
- **GET /about**: Informações sobre a empresa
- **GET /budget**: Visualizar agendamentos
- **GET /budget/create**: Formulário de agendamento
- **DELETE /budget/destroy/{id}**: Excluir agendamento
- **GET /budget/edit/{id}**: Editar agendamento
- **GET /budget/show/{id}**: Visualizar agendamento único
- **POST /budget/store**: Armazenar agendamento
- **POST /budget/update{id}**: Atualizar agendamento
- **POST /email/resend**: Reenvio de email de verificação
- **GET /email/verify**: Verificação de email
- **GET /email/verify/{id}/{hash}**: Confirmar email
- **GET /login**: Página de login
- **POST /login**: Validar login
- **POST /logout**: Logout do usuário
- **GET /password/reset**: Redefinição de senha
- **POST /password/reset**: Enviar email de redefinição
- **GET /password/reset/{token}**: Definir nova senha
- **GET /questions**: Perguntas frequentes
- **GET /register**: Formulário de registro

---

## Banco de Dados

### Modelo ER

- **Tabelas Principais:** `users`, `budgets`

### Descrição das Tabelas

- **users:** Informações de cada usuário
- **budgets:** Informações sobre os agendamentos

---

**Projeto em andamento :)**
