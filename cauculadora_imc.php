<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
      <style>
body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

.container {
  max-width: 600px;
  margin: 0 auto;
  text-align: center;
  padding: 50px;
}

h1 {
  margin-top: 50px;
  color: #0075c9;
}

form {
  margin-top: 50px;
  display: inline-block;
  text-align: left;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 10px;
}

input[type="number"] {
  padding: 10px;
  font-size: 16px;
  width: 200px;
  border-radius: 5px;
  border: 1px solid #0075c9;
}

button[type="submit"] {
  padding: 10px 20px;
  background-color: #0075c9;
  color: #fff;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  margin-top: 20px;
}

button[type="submit"]:hover {
  background-color: #006fbf;
}

p {
  margin-top: 50px;
  font-size: 18px;
  font-weight: bold;
}

@media (max-width: 600px) {
  .container {
    padding: 20px;
  }

  input[type="number"] {
    width: 100%;
  }
}
.info-button {
  position: absolute;
  top: 20px;
  left: 20px;
  padding: 10px 20px;
  background-color: #0075c9;
  color: #fff;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
}

.info-button:hover {
  background-color: #006fbf;
}

.info-text {
  display: none;
  position: absolute;
  top: 70px;
  left: 20px;
  padding: 20px;
  background-color: #fff;
  border: 1px solid #0075c9;
  border-radius: 5px;
  width: 300px;
  text-align: left;
  font-size: 16px;
}



      </style>
      
  <body>
    <div class="container">
      <h1>Calculadora de IMC</h1>
      <form action="cauculadora_imc.php" method="post">
        <div class="form-group">
          <label for="weight">Peso (kg):</label>
          <input type="number" id="weight" name="weight" step="0.01" required>
        </div>
        <div class="form-group">
          <label for="height">Altura (m):</label>
          <input type="number" id="height" name="height" step="0.01" required>
        </div>
        <button type="submit">Calcular IMC</button>
      </form>
      <button class="info-button">O que é Imc?</button>

<div class="info-text">
  <p>O índice de massa corporal (IMC) é uma medida usada para avaliar o peso corporal ideal de uma pessoa. É calculado dividindo o peso corporal em quilogramas pela altura em metros elevada ao quadrado. O resultado obtido é comparado com uma tabela de classificação para determinar se a pessoa está com o peso adequado, abaixo ou acima do peso ideal.</p>
</div>

      <?php
        if ($_POST) {
          $weight = $_POST['weight'];
          $height = $_POST['height'];
          $bmi = $weight / ($height * $height);
          echo "<p>Seu IMC é de: " . round($bmi, 2) . "</p>";
        }
        
      ?>
      <script>
  const infoButton = document.querySelector('.info-button');
  const infoText = document.querySelector('.info-text');

  infoButton.addEventListener('click', function() {
    if (infoText.style.display === 'block') {
      infoText.style.display = 'none';
    } else {
      infoText.style.display = 'block';
    }
  });
</script>

    </div>
  </body>
</html>
