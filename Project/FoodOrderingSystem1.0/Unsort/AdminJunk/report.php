<?php
include "connection.php";
require('../fpdf/fpdf.php');
$cutiID = $_GET['cutiID'];
$logo = "white.png";
$result = mysqli_query($link, "SELECT * FROM Cuti WHERE id='".$cutiID."' ");
$header = mysqli_query($link, "SELECT `COLUMN_NAME` 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='globalel_cuti' 
    AND `TABLE_NAME`='Cuti'");
while($row= mysqli_fetch_array($result, MYSQLI_BOTH))
{

    // $leave_type
    if($row['LType'] ==1) 
  {
    $leave_type= "Annual";
  }
  if($row['LType'] ==2) 
  {
    $leave_type="Maternity";
  }
  if($row['LType'] ==3) 
  {
    $leave_type= "Paternity ";
  }
  if($row['LType'] ==4) 
  {
    $leave_type= "Compassionate";
  }
  if($row['LType'] ==5) 
  {
    $leave_type="Medical";
  }
  if($row['LType'] ==7) 
  {
    $leave_type= "Replacement";
  }


  $description =$row['sebab'];

//   <option value="1">Half Day</option>
//   <option value="2">Full Day</option>
//   <option value="3">More than 1 day</option>
  $Ltime=$row['Ltime'];
  $total_day=$row['number_days'];



//   $leave_start;
//   $leave_end;
//   $apply_date;
//   $leave_date=;
$applydate = $row['datetimeReq'];
$dateapply= new DateTime($applydate);
$apply_date=$dateapply->format('d/m/Y'); 



$start_date = $row['Sdate'];
$end_date = $row['Edate'];
$date_from = new DateTime($start_date);
$date_to = new DateTime($end_date);
$leave_start=$date_from->format('d/m/Y'); 
$leave_end=$date_to->format('d/m/Y'); 

$halfday = $row['date'];
$halfdaydate = new DateTime($halfday);
$leave_date=$halfdaydate->format('d/m/Y'); 








    $result1 = mysqli_query($link, "select * from users where username = '".$row['sUsername']."'");
    $Crow= mysqli_fetch_array($result1, MYSQLI_BOTH);
    $resultMa = mysqli_query($link,"SELECT name FROM users WHERE dept='".$Crow['dept']."' AND type_user='Manager'");
    $manager = mysqli_fetch_array($resultMa, MYSQLI_BOTH);
    $man = $manager['name'];
    $pdf = new FPDF();
    $pdf->AddPage();


    $pdf->SetFont('Arial','',12);	
    $pdf->Image($logo, 5, 1, 50);
    $pdf->Image($logo, 5, 280, 50);
     $pdf->Cell(0,10,"",0,1,'C');
    
    // $pdf->Cell(50,10,"Cuti ID :   ",0,0);
    // $pdf->Cell(50,10,$row['id'],0,1,'L');
    
    // $pdf->Cell(50,10,"Nama Penuh :   ",0,0);
    // $pdf->Cell(50,10,$Crow['name'],0,1,'L');
    
    // $pdf->Cell(50,10,"No. Telefon :   ",0,0);
    // $pdf->Cell(50,10,$Crow['Hp'],0,1,'L');
    
    // $pdf->Cell(50,10,"Email :   ",0,0);
    // $pdf->Cell(50,10,$Crow['email'],0,1,'L');
    
    // $pdf->Cell(50,10,"Jabatan :   ",0,0);
    // $pdf->Cell(50,10,$Crow['dept'],0,1,'L');
    
    // $pdf->Cell(50,10,"Jenis Cuti :   ",0,0);
    // $pdf->Cell(50,10,$row['LType'],0,1,'L');
    
    // $pdf->Cell(50,10,"Sebab :   ",0,0);
    // $pdf->Cell(50,10,$row['sebab'],0,1,'L');
    
    // $pdf->Cell(50,10,"Nama Manager :   ",0,0);
    // $pdf->Cell(50,10,$man,0,1,'L');
    
    // $pdf->Cell(50,20,"Status    :", 0,0);
    
    // $x = $pdf->GetX();
    // $pdf->Cell(25,10,"Admin        : ", 0,0);
    // if($row['admin']==1){
    //     $pdf->SetTextColor(0,128,0);
    //     $pdf->Cell(50,10,"Diterima", 0,1);}
    // else{
    //     $pdf->SetTextColor(194,8,8);
    //     $pdf->Cell(50,10,"Dalam Proses", 0,1);}
    // $pdf->SetX($x);
    // $pdf->SetTextColor(0,0,0);
    // $pdf->Cell(25,10,"Manager    : ", 0,0);
    // if($row['management']==1){
    //     $pdf->SetTextColor(0,128,0);
    //     $pdf->Cell(50,10,"Diterima", 0,1);}
    // else{
    //     $pdf->SetTextColor(194,8,8);
    //     $pdf->Cell(50,10,"Dalam Proses", 0,1);}
    // $pdf->SetTextColor(0,0,0);  

    

    

$pdf->SetFont('Arial','B',12);
$pdf->SetFillColor(255,230,153);
$pdf->Cell(190,15,'STAFF LEAVE APPLICATION','LTRB', 1, 'C',1);
$pdf->Cell(190,5,'','LRTB', 1, 'C');
 
$pdf->SetFont('Arial','B',8);
$pdf->Cell(50,10,'APPLICATION NUMBER','LTB', 0, 'C');
$pdf->SetFont('Arial','',8);
$pdf->Cell(140,10,$row['id'],'LTRB', 0, 'C');
$pdf->Cell(0,10,'','', 1, 'C');

$pdf->SetFont('Arial','B',8);
$pdf->Cell(50,10,'EMPLOYEE NAME','LTB', 0, 'C');
$pdf->SetFont('Arial','',8);
$pdf->Cell(140,10,$Crow['name'],'LTRB', 0, 'C');
$pdf->Cell(0,10,'','', 1, 'C');


$pdf->SetFont('Arial','B',8);
$pdf->Cell(50,10,'EMAIL','LTB', 0, 'C');
$pdf->SetFont('Arial','',8);
$pdf->Cell(140,10,$Crow['email'],'LTRB', 0, 'C');
$pdf->Cell(0,10,'','', 1, 'C');

$pdf->SetFont('Arial','B',8);
$pdf->Cell(50,10,'DEPARTMENT','LTBR', 0, 'C');
$pdf->SetFont('Arial','',8);
$pdf->Cell(50,10,$Crow['dept'],'LTBR', 0, 'C');
$pdf->SetFont('Arial','B',8);
$pdf->Cell(50,10,'PHONE NUMBER','LTBr', 0, 'C');
$pdf->SetFont('Arial','',8);
$pdf->Cell(40,10,$Crow['Hp'],'LTBR', 0, 'C');
$pdf->Cell(0,10,'','', 1, 'C');


$pdf->SetFont('Arial','B',8);
$pdf->Cell(50,10,'DATE APPLY','LTB', 0, 'C');
$pdf->SetFont('Arial','',8);
$pdf->Cell(140,10,$apply_date,'LTRB', 0, 'C');
$pdf->Cell(0,10,'','', 1, 'C');


if( $Ltime ==1 ){
    //halfday

    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(50,10,'LEAVE TYPE','LTBR', 0, 'C');
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(50,10,$leave_type.' (half day)','L', 0, 'C');
    $pdf->Cell(0,10,'','BR', 1, 'C');
    
    
    
    
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(50,10,'LEAVE DATE','LTBR', 0, 'C');
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(50,10,$leave_date,'LTB', 0, 'C');
    $pdf->Cell(0,10,'','LTBR', 1, 'C');
    
    }
    else if( $Ltime ==2){
        //full day

        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(50,10,'LEAVE TYPE','LTBR', 0, 'C');
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(50,10,$leave_type.' ','L', 0, 'C');
        $pdf->Cell(0,10,'','BR', 1, 'C');
        
        
        
        
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(50,10,'LEAVE DATE','LTBR', 0, 'C');
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(50,10,$leave_date,'LTB', 0, 'C');
        $pdf->Cell(0,10,'','LTBR', 1, 'C');
        
        }
    else
    {
        //more than 1 day
    
    
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(50,10,'LEAVE TYPE','LTB', 0, 'C');
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(140,10,$leave_type,'LTRB', 0, 'C');
    $pdf->Cell(0,10,'','', 1, 'C');
    
    
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(50,10,'LEAVE FROM','LTBR', 0, 'C');
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(50,10,$leave_start,'LTBR', 0, 'C');
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(50,10,'LEAVE TO','LTBR', 0, 'C');
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(40,10,$leave_end,'LTBR', 0, 'C');
    $pdf->Cell(0,10,'','L', 1, 'C');
    
    }
    //DAYS
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(50,10,'DAY(S)','LTB', 0, 'C');
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(140,10,$total_day,'LTRB', 0, 'C');
    $pdf->Cell(0,10,'','', 1, 'C');


// $pdf->SetFont('Arial','B',8);
// $pdf->Cell(50,10,'LEAVE TYPE','LTB', 0, 'C');
// $pdf->SetFont('Arial','',8);
// $pdf->Cell(140,10,$leave_type,'LTRB', 0, 'C');
// $pdf->Cell(0,10,'','', 1, 'C');


$pdf->SetFont('Arial','B',8);
$pdf->Cell(50,10,'REASON','LTB', 0, 'C');
$pdf->SetFont('Arial','',8);
$pdf->Cell(140,10,$description,'LTRB', 0, 'C');
$pdf->Cell(0,10,'','', 1, 'C');







$pdf->SetFont('Arial','B',8);
$pdf->Cell(50,10,'MANAGER NAME','LTB', 0, 'C');
$pdf->SetFont('Arial','',8);
$pdf->Cell(140,10,$man,'LTRB', 0, 'C');
$pdf->Cell(0,10,'','', 1, 'C');


$pdf->SetFont('Arial','B',10);
$pdf->Cell(190,10,'LEAVE APPLICATION STATUS','LRTB', 1, 'C');



$pdf->SetFont('Arial','B',8);
$pdf->Cell(50,10,'MANAGER','LTBR', 0, 'C');
// $pdf->SetFont('Arial','',8);

if($row['management']==2){
  
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(50,10,'Rejected','LTBR', 0, 'C');
}
else if($row['management']==1){
  
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(50,10,'Approved','LTBR', 0, 'C');
}
else{
   
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(50,10,'Processing','LTBR', 0, 'C');
}





$pdf->SetFont('Arial','B',8);
$pdf->Cell(50,10,'ADMIN','LTBR', 0, 'C');


if($row['admin']==2){
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(40,10,'Rejected','LTBR', 0, 'C');
}
else if($row['admin']==1){
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(40,10,'Approved','LTBR', 0, 'C');
}
else{
  
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(40,10,'Processing','LTBR', 0, 'C');
}




$pdf->Cell(0,10,'','L', 1, 'C');
 

// $pdf->SetFont('Arial','B',8);
// $pdf->Cell(50,10,'STATUS ADMIN','LTB', 0, 'C');
// $pdf->SetFont('Arial','',8);

// $x = $pdf->GetX();
// $pdf->Cell(140,10,'','LTRB', 0, 'C');
//  $pdf->Cell(25,10,"Admin        : ", 0,0);

//  // $pdf->Cell(50,20,"Status    :", 0,0);
// $x = $pdf->GetX();
// $pdf->Cell(25,10,"Admin        : ", 0,0);
// if($row['admin']==1){
//     $pdf->SetTextColor(0,128,0);
//     $pdf->Cell(50,10,"Diterima", 0,1);}
// else{
//     $pdf->SetTextColor(194,8,8);
//     $pdf->Cell(50,10,"Dalam Proses", 0,1);}
// $pdf->SetX($x);
// $pdf->SetTextColor(0,0,0);
// $pdf->Cell(25,10,"Manager    : ", 0,0);
// if($row['management']==1){
//     $pdf->SetTextColor(0,128,0);
//     $pdf->Cell(50,10,"Diterima", 0,1);}
// else{
//     $pdf->SetTextColor(194,8,8);
//     $pdf->Cell(50,10,"Dalam Proses", 0,1);}
// $pdf->SetTextColor(0,0,0); 
//
$pdf->Cell(0,10,'','', 1, 'C');


// $pdf->SetFont('Arial','B',8);
// $pdf->Cell(50,10,'APPROVAL DATE','LTB', 0, 'C');
// $pdf->SetFont('Arial','',8);
// $pdf->Cell(140,10,$approval_date ,'LTRB', 0, 'C');
// $pdf->Cell(0,10,'','', 1, 'C');

$pdf->SetFont('Arial','B',8);
//
    
    





    
    $fileName = $row['doku'];
}
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
        $pdf->Cell(0,30,"Attachment",0,1,'C');
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
    $pdfname = $cutiID . '_cuti.pdf';
    $pdf->Output('I',$pdfname);
?>