<?php
    session_start();
    include '../../db.php';

    if (!isset($_SESSION['user_id'])){
        echo '<script>window.alert("PLEASE LOGIN FIRST!!")</script>';
        echo '<script>window.location.replace("login.php");</script>';
        exit; // Exit the script to prevent further execution
    }

    $user_id = $_SESSION['user_id'];
    $sql_query = "SELECT * FROM users WHERE user_id ='$user_id'";
    $result = $conn->query($sql_query);
    while($row = $result->fetch_array()){
        $user_id = $row['user_id'];
        $fullname = $row['fullname'];
        $idnumber = $row['idnumber'];
        require_once('../../db.php');
        if($_SESSION['leveleduc'] == 1){
            // User type 1 specific code here
        }
        else{
            header('location: ../../login.php');
            exit; // Exit the script to prevent further execution
        }
    }
?>


<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>View School Assessment Record</title>
    
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
	<link rel="stylesheet" href="assets/style.css">

</head> 

<body class="app">   	
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

				            <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><img src="assets/images/user.png"><?= $fullname;?></a>
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
                <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
				<ul class="app-menu list-unstyled accordion" id="menu-accordion">
                <li class="nav-item has-submenu">

    <a class="nav-link submenu-toggle active" href="healthrecordformgsjhs.php" data-bs-target="#submenu-4" aria-controls="submenu-4">
        <span class="nav-icon">
            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
           <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z"/>
                    <path d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z"/>
                </svg>
        </span>
        <span class="nav-link-text">Health Profile</span>
    </a>
