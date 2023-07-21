<?php
    session_start();
    include '../../db.php';
    require '../../vendor/autoload.php';

    if (!isset($_SESSION['admin_id'])){
        echo '<script>window.alert("PLEASE LOGIN FIRST!!")</script>';
        echo '<script>window.location.replace("login.php");</script>';
        exit; // Exit the script to prevent further execution
    }

  
?>


<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>View Student Physician Request</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="assets/images/dwcl.png"> 
    
    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">
	<link rel="stylesheet" href="assets/viewdental.css">

</head> 

<body class="app"> 
    <?php  	
$date_created = $_GET['date_created'];

// Retrieve the health record for the given ID number
$sql = "SELECT * FROM physician WHERE date_created = '$date_created'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $row = $result->fetch_assoc(); 
  $idnumber = $row['idnumber'];
  $name = $row['name'];
  $gradecourseyear = $row ['gradecourseyear'];
  $role = $row['role'];
  $message = $row['message'];
  $date_created = $row['date_created'];
    }
 else {
 } 
?>
   <header class="app-header fixed-top">	   	            
        <div class="app-header-inner">  
	        <div class="container-fluid py-2">
		        <div class="app-header-content"> 
		            <div class="row justify-content-between align-items-center">
				    <div class="col-auto">
					    <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
						    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
					    </a>
				    </div><!--//col-->
		            <div class="app-utilities col-auto">		            
					<div class="app-utility-item app-user-dropdown dropdown">
				            <img src="assets/images/user.png">
				             <div class="app-utility-item app-user-dropdown dropdown">

                   <?php  if (isset($_SESSION['username'])) : ?>
                                    <p><?php echo $_SESSION['username']; ?></p>
                                    <?php endif ?></a>
                   </div>
				   <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"></a>
				            <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
								<li><a class="dropdown-item" href="function/logout.php">Log Out</a></li>
							</ul>
			            </div>
		            </div>
		        </div>
	            </div>
	        </div>
        </div>
        <div id="app-sidepanel" class="app-sidepanel sidepanel-hidden"> 
			<div id="sidepanel-drop" class="sidepanel-drop"></div>
				<div class="sidepanel-inner d-flex flex-column">
		        <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
		        <div class="app_logo">
					<img style="width: 150px; display:flex; margin-left: 50px; margin-top: 10px;" src="assets/images/dwcl.png" alt="logo">
		        </div>
			    <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
				<ul class="app-menu list-unstyled accordion" id="menu-accordion">
    <li class="nav-item has-submenu">
        <a class="nav-link submenu-toggle active" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-1" aria-expanded="false" aria-controls="submenu-1">
            <span class="nav-icon">
                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z"/>
                    <path d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z"/>
                </svg>
            </span>
            <span class="nav-link-text">Health Profiles</span>
            <span class="submenu-arrow">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
        <div id="submenu-1" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
            <ul class="submenu-list list-unstyled">
                <li class="submenu-item"><a class="submenu-link" href="studentlistsphysician.php">Students</a></li>
                <li class="submenu-item"><a class="submenu-link" href="employeelistsphysician.php">Employees</a></li>
            </ul>
        </div>
    </li>

    <li class="nav-item has-submenu">
    <a class="nav-link submenu-toggle active" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-3" aria-expanded="false" aria-controls="submenu-3">
        <span class="nav-icon">
            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
            </svg>
        </span>
        <span class="nav-link-text">Physician Consultation Request</span>
        <span class="submenu-arrow">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
            </svg>
        </span>
    </a>
    <div id="submenu-3" class="collapse submenu submenu-3" data-bs-parent="#menu-accordion">
        <ul class="submenu-list list-unstyled">
            <li class="submenu-item"><a class="submenu-link active" href="physicianstudentgsjhsshs.php">Student</a></li>
            <li class="submenu-item"><a class="submenu-link" href="physicianemployeegsjhsshs.php">Employee</a></li>
        </ul>
    </div>
</li>

    
<li class="nav-item has-submenu">
    <a class="nav-link submenu-toggle active" href="physicianapproved.php" data-bs-target="#submenu-4" aria-controls="submenu-4">
        <span class="nav-icon">
            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-check" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
            <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
            <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
            </svg>
        </span>
        <span class="nav-link-text">Physician Consultation Appointments</span>
    </a>
