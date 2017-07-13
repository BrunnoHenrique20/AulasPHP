<?php

class HTML {
	
	var $linha, $coluna;
  
	function DesenharTabela(){
		$desenho='';
		$desenho.= '<table width="200" border="1">
  		<tbody>';
		
		for ($j=1; $j<=$this -> linha; $j++){
			$desenho.= '<tr>';
			for($i=1; $i<= $this -> coluna; $i++){
				$desenho.='<td>Linha</td>';
			}
			$desenho.='</tr>';
			
		}
		
		$desenho.= '</tbody></table>';
		return $desenho;
	
	}
			
}

$objDesenhar = new HTML;
$objDesenhar -> linha = 10;
$objDesenhar -> coluna = 5;
print $objDesenhar -> DesenharTabela();
	
?>