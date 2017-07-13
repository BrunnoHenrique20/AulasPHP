<HTML>
	<HEAD>
		<TITLE>Praticando</TITLE>
	</HEAD>
	<BODY>

	<?php
		
		define('IMAGEM', 'http://1.bp.blogspot.com/_kEE6w7wR6QE/THRk59zrxvI/AAAAAAAAAF4/Nyg3aWrAX1o/s1600/icone.png');
		
		$end = 'http://www.google.com.br';
		
	?>

 <table width="200" border="1">
  <tbody>
    <tr>
      <td><b><?php print 'Lampada'; ?></td>
      <td><img width="100" height="80" src=http://1.bp.blogspot.com/_kEE6w7wR6QE/THRk59zrxvI/AAAAAAAAAF4/Nyg3aWrAX1o/s1600/icone.png></img></td>
    </tr>
    <tr>
      <td><b><?php print 'Lampada'; ?></td>
		<td><img width="100" height="80" src= <?php print IMAGEM; ?> ></img></td>
    </tr>
    <tr>
      <td><b><?php print 'Google'; ?></td>
		<td> <a href= <?php print $end; ?> > <b>Google</b> </a></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

</BODY>
</HTML>
