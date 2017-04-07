<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id" content="307712715810-5gqv439ef8l9hmmod3ggpbdplcc7t7gq.apps.googleusercontent.com">
    <meta name="description" content="Paradox - Team .EXE is the technical team of Computer Science & Engineering Department for technical fest NIMBUS at NIT Hamirpur.">
    <meta name="author" content="Team .EXE">
    <link rel="icon" href="images/head.png">
    <meta name="description" content="Paradox is an online event by Team .EXE which is the technical team of Computer 
      Science & Engineering Department at NIT Hamirpur">
    <meta name="keywords" content="paradox, paradox nith, paradox team .exe, paradox nimbus,  paradox nimbus 2016,
        team .exe, exe, NITH , nit hamirpur, CSED, CSED NITH, team exe, paradox, web-o-magica, nimbus nith
        nimbus 2016, nimbus 2k16, nit hamirpur, nith">
    <meta property="og:title" content="Paradox - Team .EXE">
    <meta property="og:image" content="http://exe.nith.ac.in/images/paradox.jpeg">
    <meta property="og:description" content="Paradox is an online event by Team .EXE which is the technical team of Computer Science & Engineering Department at NIT Hamirpur">
    <title>Paradox - Team .EXE</title>
        <style type="text/css">
.demo-card {
  padding-top: 20px;
  padding-left: 5%;
  padding-right: 5%;
  padding-bottom: 10px;
}
.panel-body img {
    width: 70%;
    float: left;
}
</style>

  </head>

<?php
include_once('stylesheets.php'); 
include_once('header.php');
include_once('sessions.php');
include_once('dbconnect.php');

//echo $session_usr;

$ab=mysqli_query($link,"SELECT level,name,attempts from users WHERE google_id='$session_usr'");
$out=mysqli_fetch_array($ab);
$l=$out['level'];
$nam=$out['name'];
$atmpt=$out['attempts'];
/*
For debugging the code
echo "\n";
echo $l;
echo $nam;
echo $atmpt;
echo "thsfjklsadfjkl";
*/

$bc=mysqli_query($link,"SELECT * from imag WHERE level=$l");
$out1=mysqli_fetch_array($bc);
$leve=$out1['location'];

if(isset($_POST['ans']))
{
    $answer=$_POST['ans'];
    //convert to lowercase for matching
    $answer=strtolower($answer);
    //echo $answer;
    ++$atmpt;
    //echo $atmpt;

    //fetching answer
    $abc=mysqli_query($link,"SELECT chek from imag WHERE level=$l");    
    $out3=mysqli_fetch_array($abc);
    $ansd=$out3['chek'];

    //checking the answer & no. of attempt
    if ($answer==$ansd) 
    {
        //increase the level no. & the attempt count
        ++$l;
        $abd=mysqli_query($link,"UPDATE users SET level='$l', attempts='$atmpt' WHERE google_id=$session_usr");
        include_once('paradox_right.php');
        echo "<center>Well done! Correct answer</center>";
        include_once('paradox_bottom.php');
        $bc=mysqli_query($link,"SELECT * from imag WHERE level=$l");
        $out1=mysqli_fetch_array($bc);
        $leve=$out1['location'];        
    }
    else
    {
        //increase attempt count only
        $abd=mysqli_query($link,"UPDATE users SET attempts='$atmpt' WHERE google_id=$session_usr");
        
        //checking if message is empty/not
        if ($answer) 
        {
            include_once('paradox_wrong.php');
            echo "<center>Wrong Answer : Try again!</center>";
            include_once('paradox_bottom.php');
        }
        else
        {
            include_once('paradox_wrong.php');
            echo "<center>Submitting answer without entering value is increasing your no. of attempts. It really matters.</center>";
            include_once('paradox_bottom.php');
        }
        
    }

}
                        
?>

                <div class="demo-card">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                    <h3 class="panel-title">Paradox Level #<?php echo $l; ?><span style="float: right"><?php echo $nam; ?></span>
                                    </h3>
                            </div>
                            <div class="panel-body">
                <?php 
                        echo '<pre>Your Total Attempts - '.$atmpt.'</pre>'; 
                        echo "<img src=".$leve." />";   
                        echo ' <a href="leaderboard.php"><button class="btn btn-default" > View Paradox - Leaderboard </button></a>';
                        echo "<br><br>";
                        echo ' <a href="hints.php"><button class="btn btn-default" > View Paradox - Hints </button></a>';
                        echo "<br><br>";
                        echo 'If you find our projects/events (Paradox) interesting/worth suggesting please vote for us, It will help us grow. We are Team .EXE (.EXE)<br>';
                        echo ' <a href="http://technicaldeco.org/" target="_blank"><button class="btn btn-default" > Vote Here </button></a>';
                                              
                ?>
                            </div>
                            <div class="panel-footer">
                                <form action="" method="post">
                                    <input type="text" name="ans">
                                    <input class="btn" type="submit" value="Submit Answer">
                                </form>
                            </div>
                        </div>
                    </div> 

<?php

        include_once('footer.php');
?>