         <?php
              //Get the name of current page open in browser
                $head_nm=basename($_SERVER['PHP_SELF']); 
         ?>
         <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="index.php" >
                            <img src="images/logo.png" alt="Team .EXE logo" title="Team .EXE logo"> 
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="http://exe.nith.ac.in/confess/" class="tooltip-show" data-toggle="tooltip" title="NITH Confessions - Team .EXE">NITH Confessions</a></li>
                            <li><a href="http://exe.nith.ac.in/" class="tooltip-show" data-toggle="tooltip" title="Team .EXE - website">Team .EXE website</a></li>
                            <li><a href="hints.php" class="tooltip-show" data-toggle="tooltip" title="View Paradox hints">Paradox Hints</a></li>
                            <li><a href="logout.php" class="tooltip-show" data-toggle="tooltip" title="Logout">Logout</a></li>
                        </ul>
                  </div>
                </nav>
            </div>
        </header>
<!-- Experimental, can be removed -->
<section class="global-page-header">
</section>
