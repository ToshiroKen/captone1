<?php
    session_start();
    include '../../../db.php';
if(isset($_POST['submit_medicalcollege'])){ // pag get ng data
    $admin_id = $_POST['admin_id'];
    $idnumber = $_POST['idnumber']; 
    $name1 = $_POST['name1'];
    $gradecourseyear1 = $_POST['gradecourseyear1'];
    $role = $_POST['role'];
    $onoff = $_POST['onoff'];
    $date_time = $_POST['date_time'];

    date_default_timezone_set('Asia/Manila');
    $date_created = date('Y-m-d h:i A'); 

    $sql = "INSERT INTO medicalapp VALUES ('','$admin_id','$idnumber','$name1','$gradecourseyear1','$role','$onoff','$date_time','$date_created')";
    if(mysqli_query($conn, $sql)){
        // echo "<script>window.history.go(-1);</script>";
        header('location: ../medicalcollege.php');
        echo $_SESSION['success'] ="
            <div id='success-message' style='position:absolute; right:30px; background-color:#15a362; padding: 10px 10px; width:auto; border-radius: 10px;'>
                <h2 style='
                color: #fff;
                font-size: 16px;
                margin-left: 10px;'>Medical Appointment Added.</h2>
            </div>
        ";
    }
} //for medical appointment college


if(isset($_POST['submit_statusmedicalcollege'])) {
    // Retrieve the submitted form data
    $medical_id = $_POST['medical_id'];
    $statusmedmonam_1 = $_POST['statusmedmonam_1'];
    $statusmedtueam_2 = $_POST['statusmedtueam_2'];
    $statusmedwedam_3 = $_POST['statusmedwedam_3'];
    $statusmedthuam_4  = $_POST['statusmedthuam_4'];
    $statusmedfriam_5  = $_POST['statusmedfriam_5'];
    $statusmedmonpm_6  = $_POST['statusmedmonpm_6'];
    $statusmedtuepm_7  = $_POST['statusmedtuepm_7'];
    $statusmedwedpm_8  = $_POST['statusmedwedpm_8'];
    $statusmedthupm_9  = $_POST['statusmedthupm_9'];
    $statusmedfripm_10 = $_POST['statusmedfripm_10'];

    // Step 4: Execute the update query
    $sql = "UPDATE statusmedicalcollege SET statusmedmonam_1='$statusmedmonam_1', statusmedtueam_2='$statusmedtueam_2', 
    statusmedwedam_3='$statusmedwedam_3', statusmedthuam_4='$statusmedthuam_4', statusmedfriam_5='$statusmedfriam_5', 
    statusmedmonpm_6='$statusmedmonpm_6', statusmedtuepm_7='$statusmedtuepm_7', statusmedwedpm_8='$statusmedwedpm_8',
    statusmedthupm_9='$statusmedthupm_9', statusmedfripm_10 ='$statusmedfripm_10'
    WHERE medical_id = $medical_id";

    // Execute the query and handle the result
    if (mysqli_query($conn, $sql)) {
        // Step 5: Handle the update result
        echo '<script>alert("Successfully updated!");</script>';
        echo '<script>window.location.href="../medicalcollege.php";</script>';
        exit;
    } else {
        echo '<script>alert("Error: ' . mysqli_error($conn) . '");</script>';
    }
}  //for update medical schedules

if(isset($_POST['submit_consultationform'])){ // pag get ng data
    $admin_id = $_POST['admin_id']; 
    $idnumber = $_POST['idnumber']; 
    $date = $_POST['date'];
    $fullname = $_POST['fullname']; 
    $gradesection = $_POST['gradesection'];
    $chiefcomplaint = $_POST['chiefcomplaint'];
    $treatment = $_POST['treatment'];

    $sql = "INSERT INTO consultationformrecord VALUES ('','$admin_id','$idnumber','$date','$fullname','$gradesection','$chiefcomplaint','$treatment')";
    if(mysqli_query($conn, $sql)){
        // echo "<script>window.history.go(-1);</script>";
        header('location: ../consultationformcollege.php');
        echo $_SESSION['success'] ="
            <div id='success-message' style='position:absolute; right:30px; background-color:#15a362; padding: 10px 10px; width:auto; border-radius: 10px;'>
                <h2 style='
                color: #fff;
                font-size: 16px;
                margin-left: 10px;'>Consultation Form Added.</h2>
            </div>
        ";
    }
} // for consultation form college

if(isset($_POST['submit_schoolhealthassesform'])){ // pag get ng data
    $admin_id = $_POST['admin_id']; 
    $idnumber = $_POST['idnumber']; 
    $fullname = $_POST['fullname']; 
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $bmi = $_POST['bmi'];
    $bp = $_POST['bp'];
    $pr = $_POST['pr'];
    $scalp = $_POST['scalp'];
    $skin_nails = $_POST['skin_nails'];
    $eyes = $_POST['eyes'];
    $visual_acuity = $_POST['visual_acuity'];
    $ears = $_POST['ears'];
    $hearing_test = $_POST['hearing_test'];
    $nose = $_POST['nose'];
    $throat = $_POST['throat'];
    $mouth_tongue = $_POST['mouth_tongue'];
    $teeth_gums = $_POST['teeth_gums'];
    $chest_breasts = $_POST['chest_breasts'];
    $heart = $_POST['heart'];
    $lungs = $_POST['lungs'];
    $abdomen = $_POST['abdomen'];
    $genitalia = $_POST['genitalia'];
    $spine_extremities = $_POST['spine_extremities'];
    $sexual = $_POST['sexual'];
    $screening = $_POST['screening'];
    $otherfindings = $_POST['otherfindings'];
    $remarks = $_POST['remarks'];
    
    $sql = "INSERT INTO schoolhealthasses VALUES ('','$admin_id','$idnumber','$fullname','$birthday','$gender','$date','$weight','$height',
    '$bmi','$bp','$pr','$scalp','$skin_nails','$eyes','$visual_acuity','$ears','$hearing_test',
    '$nose','$throat','$mouth_tongue','$teeth_gums','$chest_breasts','$heart','$lungs','$abdomen',
    '$genitalia','$spine_extremities','$sexual','$screening','$otherfindings','$remarks')";
    if(mysqli_query($conn, $sql)){
        // echo "<script>window.history.go(-1);</script>";
        header('location: ../schoolhealthassessmentformcollege.php');
        echo $_SESSION['success'] ="
            <div id='success-message' style='position:absolute; right:30px; background-color:#15a362; padding: 10px 10px; width:auto; border-radius: 10px;'>
                <h2 style='
                color: #fff;
                font-size: 16px;
                margin-left: 10px;'>Health Assessment Added.</h2>
            </div>
        ";
    }
} // for school health assessment form college


?>
