<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>

		<?php

			$age = 20;
			echo $age;
			echo "<br/>";
			
			if($age >= 18)
			{
			 echo "Vous etes majeur!";
			}
				else
				{
				 echo "Vous etes mineur!";
				}
			/* Exo 1 ci dessus*/

			echo "<br/>";
			$IsEasy = (1 == true);
			if ($IsEasy == true){
				echo "C'est facile!";
			}  
			 else{
			 	echo "C'est difficile";
			 }
			 echo "<br/>";
			 /* Exo 2 ci dessus */

			 $genre = "Homme" || "Femme" ;
			 
			 if (($genre == "Homme") && ($age >= 18)){
			 	echo "Vous etes un homme et vous etes majeur !";
			 	echo "<br/>";
			 }  
			 	elseif (($genre == "Homme") && ($age < 18)) {
			 		echo "vous etes un homme et vous etes mineur !";
			 		echo "<br/>";
			 	}
			 	elseif (($genre == "Femme") && ($age >= 18)) {
			 		echo "Vous etes une femmme et vous etes majeur !";
			 		echo "<br/>";
			 	}
			 	elseif (($genre == "Femme") && ($age < 18)) {
			 		echo "Vous etes une femme et vous etes mineur !";
			 		echo "<br/>";
			 	}
			/* Exo 3 ci dessus*/

			$magnitude = 5;
			switch ($magnitude) {
				case 1:
					echo "Micro-séisme impossible à ressentir.";
					break;
				case 2 :
					echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
					break;
				case 3 : 
					echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
					break;
				case 4 :
					echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
					break;
				case 5 :
					echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
					break;
				case 6 : 
					echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
					break;
				case 7 :
					echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
					break;
				case 8 : 
					echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
					break;
				case 9 :
					echo " 	Séisme capable de tout détruire sur une très vaste zone.";
					break;		
			}
			echo "<br/>";
			/* Exo 4 ci dessus*/

			$maVariable = "Homme" || "Femme";
			if ($maVariable == "Homme"){
				echo "C\'est un développeur!!!";
			} 
			else{
				echo "C\'est une développeuse!!!";
			}
			echo "<br/>";
			/* Exo 5 ci dessus*/

			$monAge = 10;
			if ($monAge >=18){
				echo "Tu es majeur !";
			}
			else{ 
				echo "tu es mineur !";
			}
			echo "<br/>";

			/* Exo 6 ci dessus*/
			$maVariable = false ;
			if ($maVariable == true){
				echo "C'est ok!!";
			}
			else{
				echo "C\'est pas bon !!!";
			}
			echo "<br/>";

			/*Exo 7 ci dessus */
			$maVariable = "Lapin" ;
			if ($maVariable == 1){
				echo "C'est ok !!";
			}
			else{
				echo "C'est pas bon !!!";
			}

			/* Exo 8 ci dessus */
		?>
			

	</body>
</html>