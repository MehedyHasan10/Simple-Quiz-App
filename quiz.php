<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Quiz App</title>
</head>
<body>
    <h1> Quiz App </h1>
    <section>
        <p> Name: User's Full Name </p>
        <input type = "text" name = "a1">
</section>
<br>
<section>
<form action="quiz.php" method="post">
                    <div>
                        <p>1.Who is the president of Asguard?</p>
                        <input type="radio" name="q1" id="q1A" value="A">Thanos <br>
                        <input type="radio" name="q1" id="q1B" value="B">Loki <br>
                        <input type="radio" name="q1" id="q1C" value="C">Odin <br>
                        <input type="radio" name="q1" id="q1D" value="D">Blader <br>
                    </div>
                    <div>
                        <p>2.Who is the president of Russia?</p>
                        <input type="radio" name="q2" id="q1A" value="A">Bill Gates <br>
                        <input type="radio" name="q2" id="q1B" value="B">Donald Trump <br>
                        <input type="radio" name="q2" id="q1C" value="C">Vladimir Putin <br>
                        <input type="radio" name="q2" id="q1D" value="D">Benjamin Netaniahu <br>
                    </div>
                    <div>
                        <p>3.Divide 9 by 3 and add 9</p>
                        <input type="radio" name="q3" id="q3A" value="A">10 <br>
                       	<input type="radio" name="q3" id="q3B" value="B">9 <br>
                        <input type="radio" name="q3" id="q3C" value="C">3 <br>
                        <input type="radio" name="q3" id="q3D" value="D">12<br>
                    </div>
                    <div>
                        <p>4.Gengish Khan was a ?</p>
                        <input type="radio" name="q4" id="q4A" value="A">Gamer <br>
                       	<input type="radio" name="q4" id="q4B" value="B">Politician <br>
                        <input type="radio" name="q4" id="q4C" value="C">Youtuber <br>
                        <input type="radio" name="q4" id="q4D" value="D">Gamer<br>
                    </div>
                    <div>
                        <p>5.Alan turing Built . . .</p>
                        <input type="radio" name="q5" id="q5A" value="A">PUBG<br>
                       	<input type="radio" name="q5" id="q5B" value="B">FreeFire<br>
                        <input type="radio" name="q5" id="q5C" value="C">Tiktok<br>
                        <input type="radio" name="q5" id="q5D" value="D">Turing Machine<br>
                    </div>
                
                  


                    <input type="submit" name="submit">
                </form>       
            </section>
            <aside id="sidebar">  
                <p>
                <?php
                $score = 0;

                if(isset($_POST['submit'])){
                    $a1 = $_POST['q1'];
                    $a2 = $_POST['q2'];
                    $a3 = $_POST['q3'];
                    $a4 = $_POST['q4'];
                    $a5 = $_POST['q5'];
                    
                    

                    
                    if($a1=='C')$score++;
                    else echo '<br>Correct Answer for 1 is - Odin';
                    if($a2=='C')$score++;
                    else echo '<br>Correct Answer for 2 is - Vladimir Putin';
                    if($a3=='D')$score++;
                    else echo '<br>Correct Answer for 3 is - 12';
                    if($a4=='B')$score++;
                    else echo '<br>Correct Answer for 4 is - Politicain';
                    if($a5=='D')$score++;
                    else echo '<br>Correct Answer for 5 is - Turing Machine';
                   
                    
                    echo '<br><br>Your Score is '. $score . '/5';
                }
        

    ?>