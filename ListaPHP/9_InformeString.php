<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Palíndromo</h1>
    <form method="post" action="">
    <label for="texto">Digite um texto:</label>
    <input type="text" id="texto" name="texto" required>
    <button type="submit">Calcular</button>
    </form>
   

    <?php
    if(isset($_POST['texto'])){
        $texto = $_POST['texto'];
        $tamanho = strlen($texto);
        $palindromo = ($texto == strrev($texto)) ? 'Sim' : 'Não';
        $vogais = preg_match_all('/[aeiou]/i', $texto, $matches);
        $consoantes = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i',$texto,$matches);


    
    ?>
     <ul>
        <li>tamanho da string: <?php echo $tamanho; ?></li>
        <li>É um palindromo: <?php echo $palindromo; ?></li>
        <li>O numero de vogais: <?php echo $vogais; ?></li>
        <li>O numero de consoantes: <?php echo $consoantes; ?></li>
    </ul>
    <?php
}
?>
</body>
</html>