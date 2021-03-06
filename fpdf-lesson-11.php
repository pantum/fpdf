<?php
defined ( 'FPDF_FONTPATH', 'font/' );
require 'fpdf.php';
$pdf = new FPDF ();
$pdf->AddFont ( 'angsana', '', 'angsa.php' );
$pdf->AddPage ();
$pdf->SetFont ( 'angsana', '', 14 );
$pdf->Text ( 10, 10, iconv ( 'UTF-8', 'cp874', 'ครั้งแรกที่ผมศึกษาตัว fpdf ผมมองมันไม่ค่อยจะออกว่าจะพิมพ์ข้อความลงไปตรงนั้นตรงนี้ได้อย่างไร มันเหมือนเอกสารเวิร์ดมั้ย ที่ถ้าหากเราจะให้ข้อความมันเริ่มจากบรรทัดที่ 3 เราจะต้องเคาะขึ้นบรรทัดใหม่ 3 ครั้งก่อน แล้วค่อยพิมพ์  แล้วถ้าเราไม่ได้พิมพ์ไปทีละบรรทัดล่ะ เช่น อยากให้มันพิมพ์ตรงนั้นนิด ตรงนี้หน่อย ทำไง หลังจากพยายามทำความเข้าใจอยู่พักนึง ผมจึงได้ข้อสรุปว่า การพิมพ์ข้อความลงไปในเอกสาร pdf ด้วย fpdf นั้น เหมือนการใช้กล่องข้อความของเอกสารเวิร์ดมากกว่า ที่มีข้อความอยู่ในกล่อง แล้วลากไปลากมาให้ข้อความนั้นแสดงในตำแหน่งที่ต้องการ' ) );
// รูปแบบคำสั่ง
// Text($x, $y, $txt)
// Text = เป็นคำสั่ง พิมข้อลงไปใน File PDF คำสั่ง Text เหมาะ กับข้อความสั้นๆ เพราะ ไม่ขึ้นบรรทัดใหม่
// $x = (ตัวเลข) พิกัดในแกน x แนวนอน
// $y = (ตัวเลข) พิกัดในแกน y แนวตั้ง
// $txt = (ตัวหนังสือ) ข้อความที่ต้องการพิมพ์

$pdf->Output ();
?>