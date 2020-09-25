<?php
require "../includes/common.php";


$name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);
$email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);
$mobile = $_POST['mobile'];
  $mobile = mysqli_real_escape_string($con, $mobile);
$city = $_POST['city'];
  $city = mysqli_real_escape_string($con, $city);
$degree = $_POST['degree'];
  $degree = mysqli_real_escape_string($con, $degree);
$stream = $_POST['stream'];
  $stream = mysqli_real_escape_string($con, $stream);
$endYear = $_POST['endYear'];
  $endYear = mysqli_real_escape_string($con, $endYear);
$degreeStatus = $_POST['degreeStatus'];
  $degreeStatus = mysqli_real_escape_string($con, $degreeStatus);
$collegeName = $_POST['collegeName'];
  $collegeName = mysqli_real_escape_string($con, $collegeName);
$cgpa = $_POST['cgpa'];
  $cgpa = mysqli_real_escape_string($con, $cgpa);
$job = $_POST['job'];
  $job = mysqli_real_escape_string($con, $job);
$internship = $_POST['internship'];
  $internship = mysqli_real_escape_string($con, $internship);
 $training = $_POST['training'];
  $training = mysqli_real_escape_string($con, $training);
  $project = $_POST['project'];
  $project = mysqli_real_escape_string($con, $project);
   $skills = $_POST['skills'];
  $skills = mysqli_real_escape_string($con, $skills);
  

  $query = "SELECT * from resume WHERE email='$email'";
  $result = mysqli_query($con, $query) or die(mysqli_error($con));
  $num = mysqli_num_rows($result);
  if ($num != 0) {
    echo "Email Already Exists";
   
  } else {
    $query = "INSERT INTO resume (name, email, mobile, city, degree, stream, endYear, degreeStatus, collegeName, cgpa, job, internship, training, project, skills )
     VALUES ('" . $name . "','" . $email . "','" . $mobile . "','" . $city . "','" . $degree . "','" . $stream . "','" . $endYear . "','" . $degreeStatus . "','" . $collegeName . "','" . $cgpa . "','" . $job . "','" . $internship . "','" . $training . "','" . $project . "','" . $skills . "')";
   
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
  }

  
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];
      $city = $_POST['city'];
      $degree = $_POST['degree'];
      $stream = $_POST['stream'];
      $endYear = $_POST['endYear'];
      $degreeStatus = $_POST['degreeStatus'];
      $collegeName = $_POST['collegeName'];
      $cgpa = $_POST['cgpa'];
      $job = $_POST['job'];
      $internship = $_POST['internship'];
      $training = $_POST['training'];
      $project = $_POST['project'];
      $skills = $_POST['skills'];
  


  }
  require "fpdf/fpdf.php";
  $pdf = new FPDF();
  $pdf->AddPage();
  $pdf->setFont("Arial", "B", 18);                 
  $pdf->cell(0, 20, "{$name}", 1, 1, "C");           
  $pdf->cell(60, 10, "  name : ", 1, 0, "L");
  $pdf->cell(130, 10, "{$name}", 1, 1, "C");
  $pdf->cell(60, 10, "  email : ", 1, 0, "L");
  $pdf->cell(130, 10, "{$email}", 1, 1, "C");
  $pdf->cell(60, 10, "  city : ", 1, 0, "L");
  $pdf->cell(130, 10, "{$city}", 1, 1, "C");
  $pdf->cell(60, 10, "  degree : ", 1, 0, "L");
  $pdf->cell(130, 10, "{$degree}", 1, 1, "C");
  $pdf->cell(60, 10, "  stream : ", 1, 0, "L");
  $pdf->cell(130, 10, "{$stream}", 1, 1, "C");
  $pdf->cell(60, 10, "  endYear : ", 1, 0, "L");
  $pdf->cell(130, 10, "{$endYear}", 1, 1, "C");
  $pdf->cell(60, 10, "  degreeeStatus : ", 1, 0, "L");
  $pdf->cell(130, 10, "{$degreeStatus}", 1, 1, "C");
  $pdf->cell(60, 10, "  collegeName : ", 1, 0, "L");
  $pdf->cell(130, 10, "{$collegeName}", 1, 1, "C");
  $pdf->cell(60, 10, "  cgpa : ", 1, 0, "L");
  $pdf->cell(130, 10, "{$cgpa}", 1, 1, "C");
  $pdf->cell(60, 10, "  job : ", 1, 0, "L");
  $pdf->cell(130, 10, "{$job}", 1, 1, "C");
  $pdf->cell(60, 10, "  internship : ", 1, 0, "L");
  $pdf->cell(130, 10, "{$internship}", 1, 1, "C");
  $pdf->cell(60, 10, "  training : ", 1, 0, "L");
  $pdf->cell(130, 10, "{$training}", 1, 1, "C");
  $pdf->cell(60, 10, "  project : ", 1, 0, "L");
  $pdf->cell(130, 10, "{$project}", 1, 1, "C");
  $pdf->cell(60, 10, "  skills : ", 1, 0, "L");
  $pdf->cell(130, 10, "{$skills}", 1, 1, "C");
  $pdf->Output();


     
?>