<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/glaxdu/glaxdu/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Sep 2023 10:50:05 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SGE</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    
    <!-- CSS
	============================================ -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/icons.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.11.7.min.js"></script>
</head>

<body>
<header class="header-area">
    <div class="header-top bg-img" style="background-image:url(assets/img/icon-img/header-shape.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 col-12 col-sm-8">
                    <div class="header-contact">
                        <ul>
                            <li><i class="fa fa-phone"></i> +98 558 547 589</li>
                            <li><i class="fa fa-envelope-o"></i><a href="#">education@email.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-12 col-sm-4">
                    <div class="login-register">
                        <ul>
                            <li><a href="login.php">Login</a></li>
                            <li><a href="inquiry.php">Inquire</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom sticky-bar clearfix" style="height:70px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-4" style="position:absolute; z-index:50;top:-5px; left:10px;">
                    <div class="logo">
                        <a href="index.html">
                            <img alt="" src="assets/img/logo/logo_sge.jpg" style="border-radius:50%; height:60%; width:60%;">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-6 col-8" style="margin-top:0px;">
                    <div class="menu-cart-wrap">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li><a href="index.php"> HOME </a></li>

                                    <li><a href="about-us.php"> ABOUT  </a></li>

                                    <li><a href="course.php"> COURSES / PROGRAMMES</a>
                                        <ul class="submenu">
                                            <?php
                                            if(isset($_GET['detailid']))
                                            {
                                                $detailid = $_GET['detailid'];
                                                $detail_query = "select * from course where courseid = ".$detailid;
                                                
                                            }
                                        ?>
                                                <?php
                                            /*display code*/
                                            include "sge_connection.php";

                                            $qrysel="select * from course";
                                            $rs = mysqli_query($conn, $qrysel);

                                            if(!$rs)
                                            {
                                                echo"<font color='red' sizoe='4'>Incorrect my sql query</font>";
                                                echo"<br>".$qrysel;
                                                die();
                                            } 
                                                echo '<li id="sel1" class="select2" name="courseid">';
                                                //echo "<li value='-1'>Select Course </li>";
                                                while($v=mysqli_fetch_array($rs))
                                                {
                                                    echo '<li value='.$v["courseid"].' '. ((isset($_GET['coursename']) && $_GET['coursename']==$v["courseid"])?'Selected':'').'> <a href="course-details.php?detailid=' . $v["courseid"] . '"> '.$v["coursename"].'</a></li>';
                                                }
                                                echo "</li>";
                                            ?>
                                            </ul>   
                                        </li>
                                    <li><a href="event.php"> Gallery </a>
                                        <ul class="submenu">
                                            <li><a href="event.php">events gallery</a></li>
                                            <li><a href="class.php">class gallery</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.php"> CONTACT </a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<script>  
		$(document).ready(function(){  
				$("#sel1").change(function(){  
					if($("#sel1 option:selected").val()<=0)
					{
						$("#sel2").hide();
					}
					else
					{
						var response;
						$.ajax({ type: "GET",  
								 data: {selcat1:$("#sel1 option:selected").val()},
								 url: "fees_search.php",   
								 async: false,
								 success : function(text)
								 {
									 response= text;
								 }
							});
					$("#sel2").empty();
					$('#sel2').append(response);
						$("#sel2").show();
					}
				});  
			});
       
</script>