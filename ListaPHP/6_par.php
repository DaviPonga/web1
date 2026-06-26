<!DOCTYPE html>
<html lang="pt-br">
<head>

</head>
<body>
    <form method="get">
        <label for="num">Informe um número</label>
        <input type="text" id="num" name="num">
        <input type="submit" value="submeter">
        
        <?php
            if(!isset($_GET['num']) || $_GET['num'] === ''){
                exit();
            }
            
           
            $num = $_GET['num'];
            
            if($num % 2 == 0){
                echo "par";
            } else {
                echo "Ímpar";
            }
        ?>
    </form>
</body>
</html>