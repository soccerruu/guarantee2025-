<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE>แบบยืนยันและรับรองการปฏิบัติงานของสถานศึกษาในการดำเนินงานกองทุนเงินให้กู้ยืมเพื่อการศึกษา</TITLE>
<META http-equiv=Content-Type content="text/html; charset=windows-874">
<META NAME="Generator" CONTENT="EditPlus">
<META NAME="Author" CONTENT="">
<META NAME="Keywords" CONTENT="">
<META NAME="Description" CONTENT="">
<style type="text/css">

.btstyle {
	BORDER-TOP-WIDTH: 1px; BORDER-TOP-COLOR: #000000; BORDER-LEFT-WIDTH: 1px; BORDER-LEFT-COLOR: #000000; BORDER-BOTTOM-WIDTH: 1px; BORDER-BOTTOM-COLOR: #000000; BORDER-RIGHT-WIDTH: 1px; BORDER-RIGHT-COLOR: #000000;
	COLOR: #ffffff; FONT-SIZE: 14px; FONT-FAMILY: "MS Sans Serif"; BACKGROUND-COLOR: #6f4500;
}
.mystyle {
	BORDER-TOP-WIDTH: 1px; BORDER-TOP-COLOR: #000000; BORDER-LEFT-WIDTH: 1px; BORDER-LEFT-COLOR: #000000; BORDER-BOTTOM-WIDTH: 1px; BORDER-BOTTOM-COLOR: #000000; BORDER-RIGHT-WIDTH: 1px; BORDER-RIGHT-COLOR: #000000;
	COLOR: #663300; FONT-SIZE: 14px; FONT-FAMILY: "MS Sans Serif"; BACKGROUND-COLOR: #ffffff;
}
</style>


<script language="JavaScript"> 
function ok(){
			//alert("aaa");
			document.getElementById('ok1').disabled=false;
			//alert(document.mainteem.ok1.value);
			//alert(document.mainteem.ok1.value);
			//document.mainteem.submit();

}


function conf(object) {
if (confirm("ยืนยันการส่งข้อมูล(ไม่สามารถกลับมาแก้ไขได้อีก) และทำการพิมพ์เอกสารในหน้าต่อไปเพื่อส่งให้กับกองทุนฯ") ==true) {
return true;
}
return false;
}
</script>

 </HEAD>

 <BODY BGCOLOR="#C0C0C0">
<?php
include("config.inc.php") ;

?>

  <CENTER>

<?php 
			error_reporting(~E_NOTICE);
			$school_type=$_POST['school_type'];
	?>


<?php if($school_type=="1"){$school_type_name="รัฐบาล";} else {$school_type_name="เอกชน";}?>

<CENTER>

<FORM METHOD="POST" ACTION="fin.php" name="mainteem" onSubmit="return formCheck(this);">
<CENTER><CENTER><TABLE width="1040" style="border:1px solid #000000" cellSpacing=5 cellPadding=0  border="0" BGCOLOR="#FFFFFF">

<TR><TD>	
	
	<CENTER><?php  $_POST['sch_id'];?>
	<h3><br>แบบยืนยันและรับรองการปฏิบัติงานของสถานศึกษาในการดำเนินงาน<br><br>กองทุนเงินให้กู้ยืมเพื่อการศึกษา (กยศ.)</h3>

	<B>ชื่อสถานศึกษา : <FONT  COLOR="#FF0000"><?php echo $_POST['univ_name'];?></FONT></B> &nbsp;&nbsp;&nbsp;&nbsp;<B>จังหวัด : <FONT  COLOR="#FF0000"><?php echo $_POST['province'];?></FONT></B>&nbsp;&nbsp;&nbsp;&nbsp;<B>ประเภทสถานศึกษา : <FONT  COLOR="#FF0000"><?php echo $school_type_name;?></FONT></B></CENTER>
<br>
<HR>
</B></TD>
</TR>


<TR>
<TD>
&nbsp;&nbsp;&nbsp;&nbsp;<font size="" color="#330099"><B><u>ตอนที่ 1 ข้อมูลทั่วไปเกี่ยวกับผู้ตอบแบบสอบถาม</u></B></font><br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วัน/เดือน/ปี กรอกข้อมูล <B><?php $Y=date("Y")+543; echo date("d-m-"); echo $Y; ?></B>
<BR><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ชื่อ - นามสกุล ผู้ตอบแบบสอบถาม : <strong><?php echo $_POST['name']; ?></strong>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
ตำแหน่งของท่าน : <strong><?php echo $_POST['position']; ?></strong> 
<BR>
<BR>
</TD>
</TR>



<TR>
<TD align="LEFT">
&nbsp;&nbsp;&nbsp;&nbsp;<font size="" color="#330099"><B><u>ส่วนที่ 1 ข้อมูลทั่วไปของสถานศึกษา</u></B></font><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สังกัด : 
<input type="radio" name="op0" value='สพฐ.' <?php if($_POST['op0']=='สพฐ.'){  echo 'checked'; }else{ echo 'disabled';}?>> สพฐ.&nbsp;&nbsp;
<input type="radio" name="op0" value='สอศ.' <?php if($_POST['op0']=='สอศ.'){  echo 'checked'; }else{ echo 'disabled';}?>> สอศ.&nbsp;&nbsp;
<input type="radio" name="op0" value='สกอ.' <?php if($_POST['op0']=='สป.อว.'){  echo 'checked'; }else{ echo 'disabled';}?>> สป.อว.&nbsp;&nbsp;
<input type="radio" name="op0" value='กศน.' <?php if($_POST['op0']=='กศน.'){  echo 'checked'; }else{ echo 'disabled';}?>> กศน.&nbsp;&nbsp;
<input type="radio" name="op0" value='สช.' <?php if($_POST['op0']=='สช.'){  echo 'checked'; }else{ echo 'disabled';}?>> สช.&nbsp;&nbsp;
<input type="radio" name="op0" value='อปท.' <?php if($_POST['op0']=='อปท.'){  echo 'checked'; }else{ echo 'disabled';}?>> อปท.&nbsp;&nbsp;
<input type="radio" name="op0" value='อื่นๆ' <?php if($_POST['op0']=='อื่นๆ'){  echo 'checked'; }else{ echo 'disabled';}?>> อื่นๆ โปรดระบุ <u><?php echo $_POST['op0_comment']; ?></u><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ลักษณะการให้กู้ยืม : 
                                         <input type="checkbox" name="ckbox1" value='ลักษณะที่ 1' <?php if(isset($_POST['ckbox1'])=='ลักษณะที่ 1'){  echo 'checked'; }else{ echo 'disabled';}?>> ลักษณะที่ 1
&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="ckbox2" value='ลักษณะที่ 2' <?php if(isset($_POST['ckbox2'])=='ลักษณะที่ 2'){  echo 'checked'; }else{ echo 'disabled';}?>> ลักษณะที่ 2
&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="ckbox3" value='ลักษณะที่ 3' <?php if(isset($_POST['ckbox3'])=='ลักษณะที่ 3'){  echo 'checked'; }else{ echo 'disabled';}?>> ลักษณะที่ 3
&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="ckbox4" value='ลักษณะที่ 4' <?php if(isset($_POST['ckbox4'])=='ลักษณะที่ 4'){  echo 'checked'; }else{ echo 'disabled';}?>> ลักษณะที่ 4

<br><br></center>
</TD>
</TR>

<TR>
<TD>
&nbsp;&nbsp;&nbsp;&nbsp;<font size="" color="#330099"><B><u>ส่วนที่ 2 (เลือกตอบ 1 ข้อ) 50 ข้อๆ ละ 2 คะแนน (100 คะแนน)</u></B></font><br><br>

<center>ขอให้ท่านโปรดทำเครื่องหมาย &#9745 ในข้อที่สอดคล้องกับการปฏิบัติงานกองทุนของสถานศึกษา ดังนี้<br>
</center>
</TD>
</TR>


<TR>
<TD>
<center>
<br>
<table width="1000" border="1"  cellSpacing="0" cellPadding="5">
<tr ALIGN="LEFT" BGCOLOR="#ccffcc"><td><strong>หมวดที่ 1  พระราชบัญญัติกองทุนเงินให้กู้ยืมเพื่อการศึกษา พ.ศ. 2560 กฎ ระเบียบ และประกาศที่เกี่ยวข้องกับการกู้ยืม</strong></td>	<td width="50"><strong><center>เลือก</center></strong></td></tr>


