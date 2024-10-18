<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout</title>
    <style>
        body {
    display: flex;
    flex-direction: column;
    height: 100vh;
    background-color: #f1f1f1;
}
        .container {
            display: flex; 
            justify-content: center;
            flex-wrap: wrap; 
        }
        .item {
            display: flex;
            flex-direction: column; 
            align-items: center; 
            margin: 10px;
        }
        .retangulo {
            width: 150px;
            height: 100px;
            background-color: #4CAF50;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            cursor: pointer;
            user-select: none;
        }
        .lista {
            display: none; 
            margin-top: 5px; 
            padding: 10px;
            border: 1px solid #ccc;
            width: 150px; 
            background-color: #f9f9f9;
            text-align: left; 
        }
        .links {
            margin-top: 20px; 
        }
    </style>
</head>
<body>
    *falta adicionar icones*
    <div class="tab-pane" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <h3>Calisthenics Workout</h3>
        <p>Selecione o tipo de treino abaixo!</p>
    </div>
    
    <div class="container">
        <div class="item">
            <div class="retangulo" onclick="toggleLista('lista1')">Movimentos</div>
            <div class="lista" id="lista1">
                <ul>
                    <li><a href="treinos/movimentos/lSit.html">L-Sit</a></li>
                    <li><a href="treinos/movimentos/handStand.html">Handstand</a></li>
                    <li><a href="treinos/movimentos/muscleUp.html">Muscle Up</a></li>
                    <li><a href="treinos/movimentos/humanFlag.html">Human Flag</a></li>
                    <li><a href="treinos/movimentos/planche.html">Planche</a></li>
                </ul>
            </div>
        </div>

        <div class="item">
            <div class="retangulo" onclick="toggleLista('lista2')">Força</div>
            <div class="lista" id="lista2">
                <ul>
                    <li><a href="treinos/forca/treinoForca1.html">Treino de Força Superior</a></li>
                    <li><a href="treinos/forca/treinoForca2.html">Treino de Força Inferior</a></li>
                    <li><a href="treinos/forca/treinoForca3.html">Treino de Força Total</a></li>
                </ul>
            </div>
        </div>

        <div class="item">
            <div class="retangulo" onclick="toggleLista('lista3')">Flexibilidade</div>
            <div class="lista" id="lista3">
                <ul>
                    <li><a href="treinos/flexibilidade/flexibilidade1.html">Treino de Flexibilidade Superior</a></li>
                    <li><a href="treinos/flexibilidade/flexibilidade2.html">Treino de Flexibilidade Inferior</a></li>
                    <li><a href="treinos/flexibilidade/flexibilidade3.html">Treino de Flexibilidade Total</a></li>
                </ul>
            </div>
        </div>

        <div class="item">
            <div class="retangulo" onclick="toggleLista('lista4')">Geral</div>
            <div class="lista" id="lista4">
                <ul>
                    <li><a href="treinos/geral/treinoGeral1.html">Treino de Força Superior</a></li>
                    <li><a href="treinos/geral/treinoGeral2.html">Treino de Força Superior</a></li>
                    <li><a href="treinos/geral/treinoGeral3.html">Treino de Força Superior</a></li>
                </ul>
            </div>
        </div>
    </div>
    <br>
    <br>

    <script>
        function toggleLista(listaId) {
            const lista = document.getElementById(listaId);
            lista.style.display = lista.style.display === 'none' || lista.style.display === '' ? 'block' : 'none';
        }
    </script>

</body>
</html>
