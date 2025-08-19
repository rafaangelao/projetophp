

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Cadastro</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>


<body style="background-image: url('https://images.unsplash.com/photo-1554147090-e1221a04a025?q=80&w=2070'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center;">

<div class="w3-display-container w3-center" style="padding-top: 5px; padding-bottom: 5px; background-color: rgba(33, 150, 243, 0.7); box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);">
    <h2 class="w3-xxlarge w3-bold w3-text-shadow" style="font-size: 64px; font-weight: 900; color: white;">Cadastro Recebido</h2>
</div>


<div class="w3-content w3-padding-64">

   
    <div class="w3-container w3-card-4 w3-padding w3-border w3-round" style="max-width: 600px; margin: auto; background-color: rgba(255, 255, 255, 0.85);">
        
        <h3 class="w3-text-teal">Obrigado pelo seu cadastro!</h3>
        <p>Recebemos as seguintes informações:</p>
        
        
        <div class="w3-panel w3-leftbar w3-border-teal w3-pale-green w3-round-large">
             <p style="margin-bottom: 8px;"><b>Nome completo:</b> <?php echo $_POST['nome']; ?> </p>
             <p style="margin-bottom: 8px;"><b>Idade:</b> <?php echo $_POST['idade']; ?></p>
             <p style="margin-bottom: 8px;"><b>Profissão:</b> <?php echo $_POST['profi']; ?></p>
             <p style="margin-bottom: 8px;"><b>Salário esperado:</b> <?php echo $_POST['sal']; ?></p>
             <p style="margin-bottom: 8px;"><b>Experiência anterior:</b> <?php echo $_POST['exp']; ?></p>
        </div>

        <div class="w3-container w3-pale-blue w3-leftbar w3-border-blue w3-margin-top w3-padding w3-round-large">
            <h3>Mensagem Especial</h3>
            <p>
                O maior desafio neste código foi organizar os campos do formulário e garantir que todos os dados fossem 
                enviados corretamente para o PHP. Decidi organizar as variáveis de forma simples e clara, usando os mesmos 
                nomes dos campos do formulário. Assim, o código fica mais legível e fácil de manter. Essa lógica ajuda a 
                evitar erros comuns, como esquecer ou confundir os identificadores. Além disso, busquei exibir os dados 
                recebidos de forma estruturada, o que melhora a clareza para o usuário final. Dificultei um pouco também na hora da estilização, usando a biblioteca w3schools e CSS.
            </p>
        </div>
        <br>
    </div>
</div>

</body>
</html>