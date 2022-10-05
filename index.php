

<html>
<head>
<style type='text/css'>
#wrapper {
	
	width:950px;
	 height:auto;
	 padding: 13px;
	 margin-right:auto;
	 margin-left:auto;
	 background-color:#fff;
	
}
</style>
</head>

<body bgcolor='#e1e1e1'>

<?php


	$rid = rand(1,3);
	echo $rid;
?>

<div id='wrapper'>

<center><font face='Andalus' size='5'>Prosty quiz w PHP</font></center>
<br />
<br />
<br /><br />

<?php

if ($rid == 1){
	
	echo "
<form action='process.php?id=1' method='post' id='quizForm' id='1'>


	<ol>
    
   
    	<li>
        <h3>Jakiego koloru są płatki stokrotki?</h3>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='A' />
        <label for='answerOneA'>A) Biały</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='B' />
        <label for='answerOneB'>B)Niebieski</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='C' />
        <label for='answerOneC'>C)Żółty</label>
        </div>
        </li>
        
     
        <li>
        <h3>Jaki jest najlepszy przedmiot w 4 semestrze?</h3>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='A' />
        <label for='answerTwoA'>A) SCR </label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='B' />
        <label for='answerTwoB'>B) Obie odpowiedzi są poprawne</label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='C' />
        <label for='answerTwoC'>C) SCR!!!!</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>Co to Youtube?</h3>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='A' />
        <label for='answerThreeA'>A)Przeglądarka </label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='B' />
        <label for='answerThreeB'>B) Serwis randkowy</label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='C' />
        <label for='answerThreeC'>C) Strona z filmami</label>
        </div>
        </li>
    </ol>
     <input type='submit' value='Submit Quiz' />
    
</form>";

}

if ($rid == 2){
	
	echo "


<form action='process.php?id=2' method='post' id='quizForm' id='2'>


	<ol>
    
    
    	<li>
        <h3>Co to anyż?</h3>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='A' />
        <label for='answerOneA'>A)Przyprawa</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='B' />
        <label for='answerOneB'>B)Kwiatek</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='C' />
        <label for='answerOneC'>C) Rodzaj (p)iwa</label>
        </div>
        </li>
        
       
        <li>
        <h3>Co to Google?</h3>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='A' />
        <label for='answerTwoA'>A)Przeglądarka video </label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='B' />
        <label for='answerTwoB'>B)Wyszukiwarka</label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='C' />
        <label for='answerTwoC'>C) Portal randkowy</label>
        </div>
        </li>
        
       
         <li>
        <h3>Kto jest prowadzącym laboratoria z scr?</h3>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='A' />
        <label for='answerThreeA'>A)Robert Makłowicz </label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='B' />
        <label for='answerThreeB'>B)Eminem</label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='C' />
        <label for='answerThreeC'>C)Mariusz Makuchowski </label>
        </div>
        </li>
    </ol>
     <input type='submit' value='Submit Quiz' />
    
</form>
";
}

if ($rid == 3){
	
	echo "
<form action='process.php?id=3' method='post' id='quizForm' id='3'>


	<ol>
    
   
    	<li>
        <h3>Co było celem tego zadania?</h3>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='A' />
        <label for='answerOneA'>A)napisanie quizu w języku PHP</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='B' />
        <label for='answerOneB'>B)Lenistwo</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='C' />
        <label for='answerOneC'>C) Napisanie strony w języku html</label>
        </div>
        </li>
        
     
        <li>
        <h3>Co to sandał? </h3>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='A' />
        <label for='answerTwoA'>A)Przyprawa </label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='B' />
        <label for='answerTwoB'>B) Obuwie</label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='C' />
        <label for='answerTwoC'>C)Element ciała</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>Gdzie był Gondor, kiedy Westwfold upadał?</h3>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='A' />
        <label for='answerThreeA'>A)nie wiem, nie czytałem Harrego Pottera </label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='B' />
        <label for='answerThreeB'>B)W Rohanie</label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='C' />
        <label for='answerThreeC'>C)Nikt tego nie wie</label>
        </div>
        </li>
    </ol>
     <input type='submit' value='Submit Quiz' />
    
</form>";

}

?>
</div><!--- end of wrapper div --->

</body>
</html>
