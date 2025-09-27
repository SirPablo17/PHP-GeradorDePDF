# 🚀 Gerador de PDF com PHP e mPDF

Este projeto é uma demonstração prática de como gerar documentos PDF dinamicamente a partir de conteúdo HTML, utilizando PHP e a poderosa biblioteca mPDF. A aplicação conta com uma interface de usuário simples e limpa para uma experiência direta.

## ✨ Funcionalidades Principais

- **Interface Frontend Limpa:** Uma página de boas-vindas simples, construída com HTML5 e CSS3.
- **Geração Dinâmica de PDF:** Utiliza a biblioteca mPDF para converter código HTML em um documento PDF pronto para download.
- **Gerenciamento de Dependências:** Usa o Composer para gerenciar as bibliotecas externas, garantindo um projeto organizado.
- **Estrutura Simples:** O código é claro e bem documentado, ideal para fins de estudo e portfólio.

## 📸 Demonstração

A interface do projeto é minimalista, focada na ação principal: gerar o documento PDF.

<img width="1919" height="1078" alt="image" src="https://github.com/user-attachments/assets/75eb3f74-302a-4db1-bc2c-0e501f8eaf75" />

## 💻 Como Utilizar a Aplicação

Para interagir com a aplicação, o processo é extremamente simples e direto:

1.  **Acesse a Página Inicial:** Abra o projeto em seu navegador. Você verá um título, uma breve descrição e um botão de ação.

2.  **Clique no Botão:** Clique no botão azul que diz **"Gerar meu PDF"**.

3.  **Faça o Download:** Ao clicar no botão, o script PHP `gerador.php` será executado no servidor. Ele irá processar o conteúdo HTML, criar um documento PDF e enviá-lo diretamente para o seu navegador, que iniciará o download do arquivo `documento.pdf`.

É simples assim! A cada clique, um novo PDF é gerado e disponibilizado.

## 🛠️ Instalação e Execução Local

Se você é um desenvolvedor e deseja clonar e executar este projeto em sua máquina local, siga os passos abaixo.

**Pré-requisitos:**
- PHP 8.0 ou superior
- Composer instalado (https://getcomposer.org/)
- Git instalado
- Um servidor local (como XAMPP, WAMP) ou o servidor embutido do PHP.

**Passos para Instalação:**

1.  **Clone o repositório:**
    ```bash
    git clone [https://github.com/](https://github.com/)[SEU-USUARIO]/gerador-pdf-php.git
    ```

2.  **Acesse a pasta do projeto:**
    ```bash
    cd gerador-pdf-php
    ```

3.  **Instale as dependências:**
    Este comando lê o arquivo `composer.json` e baixa todas as bibliotecas necessárias (neste caso, o mPDF) para a pasta `vendor/`.
    ```bash
    composer install
    ```

4.  **Inicie um servidor:**

    * **Opção 1 (XAMPP/WAMP):** Coloque a pasta do projeto dentro do diretório `htdocs` (do XAMPP) e inicie o serviço Apache. Acesse pelo navegador em `http://localhost/gerador-pdf-php/`.

    * **Opção 2 (Servidor Embutido do PHP):** Na raiz do projeto, execute o seguinte comando no terminal. É uma ótima alternativa para projetos simples.
        ```bash
        php -S localhost:8000
        ```
        Depois, acesse `http://localhost:8000` no seu navegador.

## 🚀 Tecnologias Utilizadas

- **Backend:** **PHP** - Linguagem robusta para toda a lógica do lado do servidor.
- **Dependências:** **Composer** - Ferramenta essencial para gerenciar as bibliotecas do projeto.
- **PDF Engine:** **mPDF** - Uma das bibliotecas mais completas para converter HTML e CSS em PDF com PHP.
- **Frontend:** **HTML5** e **CSS3** - Para a estrutura e o estilo da interface do usuário.
- **Versionamento:** **Git** e **GitHub** - Para controle de versão e hospedagem do código.

## 📂 Estrutura de Pastas e Arquivos
## 📂 Estrutura de Pastas e Arquivos

O projeto está organizado com a seguinte estrutura de arquivos e diretórios:

* **`/src`**: Diretório destinado a abrigar o código-fonte e as classes PHP da aplicação, seguindo o padrão de autoload PSR-4 definido no `composer.json`.
* **`/vendor`**: Diretório onde o Composer instala e gerencia todas as dependências do projeto (como a biblioteca mPDF). Este diretório não é versionado no Git.
* **`.gitattributes`**: Arquivo de configuração que define atributos específicos para caminhos no Git (por exemplo, como lidar com finais de linha).
* **`composer.json`**: O arquivo de manifesto do projeto. Ele descreve o projeto, suas dependências e outros metadados. É o coração do gerenciamento com o Composer.
* **`composer.lock`**: Um registro exato das versões de cada dependência instalada. Isso garante que todos os desenvolvedores e ambientes de implantação usem exatamente as mesmas versões de pacotes.
* **`gerador.php`**: O script principal do backend. Ele é acionado para instanciar a biblioteca mPDF, processar o conteúdo HTML e gerar o arquivo PDF para download.
* **`index.php`**: O ponto de entrada da aplicação. É a página que o usuário vê, contendo o HTML da interface e o link para acionar o `gerador.php`.
* **`style.css`**: A folha de estilos CSS responsável pela aparência visual da página `index.php`.
