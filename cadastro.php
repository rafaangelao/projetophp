<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Colaboradores - Brincos e Companhia</title>
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
        #form1 {
            background-color: rgba(255, 255, 255, 0.75) !important;
        }
        #idade, #sal, #nome, #exp, #profi {
            background-color: transparent !important;
            border-color: #004D40;
            color: #004D40;
            font-weight: bold;
        }
        #idade::placeholder, #sal::placeholder {
            color: #00695C;
            font-weight: normal;
        }
    </style>
</head>

<body style="background-image: url('https://images.unsplash.com/photo-1554147090-e1221a04a025?q=80&w=2070'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center;">


<div class="w3-display-container w3-center" style="padding-top: 5px; padding-bottom: 5px; background-color: rgba(33, 150, 243, 0.7); box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);">
    <h2 class="w3-xxlarge w3-bold w3-text-shadow" style="font-size: 64px; font-weight: 900; color: white;"> Formulário de Cadastro</h2>
</div>


<div class="w3-content w3-padding-64">

   
    <form class="w3-container w3-card-4 w3-padding w3-border w3-round" style="max-width: 600px; margin: auto;" id="form1" name="form1" method="post" action="processaCadastro.php" onsubmit="return validarFormulario()">
        
        <br>
        
        
        <div class="w3-row-padding">
            <label class="w3-text-teal"><b>Nome completo</b></label>
            <input class="w3-input w3-border w3-round" name="nome" type="text" id="nome" placeholder="Digitar Nome">
        </div>
        <br>
        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-teal"><b>Idade</b></label>
                <input class="w3-input w3-border w3-round" name="idade" type="text" id="idade" placeholder="Ex: 18 Anos">
            </div>
            <div class="w3-half">
                <label class="w3-text-teal"><b>Salário Esperado</b></label>
                <input class="w3-input w3-border w3-round" name="sal" type="text" id="sal" placeholder="Ex: R$1800,50">
            </div>
        </div>
        <br>
        <div class="w3-row-padding">
            <label class="w3-text-teal"><b>Profissão</b></label>
            <input class="w3-input w3-border w3-round" name="profi" type="text" id="profi" placeholder="Ex: Desenvolvedor Front-End">
        </div>
        <br>
        <div class="w3-row-padding">
            <label class="w3-text-teal"><b>Experiência Anterior</b></label> 
            <textarea class="w3-input w3-border w3-round" name="exp" id="exp" placeholder="Digite Aqui"></textarea>
        </div>
        <br>
        
        
        <div id="mensagem" class="w3-panel w3-round-large" style="display: none;">
            <p></p> 
        </div>

       
        <button class="w3-button w3-teal w3-hover-green w3-round-large w3-block">Enviar Cadastro</button>
        <br>

    </form>
</div>


<script>
function validarFormulario() {
    
    var nome = document.getElementById('nome').value;
    var idade = document.getElementById('idade').value;
    var profi = document.getElementById('profi').value;
    var sal = document.getElementById('sal').value;
    var exp = document.getElementById('exp').value;

    
    var mensagemDiv = document.getElementById('mensagem');

    
    if (nome == "" || idade == "" || profi == "" || sal == "" || exp == "") {
       
        mensagemDiv.innerHTML = "<p><strong>Atenção!</strong> Por favor, preencha todos os campos antes de enviar.</p>";
        mensagemDiv.className = "w3-panel w3-pale-red w3-border w3-border-red w3-round-large"; 
        mensagemDiv.style.display = "block"; 

        return false; 
    }

    
    mensagemDiv.innerHTML = "<p><strong>Sucesso!</strong> Enviando seu cadastro...</p>";
    mensagemDiv.className = "w3-panel w3-pale-green w3-border w3-border-green w3-round-large"; 
    mensagemDiv.style.display = "block";

    return true; 
}
</script>

</body>
</html>