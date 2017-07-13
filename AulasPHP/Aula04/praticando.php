<HTML>
	<HEAD><TITLE>Praticando</TITLE></HEAD>
	<BODY>
		<?php
		$texto='Brunno Henrique';
		//print strrev($texto);
		
		for ($i=strlen($texto); $i>=0 ; $i--){
		print substr($texto,$i,1);
		}
		
		
		print '<br/><br/>';
		
		
		$lista='Lucas Souza';
		
		for ($i=strlen($lista)-1; $i>=0 ; $i--){
		print $lista[$i];
		}
		
		
		?>
	</BODY>
</HTML>