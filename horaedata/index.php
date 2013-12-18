<?php

echo "<h3>Data e hora</h3>";
date_default_timezone_set("Brazil/East");

$dataAtual = getdate();

echo $dataAtual["mday"];
echo "/";
echo $dataAtual["mon"];
echo "/";
echo $dataAtual["year"];
echo "  ";
echo $dataAtual["hours"]-1;
echo ":";
echo $dataAtual["minutes"];
echo":";
echo $dataAtual["seconds"];

$dataSemana = $dataAtual["wday"];

Switch ($dataSemana){

	case 0:
		echo "Domingo";
		break; 
	case 1:
		echo " Segunda ";
		break;
	case 2:
		echo "Terça ";
		break;
	case 3:
		echo "Quarta";
		break;
	case 4:
		echo "Quinta";
		break;
	case 5:
		echo "Sexta";
		break;
	case 6:
		echo "Sabado";
		break;

//Segunda, 16/12/2013 13:54:00;

}


?>
