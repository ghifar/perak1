<?php

require('C:\xampp\htdocs\Laporan-pdf\fpdf.php');
     
class PDF extends FPDF
{
        //Page header

    
    function Header()
    {
            //Logo
        $this->Image('Logo TelkomUniv L.png',17,9,59.4,20);
        $this->Image('Side Kanan.png',203,0,7,297);
        $this->Image('Side Kiri.png',7,40,3,220);
        //buat garis horisontal
        // $this->Line(10,37,200,37);
    }
     
        //Page Content
    function Content()
    {
        $this->SetFont('Helvetica','B',20);
        for ($i=0; $i <6 ; $i++) { 
            $this->Cell(105);
            $this->Cell(30,5,'',0,0,'C');
            $this->Ln();
        }
        $this->Cell(80);
        $this->Cell(30,9,'LAPORAN KEUANGAN',0,0,'C');
        $this->Ln();
        $this->SetFont('Helvetica','',11);
        $this->Cell(80);
        $this->Cell(30,6,'Nomor: ',0,0,'C');
        $this->Ln();
        for ($i=0; $i <2 ; $i++) { 
            $this->Cell(105);
            $this->Cell(30,5,'',0,0,'C');
            $this->Ln();
        }
        $this->SetFont('Helvetica','',11);
        $this->Cell(10);
        $this->Cell(30,7,'Tanggal: ',0,0,'L');
        $this->Ln();
        $this->Cell(10);
        $this->Cell(30,7,'Jenis: ',0,0,'L');
        $this->Ln();

         $this->SetFont('Times','',12);
         // for($i=1; $i<=40; $i++)
         //     $this->Cell(0,10,'Laporan Mahasiswa '.$i,0,1);
    }
     
        //Page footer
    function Footer()
    {
        $this->Image('Alamat TelU.png',17,270,82.8,18.6);


        //     //atur posisi 1.5 cm dari bawah
        // $this->SetY(-15);
        //     //buat garis horizontal
        // $this->Line(10,$this->GetY(),200,$this->GetY());
        //     //Arial italic 9
        // $this->SetFont('Arial','I',9);
        //     //nomor halaman
        // $this->Cell(0,10,'Halaman '.$this->PageNo().' dari {nb}',0,0,'R');
    }
}


     
//contoh pemanggilan class
//Select the Products you want to show in your PDF file
$g=mysqli_connect('localhost','root','');
mysqli_select_db($g,'perak');
$result=mysqli_query($g,"select * from transaksi_pembelian");
$number_of_products = mysqli_num_rows($result);

//Initialize the 3 columns and the total
$column_nama = "";
$column_nama_barang = "";
$column_tanggal = "";

//For each row, add the field to the corresponding column
while($row = mysqli_fetch_array($result))
{
    $nama = $row["nama"];
    $tanggal = $row["tanggal"];
    $nama_barang = $row["nama_barang"];

    $column_nama = $column_nama.$nama."\n";
    $column_tanggal = $column_tanggal.$tanggal."\n";
    $column_nama_barang=$column_nama_barang.$nama_barang."\n";

    //Sum all the Prices (TOTAL)
}
mysqli_close($g);

//Convert the Total Price to a number with (.) for thousands, and (,) for decimals.

//Create a new PDF file
$pdf = new PDF('P', 'mm', array(210, 297));
$pdf->SetLineWidth(0.5);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Content();

//Fields Name position
$Y_Fields_Name_position = 95;
//Table position, under Fields Name
$Y_Table_Position = 100;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(232,232,232);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',12);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(45);
$pdf->Cell(100,6,'Nama Transaksi',1,0,'L',1);
$pdf->SetX(80);
$pdf->Cell(100,6,'Tanggal Transaksi',1,0,'L',1);
$pdf->SetX(135);
$pdf->Cell(50,6,'Nama Barang',1,0,'L',1);
$pdf->SetX(135);
    

//Now show the 3 columns
$pdf->SetFont('Arial','',12);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(45);
$pdf->MultiCell(100,6,$column_nama,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(80);
$pdf->MultiCell(100,6,$column_tanggal,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(135);
$pdf->MultiCell(50,6,$column_nama_barang,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(135);
// $pdf->SetX(135);
// $pdf->MultiCell(30,6,'$ '.$total,1,'R');

//Create lines (boxes) for each ROW (Product)
//If you don't use the following code, you don't create the lines separating each row
$i = 0;
$pdf->SetY($Y_Table_Position);
while ($i < $number_of_products)
{
    $pdf->SetX(45);
    $pdf->MultiCell(120,6,'',1);
    $i = $i +1;
}
$pdf->Output('Laporan Keuangan_PERAK.pdf','I');

// mysql_connect('server','login','password');
// mysql_select_db('db');
// $pdf = new PDF('P', 'mm', array(210, 297));
// $pdf->SetLineWidth(0.5);
// $pdf->AliasNbPages();
// $pdf->AddPage();
// $pdf->Content();
// $pdf->Output('Laporan Keuangan_PERAK.pdf','I');
?>