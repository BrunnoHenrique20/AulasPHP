<HTML>
	<HEAD>
		<TITLE>Praticando</TITLE>
	</HEAD>
	<BODY>
		<H1>Exercicio 01</H1><br/>
		<?php
		$idade=61;
		
													/*
		switch($idade){
			case ($idade<12):
				print 'É uma Criança!';
				break;
			case ($idade>=12 and $idade<=18):
				print 'É um Adolescente!';
				break;
			case ($idade>18 and $idade<=60):
				print 'É um Adulto!';
				break;
			case ($idade>60 and $idade<=80):
				print 'É um Idoso!';
				break;
			case ($idade>80):
				print 'É um PénaCova!';
				break;
		}              								*/
		
		if ($idade<12){
			print 'É uma Criança!';
		}
		elseif ($idade<=18){
			print 'É um Adolescente!';
		}
		elseif ($idade<=60){
			print 'É um Adulto!';
		}
		elseif ($idade<=80){
			print 'É um Idoso';
		}
		else {
			print 'É um PénaCova!';
		}
		?>
		
		<H1>Exercicio 02</H1><br/>
		<?php
			
			$listacidades = array (
				'Goiania' => 50000,
				'Brasilia' => 100000,
				'Florianopolis' => 30000,
				'Belo Horizonte' => 75000,
				'Porto Alegre' => 15050
			);
		
			print '<pre>';
			print_r ($listacidades);
			print '</pre>';
		
			$somatotal = $listacidades['Goiania'] + $listacidades['Brasilia'] + $listacidades['Florianopolis'] + $listacidades['Belo Horizonte'] + $listacidades['Porto Alegre'] ;
		
			?><h3><?php
			print 'A soma total de habitantes é de: ';
			print $somatotal;
			print '<br/>';
			
			if ($listacidades['Goiania'] > $listacidades['Brasilia']){
				if ($listacidades['Goiania'] > $listacidades['Florianopolis']){
					if ($listacidades['Goiania'] > $listacidades['Belo Horizonte']){
						if ($listacidades['Goiania'] > $listacidades['Porto Alegre']){
							print 'Goiânia é a cidade mais Populosa com ';
							print $listacidades['Goiania'];
							print ' habitantes!';
						}
					}
				}
			}
			
			elseif ($listacidades['Brasilia'] > $listacidades['Goiania']){
				if ($listacidades['Brasilia'] > $listacidades['Florianopolis']){
					if ($listacidades['Brasilia'] > $listacidades['Belo Horizonte']){
						if ($listacidades['Brasilia'] > $listacidades['Porto Alegre']){
							print 'Goiânia é a cidade mais Populosa com ';
							print $listacidades['Brasilia'];
							print ' habitantes!';
						}
					}
				}
			}
		
			elseif ($listacidades['Florianopolis'] > $listacidades['Brasilia']){
				if ($listacidades['Florianopolis'] > $listacidades['Goiania']){
					if ($listacidades['Florianopolis'] > $listacidades['Belo Horizonte']){
						if ($listacidades['Florianopolis'] > $listacidades['Porto Alegre']){
							print 'Goiânia é a cidade mais Populosa com ';
							print $listacidades['Florianopolis'];
							print ' habitantes!';
						}
					}
				}
			}
		
			elseif ($listacidades['Belo Horizonte'] > $listacidades['Brasilia']){
				if ($listacidades['Belo Horizonte'] > $listacidades['Florianopolis']){
					if ($listacidades['Belo Horizonte'] > $listacidades['Goiania']){
						if ($listacidades['Belo Horizonte'] > $listacidades['Porto Alegre']){
							print 'Goiânia é a cidade mais Populosa com ';
							print $listacidades['Belo Horizonte'];
							print ' habitantes!';
						}
					}
				}
			}
		
			elseif ($listacidades['Porto Alegre'] > $listacidades['Brasilia']){
				if ($listacidades['Porto Alegre'] > $listacidades['Florianopolis']){
					if ($listacidades['Porto Alegre'] > $listacidades['Belo Horizonte']){
						if ($listacidades['Porto Alegre'] > $listacidades['Goiania']){
							print 'Goiânia é a cidade mais Populosa com ';
							print $listacidades['Porto Alegre'];
							print ' habitantes!';
						}
					}
				}
			}
		
			print '<br/>';
		
			if ($listacidades['Goiania'] < $listacidades['Brasilia']){
				if ($listacidades['Goiania'] < $listacidades['Florianopolis']){
					if ($listacidades['Goiania'] < $listacidades['Belo Horizonte']){
						if ($listacidades['Goiania'] < $listacidades['Porto Alegre']){
							print 'Goiânia é a cidade menos Populosa com ';
							print $listacidades['Goiania'];
							print ' habitantes!';
						}
					}
				}
			}
			
			elseif ($listacidades['Brasilia'] < $listacidades['Goiania']){
				if ($listacidades['Brasilia'] < $listacidades['Florianopolis']){
					if ($listacidades['Brasilia'] < $listacidades['Belo Horizonte']){
						if ($listacidades['Brasilia'] < $listacidades['Porto Alegre']){
							print 'Goiânia é a cidade menos Populosa com ';
							print $listacidades['Brasilia'];
							print ' habitantes!';
						}
					}
				}
			}
		
			elseif ($listacidades['Florianopolis'] < $listacidades['Brasilia']){
				if ($listacidades['Florianopolis'] < $listacidades['Goiania']){
					if ($listacidades['Florianopolis'] < $listacidades['Belo Horizonte']){
						if ($listacidades['Florianopolis'] < $listacidades['Porto Alegre']){
							print 'Goiânia é a cidade menos Populosa com ';
							print $listacidades['Florianopolis'];
							print ' habitantes!';
						}
					}
				}
			}
		
			elseif ($listacidades['Belo Horizonte'] < $listacidades['Brasilia']){
				if ($listacidades['Belo Horizonte'] < $listacidades['Florianopolis']){
					if ($listacidades['Belo Horizonte'] < $listacidades['Goiania']){
						if ($listacidades['Belo Horizonte'] < $listacidades['Porto Alegre']){
							print 'Goiânia é a cidade menos Populosa com ';
							print $listacidades['Belo Horizonte'];
							print ' habitantes!';
						}
					}
				}
			}
		
			elseif ($listacidades['Porto Alegre'] < $listacidades['Brasilia']){
				if ($listacidades['Porto Alegre'] < $listacidades['Florianopolis']){
					if ($listacidades['Porto Alegre'] < $listacidades['Belo Horizonte']){
						if ($listacidades['Porto Alegre'] < $listacidades['Goiania']){
							print 'Goiânia é a cidade menos Populosa com ';
							print $listacidades['Porto Alegre'];
							print ' habitantes!';
						}
					}
				}
			}
		
		?>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	</BODY>
</HTML>