<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $a = $_POST["a"];
  $b = $_POST["b"];
  $soma = $a + $b;
  $subtracao = $a - $b;
  $multiplicacao = $a * $b;
  $divisao = $a / $b;
  $operacao = $_POST['operacao'];
}
//  echo 'Resultado: ' . $soma;
//  http://localhost/daw/soma.php?a=2&b=3
?>
<!DOCTYPE html>
<html>

<body>
  <h1><?php echo 'Minha Calculadora!'; ?></h1>

  <form method='POST' action='calculadora.php'>
    a:<input type=text name='a'><br>
    b:<input type=text name='b'>
    <input type=submit value='Somar'>
    <input type=submit value='Subtrair'>
    <input type=submit value='Multiplicar'>
    <input type=submit value='Dividir'>
    <br><br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      if ($operacao == 'Somar') {
        echo 'Resultado: ' . $soma;
      } elseif ($operacao == 'Subtrair') {
        echo '<br>Resultado: ' . $subtracao;
      } elseif ($operacao == 'Multiplicar') {
        echo '<br>Resultado: ' . $multiplicacao;
      } elseif ($operacao == 'Dividir') {
        echo '<br>Resultado: ' . $divisao;
      }
    }
    ?>

</body>

</html

