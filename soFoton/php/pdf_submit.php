<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $contact = $_POST['contact'];
        $city = $_POST['city'];
        $address = $_POST['address'];
    }
    require "fpdf/fpdf.php";
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->setFont("Arial", "B", 18);                 //setFont("fontFamily", "bold-B || italic-I", fontSize);
    $pdf->cell(0, 20, "{$name}", 1, 1, "C");            //cell(width, height, content, border, nextline=1 || append=0, align(C for center));
    $pdf->cell(60, 10, "  Name : ", 1, 0, "L");
    $pdf->cell(130, 10, "{$name}", 1, 1, "C");
    $pdf->cell(60, 10, "  Email : ", 1, 0, "L");
    $pdf->cell(130, 10, "{$email}", 1, 1, "C");
    $pdf->cell(60, 10, "  Password : ", 1, 0, "L");
    $pdf->cell(130, 10, "{$password}", 1, 1, "C");
    $pdf->cell(60, 10, "  Contact : ", 1, 0, "L");
    $pdf->cell(130, 10, "{$contact}", 1, 1, "C");
    $pdf->cell(60, 10, "  City : ", 1, 0, "L");
    $pdf->cell(130, 10, "{$city}", 1, 1, "C");
    $pdf->cell(60, 10, "  Address : ", 1, 0, "L");
    $pdf->cell(130, 10, "{$address}", 1, 1, "C");
    $pdf->Output();
?>