📝 Formulário de Cadastro Moderno com PHP e W3.CSS
Criei este projeto de formulário de cadastro para praticar minhas habilidades e construir uma interface de usuário que fosse ao mesmo tempo moderna e funcional. Utilizei HTML, PHP e o framework W3.CSS para dar vida a duas páginas principais: a de cadastro, onde o usuário insere os dados, e a de confirmação, que exibe o que foi enviado.

(Fica a dica: substitua o link acima por uma imagem do seu projeto para ficar ainda mais legal!)

✨ O que eu implementei
Interface Moderna: Foquei em um design limpo, com efeitos de transparência (vidro fosco) e sombras para dar uma aparência mais profissional.

Layout Responsivo: Usei o sistema de grid do W3.CSS para garantir que o formulário funcione bem em qualquer tela, do celular ao desktop.

Campos Lado a Lado: Organizei alguns campos, como "Idade" e "Salário", para ficarem lado a lado, otimizando o espaço.

Validação Front-end: Adicionei um script em JavaScript que impede o envio do formulário se algum campo estiver vazio e mostra uma mensagem de erro amigável.

Processamento Back-end: Os dados são enviados para um script PHP (processaCadastro.php) que os exibe em uma página de confirmação.

Feedback Visual: Os botões têm um efeito hover e as mensagens de confirmação/erro são estilizadas para combinar com o layout.

🚀 Tecnologias que Usei
Front-end:

HTML5

CSS3 (Através do framework W3.CSS)

JavaScript (Para a validação do formulário)

Back-end:

PHP (Para processar e mostrar os dados)

Framework CSS:

W3.CSS - Um framework que achei leve e ótimo para criar designs responsivos.

📂 Estrutura dos Arquivos
O projeto é bem simples, com dois arquivos principais:

cadastro.php: É a página principal, com toda a estrutura HTML do formulário, os estilos customizados e o script de validação em JavaScript.

processaCadastro.php: Este script recebe os dados do formulário (via POST) e os exibe de forma organizada na tela.

🛠️ Como Rodar o Projeto
Para testar o projeto na sua máquina, você vai precisar de um ambiente com suporte a PHP (como XAMPP, WAMP, etc.).

Clone o repositório:

git clone https://github.com/seu-usuario/nome-do-repositorio.git

Mova os arquivos:

Coloque os arquivos cadastro.php e processaCadastro.php na pasta raiz do seu servidor (a htdocs no XAMPP, por exemplo).

Inicie o servidor:

Ligue o seu servidor Apache.

Acesse no navegador:

Abra seu navegador e acesse http://localhost/cadastro.php.

Agora é só preencher o formulário!

🎨 Quer customizar?
Você pode mudar facilmente o visual do projeto:

Imagem de Fundo: Para alterar a imagem de fundo, é só trocar a URL na tag <body> dos dois arquivos (cadastro.php e processaCadastro.php):

<body style="background-image: url('seuurlaqui.jpg'); ...">

Cores e Transparência: As cores e a opacidade do cabeçalho e do formulário estão definidas com rgba(). Você pode alterar esses valores direto no style dos elementos.

rgba(33, 150, 243, 0.7): É o azul com 70% de opacidade.

rgba(255, 255, 255, 0.75): É o branco com 75% de opacidade.

👨‍💻 Autor
Este projeto foi criado com muito carinho por Rafael Angelão! 👨‍💻

Se tiver alguma ideia, sugestão de melhoria ou encontrar algum bug, sinta-se à vontade para abrir uma issue ou contribuir.
