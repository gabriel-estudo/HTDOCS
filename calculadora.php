<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $a = $_POST["a"];
  $b = $_POST["b"];
  $soma = $a + $b;
  $subtracao = $a - $b;
  $multiplicacao = $a * $b;
  $divisao = $a / $b;
  $potencia = pow($a, $b);
  $raiz = sqrt($a);
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
    <input type=submit name="operacao" value='Somar'>
    <input type=submit name="operacao" value='Subtrair'>
    <input type=submit name="operacao" value='Multiplicar'>
    <input type=submit name="operacao" value='Dividir'>
    <input type=submit name="operacao" value='Potencia'>
    <input type=submit name="operacao" value='Raiz'>
    <br><br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      if (isset($_POST['operacao'])) {
        $operacao = $_POST['operacao'];

        if ($operacao == 'Somar') {
          echo 'Resultado: ' . $soma;
        } elseif ($operacao == 'Subtrair') {
          echo '<br>Resultado: ' . $subtracao;
        } elseif ($operacao == 'Multiplicar') {
          echo '<br>Resultado: ' . $multiplicacao;
        } elseif ($operacao == 'Dividir') {
          echo '<br>Resultado: ' . $divisao;
        } elseif ($operacao == 'Potencia') {
          echo '<br>Resultado: ' . $potencia;
        } elseif ($operacao == 'Raiz') {
          echo '<br>Resultado: ' . $raiz;
        }

        if ($b == 0) {
          echo "Não é possível dividir por zero";
        }
      }
    }
    ?>
</body>

</html