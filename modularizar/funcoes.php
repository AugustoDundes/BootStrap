<?php

    function somar($n1, $n2){
        return $n1 + $n2;
    }


    function positivoNegativo($v){
        if ($v > 0){
            return "Valor positivo";
        } elseif($v < 0){
            return "Valor Negativo";
        } else{
            return "Igual a zero";
        }
    }

    function exercici3($v1, $v2){
        if($v1 == $v2) {
            $triple = $v1 * 3;
            echo "O resultado é $triple";
        } else {
            $soma = $v1 + $v2;
            echo "O resultado é $soma";
        }
    }

    function exercici4($v1){
        for ($i=1;$i<11;$i++) {
            $resultado = $v1 * $i;
            echo "$v1 x $i = $resultado <p></p>";
        }
    }

    function exercici5($v1){
        $resultado = 1;
        for ($i=$v1;$i>0;$i--) {
            $resultado *= $i;
        }
    
        echo "Fatorial de $v1 é $resultado";
    }

    function exercici9($v1){
        $anoatual = 2024;


        $idade = $anoatual - $v1;
        $dias = $idade * 365;
        $idade2 = 2025 - $v1;

    echo "idade atual: $idade , dias vividos $dias e sua idade em 2025 é $idade2";
    }

    function exercici6($v1, $v2){
        if ($v1 > $v2) {
            echo "$v2 $v1";
     }
    
        if ($v2 > $v1) {
            echo "$v1 $v2";
     }
    
        if ($v1 == $v2) {
            echo "Números iguais: $v1";
     }
    }

    function exercici7($v1){
        $resposta = $v1 * 100;
        echo "O valor em cm é: $resposta";
    }

    function exercici8($v1){
        $tintaL = $v1 / 3;
    $latas = ($tintaL/18);
    $total = $latas * 80; 

    echo "A quantidade de lata(s) de tinta necessária(s): $latas<br>";
    echo "Preço total: R$ ".number_format($total, 2, ',', '.');
    }

    function menorValor($v1, $v2, $v3, $v4, $v5, $v6, $v7, $v8){
        $menorvalor = $v1;
        $pos = 0;

        if ($v1<$menorvalor){
            $menorvalor = $v2;
            $pos = 1;
        }
        if ($v2<$menorvalor){
            $menorvalor = $v2;
            $pos = 1;
        }
        if ($v3<$menorvalor){
            $menorvalor = $v3;
            $pos = 2;
        }
        if ($v4<$menorvalor){
            $menorvalor = $v4;
            $pos = 3;
        }
        if ($v5<$menorvalor){
            $menorvalor = $v5;
            $pos = 4;
        }
        if ($v6<$menorvalor){
            $menorvalor = $v6;
            $pos = 5;
        }
        if ($v7<$menorvalor){
            $menorvalor = $v7;
            $pos = 6;
        }
        if ($v8<$menorvalor){
            $menorvalor = $v8;
            $pos = 7;
        }

        $valores = array ($menorvalor, $pos);
        $valores[1] = $valores[1] + 1;
        echo "<p>Menor valor: $valores[0]</p>";
        echo "<p>Posição de entrada: $valores[1]</p>";
    }

