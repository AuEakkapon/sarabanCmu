<?php
//รับค่าจากหน้าที่ส่งตัวหนังสือมา
$Segment = $_POST['Segment'];
$number = $_POST['number'];
$date = $_POST['date'];
$story = $_POST['story'];
$who = $_POST['who'];
$subject = $_POST['subject'];
$wish = $_POST['wish'];
$summarize = $_POST['summarize'];
$name = $_POST['name'];
$rank = $_POST['rank'];

//ดึงautoloadมา ใช้กับ use PhpOffice\PhpWord
include 'vendor/autoload.php';
//ทดสอบปิดดูแล้วแต่โ้ดยังใช้ได้
use PhpOffice\PhpWord;

//setค่าที่ส่งมาลงใน word
$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('vendor/template.docx');
$templateProcessor->setValue('Segment', $Segment);
$templateProcessor->setValue('number', $number);
$templateProcessor->setValue('date', $date);
$templateProcessor->setValue('story', $story);
$templateProcessor->setValue('who', $who);
$templateProcessor->setValue('subject', $subject);
$templateProcessor->setValue('wish', $wish);
$templateProcessor->setValue('summarize', $summarize);
$templateProcessor->setValue('name', $name);
$templateProcessor->setValue('rank', $rank);

//ตั้งชื่อไฟลล์และเซฟเป็นชื่อไฟล์
$filename = $number . '.docx';
$templateProcessor->saveAs($filename);


// โค้ดบางบรรทัด ไม่จำเป็นต้อใช้ก็ได้
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=' . $filename);
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header('Content-Length: ' . filesize($filename));
flush();
readfile($filename);
unlink($filename);
exit;