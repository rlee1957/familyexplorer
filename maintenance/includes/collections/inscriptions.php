<table>
	<tr>
		<td colspan=2 align=center>
			<b>Inscription</b><hr />
		</td>
	</tr>
<?php

for($i=1;$i<$insc_lines+1;$i++)
	{
	$label = "Line ".$i.":";
	$inscription = $row["li_ins".$i];
	$disabled = " disabled";
	include("includes/objects/line_inscription.php");
	}
	
?>
</table>