</li>
</ul>
  </nav>
	        </div>
	    </div>
    </header>
    
    
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    <div class="position-relative mb-3">
				    <div class="row g-3 justify-content-between">
					    <div class="col-auto">
					        <h1 class="app-page-title mb-0"></h1>
					    </div>
						
				    </div>
			    </div>
			    
                <div class="app-card app-card-notification shadow-sm mb-4">
				    <div class="app-card-header px-4 py-3">
				        <div class="row g-3 align-items-center">
					        <div class="col-12 col-lg-auto text-center text-lg-start">
						        <h4 class="notification-title mb-1">Physician Consultation Appointments</h4>
					        </div>
            
				        </div><!--//row-->
				    </div><!--//app-card-header-->
                    <div class="app-card-body p-4">
<form class="form-horizontal mt-4" method="post" action="function/functions.php">
<div class="row">
  <div class="col-sm-6">
    <div class="form-group">
      <label for="idnumber" class="col-sm-6 control-label" style="font-size: 16px">Student/Employee ID Number</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="idnumber" name="idnumber" placeholder="Enter ID number" value="<?php echo $row['idnumber']; ?>" readonly>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="form-group">
      <label for="patient_name" class="col-sm-6 control-label" style="font-size: 16px">Student/Employee Fullname</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Fullname" value="<?php echo $row['name']; ?>" readonly>
      </div>
    </div>
  </div>
 </div>
<br>
 <div class="row">
  <div class="col-sm-6">
    <div class="form-group">
      <label for="gradecourseyear" class="col-sm-6 control-label" style="font-size: 16px">Grade & Section/Course & Year</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="gradecourseyear" name="gradecourseyear" placeholder="Enter Grade & Section/Course & Year" value="<?php echo $row['gradecourseyear']; ?>" readonly>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
                <div class="form-group">
                    <label for="role" class="col-sm-4 control-label">Role</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="role" name="role" value="<?php echo $row['role']; ?>" readonly>
                    </div>
                </div>
            </div>

      <p><b><br>Note: </b> The PHYSICIAN will ONLY be available every <b>WEDNESDAY (8:00 A.M to 11:00 A.M)</b>. If your request has been approved, a text message will be sent to you.</p>
    
<div class="row">
    <div class="form-group">
        <br>
        <label for="message" class="col-sm-10 control-label">Write a message.... (State Date and Time)</label>
        <div class="col-sm-12">
        <input type="text" class="form-control" id="message" name="message" placeholder="Enter your message...." value="<?php echo $row['message']; ?>" readonly>
        </div>
    </div>
</div>
</div>

        <div class="form-group">
            <span><?php echo $row['date_created']; ?></span>
        </div>
        <a href="" data-bs-toggle="modal" data-bs-target="#myModal">Approve</a>
        
<!--Modal-->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Send Approved Message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="inputTo" class="form-label">To</label>
                        <input type="text" class="form-control" id="inputTo" name="phone" placeholder="63">
                    </div>
                    <div class="mb-3">
                        <label for="messagesms" class="form-label">Message</label>
                        <textarea class="form-control" id="messagesms" name="message" rows="4">Good Day! Your request for physician consulatation appointment is approved. Your schedule will be on June 30, 2023 at 10:30 A.M</textarea>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" value="Send">Send</button>
                    </div>
                </form>

                <?php
    /**
     * Send an SMS message directly by calling HTTP endpoint.
     *
     * For your convenience, environment variables are already pre-populated with your account data
     * like authentication, base URL, and phone number.
     *
     * Please find detailed information in the readme file.
     */
    
    

    use GuzzleHttp\Client;
    use GuzzleHttp\RequestOptions;

    if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
        $phoneNumber = $_POST['phone'];
        $message = $_POST['message'];

        $client = new Client([
            'base_uri' => "https://2kw6nm.api.infobip.com/",
            'headers' => [
                'Authorization' => "App 47d7c2b8394b7802f3eb4e49f8da3a40-aee5ec9a-6fae-4e23-b89f-246ee2b98f4a",
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ]
        ]);

        $response = $client->request(
            'POST',
            'sms/2/text/advanced',
            [
                RequestOptions::JSON => [
                    'messages' => [
                        [
                            'from' => 'Clinic',
                            'destinations' => [
                                ['to' => $phoneNumber]
                            ],
                            'text' => $message,
                        ]
                    ]
                ],
            ]
        );

        echo("<p>HTTP code: " . $response->getStatusCode() . "</p>");
        echo("<p>Response body: " . $response->getBody()->getContents() . "</p>");
    }
    ?>


            </div>
        </div>
    </div>
</div>

  
</div><!--//app-card-body-->
				</div>			    
		    </div>
	    </div>
    </div>  					
    <!-- Javascript -->          
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
    
    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script> 
	
	<script>
		// Timer to remove success message after 5 seconds (5000 milliseconds)
		setTimeout(function(){
			var successMessage = document.getElementById('success-message');
			if(successMessage){
				successMessage.remove();
			}
		}, 5000);
	</script>

</body>
</html> 
