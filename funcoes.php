<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício de Funções</title>
</head>
<body>

    <?php
        echo "<p><b>Questão (A):</b></p>"; 
        // a) escrever a tabuada de um número passado por parâmetro.
        
        echo "Tabuada (9):";

        function tabuada ($valor){
            for ($i = 0; $i < 11; $i++){
                $soma = $valor * $i;
                echo "<p>$valor x $i = $soma</p>";
            }
        }

        tabuada (9);

        echo "<br><hr>";

        // ----------------------------------------------------------------------------------------------------------

        echo "<p><b>Questão (B):</b></p>"; 
        // b) inverter o conteúdo de um vetor qualquer. 

        function inverter ($array){
            
            foreach ($array as $iB){
                echo "[ $iB ]";
            } 

            echo " => ";

            $arrayInv = array_reverse($array);

            
            foreach ($arrayInv as $iB){
                echo "[ $iB ]";
            } 
        }

        $value = [0, 1, 2];
        inverter($value);

        echo "<br><hr>";

        // ----------------------------------------------------------------------------------------------------------

        echo "<p><b>Questão (C):</b></p>"; 
        // c) que receba um vetor com números inteiros e que devolva o maior número existente no vetor. Use apenas um laço de repetição e instrução if.

        function higherNum($array){
            
            $higherNum = $array[0];

            for($iC = 0; $iC < sizeof($array); $iC++){
                if($array[$iC] > $higherNum){
                    $higherNum = $array[$iC];
                }
            }

            echo"<p>$higherNum</p>";
        }

        $vetNum = [3, 60, -27];

        higherNum($vetNum);

        echo "<br><hr>";

        // ----------------------------------------------------------------------------------------------------------

        echo "<p><b>Questão (D):</b></p>"; 
        /* d) formatar um número como CPF (###.###.###-##, onde # representa um dígito). 
        Sugestão: completar com zeros a esquerda se a quantidade de dígitos for menor que 11. 
        Use a função mb_strlen() para descobrir a quantidade de dígitos. 
        E use a função mb_substr() para separar os dígitos para acrescentar os pontos e traço para formatar como CPF. */

        $cpf = "98575009";
        echo "Dígitos selecionados: $cpf <br><br>";

        function numCpf($string){
            
            if(mb_strlen($string) > 11){
                echo "Informe numeros de ate 11 digitos.";
                
            } else{
                $digitosAMais = 11 -  mb_strlen($string);
                $novoCpf = str_split($string);

                for($iD = 0; $iD < $digitosAMais; $iD++){
                    array_unshift($novoCpf, "0");
                }

                $novoCpf = implode($novoCpf);

                $fracao1 = mb_substr($novoCpf, 0, 3);
                $fracao2 = mb_substr($novoCpf, 3, 3);
                $fracao3 = mb_substr($novoCpf, 6, 3);
                $fracao4 = mb_substr($novoCpf, 9, 2);

                //Acrescentar os caracteres do CPF
                $novoCpf = $fracao1.".".$fracao2.".".$fracao3."-".$fracao4;

                echo"CPF emitido: $novoCpf <br>";
            }
        }

        numCpf($cpf);

        echo "<br><hr>";

        // ----------------------------------------------------------------------------------------------------------

        echo "<p><b>Questão (E):</b></p>"; 
        /* e) sabendo que a fórmula para a conversão de uma temperatura em  Fahrenheit para Celsius é: 
        c = (f-32)/18, faça uma função em PHP que mostre os valores em Celsius das seguintes temperaturas 
        em Fahrenheit: 90º, 77º, 52º e 12º: */

        function convertF($celsius){
            $conv = ($celsius * 1.8) + 32;

            return $conv;
        }

        $temp1 = convertF(90);
        $temp2 = convertF(77);
        $temp3 = convertF(52);
        $temp4 = convertF(12);

        echo"Temperatura 1: $temp1 °C<br>";
        echo"Temperatura 2: $temp2 °C<br>";
        echo"Temperatura 3: $temp3 °C<br>";
        echo"Temperatura 4: $temp4 °C<br>";

        echo "<br><hr>";

        // ----------------------------------------------------------------------------------------------------------

        echo "<p><b>Questão (F):</b></p>"; 
        /* f) desenvolva, em PHP, a função buscaTexto($texto, $busca), 
        sendo $texto uma variável string que contém um texto, e $busca, 
        um array que contém palavras a serem buscadas no texto. 
        Cada vez que uma palavra buscada for localizada, ela deverá ser destacada na cor vermelha. 
        A função deverá retornar o $texto com as palavras destacadas em vermelho. */

        $sentenca = "O oposto da vida não é a morte: é a repetição.";

        $busca = array("vida","morte","repetição");

        function buscaTexto($texto, $busca){
        if(is_array($busca)){
            foreach($busca as $palavras){
                $troca = "<font color='red'>".$palavras."</font>";
                $texto= str_replace( $palavras,$troca,$texto);
            }
        }
        return $texto;
        }
        echo buscaTexto($sentenca,$busca);

        echo "<br><hr>";

        // ----------------------------------------------------------------------------------------------------------

        echo "<p><b>Questão (G):</b></p>"; 
        /* g) que receba um vetor de números inteiros e devolva a soma dos valores contidos nesse vetor. 
        Use apenas um laço de repetição e instrução if. */

        $vetNum = [
            [8,4],
            [2,6]
        ];


        function vetSoma($array){
            $soma = 0;

            foreach($array as $iG){
                foreach($iG as $t){
                    $soma+= $t;
                }
            }

            echo "$soma";
        }

        vetSoma($vetNum);

    ?>
    
</body>
</html>