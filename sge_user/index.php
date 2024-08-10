<html>
    <head>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
     <!-- Bootstrap CDN -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
          rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
          crossorigin="anonymous">
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
    <style>
        input[type="button"]
        {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border: 1px solid #039834;
        }
        
			canvas 
			{
			  height: 150px;
			  width:    175px;
			  border-style: solid;
			  border-width: 2px;
              border-radius:10px;
			  border-color: #83878b;
            margin-top:30px;
            margin-left:15px;
			}
        </style>
    </head>
    <body>
   <?php include "u_header.php"?>
    <div class="container">
        <div class="row">
                    <div class="table-responsive"style="display:inline" >
                            <table class="table">
                            <tr>
                                <td rowspan=3><canvas id= "canv1"  > </canvas></td>
                                 <td class="text-primary">First Name:</td>
                                 <td class="font-medium text-dark-medium">Jessia Rose</td>
                             
                                <td class="text-primary ">Last Name</td>
                                <td class="font-medium text-dark-medium">Jessia Rose</td>
                             </tr>
                             <tr>
                                 <td class="text-primary ">Course Name:</td>
                                 <td class="font-medium text-dark-medium">Web Development</td>
                             
                                <td class="text-primary ">Email Id</td>
                                <td class="font-medium text-dark-medium">ABC@gamil.com</td>
                             </tr>
                             <tr>
                             <td class="text-primary ">Mobile No.</td>
                            <td class="font-medium text-dark-medium">ABC@gamil.com</td>
                             </tr>
                            </table>
                    </div>    
             <div class="col-xl-6 col-lg-6 col-12 btn btn-default" >
                <input type="button" name="scode" value="Fees" class="form-control text-primary">
            </div>
            
            <div class="col-xl-6 col-lg-6 col-12 btn btn-default">
                <input type="button" name="scode" value="Syllabus" class="form-control text-primary">
            </div>
            <div class="col-xl-6 col-lg-6 col-12 btn btn-default">
                <input type="button" name="scode" value="Notice" class="form-control text-primary">
            </div>
            <div class="col-xl-6 col-lg-6 col-12 btn btn-default">
                <input type="button" name="scode" value="Feedback" class="form-control text-primary">
            </div>
            <div class="col-xl-12 col-lg-6 col-12 btn btn-default">
                <div class="col-xl-6 col-lg-6 col-12 btn btn-default">
                    <input type="button" name="scode" value="Feedback" class="form-control text-primary">
                </div>
        </div>
        </div>
    </div>
    </body>
</html>