<?php 
ob_start();
?>
<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/all-subject.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Sep 2023 09:25:31 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | All Courses</title>
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
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="css/select2.min.css">
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
    <?php include "sge_connection.php"; ?>
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
                    <h3>All Courses</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Add_multiple Image</li>
                    </ul>
                </div>
             <form action="" method="POST"
            enctype="multipart/form-data"> 
  
        <h2>Upload Files</h2> 
          
        <p> 
            Select files to upload:  
              
            <!-- name of the input fields are going to 
                be used in our php script-->
            <input type="file" name="files[]" multiple> 
              
            <br><br> 
              
            <input type="submit" name="submit" value="Upload" > 
        </p> 
    </form> 
          
<?php  
	include "sge_connection.php";
	// Check if form was submited 
	if(isset($_POST['submit'])) 
	{   
    // Configure upload directory and allowed file types 
    $upload_dir = 'images'.DIRECTORY_SEPARATOR; 
    $allowed_types = array('jpg', 'png', 'jpeg', 'gif'); 
      
    // Define maxsize for files i.e 2MB 
    $maxsize = 2 * 1024 * 1024;  
  
    // Checks if user sent an empty form  
    if(!empty(array_filter($_FILES['files']['name']))) 
	{ 
        // Loop through each file in files[] array 
        foreach ($_FILES['files']['tmp_name'] as $key => $value) 
		{  
            $file_tmpname = $_FILES['files']['tmp_name'][$key]; 
            $file_name = $_FILES['files']['name'][$key]; 
            $file_size = $_FILES['files']['size'][$key]; 
            $file_ext = pathinfo($file_name, PATHINFO_EXTENSION); 
  
            // Set upload file path 
            $filepath = $upload_dir.$file_name; 
  
            // Check file type is allowed or not 
            if(in_array(strtolower($file_ext), $allowed_types)) 
			{ 
  
                // Verify file size - 2MB max  
                if ($file_size > $maxsize)          
                    echo "Error: File size is larger than the allowed limit.";  
  
                // If file with name already exist then append time in 
                // front of name of the file to avoid overwriting of file 
                if(file_exists($filepath))
				{ 
					$file_name = time().$file_name;
                    $filepath = $upload_dir.$file_name; 
                      
                    if( move_uploaded_file($file_tmpname, $filepath)) 
					{ 
						$msg = "Image uploaded successfully"; 
						$sql = "INSERT INTO events (eventmulimg) VALUES ('$file_name')"; 
			  
					// Execute query 
						mysqli_query($conn, $sql);
                        echo "{$file_name} successfully uploaded <br />"; 
                    }  
                    else {                      
                        echo "Error uploading {$file_name} <br />";  
                    } 
                } 
                else 
				{ 
                  
                    if( move_uploaded_file($file_tmpname, $filepath)) 
					{ 
						$msg = "Image uploaded successfully"; 
						$sql = "INSERT INTO events (eventmulimg) VALUES ('$file_name')"; 
			  
					// Execute query 
						mysqli_query($conn, $sql); 
						
                        echo "{$file_name} successfully uploaded <br />"; 
                    } 
                    else {                      
                        echo "Error uploading {$file_name} <br />";  
                    } 
                } 
            } 
            else 
			{   
                // If file extention not valid 
                echo "Error uploading {$file_name} ";  
                echo "({$file_ext} file type is not allowed)<br / >"; 
            }  
        } 
    }  
    else 
	{ 
        // If no files selected 
        echo "No files selected."; 
    } 
}  
  
?> 

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
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Data Table Js -->
    <script src="js/jquery.dataTables.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/all-subject.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Sep 2023 09:25:31 GMT -->
</html>