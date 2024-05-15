<!DOCTYPE html>

<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounting For Traffic Violations</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>


<header>
    <a href="index.php">Запросы Базы Данных</a>
    <a href="showtable.php">База Данных</a>
</header>


    <h1>Violations Database</h1>

    <form action="result.php" method="post">
        <label for="query">Запрос:</label>
        <select name="query" id="query">
            <option value="0" disabled selected>Выберите запрос</option>
            <option value="1">1. Информация об автомобилях конкретного года выпуска.</option>
            <option value="2">2. Информация об автомобилях, паспорта владельцев которых начинаются с символа.</option>
            <option value="3">3. Информация об автомобилях, страховая стоимость которых в указанном диапазоне.</option>
            <option value="4">4. Информация об автомобиле с заданным госномером.</option>
            <option value="5">5. Информация обо всех зафиксированных нарушениях ПДД в некоторый заданный промежуток времени.</option>
            <option value="6">6. Величину страхового взноса.</option>
            <option value="7">7. Средняя страховая стоимость автомобиля.</option>
            <option value="8">8. Минимальная и максимальная страховая стоимость.</option>
            <option value="9">9. Информация об автомобилях со страховой стоимостью больше указанного значения.</option>
        </select>
        <br>
        
        <div id="inputs"></div>

        <input type="submit" name="submit" value="submit">
    </form>

    <script>
        document.getElementById("query").addEventListener("change", function() {
            var query = this.value;
            var inputsDiv = document.getElementById("inputs");
            inputsDiv.innerHTML = "";

            if (query === "1") {
                inputsDiv.innerHTML = `
                    <label for="year">Год выпуска:</label>
                    <input type="number" name="year" id="year" min="1950" required>
                    <br>
                `;
            } else if (query === "2") {
                inputsDiv.innerHTML = `
                    <label for="symbol">Символ:</label>
                    <input type="text" name="symbol" id="symbol" required>
                    <br>
                `;
            } else if (query === "3") {
                inputsDiv.innerHTML = `
                    <label for="min_cost">Нижний диапазон:</label>
                    <input type="number" name="min_cost" id="min_cost" min="0" required>
                    <br>
                    <label for="max_cost">Верхний диапазон:</label>
                    <input type="number" name="max_cost" id="max_cost" min="0" required>
                    <br>
                `;
            } else if (query === "4") {
                inputsDiv.innerHTML = `
                    <label for="license_plate">Госномер:</label>
                    <input type="text" name="license_plate" id="license_plate" required>
                    <br>
                `;
            } else if (query === "5") {
                inputsDiv.innerHTML = `
                    <label for="min_date">Нижний диапазон:</label>
                    <input type="date" name="min_date" id="min_date" required>
                    <br>
                    <br>
                    <label for="max_date">Верхний диапазон:</label>
                    <input type="date" name="max_date" id="max_date" required>
                    <br>
                    <br>
                `;
            } else if (query === "9") {
                inputsDiv.innerHTML = `
                    <label for="min_insurance_cost">Страховая стоимость больше:</label>
                    <input type="number" name="min_insurance_cost" id="min_insurance_cost" min="0" required>
                    <br>
                `;
            }
        });

        document.addEventListener("DOMContentLoaded", function() {
            var query = document.getElementById("query").value;
            var inputsDiv = document.getElementById("inputs");

            if (query === "1") {
                inputsDiv.innerHTML = `
                    <label for="year">Год выпуска:</label>
                    <input type="number" name="year" id="year" min="1950" required>
                    <br>
                `;
            } else if (query === "2") {
                inputsDiv.innerHTML = `
                    <label for="symbol">Символ:</label>
                    <input type="text" name="symbol" id="symbol" required>
                    <br>
                `;
            } else if (query === "3") {
                inputsDiv.innerHTML = `
                    <label for="min_cost">Нижний диапазон:</label>
                    <input type="number" name="min_cost" id="min_cost" min="0" required>
                    <br>
                    <label for="max_cost">Верхний диапазон:</label>
                    <input type="number" name="max_cost" id="max_cost" min="0" required>
                    <br>
                `;
            } else if (query === "4") {
                inputsDiv.innerHTML = `
                    <label for="license_plate">Госномер:</label>
                    <input type="text" name="license_plate" id="license_plate" required>
                    <br>
                `;
            } else if (query === "5") {
                inputsDiv.innerHTML = `
                    <label for="min_date">Нижний диапазон:</label>
                    <input type="date" name="min_date" id="min_date" required>
                    <br>
                    <br>
                    <label for="max_date">Верхний диапазон:</label>
                    <input type="date" name="max_date" id="max_date" required>
                    <br>
                    <br>
                `;
            } else if (query === "9") {
                inputsDiv.innerHTML = `
                    <label for="min_insurance_cost">Страховая стоимость больше:</label>
                    <input type="number" name="min_insurance_cost" id="min_insurance_cost" min="0" required>
                    <br>
                `;
            }
        });
    </script>
</body>
</html>
