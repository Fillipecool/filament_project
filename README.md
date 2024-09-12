# Projeto Laravel com Autenticação e Redirecionamento por Empresa

Este projeto é uma aplicação web desenvolvida em Laravel com o uso de [Filament 3.x](https://filamentphp.com/) como ferramenta de administração e o PostgreSQL como banco de dados. O principal objetivo do projeto é permitir que clientes façam login em uma página que exibe todas as empresas disponíveis para eles. Após selecionar a empresa, o cliente é redirecionado para o dashboard correspondente.

## Funcionalidades

- **Tela de Login Personalizada:** Autenticação de clientes com visualização de todas as empresas disponíveis.
- **Redirecionamento por Empresa:** Após a autenticação, o cliente escolhe uma empresa e é redirecionado para o dashboard específico da empresa selecionada.
- **Painel Administrativo com Filament:** Interface de administração moderna e personalizável utilizando o Filament 3.x.
- **Banco de Dados PostgreSQL:** Utilização do PostgreSQL para armazenamento de dados de clientes, empresas, e registros de autenticação.

## Tecnologias Utilizadas

- **[Laravel](https://laravel.com/) (Latest):** Framework PHP para construção de aplicações web robustas e escaláveis.
- **[Filament 3.x](https://filamentphp.com/):** Ferramenta de administração para Laravel.
- **[PostgreSQL](https://www.postgresql.org/):** Banco de dados relacional utilizado para persistência de dados.

## Requisitos

Antes de começar, certifique-se de ter as seguintes ferramentas instaladas:

- [PHP 8.x](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) e [NPM](https://www.npmjs.com/)
- [PostgreSQL](https://www.postgresql.org/)
- [Docker](https://www.docker.com/) (opcional, para ambiente de desenvolvimento com containers)

## Instalação

Siga os passos abaixo para configurar o projeto em sua máquina local:

1. **Clone o repositório:**

   ```bash
   git clone https://github.com/seu-usuario/filament_project.git
   cd filament_project


Instale as dependências do Composer:

bash
Copiar código
composer install
Instale as dependências do NPM:

bash
Copiar código
npm install
npm run build
Configure o arquivo .env:

Copie o arquivo .env.example para .env e configure as variáveis de ambiente, especialmente as informações de banco de dados PostgreSQL.

bash
Copiar código
cp .env.example .env
Gere a chave da aplicação:

bash
Copiar código
php artisan key:generate
Execute as migrações e seeders:

Certifique-se de que o PostgreSQL esteja rodando e execute:

bash
Copiar código
php artisan migrate --seed
Inicie o servidor de desenvolvimento:

bash
Copiar código
php artisan serve
A aplicação estará disponível em http://localhost:8000.

-> Siga documentação do filamentphp / laravel



### Personalizações que você pode considerar

1. **Adicionar Imagens ou GIFs**: Mostrar capturas de tela da tela de login, do processo de seleção de empresa e do dashboard.
2. **Informações de Configuração Avançada**: Incluir detalhes sobre autenticação personalizada, middlewares utilizados, e outras configurações específicas.
3. **FAQ ou Troubleshooting**: Adicionar uma seção para perguntas frequentes ou soluções de problemas comuns.
4. **Links Úteis**: Incluir links para a documentação do Laravel, Filament, ou tutoriais relacionados.

Sinta-se à vontade para ajustar este exemplo conforme necessário para melhor atender aos detalhes específicos do seu projeto.
