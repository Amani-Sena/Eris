# [Eris](https://eris.amanidev.com)

![eris banner](https://github.com/user-attachments/assets/fc1114ff-c8d9-4891-bf49-36469ecc144b)


## Visão Geral do Projeto

![eris-img](https://github.com/user-attachments/assets/d3fafdc1-1dc7-4069-ae6a-40f313df0da4)

**Nome do Projeto:** Eris

**Descrição:** Uma plataforma que visa facilitar o agendamento de visitas de profissionais à casa dos clientes, com um sistema completo de cadastro e agendamento para usuários, fornecendo orçamentos de forma simplificada.

**Tecnologias Utilizadas:**
- **Frontend:** HTML, SCSS, Vue.js
- **Backend:** Laravel
- **Banco de Dados:** MySQL

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
