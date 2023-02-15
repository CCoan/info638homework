<!DOCTYPE html>
<html>
<head> 
<meta charset="UTF-8">

</head> 
<body> 
 
<?php 
    
$ISBN=array();  //creates an array for ISBN number--feels clunky and not best way?
    
    
$ISBN[0]=0;
$ISBN[1]=0;
$ISBN[2]=7;
$ISBN[3]=4;
$ISBN[4]=6;
$ISBN[5]=2;
$ISBN[6]=5;
$ISBN[7]=4;
$ISBN[8]=2;
$ISBN[9]=7;

    
checkISBN($ISBN);
  
    function checkISBN($ISBN){
        
if ($ISBN[9]=="X"){$ISBN[9]=10;}
        
echo "Checking ISBN: ";
foreach ($ISBN as $number) {
  echo $number;}
        echo "<br>";

        
$sum= (10*$ISBN[0])+(9*$ISBN[1])+(8*$ISBN[2])+(7*$ISBN[3])+(6*$ISBN[4])+(5*$ISBN[5])+(4*$ISBN[6])+(3*$ISBN[7])+(2*$ISBN[8])+(1*$ISBN[9]);
  


if ($sum%11==0){$validity= TRUE;
               }
        elseif($sum%11!=0){$validity= FALSE;
                          }
        if($validity==TRUE){echo "<p style=\"color:green\";>This is a valid ISBN</p>";}
        elseif($validity==FALSE){echo "<p style=\"color:red\";>This is not a valid ISBN</p>";}
        
        
 }


coinFlip(1);   
coinFlip(3);
coinFlip(5);  
coinFlip(7);  
coinFlip(9);  
twoHeads();
    

    
function coinFlip($maxTosses){

echo "<br>" . "Flipping a coin $maxTosses time(s):" . "<br>";
        
for($tosses=1;$tosses<=$maxTosses;++$tosses)
{
   $result=mt_rand(0,1);
    if ($result==0){echo "<img src=\"https://upload.wikimedia.org/wikipedia/en/0/0f/2022_Washington_quarter_obverse.jpeg\" alt=\"Heads\"
    width = \"94\" height=\"94\">";}
    elseif($result==1){echo "<img src=https://media.istockphoto.com/id/476142091/photo/quarter-dollar-us-coin-isolated-on-white.jpg?s=612x612&w=0&k=20&c=wNzr7m0Z3dhlf8_O1G3EFNz8u2tALVobVs4K4XfFN5c= alt=\"Tails\"
    width = \"100\" height=\"100\">";}
  
                           }
  return $result;}
                          
function twoHeads()
{echo "<br>" . "Flipping for two heads:" . "<br>";
$heads = 0; //starts counting number of heads in a row
$tosses= 0; //counts tosses 
while ($heads < 2) {
		$coinFlip= mt_rand(0,1);
		$tosses ++; //adds to count of number of tosses 
		if ($coinFlip==0){
            echo "<img src=\"https://upload.wikimedia.org/wikipedia/en/0/0f/2022_Washington_quarter_obverse.jpeg\" alt=\"Heads\"
    width = \"94\" height=\"94\">";
            $heads ++; //adds to count of heads in a row 
		}
		else {
			$heads = 0; //resets count of heads to xero 
			echo "<img src=https://media.istockphoto.com/id/476142091/photo/quarter-dollar-us-coin-isolated-on-white.jpg?s=612x612&w=0&k=20&c=wNzr7m0Z3dhlf8_O1G3EFNz8u2tALVobVs4K4XfFN5c= alt=\"Tails\"
    width = \"100\" height=\"100\">";
		}
	}
	echo "<br>" . "It took $tosses flips to get two heads in a row!";
 

}
    ?>
    
    
</body> 
</html>


