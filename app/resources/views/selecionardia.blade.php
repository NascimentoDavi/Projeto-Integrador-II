@extends('layouts.app')

@section('title', 'Selecionar Dia')

@section('content')

    <style>
        /* Basic styles for the calendar table */
        .calendar {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        .calendar th, .calendar td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        .calendar th {
            background-color: #f2f2f2;
        }

        .calendar td:hover {
            background-color: #f1f1f1;
            cursor: pointer;
        }

        .selected {
            background-color: #007bff;
            color: white;
        }

        .float-return-selecdia {
            margin-bottom: 20px;
        }
    </style>

    <div class="float-return-selecdia">
        <button class="btn rounded-circle" onclick="history.back()">
            <i class="bi bi-arrow-left">
                <a href="{{ asset('route(teste)') }}"></a>
            </i>
        </button>
    </div>

    <div class="container mt-1">

        <h2 class="text-center">Selecione uma data para o Treino</h2>

        <hr>

        <div class="d-flex justify-content-between mb-3">
            <button class="btn btn-secondary" id="prevMonth"><</button>

            <h3 id="monthYear"></h3>

            <button class="btn btn-secondary" id="nextMonth">></button>
            
        </div>

        <table class="calendar">
            <thead>
                <tr>
                    <th>Dom</th>
                    <th>Seg</th>
                    <th>Ter</th>
                    <th>Qua</th>
                    <th>Qui</th>
                    <th>Sex</th>
                    <th>Sab</th>
                </tr>
            </thead>
            <tbody id="calendar-body">
                <!-- Calendar days will be generated here -->
            </tbody>
        </table>
        <button class="btn mt-2" id="confirmDate">Selecionar Data</button>
    </div>

    <script>
        let currentMonth = new Date().getMonth(); // 0 = January, 1 = February, ...
        let currentYear = new Date().getFullYear();

        // Function to generate and display the calendar
        function generateCalendar() {
            const calendarBody = document.getElementById('calendar-body');
            const monthYearLabel = document.getElementById('monthYear');
            calendarBody.innerHTML = '';

            // Update the month/year label
            monthYearLabel.textContent = `${monthNames[currentMonth]} ${currentYear}`;

            const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
            const firstDay = new Date(currentYear, currentMonth, 1).getDay();

            let row = document.createElement('tr');
            for (let i = 0; i < firstDay; i++) {
                row.appendChild(document.createElement('td')); // Empty cells
            }

            for (let day = 1; day <= daysInMonth; day++) {
                const cell = document.createElement('td');
                cell.textContent = day;
                cell.onclick = function() {
                    // Highlight the selected date
                    const selectedCell = document.querySelector('.selected');
                    if (selectedCell) selectedCell.classList.remove('selected');
                    cell.classList.add('selected');

                    // Enable the confirm button
                    document.getElementById('confirmDate').disabled = false;

                    // Store the selected date
                    cell.dataset.date = `${currentYear}-${currentMonth + 1}-${day}`;
                };

                row.appendChild(cell);

                // Start a new row if the week is complete
                if ((day + firstDay) % 7 === 0) {
                    calendarBody.appendChild(row);
                    row = document.createElement('tr');
                }
            }

            // Append the last row if it has cells
            if (row.children.length > 0) {
                calendarBody.appendChild(row);
            }
        }

        // Month names for displaying the current month/year
        const monthNames = [
            'Janeiro', 'Fevereiro', 'Março', 'Abril',
            'Maio', 'Junho', 'Julho', 'Agosto',
            'Setembro', 'Outubro', 'Novembro', 'Dezembro'
        ];

        // Event listeners for month navigation
        document.getElementById('prevMonth').onclick = function() {
            if (currentMonth === 0) {
                currentMonth = 11; // Go to December
                currentYear--; // Decrease the year
            } else {
                currentMonth--; // Go to the previous month
            }
            generateCalendar();
        };

        document.getElementById('nextMonth').onclick = function() {
            if (currentMonth === 11) {
                currentMonth = 0; // Go to January
                currentYear++; // Increase the year
            } else {
                currentMonth++; // Go to the next month
            }
            generateCalendar();
        };

        // Initial call to generate the calendar
        generateCalendar();

        // Confirm date button functionality
        document.getElementById('confirmDate').onclick = function() {
            const selectedCell = document.querySelector('.selected');
            if (selectedCell) {
                const selectedDate = selectedCell.dataset.date;
                alert(`Treino agendado para: ${selectedDate}`);
                // You can redirect or perform further actions here
            }
        };
    </script>

    <hr class="mt-4 mb-3">

    {{-- Information about the traininig --}}
    <div class="treino-biceps d-flex justify-content-center flex-column gap-2 container">
        <!-- Título do Treino -->
        <h2>Treino de Bíceps</h2>
    
        <div class="dicas-pratica">
            <!-- Dicas de Prática -->
            <h3>Dicas de Prática</h3>
            <p>Ao treinar bíceps, concentre-se na forma correta. Evite balançar o corpo para usar impulso, mantendo o movimento controlado. Isso maximiza a ativação do músculo e reduz o risco de lesões.</p>
            <p>Varie os exercícios para atingir diferentes partes do bíceps. Alterne entre halteres, barra e cabos para uma ativação muscular completa.</p>
        </div>

        <div class="duracao">
            <!-- Duração -->
            <h3>Duração</h5>
            <p>Recomenda-se treinar bíceps por 30 a 45 minutos. Um treino completo deve incluir de 3 a 4 séries de 8 a 12 repetições para cada exercício, com descanso de 1 a 2 minutos entre as séries.</p>
        </div>
    
        <div class="nutricao">
            <!-- Informações sobre Nutrição -->
            <h3>Informações sobre Nutrição</h3>
            <p>Para o crescimento muscular, a ingestão de proteínas é fundamental. Consuma fontes de proteína magra, como frango, peixe ou ovos, logo após o treino para otimizar a recuperação muscular.</p>
            <p>Mantenha-se hidratado durante o treino e complemente sua dieta com carboidratos complexos, como arroz integral ou batata doce, para garantir a energia necessária para o desempenho físico.</p>
        </div>
    </div>
    

@endsection
