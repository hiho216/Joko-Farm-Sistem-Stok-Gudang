<marquee>Selamat Datang <?php echo $_SESSION['nama']; ?> di Sistem Informasi Gudang Joko Farm</marquee>


           <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                 <h2>Admin Dashboard</h2>   
                        
                    </div>
                </div>              
                
                  <hr />
               
  
        <!-- Bootsrap -->
     

        <meta charset="utf-8" />
        <!-- Set the viewport width to device width for mobile -->
        <meta name="viewport" content="width=device-width" />

      
        <link rel="shortcut icon" href="images/favicon.ico" />
        <!-- Bootsrap -->
        

        <!-- Core CSS File. The CSS code needed to make eventCalendar works -->
        <link rel="stylesheet" href="css/eventCalendar.css">

        <!-- Theme CSS file: it makes eventCalendar nicer -->
        <link rel="stylesheet" href="css/eventCalendar_theme_responsive.css">

        <!--<script src="js/jquery.js" type="text/javascript"></script>-->
        <script src="js/jquery.min.js" type="text/javascript"></script>


        <div class="container">
            <div class="row">
                <div class="col-lg-4">

                    <h2 class="h4">Kalender</h2>
                 
                    <div id="eventCalendarHumanDate"></div>
                    <script>
                        $(document).ready(function() {
                            $("#eventCalendarHumanDate").eventCalendar({
                                eventsjson: 'json/json.php',
                                jsonDateFormat: 'human'  // 'YYYY-MM-DD HH:MM:SS'
                            });
                        });
                    </script>
                </div>
            </div>
        </div>

        
 




