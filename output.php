<?php

$name    = $_POST['name'];
$age     = $_POST['age'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$weight  = $_POST['weight']; 
$height  = $_POST['height']; 

$weightLb = $weight * 2.205;
$heightIn = $height / 2.54;

$bmi = $weight / (($height/100) * ($height/100));
$bmiRounded = round($bmi, 1);

if ($bmi < 18.5) {
  $category = "Under Healthy weight";
} elseif ($bmi < 25) {
  $category = "Healthy Weight";
} elseif ($bmi < 30) {
  $category = "Overweight";
} elseif ($bmi < 35) {
  $category = "Obese I";
} elseif ($bmi < 40) {
  $category = "Obese II";
} else {
  $category = "Obese III";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>BMI Report</title>
  <style>
    body {
      font-family: 'Segoe UI', Arial, sans-serif;
      background: #f4f9ff;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 800px;
      margin: 40px auto;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      padding: 30px;
    }
    h2 {
      text-align: center;
      color: #0066cc;
      margin-bottom: 20px;
    }
    .patient-info {
      background: #eaf4ff;
      border-left: 5px solid #0066cc;
      padding: 15px;
      margin-bottom: 20px;
      border-radius: 8px;
    }
    .patient-info p {
      margin: 6px 0;
      font-size: 15px;
      color: #333;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    th {
      background: #0066cc;
      color: #fff;
      padding: 12px;
      text-align: left;
    }
    td {
      border: 1px solid #ddd;
      padding: 12px;
      font-size: 15px;
    }
    .category {
      margin-top: 25px;
      text-align: center;
      font-size: 18px;
      font-weight: bold;
      color: #0066cc;
      background: #eaf4ff;
      padding: 12px;
      border-radius: 8px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>BMI Report of <?php echo htmlspecialchars($name); ?></h2>

    <div class="patient-info">
      <p><strong>Age:</strong> <?php echo $age; ?></p>
      <p><strong>Address:</strong> <?php echo htmlspecialchars($address); ?></p>
      <p><strong>Contact Number:</strong> <?php echo htmlspecialchars($contact); ?></p>
    </div>

    <table>
      <tr>
        <th>Weight (Pounds)</th>
        <th>Height (Inches)</th>
        <th>BMI</th>
      </tr>
      <tr>
        <td><?php echo round($weightLb); ?></td>
        <td><?php echo round($heightIn); ?></td>
        <td><?php echo $bmiRounded; ?></td>
      </tr>
    </table>

    <div class="category">
      Category: <?php echo $category; ?>
    </div>
  </div>
</body>
</html>
