<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Public Library Expansion Project</title>

    <!-- Custom Font (NOT Times New Roman) -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffd6f5;
        }

        .container {
            width: 700px;
            margin: 40px auto;
            background-color: #ffd6f5;
            padding: 20px;
            border-radius: 10px;
        }

        h1, h3 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        th, td {
            border: 1px solid #000;
            padding: 8px;
        }

        th {
            background-color: #cce5ff;
        }

        .created {
            text-align: right;
            margin-top: 15px;
            font-style: italic;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Public Library Expansion Project</h1>
    <h3>Cost Estimates</h3>

    <table>
        <thead>
            <tr>
                <th>Expenditures</th>
                <th>Estimated Cost</th>
                <th>10% Increase</th>
                <th>15% Increase</th>
                <th>20% Increase</th>
            </tr>
        </thead>
        <tbody id="costTable"></tbody>
        <tfoot>
            <tr>
                <th>Total Expenditures</th>
                <th id="totalBase"></th>
                <th id="total10"></th>
                <th id="total15"></th>
                <th id="total20"></th>
            </tr>
        </tfoot>
    </table>

    <div class="created">Created by: Harvey</div>
</div>

<script>
    // Function to calculate increased cost
    function calculateIncrease(cost, rate) {
        return cost + (cost * rate);
    }

    const expenses = [
        { name: "Lumber", cost: 150000 },
        { name: "Concrete", cost: 78000 },
        { name: "Drywall", cost: 69000 },
        { name: "Paint", cost: 12000 },
        { name: "Miscellaneous", cost: 20000 }
    ];

    let totalBase = 0, total10 = 0, total15 = 0, total20 = 0;
    const table = document.getElementById("costTable");

    expenses.forEach(item => {
        const inc10 = calculateIncrease(item.cost, 0.10);
        const inc15 = calculateIncrease(item.cost, 0.15);
        const inc20 = calculateIncrease(item.cost, 0.20);

        totalBase += item.cost;
        total10 += inc10;
        total15 += inc15;
        total20 += inc20;

        table.innerHTML += `
            <tr>
                <td>${item.name}</td>
                <td>$${item.cost.toFixed(2)}</td>
                <td>$${inc10.toFixed(2)}</td>
                <td>$${inc15.toFixed(2)}</td>
                <td>$${inc20.toFixed(2)}</td>
            </tr>
        `;
    });

    document.getElementById("totalBase").innerHTML = `$${totalBase.toFixed(2)}`;
    document.getElementById("total10").innerHTML = `$${total10.toFixed(2)}`;
    document.getElementById("total15").innerHTML = `$${total15.toFixed(2)}`;
    document.getElementById("total20").innerHTML = `$${total20.toFixed(2)}`;
</script>

</body>
</html>