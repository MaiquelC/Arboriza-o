<html>
    <head>
    </head>
    <body>
        <?php
            $a = 10;
            $resu = 0;
            $contador = 0;
            $cpf = [0,4,7,6,8,0,3,3,0,6,7];
            for ($i = 0; $i < 9; $i++) {            	
                $resu = $cpf[$i] * $a;
                $contador = $contador + $resu;
                $a--;         
            };          
            $contador = $contador * 10;	
            if ($contador % 11 == $cpf[9]) {
            	$a = 11;
            	$resu = 0;
                $contador = 0;
                for ($i = 0; $i < 10; $i++) {            	
                    $resu = $cpf[$i] * $a;
                    $contador = $contador + $resu;
                    $a--;         
                };
                $contador = $contador * 10;
                if ($contador % 11 == $cpf[10]) {
                	echo "CPF valido";
                }else {
                	echo "CPF inválido";
                };       
            }else {
            	echo "CPF inválido";
            };/* MEUDEUS funcionou de primeira kkkk isso me ocorreu apenas 4 vezes desde ano passado gg*/
       ?>
   </body>
</html>
