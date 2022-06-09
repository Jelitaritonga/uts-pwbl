<?php 
date_default_timezone_set("Asia/Jakarta");
require('inc/fpdf/fpdf.php');
require('../admin/koneksi.php'); 

$id_user   = isset($_GET['id']) ? $_GET['id'] : NULL;
$id_detail   = isset($_GET['id2']) ? $_GET['id2'] : NULL;
//contruct pdf
$pdf = new FPDF('L','pt','A4');
$pdf -> SetTitle('NOTA PEMESANAN ANDA');
$pdf -> AliasNbPages();
$pdf -> SetTopMargin(30);
$pdf -> SetLeftMargin(20);
$pdf -> SetRightMargin(20);
$pdf -> SetAutoPageBreak(true, 50);

$pdf -> AddPage();
$pdf -> Image('inc/fpdf/logo.png',30,25,50);

$pdf -> Ln(14);
$pdf -> SetFont('Times','',14);
$pdf -> Cell(70);
$pdf -> Cell(500,20,'Rental MOBIL',0,0,'L');
$pdf -> Ln(14);
$pdf -> Cell(70);
$pdf -> SetFont('Times','I',9);
$pdf -> Cell(500,10,'Jalan Babakan Sirna',0,0,'L');
$pdf -> SetLineWidth(1);
$pdf -> Line(20,77,820,77);
$pdf -> SetLineWidth(1,5);
$pdf -> Line(20,79,820,79);

$pdf -> SetY(110);
$pdf -> SetFont('Times','BUI',16);
$pdf -> Cell(0,10,'NOTA Pemesanan '.$id_detail,0,0,'C');
$pdf -> Ln(25);

#$pdf -> SetX(20);
$pdf -> SetFont('Times','B',10);
#$pdf -> SetLineWidth(1,5);
#$pdf -> SetFillColor(255,255,189);
#$pdf -> Cell(20,15,"No",1,"LR","C",true);
//$pdf -> Cell(90,15,"Gambar",1,"LR","C",true);
$tampil=$koneksi->query("SELECT * FROM tbdetailsewa LEFT JOIN tbcostumer ON tbdetailsewa.kd_cs=tbcostumer.kd_cs LEFT JOIN tbsewa ON tbdetailsewa.kd_sewa=tbsewa.kd_sewa LEFT JOIN tbmobil ON tbsewa.no_polisi=tbmobil.no_polisi LEFT JOIN tbmerk ON tbmobil.kd_merk=tbmerk.kd_merk LEFT JOIN tbsopir ON tbdetailsewa.kd_sopir=tbsopir.kd_sopir WHERE tbdetailsewa.kd_cs='$id_user' AND tbdetailsewa.kd_detail = '$id_detail' ");
$no = 0;
$nilaiY = $pdf->GetY();
while ($row = $tampil->fetch_object()){
	$harga = $row->total_harga;
	$rupiah = number_format($harga,2,',','.');
	$date2 = date('d F Y', strtotime($row->tgl_sewa));
	$date3 = date('d F Y', strtotime($row->tgl_kembali));
	$tgl_sewa = date('l', strtotime($date2));
	$tgl_kembali = date('l', strtotime($date3));
	$hari_indo = array('Monday' => 'Senin',
		'Tuesday' => 'Selasa',
		'Wednesday' => 'Rabu',
		'Thursday' => 'Kamis',
		'Friday' => 'Jum`at',
		'Saturday' => 'Sabtu',
		'Sunday' => 'Minggu');

$pdf -> Cell(70);
$pdf -> Cell(150,20,"ID Pesanan              : ".$row->kd_detail,0,0,'L');
//$pdf -> Cell(120,15,"Jenis",1,"LR","C",true);
$pdf -> Ln(26);
$pdf -> Cell(70);
$pdf -> Cell(150,20,"Tanggal Sewa          : ".$hari_indo[$tgl_sewa]." ".$date2,0,0,'L');
$pdf -> Ln(26);
$pdf -> Cell(70);
$pdf -> Cell(150,20,"Tanggal Kembali    : ".$hari_indo[$tgl_kembali]." ".$date3,0,0,'L');
$pdf -> Ln(26);
$pdf -> Cell(70);
$pdf -> Cell(150,20,"No Polisi                   : ".$row->no_polisi,0,0,'L');
$pdf -> Ln(26);
$pdf -> Cell(70);
$pdf -> Cell(150,20,"Mobil                        : ".$row->merk_mobil.$row->jenis_mobil,0,0,'L');
$pdf -> Ln(26);
$pdf -> Cell(70);
$pdf -> Cell(150,20,"Sopir                         : ".$row->nama_sopir,0,0,'L');
$pdf -> Ln(26);
$pdf -> Cell(70);
$pdf -> Cell(150,20,"Total Harga             : Rp. ".$rupiah,0,0,'L');
$pdf -> Ln(26);
$pdf -> Cell(70);
$pdf -> Cell(150,20,"Keterangan              : ".$row->ket,0,0,'L');
$pdf -> Ln(26);
$pdf -> Cell(70);
$pdf -> Cell(150,20,"ID Pemesan              : ".$row->kd_cs,0,0,'L');
$pdf -> Ln(26);
$pdf -> Cell(70);
$pdf -> Cell(150,20,"Nama Pemesan        : ".$row->nama_cs,0,0,'L');

$pdf -> Ln();
$nilaiY = $pdf -> GetY();
}
$pdf -> Output('Nota Pemesanan-'.date('dFY').'.pdf','I');
function tgl_indo($tgl){
$tanggal = substr($tgl, 8,2);
$bulan = substr($tgl, 5,2);
$tahun = substr($tgl, 0,4);
return $tanggal.'-'.$bulan.'-'.$tahun;	
}
 ?>
