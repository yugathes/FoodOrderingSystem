<?php
include "connection.php";
require('../fpdf/fpdf.php');
$userID = $_POST['usrID'];
$month = $_POST['month'];
//ECHO '$month'.$month;
$year = $_POST['year'];
//ECHO '$year'.$year;
$logo = "white.png";


if($userID  =="all"){

    $staff="All Staff";

    }

    else 
    {

        $sqlquery="SELECT * FROM users WHERE usrID='".$userID."'";
        // echo $sqlquery;
        $result = mysqli_query($link, $sqlquery);
        // Return the number of rows in result set
        $rowcount=mysqli_num_rows($result);
        $row= mysqli_fetch_array($result, MYSQLI_BOTH);
        // printf("Result set has %d rows.\n",$rowcount);
        if($rowcount >0 ){
           $staff= $row['name'];
        }else
        {
         $staff="";

         }


        
        

    }


// $username = $row['username'];
//echo '$username'.$username;
// $string = "%%%%-".$month."%%";
// echo "string".$string ;

if ($month == 01) {
    $mnth='January';
} else if ($month == 02) {
    $mnth='February';
} else if ($month == 03) {
    $mnth= 'March';
} else if ($month == 04) {
    $mnth= 'April';
} else if ($month == 05) {
    $mnth= 'May';
} else if ($month == 06) {
    $mnth='June';
} else if ($month == 07) {
    $mnth='July';
} else if ($month == '08') {
    $mnth= 'August';
} else if ($month == '09') {
    $mnth='September';
} else if ($month == 10) {
    $mnth= 'October';
} else if ($month == 11) {
    $mnth='November';
} else {
    $mnth= 'December';
}






if($userID  =="all"){
    
$where = "where '1'='1' ";
      
    }
    else {
        $where = "where '1'='1'";

        $userID = $_POST['usrID'];

        $where=$where." AND Cuti.usrID = '".$userID ."'  ";
        
     
    }
 
// $sql="select users.name,SUM( CASE WHEN (Cuti.LType = '1') THEN Cuti.number_days ELSE NULL END ) AS annual, SUM( CASE WHEN (Cuti.LType = '5') 
// THEN Cuti.number_days ELSE NULL END ) AS medical, 
// SUM( CASE WHEN (Cuti.LType = '7') THEN Cuti.number_days ELSE NULL END ) AS replacement ,
//  Cuti.doku
// from Cuti inner join users on users.usrID = Cuti.usrID 
//  " . $where . " AND Cuti.status = '2' AND  (YEAR(date(Cuti.date))=$year AND MONTH(date(Cuti.date))=$month ) OR (YEAR(date(Cuti.Sdate))=$year AND MONTH(date(Cuti.Sdate))=$month  ) 
// GROUP BY users.usrID";
$sql="select users.name,SUM( CASE WHEN (Cuti.LType = '1') THEN Cuti.number_days ELSE NULL END ) AS annual, SUM( CASE WHEN (Cuti.LType = '5') 
THEN Cuti.number_days ELSE NULL END ) AS medical, 
SUM( CASE WHEN (Cuti.LType = '7') THEN Cuti.number_days ELSE NULL END ) AS replacement ,
 Cuti.doku
from Cuti inner join users on users.usrID = Cuti.usrID 
 " . $where . " AND Cuti.status = '2' AND  (YEAR(date(Cuti.Sdate))=$year AND MONTH(date(Cuti.Sdate))=$month  ) 
GROUP BY users.usrID";

//  echo $sql;
$result1 = mysqli_query($link, $sql);
$rowcount=mysqli_num_rows($result1);


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);	
$pdf->Image($logo, 5, 1, 50);
$pdf->Image($logo, 5, 280, 50);
$pdf->Cell(0,30,"Monthly Leave Report",0,1,'C');

$pdf->SetFont('Arial','',12);
$pdf->Cell(50,10,"Staff :   ",0,0);
$pdf->Cell(50,10,$staff,0,1,'L');

$pdf->SetFont('Arial','',12);
$pdf->Cell(50,10,"Month :   ",0,0);
$pdf->Cell(50,10, $mnth,0,1,'L');

$pdf->SetFont('Arial','',12);
$pdf->Cell(50,10,"Year :   ",0,0);
$pdf->Cell(50,10,$year ,0,1,'L');

$pdf->Cell(0,10,'','', 1, 'C');

$pdf->SetFont('Arial','B',8);
$pdf->Cell(75,10,'EMPLOYEE NAME','LTBR', 0, 'C');

$pdf->SetFont('Arial','B',8);
$pdf->Cell(40,10,'ANNUAL','LTBR', 0, 'C');

$pdf->SetFont('Arial','B',8);
$pdf->Cell(40,10,'MEDICAL','LTBR', 0, 'C');

$pdf->SetFont('Arial','B',8);
$pdf->Cell(40,10,'REPLACEMENT','LTBR', 0, 'C');


$pdf->Cell(0,10,'','', 1, 'C');



if($rowcount >0 ){




    //
while($Crow= mysqli_fetch_array($result1, MYSQLI_BOTH))
{
    $staff_name=$Crow['name'];
    $annual=$Crow['annual'];
    $medical=$Crow['medical'];
    $replacement=$Crow['replacement'];
     $fileName = $Crow['doku'];
    

$pdf->SetFont('Arial','',8);
$pdf->Cell(75,10,$staff_name,'LTBR', 0, 'C');

$pdf->SetFont('Arial','',8);
$pdf->Cell(40,10,$annual,'LTBR', 0, 'C');

$pdf->SetFont('Arial','',8);
$pdf->Cell(40,10,$medical,'LTBR', 0, 'C');

$pdf->SetFont('Arial','',8);
$pdf->Cell(40,10,$replacement,'LTBR', 0, 'C');


$pdf->Cell(0,10,'','', 1, 'C');
//



 $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
    $newfilename = '../client/dokumen/'.$fileName;
    $allowedfileExtensions = array('jpg', 'PNG', 'png');
    $pdfextension = array('pdf','PDF');
    if(in_array($fileExtension, $allowedfileExtensions))
    {   
        $pdf->AddPage();
        $pdf->Image($logo, 5, 1, 50);
        $pdf->Image($logo, 5, 280, 50);
        $pdf->Cell(0,30,"Lampiran",0,1,'C');
        $pdf->Image($newfilename, 20, 40, 150);
    }
    else if(in_array($fileExtension, $pdfextension))
    {
        $pdf->AddPage();
        $pdf->Image($logo, 5, 1, 50);
        $pdf->Image($logo, 5, 280, 50);
        $pdf->Cell(0,30,"Lampiran",0,1,'C');
        $pdf->Cell(50,10,"PDF File Link :",0,0);
        $pdflink = 'https://globalelite.com.my/cuti/admin/'.$newfilename;
        $pdf->SetFont('Arial','U',12);
        $pdf->SetTextColor(0,0,255);
        $pdf->Cell(50,10,$pdflink,0,0);
    }
 
}






}else
{
   
    $pdf->Cell(195,10,"--- NO RECORD AVAILABLE ---",'LTRB', 0, 'C');
    $pdf->Cell(0,10,'','', 1, 'C');
    


}




    
    // $pdfname = $userID  . '_cuti.pdf';
        $pdfname = $userID  . '_'.$month.'_ '.$year.'.pdf';
   
    $pdf->Output('I',$pdfname);
?>