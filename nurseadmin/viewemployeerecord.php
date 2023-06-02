<?php
    session_start();
    include '../db.php';

    if (!isset($_SESSION['admin_id'])){
        echo '<script>window.alert("PLEASE LOGIN FIRST!!")</script>';
        echo '<script>window.location.replace("login.php");</script>';
        exit; // Exit the script to prevent further execution
    }

  
?>


<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>CAPSTONE</title>
    
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
    <?php  	
$idnumber = $_GET['idnumber'];

// Retrieve the health record for the given ID number
$sql = "SELECT * FROM healthrecord WHERE idnumber = '$idnumber'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $row = $result->fetch_assoc(); 
  $fullname = $row['fullname'];
  $idnumber = $row['idnumber'];
  $contact = $row['contact'];
  $age = $row['age'];
  $birthday = $row['birthday'];
  $gender = $row['gender'];
  $role = $row['role'];
  $gradecourse = ['gradecourse'];
  $address = $row ['address'];
  $fathername = $row['fathername'];
  $cfather = $row['cfather'];
  $mothername = $row['mothername'];
  $cmother = $row['cmother'];
  $polio = $row['polio'];
  $measles = $row['measles'];
  $tb = $row['tb'];
  $seizure_epilepsy = $row['seizure_epilepsy'];
  $tetanus = $row['tetanus'];
  $mumps = $row['mumps'];
  $hepatits = $row['hepatits'];
  $bleeding_tendencies = ['bleeding_tendencies'];
  $chicken_pox = $row['chicken_pox'];
  $asthma = $row['asthma'];
  $fainting_spells = $row['fainting_spells'];
  $eye_disorder =$row ['eye_disorder'];
  $heart = $row['heart'];
  $illness =$row['illness'];
  $allergyfood = $row['allergyfood'];
  $allergymed = $row['allergymed'];
  $allow_not = $row['allow_not'];
  $medications = $row['medications'];
  $nameperson = $row['nameperson'];
  $personcp =$row['personcp'];
  $relationship =$row['relationship'];
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
                <li class="submenu-item"><a class="submenu-link active" href="studentlists.php">Students</a></li>
                <li class="submenu-item"><a class="submenu-link" href="employeelists.php">Employees</a></li>
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
        <span class="nav-link-text">Messages</span>
        <span class="submenu-arrow">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
            </svg>
        </span>
    </a>
    <div id="submenu-3" class="collapse submenu submenu-3" data-bs-parent="#menu-accordion">
        <ul class="submenu-list list-unstyled">
            <li class="submenu-item"><a class="submenu-link active" href="dentalrequests.php">Dental Requests</a></li>
            <li class="submenu-item"><a class="submenu-link" href="medicalrequests.php">Medical Requests</a></li>
        </ul>
    </div>
