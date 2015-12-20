<!DOCTYPE html>
<html>
<head>
    <title>Register - Research Showcase, 2015</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style2.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/cufon-yui.js"></script>
    <script type="text/javascript" src="js/arial.js"></script>
    <script type="text/javascript" src="js/slideShow.js"></script>
    <script type="text/javascript" src="js/cuf_run.js"></script>
    <style type='text/css'>
            span2 {
                text-decoration:underline;
                color:blue;
                cursor:pointer;
            }
    </style>
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
        <li class="active" ><a href="register.php">Register<br><span style="font-size:11px;">To Attend RS'16</span></a></li>
        <li ><a href="gallery.php">Gallery<br><span style="font-size:11px;">RS'15</span></a></li>
        <li ><a href="team.php">Team<br><span style="font-size:11px;">Organizers</span></a></li>
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
    
<div class="main">
<div class="header">
<div class="header_resize">
    

    <div class="clr"></div>
    

</div>
<div class="clr"></div>
<div class="content">
    <!--
    <div class="content_resize">
        <div class="mainbar">
            <div class="article">
            <nav>
                <ul class="pagination">
                    <li><span onclick="showing('poster');">Poster Session</span></li>
                    <li><span onclick="showing('elevator');">Elevator Pitch</span></li>
                    <li><span onclick="showing('byld');">Byld</span></li>
                    <li><span onclick="showing('Hardware Hackathon');">Hardware Hackathon</span></li>
                    <li><span onclick="showing('techquiz');">Techquiz</span></li>
                    <li><span onclick="showing('attend');">Attend</span></li>
                </ul>
            </nav>
                <div id="attend" class="page" style="display:none">
                <iframe src="https://docs.google.com/forms/d/11wy7zT2k2BxdpKRtJuZs5D5gKziCXF7bqUQTcAiwcLI/viewform?embedded=true" width="650" height="590" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
                </div>
                <div id="poster" class="page" >
                <iframe src="https://docs.google.com/forms/d/1jdWH76A8QXhpg0jxm_saUUNrCSFAQCkhupwQkYrp06g/viewform?embedded=true" width="650" height="1040" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
                </div>
                <div id="elevator" class="page" style="display:none">
                    <iframe src="https://docs.google.com/forms/d/1IFOlnUTA6MxPqFBs4JtUbDq8n8bsbAZCPR2zfOMOcl4/viewform?embedded=true" width="650" height="920" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
                </div>
                <div id="byld" class="page" style="display:none">
                    <iframe src="https://docs.google.com/a/iiitd.ac.in/forms/d/1-5DyUVozgKzM0GsVklps3STtLOMBnEYzUody_fUNGK0/viewform?embedded=true" width="650" height="1130" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
                </div>
                <div id="Hardware Hackathon" class="page" style="display:none">
                    <iframe src="https://docs.google.com/forms/d/1BvvFZDZ8ZpfZSBX6dDcjoyNfp7rVSF5RCGlS9HRX4Wc/viewform?embedded=true" width="650" height="850" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
                </div>
                <div id="techquiz" class="page" style="display:none">
                    <iframe src="https://docs.google.com/a/iiitd.ac.in/forms/d/1zFZZXQ-8782dkzr26lX_2GHTs4argJ41_i4Qzk58w4A/viewform?embedded=true" width="650" height="650" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
                </div>
            </div>
        </div>

        <?php //include "sidebar.php";?>
       -->
      <div class="container">
                <h3>TBD</h3>
           </div>
        <div class="clr"></div>
    </div>
</div>
<?php include "footer.php";?>
</body>
</html>
