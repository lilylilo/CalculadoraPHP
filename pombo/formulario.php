<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Formulário</title>
</head>
<body>
    <form id="f1" action="calculadora.php" method="get">

        1ºNúmero:
        <input type="number"
                name="primeiro número"
                min="0"
                max="50"> <br>
        Operação:
        <select name="sinal">
            <option value="mais"> + </option>
            <option value="menos"> - </option>
            <option value="vezes"> * </option>
            <option value="dividir"> / </option>
        </select> <br>
        2ºNúmero:
        <input type="number"
                name="segundo número"
                min="0"
                max="50">
                
    </form>
    
</body>
</html>