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
    <meta property="og:image" content="http://exe.nith.ac.in/images/logo.png">
    <meta property="og:description" content="Paradox is an online event by Team .EXE which is the technical team of Computer Science & Engineering Department at NIT Hamirpur">
    <title>Paradox leaderboard - Team .EXE</title>

  </head>
<body>
<?php
session_start();
include_once('stylesheets.php'); 
include_once('header.php');
include_once('sessions.php');
include_once('dbconnect.php');

?>
<?php
$sql="select * from users order by level desc, attempts asc;";
$result = mysqli_query($link, $sql);
    if(!$result)die ("Database access failed:". mysqli_error($link));
    while($row=mysqli_fetch_array($result))
        {
        ?>
            <div class="userTable">
                <span class="userImg"> <img src="<?php echo $row['picture']?>"></span>
                <span class="userName"><?php echo $row['name']?></span>
                <span class="levels"><?php echo $row['level']?></span>
                <span class="attempts"><?php echo $row['attempts']?></span>
            </div>
                
                
                <?php } ?>

<?php
        include_once('footer.php');
?>
    </body>
</html>