</li>

    
    <li class="nav-item has-submenu">
        <a class="nav-link submenu-toggle active" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-2" aria-expanded="false" aria-controls="submenu-2">
            <span class="nav-icon">
                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar2-plus" viewBox="0 0 16 16">
			<path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
			<path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4zM8 8a.5.5 0 0 1 .5.5V10H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V11H6a.5.5 0 0 1 0-1h1.5V8.5A.5.5 0 0 1 8 8z"/>
			</svg>
            </span>
            <span class="nav-link-text">Appointments</span>
            <span class="submenu-arrow">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
        </a>
        <div id="submenu-2" class="collapse submenu submenu-2" data-bs-parent="#menu-accordion">
            <ul class="submenu-list list-unstyled">
                <li class="submenu-item"><a class="submenu-link active" href="dental.php">Dental</a></li>
                <li class="submenu-item"><a class="submenu-link" href="medical.php">Medical</a></li>
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
					    <div class="col-auto">
					        <h1 class="app-page-title mb-0">Fill-up Health Record Form</h1>
					    </div>
						
				    </div>
			    </div>
			    
                <div class="app-card app-card-notification shadow-sm mb-4">
				    <div class="app-card-header px-4 py-3">
				        <div class="row g-3 align-items-center">
					        <div class="col-12 col-lg-auto text-center text-lg-start">
						        <h4 class="notification-title mb-1">Please fill-up honestly.</h4>
					        </div>
							
				        </div><!--//row-->
				    </div><!--//app-card-header-->
				    <div class="app-card-body p-4">
					<p class="title_">Personal Information</p>
					    <form class="form-horizontal mt-4"action="function/funct.php" method="post">
							<div class="align_form">
								<div class="input_form">
								
                                <div class="input_wrap">
										<label>Full Name</label>
										<input name="fullname" type="text" value="<?php echo $fullname; ?>"  readonly />
									</div>

									<div class="input_wrap">
									<label for="fullname">ID Number</label>
										<input name="idnumber" type="text" value="<?php echo $idnumber; ?>"  readonly  />
										
									</div>
									<div class="input_wrap">
									<label for="fullname">Contact Number</label>
										<input name="contact" type="text" value="<?php echo $contact; ?>"  readonly  />
										
									</div>
									<div class="input_wrap">
									<label for="fullname">Age</label>
										<input name="age" type="text" value="<?php echo $age; ?>"  readonly  />
									
									</div>
									<div class="input_wrap">
									<label for="fullname">Birthday</label>
										<input name="birthday" type="date" value="<?php echo $birthday; ?>"  readonly  />
										
									</div>
									<div class="input_wrap">
										<label>Gender</label>
										<select readonly>
											<option disabled selected><?= $row['gender'];?></option>
										</select>
									</div>
									<div class="input_wrap">
									<label>Role</label>
										<select readonly>
											<option disabled selected><?= $row['role'];?></option>
										</select>
									</div>
									<div class="input_wrap">
									<label>Grade/Course & Year/Position</label>
										<input name="gradecourse" type="text" value="<?=$row['gradecourse'];?>" readonly />
									</div>
									<div class="input_wrap">
										<label>Home Address</label>
										<input name="address" type="text" value="<?=$row['address'];?>" readonly />
										
									</div>
								</div>
							</div>
							<div class="input_form">
							<div class="input_wrap">
									<label for="fullname">Name of Father</label>
										<input name="fathername" type="text" value="<?=$row['fathername'];?>" readonly/>
									
									</div>
									
									<div class="input_wrap">
									<label for="fullname">Contact</label>
										<input name="cfather" type="text" value="<?=$row['cfather'];?>" readonly />
									
									</div>
							</div>

							<div class="input_form">
                            <div class="input_wrap">
									<label for="fullname">Name of Mother</label>
										<input name="mothername" type="text" value="<?=$row['mothername'];?>" readonly/>
									
									</div>
									
									<div class="input_wrap">
									<label for="fullname">Contact</label>
										<input name="cmother" type="text" value="<?=$row['cmother'];?>" readonly />
									
									</div>
							</div>
							<div>
								<p class="title_">Medical History</p>
							</div>
							<div class="input_form">
                            <div class="checkbox">
									<input name="polio" type="checkbox" value="<?= $row['polio'];?>" id="polio" <?php if ($row['polio']) echo "checked"; ?>>
									<label class="label" for="polio">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;POLIO</label>
								</div>
								<div class="checkbox">
									<input name="measles" type="checkbox" value="<?= $row['measles'];?>" id="measles" <?php if ($row['measles']) echo "checked"; ?>>
									<label class="label" for="measles">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MEASLES</label>
								</div>
								<div class="checkbox">
									<input name="tb" type="checkbox" value="<?= $row['tb'];?>" id="tb"<?php if ($row['tb']) echo "checked"; ?>>
									<label class="label" for="tb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PULMONARY TUBERCULOSIS</label>
								</div>
								<div class="checkbox">
									<input name="seizure_epilepsy" type="checkbox" value="<?= $row['seizure_epilepsy'];?>" id="seizure_epilepsy" <?php if ($row['seizure_epilepsy']) echo "checked"; ?>>
									<label class="label" for="seizure_epilepsy">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SEIZURE / EPILEPSY</label>
								</div>
								<div class="checkbox">
									<input name="tetanus" type="checkbox" value="<?= $row['tetanus'];?>" id="tetanus" <?php if ($row['tetanus']) echo "checked"; ?>>
									<label class="label" for="tetanus">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TETANUS</label>
								</div>
								<div class="checkbox">
									<input name="mumps" type="checkbox" value="<?= $row['mumps'];?>" id="mumps" <?php if ($row['mumps']) echo "checked"; ?>>
									<label class="label" for="mumps">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MUMPS</label>
								</div>
								<div class="checkbox">
									<input name="hepatits" type="checkbox" value="<?= $row['hepatits'];?>" id="hepatits" <?php if ($row['hepatits']) echo "checked"; ?>>
									<label class="label" for="hepatits">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HEPATITIS</label>
								</div>
								<div class="checkbox">
									<input name="bleeding_tendencies" type="checkbox" value="<?= $row['bleeding_tendencies'];?>" id="bleeding_tendencies" <?php if ($row['bleeding_tendencies']) echo "checked"; ?>>
									<label class="label" for="bleeding_tendencies">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BLEEDING TENDENCIES</label>
								</div>
								<div class="checkbox">
									<input name="chicken_pox" type="checkbox" value="<?= $row['chicken_pox'];?>" id="chicken_pox" <?php if ($row['chicken_pox']) echo "checked"; ?>>
									<label class="label" for="chicken_pox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CHICKEN POX</label>
								</div>
								<div class="checkbox">
									<input name="asthma" type="checkbox" value="<?= $row['asthma'];?>" id="asthma" <?php if ($row['asthma']) echo "checked"; ?>>
									<label class="label" for="asthma">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ASTHMAA</label>
								</div>
								<div class="checkbox">
									<input name="fainting_spells" type="checkbox" value="<?= $row['fainting_spells'];?>" id="fainting_spells" <?php if ($row['fainting_spells']) echo "checked"; ?>>
									<label class="label" for="fainting_spells">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FAINTING SPELLS</label>
								</div>
								<div class="checkbox">
									<input name="eye_disorder" type="checkbox" value="<?= $row['eye_disorder'];?>" id="eye_disorder" <?php if ($row['eye_disorder']) echo "checked"; ?>>
									<label class="label" for="eye_disorder">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EYE DISORDER</label>
								</div>
								<div class="input_wrap">
								<label>Heart Ailment(please specify)</label>
									<input name="heart" type="text" value="<?=$row['heart'];?>" readonly />
								</div>
								<div class="input_wrap">
								<label>Other illness(please specify)</label>
									<input name="illness" type="text" value="<?=$row['illness'];?>" readonly />
								</div>
							</div>
							<div>
								<p class="title_">Do you have any allergy to:</p>
							</div>
							<div class="input_form_2">
                            <div class="input_wrap">
								<label>Food (if YES please specify, if NO leave it blank)</label>
									<input name="allergyfood" type="text" value="<?=$row['allergyfood'];?>" readonly />
								</div>
								<div class="input_wrap">
								<label>Medicine (if YES please specify, if NO leave it blank)</label>
									<input name="allergymed" type="text" value="<?=$row['allergymed'];?>" readonly />
								</div>
								<div class="input_wrap">
								<label>Would you allow your child to be given medicine (as needed) while here in the school?</label>
									<input name="allow_not" type="text" value="<?=$row['allow_not'];?>" readonly />
								</div>
								<div class="input_wrap">
								<label>Is your child taking any medications at present? If YES, please list the name of the medicine/s:</label>
									<input name="medications" type="text" value="<?=$row['medications'];?>" readonly />
								</div>
								<div class="input_wrap">
								<label>Name of the person to be notified in case of emergency:</label>
									<input name="nameperson" type="text" value="<?=$row['nameperson'];?>" readonly />
								</div>
								<div class="input_wrap">
								<label>Contact Number</label>
									<input name="personcp" type="number" value="<?= $row['personcp'];?>" readonly />
									
								</div>
								<div class="input_wrap">
								<label>Relationship</label>
									<input name="relationship" type="text" value="<?=$row['relationship'];?>" readonly />
								</div>
							</div>
							
						</form>
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

