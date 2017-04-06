<section class="global-page-header">
        </section>
        <?php
                include_once('dbconnect.php');
                
                //Get the name of current page open in browser
                $namee=basename($_SERVER['PHP_SELF']); 
                
                //fetching page count from database for particular page
                $qry=mysqli_query($link,"SELECT * from hits where nam='$namee'");
                while($rowa = mysqli_fetch_assoc($qry))
                {
                    //getting count INT
                    $out=$rowa['cnt'];
                    //echo "$out";
                }

                //now incrementing 1 in the fetched value
                ++$out;
                //updating the new value in database
                $qryu=mysqli_query($link,"UPDATE hits SET cnt='$out' WHERE nam='$namee'");
        ?>
        <footer id="footer">
            <div class="container">
                <div class="col-md-8">
                    <p class="copyright">&copy;: <span>2017</span> | Designed, Developed & Hosted with <span style="color: #FF0000; font-size: 25px;">&hearts;</span> by <b><a href="index.php" title="Team EXE official website">Team .EXE</a></b></p>
                </div>
            </div>
        </footer> <!-- /#footer -->