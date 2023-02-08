<html>
    <head>
        <meta charset="UTF-8">
        <style>
            
            .challenge1{background-color:black;
            color:turquoise;
                  font-family:"Courier New";
            }
            .challenge2{background-image: url(https://images.unsplash.com/photo-1596865668258-242a087887ab?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8d29vZCUyMHdhbGx8ZW58MHx8MHx8&auto=format&fit=crop&w=800&q=60);
                border-radius:10px;
               }
            #changeProblem{color:turquoise;
            font-style:normal;
            font-family:"Courier New";
            opacity:0.7;}
            #header2 {
                color:pink;
                font-family:"Brush Script MT";
                font-size: 75px;
              

           }
            p{color:rgb(255,255,240);
                font-family:"Trebuchet MS";
                font-style: italic;
         }
            div{
                display:flex;
                justify-content:center;
                flex-wrap:wrap;
                padding-left: 30px;
                padding-right: 30px;
                padding-top: 5px;
                padding-bottom: 5px;
                margin:10px;
                border-radius:60px;
               
    
             }
        
            .verse{background-color:rgba(76, 175, 80, 0.6);
            padding-top: 24px;
            padding-bottom: 24px;
       }
            .verse1{background-color:rgba(50, 205, 50, 0.6);}
            .verse2{background-color:rgba(143,188,143,0.6);}
            .verse3{background-color: rgba(107,142,35,0.6);}
            .verse4{background-color: rgba(46,139,87,0.6);}
            .verse5{background-color: rgba(143,188,143,0.6);}
            .verse6{background-color: rgba(154,205,50,0.6);}
            .verse7{background-color: rgba(152,251,152,0.6);}
            .verse8{background-color: rgba(60,179,113,0.6);}
            .verse9{background-color: rgba(128,128,0,0.6);}
            

        </style>
    </head>
    <body>
        
 <div class="challenge1">
       <div> <h1>Challenge 1: Correct Change</h1> </div>
     <p id="changeProblem">  <?php

      $change=767;
        echo "Your change is $change cents: <br>";
        if($change>=100){echo (int)($change/100) . " dollar(s)" . "<br>";}
        while($change>=100){$change=$change-100;}
        if ($change>=25){echo  (int)($change/25) . " quarter(s)" . "<br>";}
        while($change>=25){$change=$change-25;}
        if ($change>=10){echo  (int)($change/10) . " dime(s)" . "<br>";}
        while ($change>=10){$change=$change-10;}
        if ($change>=5){echo  (int)($change/5) . " nickel(s)" . "<br>";}
        while ($change>=5){$change=$change-5;}
        if ($change>=1){echo  ($change) ." cent(s)";}
           
         ?> </p>
        </div> 


        
<div class="challenge2">     
        
        
        <div><h1 id="header2">Challenge 2: 99 Bottles of Beer</h1></div>
 <div class="verse"><p>   
<?php
    for($bottles=99;$bottles>90;--$bottles)
    {echo"$bottles bottles of beer on the wall, $bottles bottles of beer."."<br>" . "Take one down, pass it around, " . $bottles-1 . " bottles of beer on the wall."."<br>";}    

?>
     </p></div>
        <div class="verse1"><p>
            <?php
    for($bottles=90;$bottles>80;--$bottles)
    {echo"$bottles bottles of beer on the wall, $bottles bottles of beer." ."<br>" . "Take one down, pass it around, " . $bottles-1 . " bottles of beer on the wall."."<br>";}    

?>
            </p>
        </div>
<div class="verse2"><p>
            <?php
    for($bottles=80;$bottles>70;--$bottles)
    {echo"$bottles bottles of beer on the wall, $bottles bottles of beer."."<br>" . "Take one down, pass it around, " . $bottles-1 . " bottles of beer on the wall."."<br>";}    

?>
            </p>
        </div>
<div class="verse3"><p>
            <?php
    for($bottles=70;$bottles>60;--$bottles)
    {echo"$bottles bottles of beer on the wall, $bottles bottles of beer."."<br>" . "Take one down, pass it around, " . $bottles-1 . " bottles of beer on the wall."."<br>";}    

?>
            </p>
        </div>
<div class="verse4"><p>
            <?php
    for($bottles=60;$bottles>50;--$bottles)
    {echo"$bottles bottles of beer on the wall, $bottles bottles of beer."."<br>" . "Take one down, pass it around, " . $bottles-1 . " bottles of beer on the wall"."<br>";}    

?>
    </p></div>
       
    <div class="verse5"><p>
            <?php
    for($bottles=50;$bottles>40;--$bottles)
    {echo"$bottles bottles of beer on the wall, $bottles bottles of beer."."<br>" . "Take one down, pass it around, " . $bottles-1 . " bottles of beer on the wall."."<br>";}    

?>
        </p></div>
        <div class="verse6"><p>
            <?php
    for($bottles=40;$bottles>30;--$bottles)
    {echo"$bottles bottles of beer on the wall, $bottles bottles of beer."."<br>" . "Take one down, pass it around, " . $bottles-1 . " bottles of beer on the wall"."<br>";}    

?>
            </p></div>
            <div class="verse7"><p>
            <?php
    for($bottles=30;$bottles>20;--$bottles)
    {echo"$bottles bottles of beer on the wall, $bottles bottles of beer."."<br>" . "Take one down, pass it around, " . $bottles-1 . " bottles of beer on the wall."."<br>";}    

?>
            </p>
        </div>
        <div class="verse8"><p>
            <?php
    for($bottles=20;$bottles>10;--$bottles)
    {echo"$bottles bottles of beer on the wall, $bottles bottles of beer."."<br>". "Take one down, pass it around, " . $bottles-1 . " bottles of beer on the wall."."<br>";}    

?>
            </p>
        </div>
    <div class="verse9"><p>
            <?php
    for($bottles=10;$bottles>0;--$bottles)
    {echo"$bottles bottles of beer on the wall, $bottles bottles of beer."."<br>" . "Take one down, pass it around, " . $bottles-1 . " bottles of beer on the wall."."<br>";}  
   

?>
            </p>
        </div>
        </div>
 
         
    </body>
</html>