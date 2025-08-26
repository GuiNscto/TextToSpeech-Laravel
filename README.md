<!DOCTYPE html>

<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>README - Laravel Text-to-Speech</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 20px; line-height: 1.6; }
    h1, h2, h3 { color: #333; }
    pre { background: #f4f4f4; padding: 10px; border-radius: 5px; overflow-x: auto; }
    code { background: #eee; padding: 2px 5px; border-radius: 3px; }
    ul { margin-left: 20px; }
  </style>
</head>
<body>
  <h1>Laravel Text-to-Speech</h1>
  <p>Este projeto é uma aplicação simples em <strong>Laravel</strong> que permite ao usuário digitar um texto e ouvir a reprodução em áudio, consumindo uma API de Text-to-Speech (TTS).</p>

  <h2>📌 Requisitos</h2>
  <ul>
    <li>PHP >= 8.1</li>
    <li>Composer</li>
    <li>Laravel >= 10</li>
    <li>Extensão <code>curl</code> habilitada</li>
    <li>Chave de API válida da OpenAI (ou outro serviço de TTS)</li>
  </ul>

  <h2>⚙️ Instalação</h2>
  <ol>
    <li>Clone o repositório:
      <pre><code>git clone &lt;URL_DO_REPOSITORIO&gt;
cd laravel-tts</code></pre>
    </li>
    <li>Instale as dependências:
      <pre><code>composer install</code></pre>
    </li>
    <li>Crie o arquivo de ambiente:
      <pre><code>cp .env.example .env</code></pre>
    </li>
    <li>Adicione sua chave de API no arquivo <code>.env</code>:
      <pre><code>OPENAI_API_KEY=sua_chave_aqui</code></pre>
    </li>
    <li>Gere a chave da aplicação Laravel:
      <pre><code>php artisan key:generate</code></pre>
    </li>
  </ol>

  <h2>▶️ Execução</h2>
  <p>Inicie o servidor local:</p>
  <pre><code>php artisan serve</code></pre>
  <p>Acesse no navegador:</p>
  <pre><code>http://127.0.0.1:8000</code></pre>

  <h2>🖥️ Uso</h2>
  <ol>
    <li>Digite um texto no campo exibido na página inicial.</li>
    <li>Clique em <strong>Ouvir</strong>.</li>
    <li>O áudio será gerado e reproduzido diretamente no navegador.</li>
  </ol>

  <h2>🛠️ Tecnologias</h2>
  <ul>
    <li>Laravel 10</li>
    <li>PHP 8.1+</li>
    <li>API de Text-to-Speech (OpenAI)</li>
    <li>HTML5 para reprodução de áudio</li>
  </ul>

 
</body>
</html>
