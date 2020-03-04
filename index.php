<?php
session_start();
//datbase connection file
include('includes/config.php');
error_reporting(0);



    ?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Phony Staples Center Event Management System | Home Page </title>
        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <!-- icofont css -->
        <link rel="stylesheet" href="css/icofont.css">
        <!-- Nivo css -->
        <link rel="stylesheet" href="css/nivo-slider.css">
        <!-- animaton text css -->
        <link rel="stylesheet" href="css/animate-text.css">
        <!-- Metrial iconic fonts css -->
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
        <!-- style css -->
        <link rel="stylesheet" href="style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- color css -->
        <link href="css/color/skin-default.css" rel="stylesheet">
        
        <!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        
        <!--body-wraper-start-->
         <div class="wrapper home-02">
         
            <!-- header area start-->
         <?php include_once('includes/header.php');?>
                <!-- header End-->
                <!-- area start-->
                        <img src="" alt="Phony Staples Center Events Manager" title="#htmlcaption" height="20000" /> 
                    </div>
                </div>
                <!--area  End-->
                <></a> </div>
            </div>
            <!--header area end-->
       
                 <!--upcoming events area-->
            <div class="upcomming-events-area off-white ptb100">
                  <div class="container">
                      <div class="row">
                          <div class="col-xs-12">
                           <h1 class="section-title">Upcoming Events</h1>
                        </div>
                          <div class="total-upcoming-event col-md-12 col-sm-12 col-xs-12">

<?php
// Grab Upcomong events
$isactive=1;
$sql = "SELECT EventName,EventLocation,EventStartDate,EventEndDate,EventImage,id from tblevents where IsActive=:isactive order by id desc limit 5";
$query = $dbh -> prepare($sql);
$query->bindParam(':isactive',$isactive,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{ 
    ?>

                              <div class="single-upcomming shadow-box">
                                 <div class="col-md-4 hidden-sm col-xs-12">
                                     <div class="sue-pic">
                                        <img src="admin/eventimages/<?php echo htmlentities($row->EventImage);?>" alt="<?php echo htmlentities($row->EventName);?>" style="border:#000 .24px solid"> 
                                     </div>
                                     <div class="sue-date-time text-center">
                                         <span><?php echo htmlentities($row->EventStartDate);?></span>To
                                         <span><?php echo htmlentities($row->EventEndDate);?></span>
                                     </div>
                                 </div>
                                 <div class="col-md-3 col-sm-5 col-xs-12">
                                    <div class="uc-event-title">
                                        <div class="uc-icon"><i class="zmdi zmdi-globe-alt"></i></div>
                                        <a href="#"><?php echo htmlentities($row->EventName);?></a>
                                    </div> 
                                 </div> 
                                 <div class="col-md-2 col-sm-3 col-xs-12">
                                     <div class="venu-no">
                                         <p>Location : <?php echo htmlentities($row->EventLocation);?></p>
                                     </div>
                                 </div>
                                 <div class="col-md-3 col-sm-4 col-xs-12">
                                     <div class="u">
 <a href="event-details.php?evntid=<?php echo htmlentities($row->id);?>" class="btn-def bnt-2 small">View Details</a>
                                     </div>
                                 </div>
                              </div>
 <?php } } ?>                        
                             
                            
                          </div>
                      </div>
                  </div>
              </div>               
            <!--upcomming events area--> 

            
           
            
   

        
           
       

            <!--information area start-->
           <?php include_once('includes/footer.php');?>
            <!--footer area start-->
         </div>   
        <!--body-wraper-are-end-->
        
        <!--==== all js here====-->
        <!-- jquery latest version -->
        <script src="js/vendor/jquery-3.1.1.min.js"></script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
        <!-- Nivo js -->
        <script src="js/nivo-slider/jquery.nivo.slider.pack.js"></script>
        <script src="js/nivo-slider/nivo-active.js"></script>
        <!-- wow js -->
        <script src="js/wow.min.js"></script>
        <!-- Vedio js -->
        <script src="js/video.js"></script>
        <!-- Youtube Background JS -->
        <script src="js/jquery.mb.YTPlayer.min.js"></script>
        <!-- datepicker js -->
        <script src="js/bootstrap-datepicker.js"></script>
        <!-- waypoint js -->
        <script src="js/waypoints.min.js"></script>
        <!-- onepage nav js -->
        <script src="js/jquery.nav.js"></script>
        <!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU"></script>
        <script src="js/google-map.js"></script>
        <!-- animate text JS -->
        <script src="js/animate-text.js"></script>
        <!-- plugins js -->
        <script src="js/plugins.js"></script>
        <!-- main js -->
        <script src="js/main.js"></script>
    </body>
</html>