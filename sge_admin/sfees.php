<?php 
ob_start();
?>
<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/all-fees.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Sep 2023 09:25:31 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Saraswati Group of Education | Fees Collection</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="css/select2.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Data Table CSS -->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize js -->
    <script src="js/modernizr-3.6.0.min.js"></script>
    
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
         <!-- Header Menu Area Start Here -->
        <?php include "a_header.php"; ?>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <?php include "a_sidebar.php"; ?>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Accounts</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Fees</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Fees Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Fees</h3>
                            </div>
                           <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
        
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <form class="mg-b-20">
                            <div class="row gutters-8">
                                <div class="col-xl-4 col-lg-6 col-12 form-group">                         
                                <?php
                                    /*display code*/
                                    include "sge_connection.php";

                                    $qrysel="select * from course";
                                    $rs = mysqli_query($conn, $qrysel);

                                    if(!$rs)
                                    {
                                        echo"<font color='red' size='4'>Incorrect my sql query</font>";
                                        echo"<br>".$qrysel;
                                        die();
                                    } 
                                        echo '<select id="sel1" class="select2" name="cname"> ';
                                        echo "<option value='-1'>Select Course </option>";
                                        while($v=mysqli_fetch_array($rs))
                                        {
                                            echo '<option value='.$v["courseid"].' '. ((isset($_GET['cname']) && $_GET['cname']==$v["courseid"])?'Selected':'') .' >'.$v["coursename"].'</option>';
                                        }
                                        echo "</select>";
                                    ?>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <select class="select2" id="sel2" name="sname">
                                        <option value="">Select Student Name</option>
                                        <?php
                                      if(isset($_GET['sname']))
                                      {
                                          //echo "here";
                                      $qrysel="select student.fname,student.sid from student Left Join course ON student.courseid= course.courseid where student.courseid=".$_GET['cname'];
                                       $rs=mysqli_query($conn , $qrysel);
                                      //echo $rs;
                                      $str = "";
                                          if(!$rs)
                                          {
                                              echo"<font color=red size=4>Incorrect my sql query</font>";
                                              echo"<br>".$qrysel;
                                              die();
                                          }
                                          else
                                          { 
                                               while($v=mysqli_fetch_array($rs, MYSQLI_ASSOC))
                                               {
                                                   $str .= '<option value='.$v["sid"].' '. ((isset($_GET['sname']) && $_GET['sname']==$v["sid"])?'Selected':'') .' >'.$v["fname"].'</option>';
                                               }
                                               
                                          }
                                         // header('Content-type:application/html;charset=utf-8');
                                          echo $str;
                                      }
                                        
                                ?>

                                </select>     
                                </div>
                                <div class="col-xl-2 col-sm-6 col-12">
                                    <input type="submit" class="fw-btn-fill btn-gradient-yellow" value="VIEW" name="view">
                                </div>
                                <!-- PHP SEARCH CODE STARTS HERE -->
                            </div>
                            </form>
                            <?php 
                            if(isset($_GET['view']))
                            {
                                $cname = $_GET['cname'];
                                $sname = $_GET['sname'];
                               
                            ?>
                        <!-- PHP SEARCH CODE ENDS HERE -->
                            <div class="row">
                                <div class="col-lg-8">
                                    &nbsp;
                                </div>
                                <div class="col-xl-4 col-lg-4 col-sm-12 col-12">
                                    
                                    <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                        <table class="table table-bordered table-striped mb-3">
                                        <?php
                                            $total_fees = 0;
                                            $paid_fees = 0;
                                            $tfees = mysqli_query($conn,"select total_fees from student where sid=". $sname." AND courseid=".$cname."");
                                         
                                            if(mysqli_num_rows($tfees)>0)
                                            {
                                                while($rows = mysqli_fetch_array($tfees))
                                                {
                                                    $total_fees = $rows['total_fees'];
                                                }
                                            }
                                            $tfees = mysqli_query($conn,"select sum(amount_paid) As totamount_paid from fees where sid=".$sname." AND courseid=".$cname);
        
                                            if(mysqli_num_rows($tfees)>0)
                                            {
                                                while($rows = mysqli_fetch_array($tfees))
                                                {
                                                    $paid_fees = ($rows['totamount_paid']!=NULL)?$rows['totamount_paid']:0;
            
                                                }
                                            }
                                                
                                                $remain_fees = $total_fees - $paid_fees;
                                                ?>
                                            <tr>
                                                <th>Total Fees</th>
                                                <td><?php echo $total_fees; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Paid Fees</th>
                                                <td><?php echo $paid_fees; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Remaining Fees</th>
                                                <td><?php echo $remain_fees; ?></td>
                                            </tr>
                                            <?php/* } */?>
                                        </table>
                                    
                                    </div>
                                </div>
                            </div>
                        <div class="table-responsive">
                            <table class="table data-table text-nowrap">
                           
                                <thead>
                                    <tr>
                                        <th>Amount Paid</th>
                                        <th>Paid Mode</th>
                                        <th>Pay Date</th>
                                        <th>Remark</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $tfees = mysqli_query($conn,"select * from fees where sid=".$sname." AND courseid=".$cname);
                                while($rows = mysqli_fetch_array($tfees))
                                {
                                    $amount_paid = $rows['amount_paid'];
                                    $paid_mode = $rows['paid_mode'];
                                    $pay_date = $rows['pay_date'];
                                    $remark =$rows['remark'];
                                    ?>
                                    <tr>
                                        <td><?php echo $amount_paid; ?></td>
                                        <td><?php echo $paid_mode; ?> </td>
                                        <td><?php echo $pay_date; ?></td>
                                        <td><?php echo $remark; ?></td>
                                         <td>
                                         <?php echo"<a href='javascript:void(0);' data-fid='".$rows['feeid']."' class='del'> " ?>
                                         <i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                               
                            </table>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            
                <!-- Fees Table Area End Here -->
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">Saraswati Group of Education</a> 2019. All rights reserved. Designed by <a href="#">PsdBosS</a></div>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Select 2 Js -->
    <script src="js/select2.min.js"></script>
    <!-- Data Table Js -->
    <script src="js/jquery.dataTables.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

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

                $(".del").click(function(){  
                        if(confirm("Are you sure?"))
                        {
                            var response;
                            $.ajax({ type: "GET",  
                                    data: {delid:$(this).attr("data-fid")},
                                    url: "fees_search.php",   
                                    async: false,
                                    success : function(text)
                                    {
                                        response= text;
                                    }
                                });

                                if(response!=0)
                                {
                                    $(this).parent().parent().remove();
                                }
                        }
                    });  
                });
                </script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/all-fees.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Sep 2023 09:25:31 GMT -->
</html>