<?php
   $weapons = ['fists', 'whip', 'gun'];
   $opponentWeapon = $weapons[rand(0,2)]; 
   switch ($opponentWeapon) {
  	case 'fists':
		$indyWeapon = 'gun';
       		break;
  	case 'whip':
     		$indyWeapon = 'fist';
    	 	break;
  	case 'gun':
     		$indyWeapon = 'whip';
    	 	break;
} echo $indyWeapon;

?>
