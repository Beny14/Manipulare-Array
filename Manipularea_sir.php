<?php

	$array = array(
		'id', 'fname', 'lanme', 'email',
		'1', 'Peter', 'Andersen', 'peter@gmail.com',
		'2', 'John', 'Miller', 'john@gmail.com',
		'3', 'Thomas', 'Swift', 'thomas@gmail.com'
		);
		
	$nr_elm = count($array);
	$tabel_html = '';
	$nr_col = 4;

	if ($nr_elm > 0) {

		$tabel_html = '<table border="1" style="border-collapse:collapse;"><tr style="font-weight:bold;">';
			for($i=0; $i<$nr_elm; $i++) {
		$tabel_html .= '<td>' .$aray[$i]. '</td>';
			if ((($i+1) % $nr_col)==0) { $tabel_html .= '</tr><tr>'; }
		}

	$tabel_html .= '</tr></table>';
	$tabel_html = str_replace('<tr></tr>', '', $tabel_html);
	
	}

	echo $tabel_html;
?>