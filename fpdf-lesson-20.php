<?php
require 'fpdf.php';
$pdf=new FPDF();
$pdf->AddPage();
$pdf->Cell(0,5,iconv('UTF-8', 'cp874', 'Print center text'),0,1,'c');
$pdf->Output('report.pdf','I')
//รูปแบบการใช้งาน
//Output($name='', $dest='')
//$name = กำหนดชื่อไฟล์ pdf พารามิเตอร์ตัวนี้จะถูกใช้งานก็ต่อเมื่อท่านสั่ง FPDF ให้ออกเอ้าพุตเป็นไฟล์บนเซิฟเวอร์
//$dest = กำหนดประเภทของเป้าหมาย
//	I: แสดงไฟล์ pdf ในเบราเซอร์เลย
//	D: แสดงไดอะลอกบ้อกให้ยูสเซอร์เลือกว่าจะเปิดหรือจะบันทึกไฟล์ pdf ลงในเครื่อง ชื่อของไฟล์จะใช้พารามิเตอร์ name
//	F: บันทึกเป็นไฟล์ไว้บนเซิฟเวอร์ (เผื่อท่านจะแนบไปกับอีเมล์ ไง)
//	S: คืนค่าเป็น String (ซึ่งท่านก็ควรจะมีตัวแปรมารับค่า)

?>