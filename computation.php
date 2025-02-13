<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Asset Value Breakdown Calculator</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      padding: 20px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 10px;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
    }
    input[type="number"] {
      width: 100px;
    }
    #calculate {
      margin-top: 15px;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
    #calculate:hover {
      background-color: #45a049;
    }
    .result {
      font-weight: bold;
    }
  </style>
</head>
<body>

  <h2>Asset Value and Payment Breakdown Calculator</h2>

  <table>
    <thead>
      <tr>
        <th>Asset Type</th>
        <th>Price (₱)</th>
        <th>Interest Rate (%)</th>
        <th>Loan Term (Years)</th>
        <th>Monthly Payment (₱)</th>
        <th>Total Payment (₱)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>House</td>
        <td><input type="number" id="housePrice" placeholder="Enter price"></td>
        <td><input type="number" id="houseInterest" placeholder="Enter interest"></td>
        <td><input type="number" id="houseTerm" placeholder="Enter term"></td>
        <td id="houseMonthly" class="result">0</td>
        <td id="houseTotal" class="result">0</td>
      </tr>
      <tr>
        <td>Car</td>
        <td><input type="number" id="carPrice" placeholder="Enter price"></td>
        <td><input type="number" id="carInterest" placeholder="Enter interest"></td>
        <td><input type="number" id="carTerm" placeholder="Enter term"></td>
        <td id="carMonthly" class="result">0</td>
        <td id="carTotal" class="result">0</td>
      </tr>
      <tr>
        <td>Land</td>
        <td><input type="number" id="landPrice" placeholder="Enter price"></td>
        <td><input type="number" id="landInterest" placeholder="Enter interest"></td>
        <td><input type="number" id="landTerm" placeholder="Enter term"></td>
        <td id="landMonthly" class="result">0</td>
        <td id="landTotal" class="result">0</td>
      </tr>
    </tbody>
  </table>

  <button id="calculate">Calculate Payments</button>

  <script>
    function calculateMonthlyPayment(principal, annualRate, years) {
      if (principal <= 0 || annualRate < 0 || years <= 0) return 0;

      let monthlyRate = annualRate / 100 / 12;
      let totalPayments = years * 12;

      return monthlyRate > 0
        ? (principal * monthlyRate) / (1 - Math.pow(1 + monthlyRate, -totalPayments))
        : principal / totalPayments;
    }

    document.getElementById('calculate').addEventListener('click', () => {
      const assets = ['house', 'car', 'land'];

      assets.forEach(asset => {
        const price = parseFloat(document.getElementById(`${asset}Price`).value) || 0;
        const interest = parseFloat(document.getElementById(`${asset}Interest`).value) || 0;
        const term = parseFloat(document.getElementById(`${asset}Term`).value) || 0;

        const monthlyPayment = calculateMonthlyPayment(price, interest, term);
        const totalPayment = monthlyPayment * term * 12;

        document.getElementById(`${asset}Monthly`).textContent = monthlyPayment.toFixed(2);
        document.getElementById(`${asset}Total`).textContent = totalPayment.toFixed(2);
      });
    });
  </script>

</body>
</html>