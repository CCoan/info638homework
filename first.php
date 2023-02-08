<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
       
        $speed=82;
        $date=date("md");
       if ($date=="0201"){$speed=($speed-5);}
        
       if($speed<=60){echo "<h1 style=\"color:green\";>No ticket</h1>";}
        elseif (($speed>=61)&&($speed<=80)){echo "<h1 style=\"color:orange\";>Small ticket</h1>";}
        elseif ($speed>=81){echo "<h1 style=\"color:red\";>Big ticket</h1>";}
            ?>

        <?php
echo "<table style=\"background-color:pink;padding:15px;border-spacing:15px;border:1px solid black;\">";
	for ($row=1; $row <= 12; $row++) { 
		echo "<tr>";
		for ($col=1; $col <= 12; $col++) { 
		   $product = $col * $row;
		   echo "<td>$product</td>";
		   	}
	  	    echo "</tr>";
       
		}

		echo "</table>";
?>
     
        
    </body>
</html>