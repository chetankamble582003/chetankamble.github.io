
<html>
 
<head>
 <meta charset=UTF-8" />
 
 <title>PHP Quiz</title>
 <style>

.h1{
  
    position:absolute;   
top: 200px;
left: 650px;
font: 44px Georgia, Serif;

}
     #results
 {
position:absolute;
top: 200px;
left: 500px;
border:solid;
border-radius: 50%;
width:300;
height:150;
padding:70;
font: 44px Georgia, Serif;
}
</style>
</head>
 
<body>
 
 <div id="page-wrap">
 
 <h1 class="h1">Result</h1>
 
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            if ($answer5 == "D") { $totalCorrect++; }


            echo "<div id='results'>$totalCorrect / 5 correct</div>";


        ?>
 
 </div>
 
</body>
 
</html>