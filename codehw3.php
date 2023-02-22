<!DOCTYPE html>
<html>
<head> 
<meta charset="UTF-8">
<style>

div{margin-bottom: 5px;
margin-top:5px;
display:flex;
justify-content:center;
    flex-wrap: wrap;}
  
        
table {padding:30px;

}
    
th, td {
        padding: 20px;

}

th{background-color:#ececec;}
tr:nth-child(even) {background-color: #ececec;}
tr:nth-child(odd) {background-color:#9fd3c7;}


    .title{font-family:"Verdana";
    color:#142d4c;
    
  }
    
    .heading{font-family:"Verdana";
        font-style: italic;
    background-color:#f76b8a;
    border-radius:10px;}
    
    .challengeOne{background-color:#385170;
    border-radius:10px;}

    .price{background-color:#f76b8a;
        font-weight:bold;
  
  }
    .challengeTwo{font-weight:bold;
        justify-content: center;
    }

.coin-heads{
  animation-name: flip-heads;
    animation-duration:.15s;
    animation-timing-function: linear;
    animation-delay:0s;
    animation-iteration-count: 12;      
}
.coin-tails{
   animation-name: flip-tails;
    animation-duration:.15s;
    animation-timing-function: linear;
    animation-delay:0s;
    animation-iteration-count: 12;
}

        
@keyframes flip-heads {
    0%{
        transform: rotateX(0);
    }
    100%{
        transform: rotateX(180deg);
    }
}
@keyframes flip-tails{
    0%{
        transform: rotateX(0);
    }
    100%{
        transform: rotateX(180deg);
    }
    
    </style>
    
</head> 
<body> 
    
<div class="title"><h1>Code Homework Three: Arrays</h1></div>    
 <div class ="heading"><h2>Challenge One: Book List</h2></div>
<div class ="challengeOne">
        
<?php 
     
$books=array( //creating array 
    'book1'=>array(
        'title'=>"<a href=\"https://www.google.com/search?q=php+%26+mysql+web+development&oq=php+%26+mysql+web+development\">PHP and MySQL Web Development</a>", //couldn't figure out using the urlencode function
        'author'=>"Luke Welling",
        'pages'=>"144",
        'type'=>"Paperback",
        'price'=>"31.63"),
    'book2'=>array(
        'title'=>"<a href=\"https://www.google.com/search?q=web+design+with+html%2C+css%2C+javascript+and+jquery&oq=web+design+with+html%2C+css%2C+javascript+and+jquery\">Web Design with HTML, CSS, JavaScript and jQuery</a>",
        'author'=>"Jon Duckett ",
        'pages'=>"135",
        'type'=>"Paperback",
        'price'=>"41.23"),
    'book3'=>array(
        'title'=>"<a href=\"https://www.google.com/search?q=PHP+cookbook%3A+Solutions+and+Examples+for+PHP+Programmers&oq=PHP+cookbook%3A+Solutions+and+Examples+for+PHP+Programmers\">PHP Cookbook: Solutions & Examples for PHP Programmers</a>",
        'author'=>"David Sklar",
        'pages'=>"14",
        'type'=>"Paperback",
        'price'=>"40.88"),
    'book4'=>array(
        'title'=>"<a href=\"https://www.google.com/search?q=JavaScript+and+JQuery%3A+Interactive+Front-End+Web+Development&oq=JavaScript+and+JQuery%3A+Interactive+Front-End+Web+Development\">JavaScript and JQuery: Interactive Front-End Web Development</a>",
        'author'=>"Jon Duckett",
        'pages'=>"251",
        'type'=>"Paperback",
        'price'=>"22.09"),
    'book5'=>array(
        'title'=>"<a href=\"https://www.google.com/search?q=Modern+PHP%3A+New+Features+and+Good+Practices&oq=Modern+PHP%3A+New+Features+and+Good+Practices\">Modern PHP: New Features and Good Practices</a>",
        'author'=>"Josh Lockhart",
        'pages'=>"7",
        'type'=>"Paperback",
        'price'=>"28.49"), 
    'book6'=>array(
        'title'=>"<a href=\"https://www.google.com/search?q=programming+php+by+kevin+tatroe\">Programming PHP</a>",
        'author'=>"Kevin Tatroe",
        'pages'=>"26",
        'type'=>"Paperback",
        'price'=>"28.96")
    );
    
echo "<table><tr><th>Title</th><th>Author</th><th>Pages</th><th>Type</th><th>Price</th><tr>"; //creating table


	foreach($books as $bookInfo) //placing data from array into table
    {   echo "<tr>";
    foreach($bookInfo as $key=>$value){ 
       echo "<td>" . $value . "</td>";
  
       	}}

	echo "<td class=\"price\">" . "Total cost: " . $books['book1']['price']+$books['book2']['price']+$books['book3']['price']+$books['book4']['price']+$books['book5']['price']+$books['book6']['price'] . "</tr>"; //adding total price 
    
        echo "</table>";


      
    ?>
    </div>
    
 <div class="heading"><h2>Challenge Two: Coin Toss, contd.</h2></div>
    
    <div>
<h3> How many heads in a row would you like to flip for? Choose a number between 1 and 7:</h3>     
    </div>    
    <div>    
    <form method="post" >
        <input type="text" name="maxHeads">
        <input type="submit" value="click to flip coins" onclick="twoHeads($maxHeads)"> 


</form>
              
    </div>
    <div  class="challengeTwo">
        
<?php

$maxHeads=$_POST['maxHeads'];//connecting number of heads in a row variable to form
        
twoHeads($maxHeads);
            
function twoHeads($maxHeads){

echo "<br>" . "Flipping for $maxHeads heads:" . "<br>";
$heads = 0; //starts counting number of heads in a row
$tosses= 0; //counts tosses 
while ($heads < $maxHeads) {
        if($maxHeads>=8){echo "This is too many heads! Try choosing a smaller number."; break;}
		$coinFlip= mt_rand(0,1);
		$tosses ++; //adds to count of number of tosses 
		if ($coinFlip==0){
            echo "<div class=\"coin-heads\"><img src=\"https://upload.wikimedia.org/wikipedia/en/0/0f/2022_Washington_quarter_obverse.jpeg\" alt=\"Heads\"
    width = \"94\" height=\"94\"></div>";
            $heads ++; //adds to count of heads in a row 
		}
		else {
			$heads = 0; //resets count of heads to zero 
			echo "<div class=\"coin-tails\"><img src=https://media.istockphoto.com/id/476142091/photo/quarter-dollar-us-coin-isolated-on-white.jpg?s=612x612&w=0&k=20&c=wNzr7m0Z3dhlf8_O1G3EFNz8u2tALVobVs4K4XfFN5c= alt=\"Tails\"
    width = \"100\" height=\"100\"></div>";
		}

	}
               if($maxHeads<8) {echo "<br>" . "It took $tosses flips to get $maxHeads heads in a row!";}
        }
 
  
?>
        
     
    </div>
   
    
    
    
</body> 
</html>
