<?php 

	//$message = 'done';
	//$menu = array();
	//$menu['google'] = 'http://www.google.com';
	//$menu['yahoo'] = 'http://www.yahoo.com';
	//$menu['bing'] = 'http://www.bing.com';
	//$menu['dropbox'] = 'http://www.dropbox.com';	    
	$teams = array( array("Patriots", 5 , 1 , 0),
               array ("Bills", 4 , 2 , 0)),
              array ("Jets", 4 , 3 , 0),
			  array("Miami", 0 , 6 , 0)
             ); 

//	print_r($array);

	//foreach($menu as $key => $menuitem) {
	//echo '<A HREF ="'. $menuitem . '">'. $key . '</a> <BR/>';
	//}
	echo "<table> <tr> <TD> TEAM </TD> <TD> WIN </td> <TD> LOSS </td> <td> TIE </td></tr>";
	for ($row = 0; $row < 4; $row++)
		{
		echo '<TR>';
			for ($col = 0; $col < 4; $col++)
			{
				echo "<td>".$teams[$row][$col]."</td>";
			}
			echo '</TR>';
		}
   echo "</table>";
?>