</li>



	<li class="nav-item has-submenu">
								<a class="nav-link submenu-toggle active" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-2" aria-expanded="false" aria-controls="submenu-2">
									<span class="nav-icon">
										<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-plus" viewBox="0 0 16 16">
											<path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
											<path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z"/>
											</svg>
									</span>
									<span class="nav-link-text">Request Scheduling Appointment</span>
									<span class="submenu-arrow">
										<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
										</svg>
									</span>
								</a>
								<div id="submenu-2" class="collapse submenu submenu-2" data-bs-parent="#menu-accordion">
									<ul class="submenu-list list-unstyled">
										<li class="submenu-item"><a class="submenu-link" href="adddentalmessagegsjhs.php">Request Dental Scheduling</a></li>
										<li class="submenu-item"><a class="submenu-link" href="addmedicalmessagegsjhs.php">Request Medical Scheduling</a></li>
										<li class="submenu-item"><a class="submenu-link" href="addphysicianmessagegsjhs.php">Request Physician Scheduling</a></li>
									</ul>
								</div>
							</li>


							<li class="nav-item has-submenu">
								<a class="nav-link submenu-toggle active" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-3" aria-expanded="false" aria-controls="submenu-3">
									<span class="nav-icon">
										<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stickies" viewBox="0 0 16 16">
										<path d="M1.5 0A1.5 1.5 0 0 0 0 1.5V13a1 1 0 0 0 1 1V1.5a.5.5 0 0 1 .5-.5H14a1 1 0 0 0-1-1H1.5z"/>
										<path d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2h-11zM3 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 .5.5V9h-4.5A1.5 1.5 0 0 0 9 10.5V15H3.5a.5.5 0 0 1-.5-.5v-11zm7 11.293V10.5a.5.5 0 0 1 .5-.5h4.293L10 14.793z"/>
										</svg>
									</span>
									<span class="nav-link-text">Clinic Records</span>
									<span class="submenu-arrow">
										<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
										</svg>
									</span>
								</a>
								<div id="submenu-3" class="collapse submenu submenu-3" data-bs-parent="#menu-accordion">
									<ul class="submenu-list list-unstyled">
									<li class="submenu-item"> <a class="submenu-link" href="viewhealthrecordprofile.php">Health Profile Record</a>
									<li class="submenu-item"> <a class="submenu-link" href="viewdentalappgsjhs.php">Dental Record</a>
                  <li class="submenu-item"> <a class="submenu-link" href="viewmedicalappgsjhs.php">Medical Record</a>
                  <li class="submenu-item"> <a class="submenu-link" href="viewphysicianappgsjhs.php">Physician Record</a>
									<li class="submenu-item"> <a class="submenu-link" href="viewdiagnosisgsjhs.php">Diagnosis/Chief Complaints, Management & Treatment Record</a>
									<li class="submenu-item"> <a class="submenu-link active" href="viewschoolassesgsjhs.php">School Health Assessment</a>
                  <li class="submenu-item"> <a class="submenu-link" href="viewphysicalexaminationrecordgsjhs.php">Physical Examination Record</a>
                  <li class="submenu-item"> <a class="submenu-link" href="viewphysicianorderandprogressnotesgsjhs.php">Physician's Order Sheet and Progress Notes Record</a>
                </li>
									</ul>
								</div>
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
					   
					       
						
				    </div>
			    </div>
			    
                <div class="app-card app-card-notification shadow-sm mb-4">
				    <div class="app-card-header px-4 py-3">
				        <div class="row g-3 align-items-center">
					       
				        </div><!--//row-->
				    </div><!--//app-card-header-->
				    <div class="app-card-body p-4">

                    <?php
							$sql = "SELECT * FROM schoolhealthasses WHERE idnumber = '$idnumber'";
							$result = $conn->query($sql);
    						while($row = $result->fetch_array()){
						?>
                        <br>
                        <div class="row">
                     
                      <div class="col-sm-6">
                          <div class="form-group">
                              <label for="idnumber" class="col-sm-4 control-label" style="font-size: 16px">Your ID Number</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" id="idnumber" name="idnumber" value="<?php echo $row['idnumber']; ?>" readonly>
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group">
                              <label for="patient_name" class="col-sm-4 control-label" style="font-size: 16px">Your Fullname</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $row['fullname']; ?>" readonly>
                              </div>
                          </div>
                      </div>
                  </div>

                  <br>

<div class="row">
<div class="col-sm-6">
        <div class="form-group">
            <label for="birthday" class="col-sm-4 control-label" style="font-size: 16px">Birthday</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="birthday" name="birthday" value="<?php echo $row['birthday']; ?>" readonly>
            </div>
        </div>
    </div>
 

    <div class="col-sm-6">
    <div class="form-group">
        <label for="gender" class="col-sm-4 control-label" style="font-size: 16px">Gender</label>
        <div class="col-sm-10">
            <select class="form-control" id="gender" name="gender" readonly>
            <option disabled selected><?= $row['gender'];?></option>
            </select>
        </div>
    </div>
</div>

<p><b><br>A. PHYSICAL EXAMINATION</p></b>
<div class="row">

<div class="col-md-2">
      <div class="form-group">
        <label for="date">Date</label>
        <input type="date" class="form-control" id="date" name="date" value="<?php echo $row['date']; ?>" readonly>
      </div>
    </div>

    <div class="col-md-2">
      <div class="form-group">
        <label for="weight">Weight</label>
        <input type="text" class="form-control" id="weight" name="weight" value="<?php echo $row['weight']; ?>" readonly>
      </div>
    </div>

    <div class="col-md-2">
      <div class="form-group">
        <label for="height">Height (in cm)</label>
        <input type="text" class="form-control" id="height" name="height" value="<?php echo $row['height']; ?>" readonly>
      </div>
    </div>

    <div class="col-md-2">
      <div class="form-group">
        <label for="bmi">BMI</label>
        <input type="text" class="form-control" id="bmi" name="bmi" value="<?php echo $row['bmi']; ?>" readonly>
      </div>
    </div>

    <div class="col-md-2">
      <div class="form-group">
        <label for="pr">Pulse Rate</label>
        <input type="text" class="form-control" id="pr" name="pr" value="<?php echo $row['pr']; ?>" readonly>
      </div>
    </div>

    <div class="col-md-2">
      <div class="form-group">
        <label for="bp">Blood Pressure</label>
        <input type="text" class="form-control" id="bp" name="bp" value="<?php echo $row['bp']; ?>" readonly>
      </div>
    </div>


  <div class="row">

  <div class="col-md-2">
    <br>
      <div class="form-group">
        <label for="scalp">Scalp</label>
        <input type="text" class="form-control" id="scalp" name="scalp" value="<?php echo $row['scalp']; ?>" readonly>
      </div>
   </div>

    <div class="col-md-2">
    <br>
      <div class="form-group">
        <label for="skin_nails">Skin & Nails</label>
        <input type="text" class="form-control" id="skin_nails" name="skin_nails" value="<?php echo $row['skin_nails']; ?>" readonly>
      </div>
    </div>

    <div class="col-md-2">
        <br>
      <div class="form-group">
        <label for="eyes">Eyes</label>
        <input type="text" class="form-control" id="eyes" name="eyes" value="<?php echo $row['eyes']; ?>" readonly>
      </div>
    </div>

    <div class="col-md-2">
        <br>
      <div class="form-group">
        <label for="visual_acuity">Visual Acuity</label>
        <input type="text" class="form-control" id="visual_acuity" name="visual_acuity" value="<?php echo $row['visual_acuity']; ?>" readonly>
      </div>
    </div>

    <div class="col-md-2">
        <br>
      <div class="form-group">
        <label for="ears">Ears</label>
        <input type="text" class="form-control" id="ears" name="ears" value="<?php echo $row['ears']; ?>" readonly>
      </div>
    </div>

    <div class="col-md-2">
        <br>
      <div class="form-group">
        <label for="hearing_test">Hearing Test</label>
        <input type="text" class="form-control" id="hearing_test" name="hearing_test" value="<?php echo $row['hearing_test']; ?>" readonly>
      </div>
    </div>
  </div>

  <div class="row">

  <div class="col-md-2">
        <br>
      <div class="form-group">
        <label for="nose">Nose</label>
        <input type="text" class="form-control" id="nose" name="nose" value="<?php echo $row['nose']; ?>" readonly>
      </div>
    </div>

    <div class="col-md-2">
    <br>
      <div class="form-group">
        <label for="throat">Throat</label>
        <input type="text" class="form-control" id="throat" name="throat" value="<?php echo $row['throat']; ?>" readonly>
      </div>
    </div>

    <div class="col-md-2">
        <br>
      <div class="form-group">
        <label for="mouth_tongue">Mouth & Tongue</label>
        <input type="text" class="form-control" id="mouth_tongue" name="mouth_tongue" value="<?php echo $row['mouth_tongue']; ?>" readonly>
      </div>
    </div>

    <div class="col-md-2">
        <br>
      <div class="form-group">
        <label for="teeth_gums">Teeth & Gums</label>
        <input type="text" class="form-control" id="teeth_gums" name="teeth_gums" value="<?php echo $row['teeth_gums']; ?>" readonly>
      </div>
    </div>

    <div class="col-md-2">
        <br>
      <div class="form-group">
        <label for="chest_breasts">Chest & Breasts</label>
        <input type="text" class="form-control" id="chest_breasts" name="chest_breasts" value="<?php echo $row['chest_breasts']; ?>" readonly>
      </div>
    </div>

    <div class="col-md-2">
        <br>
      <div class="form-group">
        <label for="heart">Heart</label>
        <input type="text" class="form-control" id="heart" name="heart" value="<?php echo $row['heart']; ?>" readonly>
      </div>
    </div>
  </div>

  <div class="row">

  <div class="col-md-2">
        <br>
      <div class="form-group">
        <label for="lungs">Lungs</label>
        <input type="text" class="form-control" id="lungs" name="lungs" value="<?php echo $row['lungs']; ?>" readonly>
      </div>
    </div>

    <div class="col-md-2">
    <br>
      <div class="form-group">
        <label for="abdomen">Abdomen</label>
        <input type="text" class="form-control" id="abdomen" name="abdomen" value="<?php echo $row['abdomen']; ?>" readonly>
      </div>
    </div>

    <div class="col-md-2">
        <br>
      <div class="form-group">
        <label for="genitalia">Genitalia</label>
        <input type="text" class="form-control" id="genitalia" name="genitalia" value="<?php echo $row['genitalia']; ?>" readonly>
      </div>
    </div>

    <div class="col-md-2">
        <br>
      <div class="form-group">
        <label for="spine_extremities" style="font-size: 15px">Spine & Extremities</label>
        <input type="text" class="form-control" id="spine_extremities" name="spine_extremities" value="<?php echo $row['spine_extremities']; ?>" readonly>
      </div>
    </div>

    <div class="col-md-4">
        <br>
      <div class="form-group">
        <label for="sexual">Sexual Maturity Rating</label>
        <input type="text" class="form-control" id="sexual" name="sexual" value="<?php echo $row['sexual']; ?>" readonly>
      </div>
    </div>

    <div class="col-md-4">
        <br>
      <div class="form-group">
        <label for="screening">Screening, Risk Taking Behavior</label>
        <input type="text" class="form-control" id="screening" name="screening" value="<?php echo $row['screening']; ?>" readonly>
      </div>
    </div>

    <div class="col-md-4">
        <br>
      <div class="form-group">
        <label for="otherfindings">Other Findings</label>
        <input type="text" class="form-control" id="otherfindings" name="otherfindings" value="<?php echo $row['otherfindings']; ?>" readonly>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-10">
    <br>
      <div class="form-group">
        <label for="remarks">Remarks</label>
        <input type="text" class="form-control" id="remarks" name="remarks" value="<?php echo $row['remarks']; ?>" readonly>
      </div>
    </div>
  </div>
  
  <p></p>
  <p></p>
  <hr>
  
        <?php } ?>
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

