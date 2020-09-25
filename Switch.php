<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <?php

        $tecla = 10;
        //Menu Ex 04.
        switch($tecla)
        {
            case 1: 
                echo "Saque";
                echo "<br>";
            break;

            case 2: 
                echo "Deposito";
                echo "<br>";
            break;

            case 3:
                echo "Transferencia";
                echo "<br>";
            break;

            case 4:
                echo "Pagamentos";
                echo "<br>";
            break;

            default:
            echo " Opção Inválida";
            echo "<br>";
        break;
        

        }

?>