<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">1. พระราชบัญญัติกองทุนเงินให้กู้ยืมเพื่อการศึกษา พ.ศ. 2560 มีวัตถุประสงค์อย่างไร</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สนับสนุนการขยายโอกาสและพัฒนาการศึกษาของประเทศ</td>	<td ALIGN="CENTER"><input type="radio" name="op1" Value="1" <?php if($_POST['op1']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ให้กู้ยืมกับนักเรียน นักศึกษาที่ขาดแคลนทุนทรัพย์ได้กู้ยืมเงิน</td>	<td ALIGN="CENTER"><input type="radio" name="op1" Value="2" <?php if($_POST['op1']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr> <td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เพื่อพัฒนาศักยภาพทางการศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op1" Value="3" <?php if($_POST['op1']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr> <td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สนับสนุนและส่งเสริมการศึกษาด้วยการให้เงินกู้ยืมเพื่อการศึกษาในลักษณะต่างๆ ตามที่กำหนดไว้ใน พ.ร.บ.กองทุน</td>	<td ALIGN="CENTER"><input type="radio" name="op1" Value="4" <?php if($_POST['op1']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>


<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">2.	 ข้อใด<u><strong>ไม่ใช่</strong></u>วัตถุประสงค์ ตาม พ.ร.บ.กองทุนเงินให้กู้ยืมเพื่อการศึกษา พ.ศ. 2560 กองทุนสนับสนุนและส่งเสริมการศึกษาด้วยการให้เงินกู้ยืมเพื่อการศึกษา<br />&nbsp;&nbsp;&nbsp;&nbsp;4 ลักษณะ</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เงินกู้ยืมเพื่อการศึกษาให้แก่นักเรียน นักศึกษาที่ศึกษาในทุกสาขาวิชา</td>	<td ALIGN="CENTER"><input type="radio" name="op2" Value="1" <?php if($_POST['op2']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เงินกู้ยืมเพื่อการศึกษาให้แก่นักเรียน หรือนักศึกษาที่ขาดแคลนทุนทรัพย์</td>	<td ALIGN="CENTER"><input type="radio" name="op2" Value="2" <?php if($_POST['op2']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr> <td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เงินกู้ยืมเพื่อการศึกษาให้แก่นักเรียนหรือนักศึกษาที่ศึกษาในสาขาวิชาที่เป็นความต้องการหลัก ซึ่งมีความชัดเจน <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ของการผลิตกำลังคนและมีความจำเป็นต่อการพัฒนาประเทศ</td>	<td ALIGN="CENTER"><input type="radio" name="op2" Value="3" <?php if($_POST['op2']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr> <td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เงินกู้ยืมเพื่อการศึกษาให้แก่นักเรียนหรือนักศึกษาที่เรียนดีเพื่อสร้างความเป็นเลิศ</td>	<td ALIGN="CENTER"><input type="radio" name="op2" Value="4" <?php if($_POST['op2']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>


<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">3.	ตาม พ.ร.บ.กองทุนเงินให้กู้ยืมเพื่อการศึกษา พ.ศ. 2560 ผู้กู้ยืมเงินมีหน้าที่ต้องปฏิบัติอย่างไร</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ให้ความยินยอมในขณะทำสัญญากู้ยืมเงิน เพื่อให้ผู้มีหน้าที่จ่ายเงินได้พึงประเมินตามมาตรา 40 (1) แห่งประมวล รัษฎากร หักเงินได้พึงประเมิน<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ของตนตามจำนวนที่กองทุนแจ้งให้ทราบเพื่อชำระเงินกู้ยืมเพื่อการศึกษาคืนกองทุน</td>	<td ALIGN="CENTER"><input type="radio" name="op3" Value="1" <?php if($_POST['op3']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- แจ้งสถานะการเป็นผู้กู้ยืมเงินต่อหัวหน้าหน่วยงานภาครัฐหรือเอกชนที่ผู้กู้ยืมทำงานด้วยภายในสามสิบวันนับแต่ วันที่เริ่มปฏิบัติงาน <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;และยินยอมให้หักเงินได้พึงประเมินของตนเพื่อดำเนินการตามมาตรา 51</td>	<td ALIGN="CENTER"><input type="radio" name="op3" Value="2" <?php if($_POST['op3']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr> <td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ยินยอมให้กองทุนเข้าถึงข้อมูลส่วนบุคคลของตนที่อยู่ในครอบครองของบุคคลอื่น รวมทั้งยินยอมให้กองทุน เปิดเผยข้อมูลเกี่ยวกับการกู้ยืมเงิน <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;และการชำระเงินคืนกองทุน</td>	<td ALIGN="CENTER"><input type="radio" name="op3" Value="3" <?php if($_POST['op3']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr> <td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ถูกทุกข้อ</td>	<td ALIGN="CENTER"><input type="radio" name="op3" Value="4" <?php if($_POST['op3']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>


<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">4. ตาม พ.ร.บ.กองทุนเงินให้กู้ยืมเพื่อการศึกษา พ.ศ. 2560 เงินกู้ยืมเพื่อการศึกษาหมายถึงข้อใด</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ค่าเล่าเรียน และค่าใช้จ่ายที่เกี่ยวเนื่องกับการศึกษา</td>				<td ALIGN="CENTER"><input type="radio" name="op4" Value="1" <?php if($_POST['op4']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ค่าเล่าเรียน ค่าใช้จ่ายที่เกี่ยวเนื่องกับการศึกษาและค่าครองชีพ</td>	<td ALIGN="CENTER"><input type="radio" name="op4" Value="2" <?php if($_POST['op4']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ค่าเล่าเรียน และค่าครองชีพ</td>												<td ALIGN="CENTER"><input type="radio" name="op4" Value="3" <?php if($_POST['op4']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ค่าเล่าเรียน และค่าหอพัก</td>													<td ALIGN="CENTER"><input type="radio" name="op4" Value="4" <?php if($_POST['op4']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>



<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">5. ข้อใดเป็นคุณสมบัติทั่วไปและลักษณะต้องห้ามของนักเรียนหรือนักศึกษาที่ขาดแคลนทุนทรัพย์</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- มีสัญชาติไทย</td>	<td ALIGN="CENTER"><input type="radio" name="op5" Value="1" <?php if($_POST['op5']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- มีรายได้ต่อครอบครัว ไม่เกิน 360,000 บาท/ปี</td>	<td ALIGN="CENTER"><input type="radio" name="op5" Value="2" <?php if($_POST['op5']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ไม่เคยเป็นผู้สำเร็จการศึกษาระดับปริญญาตรีในสาขาใดๆ มาก่อน</td>	<td ALIGN="CENTER"><input type="radio" name="op5" Value="3" <?php if($_POST['op5']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ถูกทุกข้อ</td>	<td ALIGN="CENTER"><input type="radio" name="op5" Value="4" <?php if($_POST['op5']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>


<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">6.	ข้อใดเป็นคุณสมบัติทั่วไปและลักษณะต้องห้ามของนักเรียนหรือนักศึกษาที่ศึกษาในสาขาวิชาที่เป็นความต้องการหลัก ซึ่งมีความชัดเจนของการผลิต<br />&nbsp;&nbsp;&nbsp;&nbsp;กำลังคนและมีความจำเป็นต่อการพัฒนาประเทศ</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ไม่เคยเป็นผู้สำเร็จการศึกษาระดับปริญญาตรีในสาขาใดๆ มาก่อน</td>	<td ALIGN="CENTER"><input type="radio" name="op6" Value="1" <?php if($_POST['op6']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เป็นผู้ที่เข้าศึกษาในระดับการศึกษาและหลักสูตร/ประเภทวิชาและสาขาวิชาเป็นไปตามประกาศที่คณะกรรมการกำหนด</td>	<td ALIGN="CENTER"><input type="radio" name="op6" Value="2" <?php if($_POST['op6']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ไม่เป็นบุคคลล้มละลาย</td>	<td ALIGN="CENTER"><input type="radio" name="op6" Value="3" <?php if($_POST['op6']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ถูกทุกข้อ</td>	<td ALIGN="CENTER"><input type="radio" name="op6" Value="4" <?php if($_POST['op6']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>



<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">7. ข้อใด<u><strong>มิใช</strong></u>่คุณสมบัติเฉพาะของนักเรียนหรือนักศึกษาที่ในสาขาวิชาขาดแคลนหรือสาขาวิชาที่มุ่งส่งเสริมเป็นพิเศษ</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เป็นผู้ที่ศึกษาในสาขาวิชาขาดแคลนหรือสาขาวิชาที่มุ่งส่งเสริมเป็นพิเศษ ตามประกาศคณะกรรมการกองทุนฯ</td>	<td ALIGN="CENTER"><input type="radio" name="op7" Value="1" <?php if($_POST['op7']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เป็นผู้ที่มีอายุไม่เกิน 35 ปีบริบูรณ์ ในปีการศึกษาที่ยื่นกู้คำขอกู้ยืมเงินกองทุนครั้งแรก</td>	<td ALIGN="CENTER"><input type="radio" name="op7" Value="2" <?php if($_POST['op7']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr> <td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เป็นผู้ที่เข้าศึกษาในระดับ ปวช. และหลักสูตร/ประเภทวิชาและสาขาวิชาเป็นไปตามประกาศที่คณะกรรมการกำหนด</td>	<td ALIGN="CENTER"><input type="radio" name="op7" Value="3" <?php if($_POST['op7']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr> <td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เป็นผู้ที่ทำประโยชน์ต่อสังคมหรือสาธารณะในระหว่างปีการศึกษาก่อนหน้าปีการศึกษาที่จะขอกู้ยืมเงิน</td>	<td ALIGN="CENTER"><input type="radio" name="op7" Value="4" <?php if($_POST['op7']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>


<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">8. ข้อใด<u><strong>มิใช่</strong></u>ลักษณะต้องห้ามของนักเรียนหรือนักศึกษาที่จะขอกู้ยืมเงินเพื่อการศึกษา</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เป็นผู้สำเร็จการศึกษาระดับปริญญาตรีในสาขาใดสาขาหนึ่งมาก่อน เว้นแต่จะได้กำหนดเป็นอย่างอื่นใน คุณสมบัติเฉพาะสำหรับการให้เงินกู้ยืม<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เพื่อการศึกษาลักษณะหนึ่งลักษณะใด</td>	<td ALIGN="CENTER"><input type="radio" name="op8" Value="1" <?php if($_POST['op8']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เป็นบุคคลล้มละลาย</td>	<td ALIGN="CENTER"><input type="radio" name="op8" Value="2" <?php if($_POST['op8']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เป็นผู้ที่เรียนดี มีความประพฤติดี</td>	<td ALIGN="CENTER"><input type="radio" name="op8" Value="3" <?php if($_POST['op8']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เป็นผู้ที่เป็นหรือเคยเป็นผู้ที่ผิดนัดชำระหนี้กับกองทุน เว้นแต่จะได้ชำระหนี้ดังกล่าวครบถ้วนแล้ว</td>	<td ALIGN="CENTER"><input type="radio" name="op8" Value="4" <?php if($_POST['op8']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>


<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">9. กรณีที่ผู้กู้ยืมเสียชีวิต ผู้บริหารสถานศึกษาต้องรายงานผ่านระบบ DSL ภายในกี่วัน</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- รายงานทันทีที่ทราบ</td>	<td ALIGN="CENTER"><input type="radio" name="op9" Value="1" <?php if($_POST['op9']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 7 วัน</td>	<td ALIGN="CENTER"><input type="radio" name="op9" Value="2" <?php if($_POST['op9']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 15 วัน</td>	<td ALIGN="CENTER"><input type="radio" name="op9" Value="3" <?php if($_POST['op9']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 30 วัน</td>	<td ALIGN="CENTER"><input type="radio" name="op9" Value="4" <?php if($_POST['op9']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>


<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">10. กรณีที่สถานศึกษาตรวจสอบแล้วพบว่าผู้กู้ยืมเงิน<u><strong>ไม่ได้ลงทะเบียนเรียน</strong></u> สถานศึกษาต้องรายงานผ่านระบบ DSL ภายในกี่วัน</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- รายงานทันทีที่ทราบ</td>	<td ALIGN="CENTER"><input type="radio" name="op10" Value="1" <?php if($_POST['op10']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 15 วัน</td>	<td ALIGN="CENTER"><input type="radio" name="op10" Value="2" <?php if($_POST['op10']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 30 วัน</td>	<td ALIGN="CENTER"><input type="radio" name="op10" Value="3" <?php if($_POST['op10']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 45 วัน</td>	<td ALIGN="CENTER"><input type="radio" name="op10" Value="4" <?php if($_POST['op10']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
</table>
<br /><br />


<table width="1000" border="1"  cellSpacing="0" cellPadding="5">
<tr ALIGN="LEFT" BGCOLOR="#ccffcc"><td><strong>หมวดที่ 2  การลงทะเบียนเข้าใช้งาน และการบริหารจัดการสิทธิ์ของผู้ใช้งานในระบบ DSL ของสถานศึกษา</strong></td>	<td width="50"><strong><center>เลือก</center></strong></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">11. ผู้ใช้งานระบบ DSL สามารถลงทะเบียนเข้าใช้งานระบบได้โดยใช้ข้อมูลใดในการลงทะเบียน</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ลงทะเบียนด้วย E-mail</td>							<td ALIGN="CENTER"><input type="radio" name="op11" Value="1" <?php if($_POST['op11']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ลงทะเบียนด้วยเลขบัตรประจำตัวประชาชน</td>	<td ALIGN="CENTER"><input type="radio" name="op11" Value="2" <?php if($_POST['op11']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ลงทะเบียนด้วยบัญชีเดียวกับ Facebook</td>		<td ALIGN="CENTER"><input type="radio" name="op11" Value="3" <?php if($_POST['op11']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ลงทะเบียนด้วยรหัสสถานศึกษา</td>					<td ALIGN="CENTER"><input type="radio" name="op11" Value="4" <?php if($_POST['op11']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">12. การใช้งานระบบ DSL สามารถเข้าใช้งานผ่านช่องทางใดได้บ้าง</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เว็บไซต์กองทุน  และ Facebook</td>						<td ALIGN="CENTER"><input type="radio" name="op12" Value="1" <?php if($_POST['op12']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เว็บไซต์กองทุน และ แอปพลิเคชั่น กยศ.Connect</td>	<td ALIGN="CENTER"><input type="radio" name="op12" Value="2" <?php if($_POST['op12']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- Facebook  และ Line@กยศ.สถานศึกษา</td>			<td ALIGN="CENTER"><input type="radio" name="op12" Value="3" <?php if($_POST['op12']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เว็บไซต์ของสถานศึกษา และ Line@กยศ.</td>			<td ALIGN="CENTER"><input type="radio" name="op12" Value="4" <?php if($_POST['op12']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">13. สถานศึกษาต้องกำหนดสิทธิ์สำหรับผู้ใช้งานระบบ DSL ใดบ้าง</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้ดูแลระบบ,ผู้จัดการสิทธิ์สูงสุด และผู้ทำรายการ</td>			<td ALIGN="CENTER"><input type="radio" name="op13" Value="1" <?php if($_POST['op13']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้จัดการสิทธิ์สูงสุด,ผู้ทำรายการ และผู้ตรวจสอบรายการ</td>	<td ALIGN="CENTER"><input type="radio" name="op13" Value="2" <?php if($_POST['op13']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้จัดการสิทธิ์สูงสุด ผู้ตรวจสอบรายการ และผู้ดูแลระบบ</td>	<td ALIGN="CENTER"><input type="radio" name="op13" Value="3" <?php if($_POST['op13']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้ดูแลระบบ,ผู้ทำรายการ และผู้ตรวจสอบรายการ</td>			<td ALIGN="CENTER"><input type="radio" name="op13" Value="4" <?php if($_POST['op13']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">14. การกำหนดสิทธิ์การใช้งานในระบบ DSL ผู้ใช้งานใดที่ไม่สามารถเป็นบุคคลเดียวกันได้</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้ดูแลระบบ และผู้ทำรายการ</td>					<td ALIGN="CENTER"><input type="radio" name="op14" Value="1" <?php if($_POST['op14']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้ทำรายการ และผู้ตรวจสอบรายการ</td>			<td ALIGN="CENTER"><input type="radio" name="op14" Value="2" <?php if($_POST['op14']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้จัดการสิทธิ์สูงสุด และผู้ตรวจสอบรายการ</td>	<td ALIGN="CENTER"><input type="radio" name="op14" Value="3" <?php if($_POST['op14']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้ดูแลระบบ และผู้ตรวจสอบรายการ</td>			<td ALIGN="CENTER"><input type="radio" name="op14" Value="4" <?php if($_POST['op14']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">15. กรณีผู้จัดการสิทธิ์สูงสุด (Superuser)  ลืมรหัสผ่าน สถานศึกษาต้องทำอย่างไร</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- รีเซ็ตรหัสผ่านด้วยตนเอง</td>	<td ALIGN="CENTER"><input type="radio" name="op15" Value="1" <?php if($_POST['op15']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สร้าง User ใหม่</td>				<td ALIGN="CENTER"><input type="radio" name="op15" Value="2" <?php if($_POST['op15']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ติดต่อเจ้าหน้าที่กองทุน</td>	<td ALIGN="CENTER"><input type="radio" name="op15" Value="3" <?php if($_POST['op15']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ติดต่อเจ้าหน้าที่ธนาคาร</td>	<td ALIGN="CENTER"><input type="radio" name="op15" Value="4" <?php if($_POST['op15']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">16. สถานศึกษาต้องใช้รหัสผู้ใช้งานใดเพื่อแก้ไขข้อมูลการติดต่อสถานศึกษา</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้ทำรายการ (Maker)</td>	<td ALIGN="CENTER"><input type="radio" name="op16" Value="1" <?php if($_POST['op16']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้ตรวจสอบรายการ (Checker)</td>					<td ALIGN="CENTER"><input type="radio" name="op16" Value="2" <?php if($_POST['op16']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้จัดการสิทธิ์สูงสุด (Superuser)</td>		<td ALIGN="CENTER"><input type="radio" name="op16" Value="3" <?php if($_POST['op16']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ถูกทุกข้อ</td>									<td ALIGN="CENTER"><input type="radio" name="op16" Value="4" <?php if($_POST['op16']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">17. การเตรียมการให้กู้ยืมโดยสถานศึกษารายการใดมิใช่สิทธิ์ของผู้ทำรายการ (Maker)</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- บันทึกปฏิทินการศึกษา</td>								<td ALIGN="CENTER"><input type="radio" name="op17" Value="1" <?php if($_POST['op17']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- บันทึกค่าใช้จ่ายตามหลักสูตร</td>						<td ALIGN="CENTER"><input type="radio" name="op17" Value="2" <?php if($_POST['op17']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- รายงานสถานภาพการศึกษาของผู้กู้ยืม</td>			<td ALIGN="CENTER"><input type="radio" name="op17" Value="3" <?php if($_POST['op17']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- บันทึกค่าใช้จ่ายตามที่ผู้กู้ยืมเงินลงทะเบียนจริง</td>	<td ALIGN="CENTER"><input type="radio" name="op17" Value="4" <?php if($_POST['op17']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">18. การเตรียมการให้กู้ยืมโดยสถานศึกษารายการใดที่ต้องทำการบันทึกข้อมูลโดยสิทธิ์ของผู้ทำรายการ (Maker)</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- บันทึกค่าใช้จ่ายตามที่ผู้กู้ยืมเงินลงทะเบียนจริง</td>		<td ALIGN="CENTER"><input type="radio" name="op18" Value="1" <?php if($_POST['op18']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ยืนยันและแก้ไขข้อมูลการติดต่อของสถานศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op18" Value="2" <?php if($_POST['op18']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- บันทึกค่าใช้จ่ายตามหลักสูตร</td>							<td ALIGN="CENTER"><input type="radio" name="op18" Value="3" <?php if($_POST['op18']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ตรวจสอบคำขอกู้ยืมเงิน</td>									<td ALIGN="CENTER"><input type="radio" name="op18" Value="4" <?php if($_POST['op18']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">19. สถานศึกษาต้องใช้รหัสผู้ใช้งานใดเพื่อบันทึกรายงานสถานภาพการศึกษาของผู้กู้ยืมเงิน</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้จัดการสิทธิ์สูงสุด (Superuser)</td>					<td ALIGN="CENTER"><input type="radio" name="op19" Value="1" <?php if($_POST['op19']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้ทำรายการ (Maker)</td>	<td ALIGN="CENTER"><input type="radio" name="op19" Value="2" <?php if($_POST['op19']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้ตรวจสอบรายการ (Checker)</td>		<td ALIGN="CENTER"><input type="radio" name="op19" Value="3" <?php if($_POST['op19']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ถูกทุกข้อ</td>									<td ALIGN="CENTER"><input type="radio" name="op19" Value="4" <?php if($_POST['op19']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">20. การบันทึกค่าใช้จ่ายตามที่ผู้กู้ยืมเงินลงทะเบียนจริงในระบบ DSL ต้องใช้รหัสผู้ใช้งานใด</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้จัดการสิทธิ์สูงสุด (Superuser)</td>	<td ALIGN="CENTER"><input type="radio" name="op20" Value="1" <?php if($_POST['op20']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้ทำรายการ (Maker)</td>					<td ALIGN="CENTER"><input type="radio" name="op20" Value="2" <?php if($_POST['op20']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้ดูแลระบบ (Admin)</td>					<td ALIGN="CENTER"><input type="radio" name="op20" Value="3" <?php if($_POST['op20']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้ตรวจสอบรายการ (Checker)</td>		<td ALIGN="CENTER"><input type="radio" name="op20" Value="4" <?php if($_POST['op20']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
</table>
<br /><br />


<table width="1000" border="1"  cellSpacing="0" cellPadding="5">
<tr ALIGN="LEFT" BGCOLOR="#ccffcc"><td><strong>หมวดที่ 3  การเตรียมการให้กู้ยืม และการรายงานสถานภาพการศึกษา</strong></td>	<td width="50"><strong><center>เลือก</center></strong></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">21. การบันทึกปฏิทินการศึกษา และค่าใช้จ่ายตามหลักสูตรสถานศึกษาสามารถบันทึกในระบบ DSL ได้เมื่อใด</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ก่อนการให้กู้ยืมประจำปีการศึกษา</td>			<td ALIGN="CENTER"><input type="radio" name="op21" Value="1" <?php if($_POST['op21']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ระหว่างการให้กู้ยืมประจำปีการศึกษา</td>		<td ALIGN="CENTER"><input type="radio" name="op21" Value="2" <?php if($_POST['op21']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- หลังการให้กู้ยืมประจำปีการศึกษา</td>			<td ALIGN="CENTER"><input type="radio" name="op21" Value="3" <?php if($_POST['op21']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ตามกำหนดการให้กู้ยืมประจำปีการศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op21" Value="4" <?php if($_POST['op21']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">22. สถานศึกษาระดับใดที่ต้องดำเนินการบันทึกปฏิทินการศึกษา</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ระดับมัธยมศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op22" Value="1" <?php if($_POST['op22']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ระดับอาชีวศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op22" Value="2" <?php if($_POST['op22']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ระดับอุดมศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op22" Value="3" <?php if($_POST['op22']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ถูกทุกข้อ</td>				<td ALIGN="CENTER"><input type="radio" name="op22" Value="4" <?php if($_POST['op22']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">23. กรณีที่กองทุนไม่มีผลการประเมินคุณภาพภายในของสถานศึกษาหรือมีผลประเมินแต่ไม่ผ่านเกณฑ์ที่กองทุนกำหนด <br />&nbsp;&nbsp;&nbsp;&nbsp;สถานศึกษาจะสามารถให้กู้ยืมกับผู้กู้ยืมประเภทใดได้บ้าง</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- รายใหม่ และรายเก่าเปลี่ยนระดับการศึกษา</td>				<td ALIGN="CENTER"><input type="radio" name="op23" Value="1" <?php if($_POST['op23']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- รายใหม่  และรายเก่าเลื่อนชั้นปี</td>								<td ALIGN="CENTER"><input type="radio" name="op23" Value="2" <?php if($_POST['op23']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- รายเก่าเปลี่ยนระดับการศึกษา และรายเก่าเลื่อนชั้นปี</td>	<td ALIGN="CENTER"><input type="radio" name="op23" Value="3" <?php if($_POST['op23']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เฉพาะรายเก่าเลื่อนชั้นปีเท่านั้น</td>								<td ALIGN="CENTER"><input type="radio" name="op23" Value="4" <?php if($_POST['op23']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">24. หลังจากที่สถานศึกษาบันทึกค่าใช้จ่ายตามหลักสูตรเรียบร้อยแล้ว ขั้นตอนต่อไปสถานศึกษาต้องดำเนินการอย่างไร</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- อนุมัติค่าใช้จ่ายตามหลักสูตรโดยผู้ทำรายการ (Maker)</td>					<td ALIGN="CENTER"><input type="radio" name="op24" Value="1" <?php if($_POST['op24']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- อนุมัติค่าใช้จ่ายตามหลักสูตรโดยผู้ตรวจสอบรายการ (Checker)</td>		<td ALIGN="CENTER"><input type="radio" name="op24" Value="2" <?php if($_POST['op24']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- อนุมัติค่าใช้จ่ายตามหลักสูตรโดยผู้จัดการสิทธิ์สูงสุด (Superuser)</td>	<td ALIGN="CENTER"><input type="radio" name="op24" Value="3" <?php if($_POST['op24']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ถูกทุกข้อ</td>																				<td ALIGN="CENTER"><input type="radio" name="op24" Value="4" <?php if($_POST['op24']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">25. สถานศึกษาต้องรายงานสถานภาพการศึกษากรณีใดบ้าง</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สำเร็จการศึกษา</td>					<td ALIGN="CENTER"><input type="radio" name="op25" Value="1" <?php if($_POST['op25']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ศึกษาต่อ</td>							<td ALIGN="CENTER"><input type="radio" name="op25" Value="2" <?php if($_POST['op25']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ลาออก/พ้นสภาพการศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op25" Value="3" <?php if($_POST['op25']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ถูกทุกข้อ</td>							<td ALIGN="CENTER"><input type="radio" name="op25" Value="4" <?php if($_POST['op25']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
</table>
<br /><br />


<table width="1000" border="1"  cellSpacing="0" cellPadding="5">
<tr ALIGN="LEFT" BGCOLOR="#ccffcc"><td><strong>หมวด 4 การยื่นคำขอกู้ยืม - การคืนเงิน</strong></td>	<td width="50"><strong><center>เลือก</center></strong></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">26. ขั้นตอนการให้กู้ยืมเงินผ่านระบบ DSL มีทั้งหมดกี่ขั้นตอน</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 3 ขั้นตอน</td>	<td ALIGN="CENTER"><input type="radio" name="op26" Value="1" <?php if($_POST['op26']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 5 ขั้นตอน</td>	<td ALIGN="CENTER"><input type="radio" name="op26" Value="2" <?php if($_POST['op26']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 7 ขั้นตอน</td>	<td ALIGN="CENTER"><input type="radio" name="op26" Value="3" <?php if($_POST['op26']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 9 ขั้นตอน</td>	<td ALIGN="CENTER"><input type="radio" name="op26" Value="4" <?php if($_POST['op26']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">27. กรณีที่ผู้กู้ยืมเงินรายใหม่ที่มีอายุไม่เกิน 20 ปีบริบูรณ์ จะต้องนำส่งเอกสารอะไรบ้าง</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สัญญากู้ยืมเงิน แบบยืนยันการเบิกเงินกู้ยืม</td>	<td ALIGN="CENTER"><input type="radio" name="op27" Value="1" <?php if($_POST['op27']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สัญญากู้ยืมเงิน สำเนาบัตรประจำตัวประชาชนผู้กู้ยืมเงิน สำเนาบัตรประจำตัวประชาชนผู้แทนโดยชอบธรรม แบบยืนยันการเบิกเงินกู้ยืม</td>	<td ALIGN="CENTER"><input type="radio" name="op27" Value="2" <?php if($_POST['op27']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- แบบยืนยันการเบิกเงินกู้ยืม สำเนาบัตรประจำตัวประชาชนผู้กู้ยืมเงิน สำเนาบัตรประจำตัวประชาชนผู้แทนโดยชอบธรรม</td>	<td ALIGN="CENTER"><input type="radio" name="op27" Value="3" <?php if($_POST['op27']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สัญญากู้ยืมเงิน สำเนาบัตรประจำตัวประชาชนผู้กู้ยืมเงิน หนังสือรับรองจากสถานศึกษา สำเนาบัตรประจำตัวประชาชนผู้แทนโดยชอบธรรม<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แบบยืนยันการเบิกเงินกู้ยืม</td>	<td ALIGN="CENTER"><input type="radio" name="op27" Value="4" <?php if($_POST['op27']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">28. กรณีที่ผู้กู้ยืมเงินรายเก่าเลื่อนชั้นปีที่มีอายุไม่เกิน 20 ปีบริบูรณ์ จะต้องนำส่งเอกสารอะไรบ้าง</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สัญญากู้ยืมเงิน แบบยืนยันการเบิกเงินกู้ยืม สำเนาบัตรประจำตัวประชาชนของผู้กู้ยืมเงิน เอกสารอื่น (ถ้ามี)</td>	<td ALIGN="CENTER"><input type="radio" name="op28" Value="1" <?php if($_POST['op28']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สัญญากู้ยืมเงิน สำเนาบัตรประจำตัวประชาชนของผู้กู้ยืมเงิน สำเนาบัตรประจำตัวประชาชนของผู้แทนโดยชอบธรรม/ผู้ปกครอง<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เอกสารอื่น (ถ้ามี)</td>	<td ALIGN="CENTER"><input type="radio" name="op28" Value="2" <?php if($_POST['op28']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- แบบยืนยันการเบิกเงินกู้ยืม สำเนาบัตรประจำตัวประชาชนของผู้กู้ยืมเงิน สำเนาบัตรประจำตัวประชาชนของผู้แทน โดยชอบธรรม/ผู้ปกครอง<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เอกสารอื่น (ถ้ามี)</td>	<td ALIGN="CENTER"><input type="radio" name="op28" Value="3" <?php if($_POST['op28']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สัญญากู้ยืมเงิน แบบยืนยันการเบิกเงินกู้ยืม สำเนาบัตรประจำตัวประชาชนของผู้แทนโดยชอบธรรม/ผู้ปกครอง เอกสารอื่น (ถ้ามี)</td>	<td ALIGN="CENTER"><input type="radio" name="op28" Value="4" <?php if($_POST['op28']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">29. กรณีที่บิดา มารดาหรือผู้ปกครองไม่มีรายได้ประจำ ผู้กู้ยืมต้องใช้เอกสารใดเพื่อประกอบการพิจารณารายได้</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- หนังสือรับรองเงินเดือน</td>				<td ALIGN="CENTER"><input type="radio" name="op29" Value="1" <?php if($_POST['op29']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- หนังสือรับรองรายได้ (กยศ.102)</td>	<td ALIGN="CENTER"><input type="radio" name="op29" Value="2" <?php if($_POST['op29']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สลิปเงินเดือน</td>							<td ALIGN="CENTER"><input type="radio" name="op29" Value="3" <?php if($_POST['op29']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ถูกทุกข้อ</td>									<td ALIGN="CENTER"><input type="radio" name="op29" Value="4" <?php if($_POST['op29']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">30. กองทุนได้กำหนดคุณสมบัติให้ผู้กู้ยืมรายเก่าเลื่อนชั้นปีต้องทำกิจกรรมจิตสาธารณะที่เป็นประโยชน์ต่อสังคม ในระหว่างปีการศึกษาอย่างน้อยกี่ชั่วโมง</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ไม่น้อยกว่า 12 ชั่วโมง</td>	<td ALIGN="CENTER"><input type="radio" name="op30" Value="1" <?php if($_POST['op30']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ไม่น้อยกว่า 24 ชั่วโมง</td>	<td ALIGN="CENTER"><input type="radio" name="op30" Value="2" <?php if($_POST['op30']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ไม่น้อยกว่า 36 ชั่วโมง</td>	<td ALIGN="CENTER"><input type="radio" name="op30" Value="3" <?php if($_POST['op30']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ไม่น้อยกว่า 48 ชั่วโมง</td>	<td ALIGN="CENTER"><input type="radio" name="op30" Value="4" <?php if($_POST['op30']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">31. กองทุนร่วมมือกับหน่วยงานต่างๆ เพื่อจัดทำกิจกรรมจิตสาธารณะยกเว้นหน่วยงานใด</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- กรมกิจการเด็กและเยาวชน</td>			<td ALIGN="CENTER"><input type="radio" name="op31" Value="1" <?php if($_POST['op31']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- กรมพัฒนาสังคมและสวัสดิการ</td>		<td ALIGN="CENTER"><input type="radio" name="op31" Value="2" <?php if($_POST['op31']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- กองทุนพัฒนาบทบาทสตรี</td>			<td ALIGN="CENTER"><input type="radio" name="op31" Value="3" <?php if($_POST['op31']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- กองทุนการออมแห่งชาติ (กอช.)</td>	<td ALIGN="CENTER"><input type="radio" name="op31" Value="4" <?php if($_POST['op31']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">32. การยกเลิกสัญญากู้ยืมเงิน หรือยกเลิกแบบยืนยันการเบิกเงินกู้ยืม ใครเป็นผู้พิจารณา</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- กองทุน</td>					<td ALIGN="CENTER"><input type="radio" name="op32" Value="1" <?php if($_POST['op32']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สถานศึกษา</td>				<td ALIGN="CENTER"><input type="radio" name="op32" Value="2" <?php if($_POST['op32']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้กู้ยืมเงิน</td>					<td ALIGN="CENTER"><input type="radio" name="op32" Value="3" <?php if($_POST['op32']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ระบบยกเลิกอัตโนมัติ</td>	<td ALIGN="CENTER"><input type="radio" name="op32" Value="4" <?php if($_POST['op32']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">33. การจัดทำใบนำส่งและยืนยันจัดพิมพ์ใบนำส่งเอกสาร ต้องใช้สิทธิ์ใดในการดำเนินการ</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้ตรวจสอบรายการ (Checker)</td>	<td ALIGN="CENTER"><input type="radio" name="op33" Value="1" <?php if($_POST['op33']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้ดูแลระบบ (Admin)</td>				<td ALIGN="CENTER"><input type="radio" name="op33" Value="2" <?php if($_POST['op33']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้ทำรายการ	(Maker)</td>				<td ALIGN="CENTER"><input type="radio" name="op33" Value="3" <?php if($_POST['op33']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ถูกทุกข้อ</td>								<td ALIGN="CENTER"><input type="radio" name="op33" Value="4" <?php if($_POST['op33']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">34. สถานศึกษาใดที่ไม่ต้องดำเนินการส่งข้อมูลและส่งคืนเงิน (e-Audit) ผ่านระบบ DSL</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สถานศึกษาที่มีการกู้ยืมเฉพาะค่าเล่าเรียน</td>	<td ALIGN="CENTER"><input type="radio" name="op34" Value="1" <?php if($_POST['op34']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สถานศึกษาที่มีการกู้ยืมเฉพาะค่าครองชีพ</td>	<td ALIGN="CENTER"><input type="radio" name="op34" Value="2" <?php if($_POST['op34']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สถานศึกษาที่มีการกู้ยืมเฉพาะค่าใช้จ่ายที่เกี่ยวเนื่องกับการศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op34" Value="3" <?php if($_POST['op34']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สถานศึกษาที่มีการกู้ยืมค่าเล่าเรียนและค่าใช้จ่ายที่เกี่ยวเนื่องกับการศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op34" Value="4" <?php if($_POST['op34']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">35. กรณีที่มีเงินส่วนเกินค่าลงทะเบียนเรียน สถานศึกษาต้องดำเนินการอย่างไร</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- คืนเงินให้ผู้กู้ยืมเงิน</td>														<td ALIGN="CENTER"><input type="radio" name="op35" Value="1" <?php if($_POST['op35']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- คืนเงินเข้าบัญชีของสถานศึกษา</td>										<td ALIGN="CENTER"><input type="radio" name="op35" Value="2" <?php if($_POST['op35']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- คืนเงินกองทุน เพื่อลดหนี้ให้กับผู้กู้ยืมเงิน</td>							<td ALIGN="CENTER"><input type="radio" name="op35" Value="3" <?php if($_POST['op35']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ไม่ต้องดำเนินการใดๆ ให้เงินอยู่ในบัญชีสถานศึกษาต่อไป</td>	<td ALIGN="CENTER"><input type="radio" name="op35" Value="4" <?php if($_POST['op35']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">36. กรณีมีเงินค่าเล่าเรียนและค่าใช้จ่ายที่เกี่ยวเนื่องกับการศึกษาของผู้กู้ยืมเงินที่มิได้ใช้ลงทะเบียนเรียน สถานศึกษาต้องส่งคืนแก่กองทุนเมื่อใด</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ก่อนวันสิ้นเดือนของวันสิ้นภาคการศึกษานั้น</td>	<td ALIGN="CENTER"><input type="radio" name="op36" Value="1" <?php if($_POST['op36']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ก่อนสิ้นภาคการศึกษานั้น</td>							<td ALIGN="CENTER"><input type="radio" name="op36" Value="2" <?php if($_POST['op36']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- หลังจากได้รับเงินโอนภายใน 30 วัน</td>			<td ALIGN="CENTER"><input type="radio" name="op36" Value="3" <?php if($_POST['op36']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- หลังจากได้รับเงินโอนภายใน 45 วัน</td>			<td ALIGN="CENTER"><input type="radio" name="op36" Value="4" <?php if($_POST['op36']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">37. ปัจจุบันการลงนามในสัญญากู้ยืมเงินมีแบบใดบ้าง</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ไม่ต้องลงนาม</td>		<td ALIGN="CENTER"><input type="radio" name="op37" Value="1" <?php if($_POST['op37']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- แบบอิเล็กทรอนิกส์</td>	<td ALIGN="CENTER"><input type="radio" name="op37" Value="2" <?php if($_POST['op37']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- แบบกระดาษ</td>		<td ALIGN="CENTER"><input type="radio" name="op37" Value="3" <?php if($_POST['op37']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- แบบ DSL</td>				<td ALIGN="CENTER"><input type="radio" name="op37" Value="4" <?php if($_POST['op37']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">38. เมื่อนักเรียน/นักศึกษายื่นคำขอกู้ยืมในระบบ DSL เรียบร้อยแล้ว คำขอกู้ยืมจะถูกส่งไปให้ส่วนงานใดตรวจสอบคำขอกู้ยืมเงิน</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- กองทุน</td>								<td ALIGN="CENTER"><input type="radio" name="op38" Value="1" <?php if($_POST['op38']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้บริหารและจัดการเงินให้กู้ยืม</td>	<td ALIGN="CENTER"><input type="radio" name="op38" Value="2" <?php if($_POST['op38']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สถานศึกษา</td>							<td ALIGN="CENTER"><input type="radio" name="op38" Value="3" <?php if($_POST['op38']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ตัวแทน</td>								<td ALIGN="CENTER"><input type="radio" name="op38" Value="4" <?php if($_POST['op38']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">39. สาเหตุใดที่ทำให้ผู้กู้ยืมเงินรายเก่าเลื่อนชั้นปีไม่สามารถดำเนินการยืนยันแบบเบิกเงินกู้ยืมได้</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สถานศึกษายังไม่ได้บันทึกค่าใช้จ่ายตามหลักสูตร</td>				<td ALIGN="CENTER"><input type="radio" name="op39" Value="1" <?php if($_POST['op39']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สถานศึกษายังไม่ได้ดำเนินการส่งคืนเงิน (e-Audit)</td>			<td ALIGN="CENTER"><input type="radio" name="op39" Value="2" <?php if($_POST['op39']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สถานศึกษายังไม่ได้บันทึกค่าใช้จ่ายตามที่ลงทะเบียนจริง</td>	<td ALIGN="CENTER"><input type="radio" name="op39" Value="3" <?php if($_POST['op39']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สถานศึกษายังไม่ได้ตรวจสอบคุณสมบัติของผู้กู้ยืม</td>			<td ALIGN="CENTER"><input type="radio" name="op39" Value="4" <?php if($_POST['op39']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">40. ข้อใด<u><strong>มิใช่</strong></u>รายการที่ต้องดำเนินการผ่านระบบตัวแทน</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ลงนามสัญญากู้ยืมเงิน และ/หรือแบบยืนยันการเบิกเงินกู้ยืม</td>					<td ALIGN="CENTER"><input type="radio" name="op40" Value="1" <?php if($_POST['op40']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- จัดทำใบนำส่งและยืนยันจัดพิมพ์ใบนำส่งเอกสาร</td>								<td ALIGN="CENTER"><input type="radio" name="op40" Value="2" <?php if($_POST['op40']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ตรวจสอบคำขอกู้ยืมเงิน</td>																<td ALIGN="CENTER"><input type="radio" name="op40" Value="3" <?php if($_POST['op40']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- แก้ไขแนบเอกสารสัญญากู้ยืมเงิน และ/หรือแบบยืนยันการเบิกเงินกู้ยืม</td>	<td ALIGN="CENTER"><input type="radio" name="op40" Value="4" <?php if($_POST['op40']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
</table>
<br /><br />


<table width="1000" border="1"  cellSpacing="0" cellPadding="5">
<tr ALIGN="LEFT" BGCOLOR="#ccffcc"><td><strong>หมวด 5 อื่นๆ</strong></td>	<td width="50"><strong><center>เลือก</center></strong></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">41. ข้อใดคือช่องทางหลักสำหรับสถานศึกษาในการติดต่อสื่อสารกับกองทุน</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- Line@กยศ.</td>							<td ALIGN="CENTER"><input type="radio" name="op41" Value="1" <?php if($_POST['op41']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- Line@กยศ.สถานศึกษา</td>			<td ALIGN="CENTER"><input type="radio" name="op41" Value="2" <?php if($_POST['op41']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- Line@กยศ.ผู้กู้ยืม</td>					<td ALIGN="CENTER"><input type="radio" name="op41" Value="3" <?php if($_POST['op41']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- Line@กยศ.เจ้าหน้าที่กองทุน</td>	<td ALIGN="CENTER"><input type="radio" name="op41" Value="4" <?php if($_POST['op41']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">42. การจ่ายเงินค่าเล่าเรียนและค่าใช้จ่ายที่เกี่ยวเนื่องกับการศึกษา กองทุนจะจ่ายเข้าบัญชีของสถานศึกษาทุกวันที่เท่าไหร่ของเดือน</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 10 20 และ 30</td>	<td ALIGN="CENTER"><input type="radio" name="op42" Value="1" <?php if($_POST['op42']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 5 15 และ 25</td>	<td ALIGN="CENTER"><input type="radio" name="op42" Value="2" <?php if($_POST['op42']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 7 14 และ 21</td>	<td ALIGN="CENTER"><input type="radio" name="op42" Value="3" <?php if($_POST['op42']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 1 และ 16</td>			<td ALIGN="CENTER"><input type="radio" name="op42" Value="4" <?php if($_POST['op42']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">43. กรณีมีดอกผลเกิดจากบัญชีกองทุนเงินให้กู้ยืมเพื่อการศึกษา สถานศึกษามีการดำเนินการอย่างไร</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- โอนเงินดอกผลเข้าบัญชีเงินค่าใช้จ่ายในการบริหารงานกองทุน</td>	<td ALIGN="CENTER"><input type="radio" name="op43" Value="1" <?php if($_POST['op43']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ไม่ดำเนินการใดๆ</td>															<td ALIGN="CENTER"><input type="radio" name="op43" Value="2" <?php if($_POST['op43']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- โอนเงินเข้าบัญชีของสถานศึกษาโดยตรง</td>								<td ALIGN="CENTER"><input type="radio" name="op43" Value="3" <?php if($_POST['op43']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- โอนเงินให้เจ้าหน้าที่ที่ดูแลงานกองทุนของสถานศึกษา</td>			<td ALIGN="CENTER"><input type="radio" name="op43" Value="4" <?php if($_POST['op43']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">44. เมื่อใดที่สถานศึกษาต้องจัดทำรายงานการรับจ่ายเงินค่าใช้จ่ายในการบริหารงานกองทุนประจำปีส่งให้แก่กองทุนเพื่อทราบ</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สิ้นสุด ณ 31 ธันวาคม</td>	<td ALIGN="CENTER"><input type="radio" name="op44" Value="1" <?php if($_POST['op44']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สิ้นสุด ณ 31 มกราคม</td>	<td ALIGN="CENTER"><input type="radio" name="op44" Value="2" <?php if($_POST['op44']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สิ้นสุด ณ 30 มิถุนายน</td>	<td ALIGN="CENTER"><input type="radio" name="op44" Value="3" <?php if($_POST['op44']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สิ้นสุด ณ 30 กันยายน</td>	<td ALIGN="CENTER"><input type="radio" name="op44" Value="4" <?php if($_POST['op44']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">45. สถานศึกษาใช้บัญชีใดรับเงินค่าเล่าเรียนและค่าใช้จ่ายที่เกี่ยวเนื่องกับการศึกษาของสถานศึกษา</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- บัญชีกองทุนเงินให้กู้ยืมเพื่อการศึกษาของ ระบุชื่อสถานศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op45" Value="1" <?php if($_POST['op45']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- บัญชี ระบุชื่อสถานศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op45" Value="2"  <?php if($_POST['op45']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- บัญชีค่าใช้จ่ายในการบริหารงานกองทุนเงินให้กู้ยืมเพื่อการศึกษาของ ระบุชื่อสถานศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op45" Value="3" <?php if($_POST['op45']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- บัญชี ระบุชื่อเจ้าหน้าที่ของสถานศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op45" Value="4" <?php if($_POST['op45']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">46. สถานศึกษาใช้บัญชีใดรับเงินค่าใช้จ่ายในการบริหารงานกองทุนของสถานศึกษา</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- บัญชีเงินอุดหนุนของ ระบุชื่อสถานศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op46" Value="1" <?php if($_POST['op46']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- บัญชีค่าใช้จ่ายในการบริหารงานกองทุนเงินให้กู้ยืมเพื่อการศึกษาของ ระบุชื่อสถานศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op46" Value="2" <?php if($_POST['op46']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- บัญชีกองทุนเงินให้กู้ยืมเพื่อการศึกษาของ ระบุชื่อสถานศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op46" Value="3" <?php if($_POST['op46']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- บัญชี ระบุชื่อสถานศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op46" Value="4" <?php if($_POST['op46']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3"><font style="font-size:98%;">47. กองทุนจะโอนเงินค่าครองชีพเดือนแรกให้กับผู้กู้ยืมภายในกี่วัน นับจากวันที่สถานศึกษายืนยันการลงนามแบบยืนยันการเบิกเงินในระบบ DSL เรียบร้อยแล้ว</font></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 15 วัน</td>	<td ALIGN="CENTER"><input type="radio" name="op47" Value="1" <?php if($_POST['op47']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 30 วัน</td>	<td ALIGN="CENTER"><input type="radio" name="op47" Value="2" <?php if($_POST['op47']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 45 วัน</td>	<td ALIGN="CENTER"><input type="radio" name="op47" Value="3" <?php if($_POST['op47']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 60 วัน</td>	<td ALIGN="CENTER"><input type="radio" name="op47" Value="4" <?php if($_POST['op47']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">48. กรณีผู้กู้ยืมเงินสำเร็จการศึกษาในหลักสูตรสาขาวิชาโครงการส่งเสริมการพัฒนาทุนมนุษย์ (Human Capital) ระดับอาชีวศึกษา <br />&nbsp;&nbsp;&nbsp;&nbsp;ผู้กู้ยืมเงินจะได้รับสิทธิประโยชน์อย่างไร</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- คิดอัตราดอกเบี้ยร้อยละ 0.5 ต่อปี และส่วนลดเงินต้นร้อยละ 30</td>	<td ALIGN="CENTER"><input type="radio" name="op48" Value="1" <?php if($_POST['op48']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- คิดอัตราดอกเบี้ยร้อยละ 0.5 ต่อปี และส่วนลดเงินต้นร้อยละ 50</td>	<td ALIGN="CENTER"><input type="radio" name="op48" Value="2" <?php if($_POST['op48']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- คิดอัตราดอกเบี้ยร้อยละ 0.3 ต่อปี และส่วนลดเงินต้นร้อยละ 50</td>	<td ALIGN="CENTER"><input type="radio" name="op48" Value="3" <?php if($_POST['op48']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- คิดอัตราดอกเบี้ยร้อยละ 0.5 ต่อปี และส่วนลดเงินต้นร้อยละ 70</td>	<td ALIGN="CENTER"><input type="radio" name="op48" Value="4" <?php if($_POST['op48']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>


<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">49. กรณีผู้กู้ยืมเงินสำเร็จการศึกษาในหลักสูตรสาขาวิชาโครงการส่งเสริมการพัฒนาทุนมนุษย์ (Human Capital) ระดับปริญญาตรี <br />&nbsp;&nbsp;&nbsp;&nbsp;ผู้กู้ยืมเงินจะได้รับสิทธิประโยชน์อย่างไร</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- คิดอัตราดอกเบี้ยร้อยละ 0.5 ต่อปี และส่วนลดเงินต้นร้อยละ 30</td>	<td ALIGN="CENTER"><input type="radio" name="op49" Value="1" <?php if($_POST['op49']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- คิดอัตราดอกเบี้ยร้อยละ 0.5 ต่อปี และส่วนลดเงินต้นร้อยละ 50</td>	<td ALIGN="CENTER"><input type="radio" name="op49" Value="2" <?php if($_POST['op49']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- คิดอัตราดอกเบี้ยร้อยละ 0.3 ต่อปี และส่วนลดเงินต้นร้อยละ 50</td>	<td ALIGN="CENTER"><input type="radio" name="op49" Value="3" <?php if($_POST['op49']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- คิดอัตราดอกเบี้ยร้อยละ 0.5 ต่อปี และส่วนลดเงินต้นร้อยละ 70</td>	<td ALIGN="CENTER"><input type="radio" name="op49" Value="4" <?php if($_POST['op49']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">50. การจัดส่งสัญญากู้ยืมเงินและ/หรือแบบยืนยันการเบิกเงินกู้ยืม และเอกสารประกอบการกู้ยืม สถานศึกษาต้องดำเนินการส่งเอกสารไปที่ใด</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- กองทุนเงินให้กู้ยืมเพื่อการศึกษา</td>									<td ALIGN="CENTER"><input type="radio" name="op50" Value="1" <?php if($_POST['op50']=='1'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ธนาคารกรุงไทยและ/หรือธนาคารอิสลามแห่งประเทศไทย</td>	<td ALIGN="CENTER"><input type="radio" name="op50" Value="2" <?php if($_POST['op50']=='2'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ธนาคารแห่งประเทศไทย</td>												<td ALIGN="CENTER"><input type="radio" name="op50" Value="3" <?php if($_POST['op50']=='3'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ต้นสังกัดของสถานศึกษา</td>												<td ALIGN="CENTER"><input type="radio" name="op50" Value="4" <?php if($_POST['op50']=='4'){  echo 'checked'; }else{ echo 'disabled';}?>></td></tr>
</table>
<br /><br />


<table width="1000" border="1"  cellSpacing="0" cellPadding="5">
<tr ALIGN="LEFT" BGCOLOR="#ccffcc"><td colspan="3"><strong>หมวด 6 ข้อเสนอแนะ</strong></td>	</tr>
<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การดำเนินงานการให้กู้ยืมผ่านระบบ DSL ในระยะเวลา 1 ปีที่ผ่านมาท่านเห็นว่าระบบมีประสิทธิภาพเพียงพอต่อการให้กู้ยืมหรือไม่ ขั้นตอนใดบ้าง และมีอย่างไร</td></tr>
<tr><td ALIGN="LEFT" rowspan="2" width="80">&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="op51" Value="Y" <?php if($_POST['op51']=='Y'){  echo 'checked'; }else{ echo 'disabled';}?>> มี</td>	
<td ALIGN="LEFT" width="180">ขั้นตอน  </td><td ALIGN="LEFT" ><textarea name="Y1" rows="" cols="50" <?php if($_POST['op51']=='N'){  echo 'disabled'; }?>><?php echo $_POST['Y1'];?></textarea>  </td></tr>
<TR><TD>อธิบายรายละเอียด</TD><TD><textarea name="Y2" rows="" cols="50" <?php if($_POST['op51']=='N'){  echo 'disabled'; }?>><?php echo $_POST['Y2'];?></textarea></TD></TR>


<tr><td ALIGN="LEFT" rowspan="2">&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="op51" Value="N" <?php if($_POST['op51']=='N'){  echo 'checked'; }else{ echo 'disabled';}?>> ไม่มี</td>	
<td ALIGN="LEFT">ขั้นตอน  </td><td ALIGN="LEFT" ><textarea name="N1" rows="" cols="50" <?php if($_POST['op51']=='Y'){  echo 'disabled'; }?>><?php echo $_POST['N1'];?></textarea></td></tr>
<TR><TD>อธิบายรายละเอียด</TD><TD><textarea name="N2" rows="" cols="50" <?php if($_POST['op51']=='Y'){  echo 'disabled'; }?>><?php echo $_POST['N2'];?></textarea></TD></TR>
</table>
</center>

</TD>
</TR>


<TR>
<TD>
<br>
<hr><br>
<B><FONT COLOR="#330066" size="3">
<center>สถานศึกษาได้ตรวจสอบข้อความดังกล่าวข้างต้นแล้ว ขอรับรองและยืนยันว่าข้อความทั้งหมดนี้เป็นความจริง<br>จึงได้ลงลายมือชื่อยืนยันและให้คำรับรองไว้เป็นหลักฐานสำคัญแก่กองทุนเงินให้กู้ยืมเพื่อการศึกษาต่อไป</center></FONT></B><BR><br><br><br><br><br>
<table width='100%'>
<tr>	<td width='40%'></td>	
<td width='60%'><center>
(<?php echo '&nbsp;&nbsp;'.$_POST['name'].'&nbsp;&nbsp;'; ?>)<br>
ผู้มีอำนาจกระทำการแทนสถานศึกษา ตำแหน่ง <?php echo $_POST['position']; ?><br>
สถานศึกษา <?php echo $_POST['univ_name'];?><br>
วันที่ <B><?php $Y=date("Y")+543; echo date("d-m-"); echo $Y; ?>
</center></td></tr>
</table>
<br><br>
</TD>
</TR>



<TR>
<TD>


<?php	$ddd=date("d-m-").$Y; ?>
<INPUT TYPE="hidden" NAME="sch_id" VALUE="<?php echo $_POST['sch_id'];?>">
<INPUT TYPE="hidden" NAME="name" VALUE="<?php echo $_POST['name'];?>">
<INPUT TYPE="hidden" NAME="position" VALUE="<?php echo $_POST['position'];?>">
<INPUT TYPE="hidden" NAME="key_date" VALUE="<?php echo $ddd;?>">
<?php 
error_reporting(~E_NOTICE);
$sch_id=$_POST['sch_id'];	
$name	=	$_POST['name'];					//ชื่อ
$position	=	$_POST['position'];				//ตำแหน่ง
$op0	=	$_POST['op0'];
$op0_comment	=	$_POST['op0_comment'];
$ckbox1	=	isset($_POST['ckbox1']);
$ckbox2	=	isset($_POST['ckbox2']);
$ckbox3	=	isset($_POST['ckbox3']);
$ckbox4	=	isset($_POST['ckbox4']);


					//รหัสสถานศึกษา
if($_POST['op1']=='4'){ $op1='2';}else{$op1='0';}
if($_POST['op2']=='1'){ $op2='2';}else{$op2='0';}
if($_POST['op3']=='4'){ $op3='2';}else{$op3='0';}
if($_POST['op4']=='2'){ $op4='2';}else{$op4='0';}
if($_POST['op5']=='4'){ $op5='2';}else{$op5='0';}
if($_POST['op6']=='4'){ $op6='2';}else{$op6='0';}
if($_POST['op7']=='2'){ $op7='2';}else{$op7='0';}
if($_POST['op8']=='3'){ $op8='2';}else{$op8='0';}
if($_POST['op9']=='4'){ $op9='2';}else{$op9='0';}
if($_POST['op10']=='4'){ $op10='2';}else{$op10='0';}
if($_POST['op11']=='2'){ $op11='2';}else{$op11='0';}
if($_POST['op12']=='3'){ $op12='2';}else{$op12='0';}
if($_POST['op13']=='2'){ $op13='2';}else{$op13='0';}
if($_POST['op14']=='2'){ $op14='2';}else{$op14='0';}
if($_POST['op15']=='3'){ $op15='2';}else{$op15='0';}
if($_POST['op16']=='3'){ $op16='2';}else{$op16='0';}
if($_POST['op17']=='4'){ $op17='2';}else{$op17='0';}
if($_POST['op18']=='3'){ $op18='2';}else{$op18='0';}
if($_POST['op19']=='2'){ $op19='2';}else{$op19='0';}
if($_POST['op20']=='4'){ $op20='2';}else{$op20='0';}
if($_POST['op21']=='4'){ $op21='2';}else{$op21='0';}
if($_POST['op22']=='3'){ $op22='2';}else{$op22='0';}
if($_POST['op23']=='1'){ $op23='2';}else{$op23='0';}
if($_POST['op24']=='2'){ $op24='2';}else{$op24='0';}
if($_POST['op25']=='4'){ $op25='2';}else{$op25='0';}
if($_POST['op26']=='3'){ $op26='2';}else{$op26='0';}
if($_POST['op27']=='4'){ $op27='2';}else{$op27='0';}
if($_POST['op28']=='1'){ $op28='2';}else{$op28='0';}
if($_POST['op29']=='1'){ $op29='2';}else{$op29='0';}
if($_POST['op30']=='3'){ $op30='2';}else{$op30='0';}
if($_POST['op31']=='1'){ $op31='2';}else{$op31='0';}
if($_POST['op32']=='2'){ $op32='2';}else{$op32='0';}
if($_POST['op33']=='4'){ $op33='2';}else{$op33='0';}
if($_POST['op34']=='4'){ $op34='2';}else{$op34='0';}
if($_POST['op35']=='4'){ $op35='2';}else{$op35='0';}
if($_POST['op36']=='1'){ $op36='2';}else{$op36='0';}
if($_POST['op37']=='3'){ $op37='2';}else{$op37='0';}
if($_POST['op38']=='3'){ $op38='2';}else{$op38='0';}
if($_POST['op39']=='4'){ $op39='2';}else{$op39='0';}
if($_POST['op40']=='1'){ $op40='2';}else{$op40='0';}
if($_POST['op41']=='2'){ $op41='2';}else{$op41='0';}
if($_POST['op42']=='3'){ $op42='2';}else{$op42='0';}
if($_POST['op43']=='4'){ $op43='2';}else{$op43='0';}
if($_POST['op44']=='3'){ $op44='2';}else{$op44='0';}
if($_POST['op45']=='2'){ $op45='2';}else{$op45='0';}
if($_POST['op46']=='4'){ $op46='2';}else{$op46='0';}
if($_POST['op47']=='2'){ $op47='2';}else{$op47='0';}
if($_POST['op48']=='4'){ $op48='2';}else{$op48='0';}
if($_POST['op49']=='2'){ $op49='2';}else{$op49='0';}
if($_POST['op50']=='2'){ $op50='2';}else{$op50='0';}




$key_date	=	$_POST['key_date'];			//วันที่
//$ddd	=	$_POST['ddd'];

$op51	=	$_POST['op51'];
$Y1	=	$_POST['Y1'];
$Y2	=	$_POST['Y2'];
$N1	=	$_POST['N1'];
$N2	=	$_POST['N2'];

include('config.inc.php'); 

mysqli_set_charset($conn,"utf8");
			
$sql="insert into record values('$sch_id','$name','$position','$ckbox1','$ckbox2',
'$op1','$op2','$op3','$op4','$op5','$op6','$op7','$op8','$op9','$op10',
'$op11','$op12','$op13','$op14','$op15','$op16','$op17','$op18','$op19','$op20',
'$op21','$op22','$op23','$op24','$op25','$op26','$op27','$op28','$op29','$op30',
'$op31','$op32','$op33','$op34','$op35','$op36','$op37','$op38','$op39','$op40',
'$op41','$op42','$op43','$op44','$op45','$op46','$op47','$op48','$op49','$op50',
'$key_date','$ckbox3','$ckbox4','$op51','$Y1','$Y2','$N1','$N2','$op0','$op0_comment');";

$dbquery=mysqli_query($conn,$sql);

?>

<CENTER><input type="button"  onClick="window.print();ok();"   value="1.พิมพ์แบบยืนยันให้ กยศ."/>  

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<INPUT  TYPE="submit" id="ok1" name="ok1" value="2.ยืนยันการส่งข้อมูล" disabled></CENTER>
<BR></TD>
</TR>
</FORM>
</TABLE>
</CENTER>
<!-- ปิดตาราง 4 -->

<!-- ปิดตาราง 1 --></CENTER>
<FONT SIZE="2" COLOR="#0000FF"><CENTER><BR>
กองทุนเงินให้กู้ยืมเพื่อการศึกษา (กยศ.) เลขที่ 89 อาคาร เอไอเอ แคปปิตอล เซ็นเตอร์ ชั้น 5-6 ถนน รัชดาภิเษก แขวงดินแดง เขตดินแดง กทม. 10400<BR>

  </CENTER>
 </BODY>
</HTML>
