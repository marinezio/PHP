<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">

        <?php
	$nota = 7;
	if($nota >= 7){
		echo "Aprovado - Nota igual ou maior que 7 - Nota final: ". $nota. "</br>";
	}elseif(($nota < 7) && ($nota >= 4)){
		echo "Recuperacao - Nota menor que 7 e igual ou maior que 4 - Nota final: ". $nota. "</br>";
	}else{
		echo "Reprovado - Nota menor que 4 - Nota final: ". $nota . "</br>";
	}
?>
     