<!DOCTYPE html>
<html>
<head>
    <title>Team - Research Showcase, 2016</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="style3.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/cufon-yui.js"></script>
    <script type="text/javascript" src="js/arial.js"></script>
    <script type="text/javascript" src="js/slideShow.js"></script>
    <script type="text/javascript" src="js/cuf_run.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="js/queryloader2.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        window.addEventListener('DOMContentLoaded', function() {
            new QueryLoader2(document.querySelector("body"), {
                barColor: "#fff",
                backgroundColor: "#fff",
                percentage: false,
                barHeight: 0,
                minimumTime: 000,
                fadeOutTime:800
            });
        });
    </script>
    <script>
        // show the given page, hide the rest
        function showing(elementID) {
            // try to find the requested page and alert if it's not found
            var ele = document.getElementById(elementID);
            if (!ele) {
                alert("no such element");
                return;
            }

            // get all pages, loop through them and hide them
            var pages = document.getElementsByClassName('page');
            for(var i = 0; i < pages.length; i++) {
                pages[i].style.display = 'none';
            }

            // then show the requested page
            ele.style.display = 'block';
        }
    </script>
    

<!-- top.php-->
<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="index.php">Home<br><span style="font-size:11px;">About us</span></a></li>
        <li ><a href="events.php">Events<br><span style="font-size:11px;">in RS'16</span></a></li>
        <li ><a href="schedule.php">Schedule<br><span style="font-size:11px;">Program Timing</span></a></li>
        <li ><a href="register.php">Register<br><span style="font-size:11px;">To Attend RS'16</span></a></li>
        <li ><a href="gallery.php">Gallery<br><span style="font-size:11px;">RS'15</span></a></li>
        <li class="active"><a href="team.php">Team<br><span style="font-size:11px;">Organizers</span></a></li>
        <li ><a href="faq.php">FAQ <br><span style="font-size:11px;">Questions</span></a></li>
        <li ><a href="contact.php">Contact Us <br><span style="font-size:11px;">Call us now</span></a></li>
        <!--<li ><a href="openhouse/">Openhouse<br><span style="font-size:11px;">Visit IIITD</span></a></li>-->
     
      
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  <div class="logoright">
         <a target=_blank href="http://iiitd.ac.in"><img src="openhouse/images/style3colorlarge.jpg" height="70px" width="auto"></a>
         <img src="openhouse/images/ii.png" height="100" width="350"> 
    </div>

    <div class="logoleft">
        <a href="index.php"><img src="images/rslogowithquote.png" height="150px" width="550px"></a>
    </div>
  
    <hr style="width:100%;height:2px;background:#ccc;">

 <!-- Top.php End-->   
</head>
<body>
    
    
   <?php include "top_menu.php";?>
<div class="main">
<div class="header">
<div class="header_resize">
    

    <div class="clr"></div>

</div>
<div class="clr"></div>
<div class="content">
    <div class="content_resize">
        <div class="mainbar" >
            <div class="article">
            <nav>
                <ul class="pagination">
                    <li><span onclick="showing('Patron');">Patron</span></li>
                    <li><span onclick="showing('Faculty');">Faculty Coordinators</span></li>
                    <li><span onclick="showing('Core');">Organizers</span></li>
                    <li><span onclick="showing('Web');">Web Administrator</span></li>
                </ul>
            </nav>
            </div>

            <div class="article">
                <div id="Patron" class="page" style="display:none">
                    <h4>Patrons</h4>
                    <div class="col" >
                        <div class="col c3">
                            <img src="team/drjalote.jpg" alt="image" /> 
                            <p align="center">Prof. Pankaj Jalote, Director</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="article">
                <div id="Faculty" class="page" style="display:none">
                    <h4>Faculty Coordinators</h4>
                    <div class="col" >
                        <div class="col c3">
                            <img src="team/drsaket.jpg" alt="image" />    
                            <p align="center">Dr. Saket Anand</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="article">
                <div id="Web" class="page" style="display:none">
                    <h4>Web Administrator</h4>
                    <div class="col" >
                        <div class="col c3">
                            <img src="team/ashutosh.jpg" alt="image" />    
                            <p align="center">Ashutosh Kumar <a href="https://ashutoshanand.com/">(Contact)</a></p>
                            
                        </div>
                    </div>
                </div>
            </div>
             <div class = "article">
                <div id="Core" class="page" >
                    <h4>Organizers</h4>
                  
                    <div class = "col">
                        <div class="col c3">
                            <img src="team/AnilSharma.jpg" alt="image" />    
                            <p align="center">Anil Sharma <a href="mailto:anils@iiitd.ac.in?subject=Query RS2016:">(Contact)</a></p>
                        </div>
                       <div class="col c3">
                        <img src="team/dheryta.jpg" />
                            <p align="center">Dheryta <a href="mailto:dherytaj@iiitd.ac.in?subject=Query RS2016:">(Contact)</a></p>
                        </div>

                      

                       
                    </div>
                    <br>
                    <br>
                    <div class="col">
                      <div class="col c3">
                            <img src="team/milan.jpg" alt="image" />    
                            <p align="center">Milan Jain <a href="milanj@iiitd.ac.in?subject=Query RS2016:">(Contact)</a></p>
                        </div>
                         <div class="col c3">
                            <img src="team/ParagAggarwal.jpg" alt="image" />    
                            <p align="center">Parag Aggarwal <a href="mailto:paraga@iiitd.ac.in?subject=Query RS2016:">(Contact)</a></p>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            
            
            
            
        </div>
      <?php include "sidebar.php";?>
        <div class="clr"></div>
    </div>
</div>
<?php include "footer.php";?>
</body>
</html>
