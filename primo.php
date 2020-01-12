<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/style.css"/>
        <title>Números Primos</title>
    </head>
    <body>
        <div>
            <?php //Aqui declaro as variáveis e pego o número do formulário.
                $c = 1;
                $mult = 0;
                $num = isset ($_GET["num"]) ? ($_GET["num"]) : 0;
                echo "Analisando o número <span class='foco'>$num</span><br>";
                echo "Valores múltiplos: ";
                //Aqui começa a estrutura de repetição para calcular os primos,
                //usar o retorno do resto "%", e contar quantos números ele tem.
                for ($c = 1; $c <= $num; $c++) {
                    $mod = $num % $c;
                    if ($mod == 0 && $c >= 1) { 
                        $mult ++;  
                        echo "  <span class='foco'>$c</span>";
                    }
                } //Aqui verifica-se se é primo ou não.
                echo "<br>  Total de múltiplos: <span class='foco'>$mult</span>";
                if ($mult == 2) {
                    echo "<br>" . "Resultado: $num " . "<span class = 'foco'>" . "É PRIMO." . "</span>";
                } else {
                    echo "<br>" . "Resultado: $num " . "<span class = 'foco'>" . "NÃO É PRIMO." . "</span>";
                }
            ?><br>
            <br><!--<a href = "javascript:history.go(-1)"><input type="submit" value="Voltar"></input></a>-->
            <a href="13c.html"><input type="submit" value="Voltar"></input>
        </div>
    </body>
</html>