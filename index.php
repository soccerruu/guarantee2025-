<!doctype html>
<HTML>
 <HEAD>
  <TITLE>แบบยืนยันและรับรองการปฏิบัติงานของสถานศึกษาในการดำเนินงานกองทุนเงินให้กู้ยืมเพื่อการศึกษา</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<META NAME="Generator" CONTENT="EditPlus">
<META NAME="Author" CONTENT="">
<META NAME="Keywords" CONTENT="">
<META NAME="Description" CONTENT="">


<style type="text/css">
  .displaytext {
    opacity: 0.5;
    /* IE fallback removed: filter: alpha(opacity=50); */
  }

  .normaltext {
    opacity: 1;
    /* IE fallback removed: filter: alpha(opacity=100); */
  }

  .btstyle {
    border: 1px solid #000000;
    color: #ffffff;
    font-size: 14px;
    font-family: "Segoe UI", Tahoma, sans-serif;
    background-color: #6f4500;
    padding: 6px 12px;
    cursor: pointer;
  }

  .mystyle {
    border: 1px solid #000000;
    color: #663300;
    font-size: 14px;
    font-family: "Segoe UI", Tahoma, sans-serif;
    background-color: #ffffff;
    padding: 6px 12px;
  }

  .mystyle2 {
    border-bottom: 1px solid #000000;
    color: #663300;
    font-size: 14px;
    font-family: "Segoe UI", Tahoma, sans-serif;
    background-color: #ffffff;
    padding: 6px 12px;
  }
</style>



<script>
function formCheck(form) {
  const fieldRequired = [
    "name", "position", "op0", "op1", "op2", "op3", "op4", "op5", "op6", "op7", "op8", "op9", "op10",
    "op11", "op12", "op13", "op14", "op15", "op16", "op17", "op18", "op19", "op20",
    "op21", "op22", "op23", "op24", "op25", "op26", "op27", "op28", "op29", "op30",
    "op31", "op32", "op33", "op34", "op35", "op36", "op37", "op38", "op39", "op40",
    "op41", "op42", "op43", "op44", "op45", "op46", "op47", "op48", "op49", "op50", "op51"
  ];

  const fieldDescription = [
    "กรุณากรอก : ชื่อ-นามสกุล", "กรุณาระบุ : ตำแหน่ง", "กรุณาระบุ : สังกัด",
    "ข้อ 1", "ข้อ 2", "ข้อ 3", "ข้อ 4", "ข้อ 5", "ข้อ 6", "ข้อ 7", "ข้อ 8", "ข้อ 9", "ข้อ 10",
    "ข้อ 11", "ข้อ 12", "ข้อ 13", "ข้อ 14", "ข้อ 15", "ข้อ 16", "ข้อ 17", "ข้อ 18", "ข้อ 19", "ข้อ 20",
    "ข้อ 21", "ข้อ 22", "ข้อ 23", "ข้อ 24", "ข้อ 25", "ข้อ 26", "ข้อ 27", "ข้อ 28", "ข้อ 29", "ข้อ 30",
    "ข้อ 31", "ข้อ 32", "ข้อ 33", "ข้อ 34", "ข้อ 35", "ข้อ 36", "ข้อ 37", "ข้อ 38", "ข้อ 39", "ข้อ 40",
    "ข้อ 41", "ข้อ 42", "ข้อ 43", "ข้อ 44", "ข้อ 45", "ข้อ 46", "ข้อ 47", "ข้อ 48", "ข้อ 49", "ข้อ 50", "หมวด 6"
  ];

  let alertMsg = "คุณยังไม่ได้ทำในช่องต่อไปนี้:\n\n";

  fieldRequired.forEach((fieldName, index) => {
    const element = form.elements[fieldName];

    if (!element) return;

    const type = element.type || (element[0] && element[0].type);

    if (type === "select-one" || type === "select-multiple") {
      if (element.selectedIndex === -1 || element.options[element.selectedIndex].text === "") {
        alertMsg += `  ${fieldDescription[index]}\n`;
      }
    } else if (type === "text" || type === "textarea") {
      if (!element.value.trim()) {
        alertMsg += `  ${fieldDescription[index]}\n`;
      } else if (fieldDescription[index] === "เลขที่บัญชีเงินอุดหนุน" && element.value.length < 10) {
        alertMsg += "  กรอกเลขที่บัญชีไม่ถึง 10 หลัก\n";
      }
    } else if (typeof element.length !== "undefined" && element[0].type === "radio") {
      const checked = Array.from(element).some(input => input.checked);
      if (!checked) {
        alertMsg += `  ${fieldDescription[index]}\n`;
      }
    }
  });

  if (alertMsg.length > "คุณยังไม่ได้ทำในช่องต่อไปนี้:\n\n".length) {
    alert(alertMsg);
    return false;
  }

  return true;
}
</script>

<script language="JavaScript"> 
function conf(object) {
if (confirm("ยืนยันการส่งข้อมูล(ไม่สามารถกลับมาแก้ไขได้อีก) และทำการพิมพ์เอกสารในหน้าต่อไปเพื่อส่งให้กับกองทุนฯ") ==true) {
return true;
}
return false;
}
</script>


<script language="javaScript1.2">
function jsFn_onlyNumeric(obj) {
if(event.keyCode>=48&&event.keyCode<=57){
		return true;
	}else event.keyCode=0; event.returnValue=0; return false;
	}
function chk_valid(){
if(document.chkjava.id_sch.value==""){
				alert("กรุณากรอกรหัสสถานศึกษาก่อน");
				document.chkjava.id_sch.focus();
				return false;
		}else {   // ตรวจสอบว่าใส่รหัสครบ 6 หลักหรือยัง
				var formcontent=document.chkjava.id_sch.value;
				formcontent=formcontent.split("");
				id_count=formcontent.length;
				if(id_count < 6){
					alert("กรุณากรอกรหัสสถานศึกษาให้ครบ 6 หลัก");
					document.chkjava.id_sch.focus();
					return false;
				}
		}


document.chkjava.submit();
		}
</SCRIPT>

 </HEAD>

 <BODY BGCOLOR="#c0c0c0">


<?php 

include("config.inc.php");   // Connect Database 
//include("url.inc.php");

error_reporting(~E_NOTICE);
$id_sch = $_POST['id_sch'] ?? null;
$ch = $_POST['ch'] ?? null;
$see = $_POST['see'] ?? null;
$school = $_POST['school'] ?? null;


?>

  <CENTER>
  <?php if($ch != '1'){?>
<H3>แบบยืนยันและรับรองการปฏิบัติงานของสถานศึกษา<BR>
ที่เข้าร่วมการดำเนินงานกับกองทุนเงินให้กู้ยืมเพื่อการศึกษา ประจำปีการศึกษา 2566 </H3>
<?php }?>
<?php if(!$ch){?>
<!-- ฟอร์มกรอกรหัสสถานศึกษา -->
<form method="POST" action="" name="chkjava" onsubmit="return chk_valid()">
  <label for="id_sch">รหัสสถานศึกษา 6 หลัก</label>
  <input type="text" name="id_sch" id="id_sch" maxlength="6" size="6" class="mtstyle" style="text-align:center" onkeypress="jsFn_onlyNumeric(this);" required>
  <input type="hidden" name="ch" value="1">
  <input type="submit" value="กดเพื่อกรอกแบบประเมิน" class="btstyle">
</form>

<?php if (empty($see)) { ?>
  <p style="color:#FF0000;">
    หากท่านไม่ทราบรหัสสถานศึกษา ท่านสามารถพิมพ์ชื่อสถานศึกษาและกดค้นหาได้ที่นี่
  </p>
  <form method="POST" action="">
    <input type="hidden" name="see" value="1">
    <input type="text" name="school" size="50" class="mystyle" placeholder="พิมพ์ชื่อสถานศึกษา">
    <input type="submit" value="กดเพื่อค้นหารหัส" class="btstyle">
  </form>
<?php } ?>



<?php 
if($see=="1"){	?>
<CENTER><TABLE width="800"style="border:1px solid #000000" cellSpacing="0" cellPadding="5"  border="0" BGCOLOR="#000000">
<TR>	<TD bgcolor="#CCCCFF" width="150"><B><CENTER>รหัสสถานศึกษา</CENTER></B></TD><TD bgcolor="#CCCCFF"><B>ชื่อสถานศึกษา</B></TD></TR>
<?php

$school = trim($school); // ป้องกันช่องว่างเกิน
mysqli_set_charset($conn, 'utf8');

$sql = "SELECT * FROM data_start WHERE school_name LIKE ?";
$stmt = $conn->prepare($sql);
$searchTerm = "%{$school}%";
$stmt->bind_param("s", $searchTerm);
$stmt->execute();
$result = $stmt->get_result();

$ii = 0;
while ($row = $result->fetch_assoc()) {
    $univ_name = $row["school_name"];
    $univ_id = $row["school_id"];
    $ii++;


									
?>
<TR><FORM METHOD=POST ACTION="">
<TD bgcolor="#FFFFFF">
<CENTER><INPUT TYPE="hidden" NAME="ch" VALUE="1">
<INPUT TYPE="hidden" NAME="id_sch" VALUE="<?php echo $univ_id;?>">
<INPUT TYPE="hidden" NAME="univ_name" VALUE="<?php echo $univ_name;?>">
<INPUT TYPE="submit" VALUE='<?php echo $univ_id;?>'></CENTER></TD>
<TD bgcolor="#FFFFFF" ALIGN="LEFT"><FONT SIZE="4" FACE="MS Sans Serif"><?php echo $univ_name;?></font></TD></FORM></TR>
<?php

if (isset($i)) {
     $i++;
}



}?>

</TABLE></CENTER><BR>
<FORM METHOD=POST ACTION="">
	<INPUT TYPE="hidden" NAME="ch" VALUE="">
<INPUT TYPE="hidden" NAME="id_sch" VALUE="">
	<INPUT TYPE="submit" VALUE="กลับไปค้นหาใหม่" class="btstyle">
</FORM>


<?php  
} } 
			if($ch == "1"){
			mysqli_set_charset($conn,"utf8");
			//ตรวจเช็คว่ามีการกรอกข้อมูลแล้วรึยัง
			$sql1="SELECT * FROM record WHERE rec_school_id = '$id_sch' ";
			$dbquery1=mysqli_query($conn,$sql1);
			$num_rows1=mysqli_num_rows($dbquery1);

			if($num_rows1=="1"){ $ppp='dup';?>
			<META HTTP-EQUIV="Refresh" CONTENT="0;URL=<?php echo $url;?>dup.html"><?php }
			//ตรวจเช็คว่ามีข้อมูลสถานศึกษาอยู่หรือไม่
			$sql="SELECT * FROM data_start WHERE school_id = '$id_sch' ";
							$dbquery=mysqli_query($conn,$sql);
							mysqli_set_charset($conn,"utf8");

							$num_rows=mysqli_num_rows($dbquery);

							if($num_rows=="0"){ $ppp='dup';?>
							<META HTTP-EQUIV="Refresh" CONTENT="0;URL=<?php echo $url;?>"><?php }
							
							$num_fields=mysqli_num_fields($dbquery);
							$result=mysqli_fetch_array($dbquery);

							$univ_name   = $result["school_name"] ?? null;
							$province    = $result["province"] ?? null;
							$school_type = $result["school_type"] ?? null;
							$money       = $result["money"] ?? null;


	?>

<?php if($school_type=="1"){$school_type_name="รัฐบาล";} else {$school_type_name="เอกชน";}?>
<CENTER>
<!-- เปิดตาราง 1 -->
<Table width="1080" style="border:1px solid #000000" cellSpacing="2" cellPadding="5"  border="0" BGCOLOR="#ffffff"> 
<FORM METHOD="POST" ACTION="review.php" name="mainteem" onSubmit="return formCheck(this);">

<TR  ><TD></TD></TR>

<TR><TD>
<!-- เปิดตาราง 4 -->
<CENTER>
<TABLE width="1050" style="border:1px solid #000000" cellSpacing="0" cellPadding="2"  border="0" BGCOLOR="#FFFFFF">

<TR><TD>	
	
	<CENTER><?php  $_POST['id_sch'];?>
	<h3><br>แบบยืนยันและรับรองการปฏิบัติงานของสถานศึกษา<br>ที่เข้าร่วมการดำเนินงานกับกองทุนเงินให้กู้ยืมเพื่อการศึกษา ประจำปีการศึกษา 2567</h3>

	<B>รหัสสถานศึกษา :  <FONT  COLOR="#FF0000"><?php echo $id_sch;?></FONT></B> <B>ชื่อสถานศึกษา :  <FONT  COLOR="#FF0000"><?php echo $univ_name;?></FONT></B><br><B>จังหวัด : <FONT  COLOR="#FF0000"><?php echo $province;?></FONT></B>&nbsp;&nbsp;&nbsp;&nbsp;<B>ประเภทสถานศึกษา : <FONT  COLOR="#FF0000"><?php echo $school_type_name;?></FONT></B></CENTER>
<br>
<HR>
</B></TD>
</TR>


<TR>
<TD align="left">
&nbsp;&nbsp;&nbsp;&nbsp;<font size="" color="#330099"><B><u>ข้อมูลทั่วไปเกี่ยวกับผู้ตอบแบบสอบถาม</u></B></font><br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วัน/เดือน/ปี กรอกข้อมูล <B><?php $Y=date("Y")+543; echo date("d-m-"); echo $Y; ?></B>
<BR><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ชื่อ - นามสกุล ผู้ตอบแบบสอบถาม : <INPUT  id="name" NAME="name" TYPE="text"  size='30'>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
ตำแหน่งของท่าน : <INPUT  NAME="position" TYPE="text" id="position" size='31' >
<BR>
<BR>
</TD>
</TR>
<TR>
<TD align="LEFT">
&nbsp;&nbsp;&nbsp;&nbsp;<font size="" color="#330099"><B><u>ส่วนที่ 1 ข้อมูลทั่วไปของสถานศึกษา</u></B></font><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สังกัด : 
<input type="radio" name="op0" value='สพฐ.'> สพฐ.&nbsp;&nbsp;
<input type="radio" name="op0" value='สอศ.'> สอศ.&nbsp;&nbsp;
<input type="radio" name="op0" value='สป.อว.'>สป.อว.&nbsp;&nbsp;
<input type="radio" name="op0" value='กศน.'> กศน.&nbsp;&nbsp;
<input type="radio" name="op0" value='สช.'> สช.&nbsp;&nbsp;
<input type="radio" name="op0" value='อปท.'> อปท.&nbsp;&nbsp;
<input type="radio" name="op0" value='อื่นๆ'> อื่นๆ โปรดระบุ <input type="text" name="op0_comment"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ลักษณะการให้กู้ยืม : <input type="checkbox" name="ckbox1" value='ลักษณะที่ 1' > ลักษณะที่ 1&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="ckbox2" value='ลักษณะที่ 2'> ลักษณะที่ 2&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="ckbox3" value='ลักษณะที่ 3'> ลักษณะที่ 3&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="ckbox4" value='ลักษณะที่ 4'> ลักษณะที่ 4

<br><br></center>
</TD>
</TR>

<TR>
<TD align="LEFT">
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
<tr ALIGN="LEFT" BGCOLOR="#ccffcc"><td><strong>หมวดที่ 1  พระราชบัญญัติกองทุนเงินให้กู้ยืมเพื่อการศึกษา พ.ศ. 2560 และที่แก้ไขเพิ่มเติม (ฉบับที่ 2) พ.ศ. 2566 กฎ ระเบียบ และประกาศที่เกี่ยวข้องกับการกู้ยืม</strong></td>	<td width="50"><strong><center>เลือก</center></strong></td></tr>


<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">1.	พระราชบัญญัติกองทุนเงินให้กู้ยืมเพื่อการศึกษา พ.ศ. 2560 และที่แก้ไขเพิ่มเติม (ฉบับที่ 2) พ.ศ. 2566 มีวัตถุประสงค์อย่างไร</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สนับสนุนการขยายโอกาสและพัฒนาการศึกษาของประเทศ</td>	<td ALIGN="CENTER"><input type="radio" name="op1" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ให้กู้ยืมกับนักเรียน นักศึกษาที่ขาดแคลนทุนทรัพย์ได้กู้ยืมเงิน</td>	<td ALIGN="CENTER"><input type="radio" name="op1" Value="2"></td></tr>
<tr> <td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เพื่อพัฒนาศักยภาพทางการศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op1" Value="3"></td></tr>
<tr> <td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สนับสนุนและส่งเสริมการศึกษาด้วยการให้เงินกู้ยืมเพื่อการศึกษาในลักษณะต่างๆ ตามที่กำหนดไว้ใน พ.ร.บ.กองทุน</td>	<td ALIGN="CENTER"><input type="radio" name="op1" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">2.	ข้อใด<strong><u>ไม่ใช</u></strong>่วัตถุประสงค์ ตาม พ.ร.บ.กองทุนเงินให้กู้ยืมเพื่อการศึกษา พ.ศ. 2560 และที่แก้ไขเพิ่มเติม (ฉบับที่ 2) พ.ศ. 2566  กองทุนสนับสนุนและส่งเสริมการศึกษาด้วยการให้เงินกู้ยืมเพื่อการศึกษา 5 ลักษณะ</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เงินกู้ยืมเพื่อการศึกษาให้แก่นักเรียน นักศึกษาที่ศึกษาในทุกสาขาวิชา</td>	<td ALIGN="CENTER"><input type="radio" name="op2" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เงินกู้ยืมเพื่อการศึกษาให้แก่นักเรียน หรือนักศึกษาที่ขาดแคลนทุนทรัพย์</td>	<td ALIGN="CENTER"><input type="radio" name="op2" Value="2"></td></tr>
<tr> <td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เงินกู้ยืมเพื่อการศึกษาให้แก่นักเรียนหรือนักศึกษาที่ศึกษาในสาขาวิชาที่เป็นความต้องการหลัก ซึ่งมีความชัดเจน <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ของการผลิตกำลังคนและมีความจำเป็นต่อการพัฒนาประเทศ
</td>	<td ALIGN="CENTER"><input type="radio" name="op2" Value="3"></td></tr>
<tr> <td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เงินกู้ยืมเพื่อการศึกษาให้แก่นักเรียนหรือนักศึกษาที่เรียนดีเพื่อสร้างความเป็นเลิศ</td>	<td ALIGN="CENTER"><input type="radio" name="op2" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">3. ตาม พ.ร.บ.กองทุนเงินให้กู้ยืมเพื่อการศึกษา พ.ศ. 2560 และที่แก้ไขเพิ่มเติม (ฉบับที่ 2) พ.ศ. 2566 ผู้กู้ยืมเงินมีหน้าที่ต้องปฏิบัติอย่างไร</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ให้ความยินยอมในขณะทำสัญญากู้ยืมเงิน เพื่อให้ผู้มีหน้าที่จ่ายเงินได้พึงประเมินตามมาตรา 40 (1) แห่งประมวล รัษฎากร หักเงินได้พึงประเมิน<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ของตนตามจำนวนที่กองทุนแจ้งให้ทราบเพื่อชำระเงินกู้ยืมเพื่อการศึกษาคืนกองทุน</td>	<td ALIGN="CENTER"><input type="radio" name="op3" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- แจ้งสถานะการเป็นผู้กู้ยืมเงินต่อหัวหน้าหน่วยงานภาครัฐหรือเอกชนที่ผู้กู้ยืมทำงานด้วยภายในสามสิบวันนับแต่ วันที่เริ่มปฏิบัติงาน<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;และยินยอมให้หักเงินได้พึงประเมินของตนเพื่อดำเนินการตามมาตรา 51</td>	<td ALIGN="CENTER"><input type="radio" name="op3" Value="2"></td></tr>
<tr> <td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ยินยอมให้กองทุนเข้าถึงข้อมูลส่วนบุคคลของตนที่อยู่ในครอบครองของบุคคลอื่น รวมทั้งยินยอมให้กองทุน เปิดเผยข้อมูลเกี่ยวกับการกู้ยืมเงิน<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;และการชำระเงินคืนกองทุน</td>	<td ALIGN="CENTER"><input type="radio" name="op3" Value="3"></td></tr>
<tr> <td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ถูกทุกข้อ</td>	<td ALIGN="CENTER"><input type="radio" name="op3" Value="4"></td></tr>


<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">4. ตาม พ.ร.บ.กองทุนเงินให้กู้ยืมเพื่อการศึกษา พ.ศ. 2560 และที่แก้ไขเพิ่มเติม (ฉบับที่ 2) พ.ศ. 2566 เงินกู้ยืมเพื่อการศึกษาหมายถึงข้อใด</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ค่าเล่าเรียน และค่าใช้จ่ายที่เกี่ยวเนื่องกับการศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op4" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ค่าเล่าเรียน ค่าใช้จ่ายที่เกี่ยวเนื่องกับการศึกษาและค่าครองชีพ</td>	<td ALIGN="CENTER"><input type="radio" name="op4" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ค่าเล่าเรียน และค่าครองชีพ</td>	<td ALIGN="CENTER"><input type="radio" name="op4" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ค่าเล่าเรียน และค่าหอพัก</td>	<td ALIGN="CENTER"><input type="radio" name="op4" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">5. ข้อใดเป็นคุณสมบัติทั่วไปและลักษณะต้องห้ามของนักเรียนหรือนักศึกษาที่ขาดแคลนทุนทรัพย์</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- มีสัญชาติไทย</td>	<td ALIGN="CENTER"><input type="radio" name="op5" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- มีรายได้ต่อครอบครัว ไม่เกิน 360,000 บาท/ปี</td>	<td ALIGN="CENTER"><input type="radio" name="op5" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ไม่เคยเป็นผู้สำเร็จการศึกษาระดับปริญญาตรีในสาขาใดๆ มาก่อน</td>	<td ALIGN="CENTER"><input type="radio" name="op5" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ถูกทุกข้อ</td>	<td ALIGN="CENTER"><input type="radio" name="op5" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">6.	ข้อใดเป็นคุณสมบัติทั่วไปและลักษณะต้องห้ามของนักเรียนหรือนักศึกษาที่ศึกษาในสาขาวิชาที่เป็นความต้องการหลัก ซึ่งมีความชัดเจนของการผลิต<br />&nbsp;&nbsp;&nbsp;&nbsp;กำลังคนและมีความจำเป็นต่อการพัฒนาประเทศ</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ไม่เคยเป็นผู้สำเร็จการศึกษาระดับปริญญาตรีในสาขาใดๆ มาก่อน</td>	<td ALIGN="CENTER"><input type="radio" name="op6" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เป็นผู้ที่เข้าศึกษาในระดับการศึกษาและหลักสูตร/ประเภทวิชาและสาขาวิชาเป็นไปตามประกาศที่คณะกรรมการกำหนด</td>	<td ALIGN="CENTER"><input type="radio" name="op6" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ไม่เป็นบุคคลล้มละลาย</td>	<td ALIGN="CENTER"><input type="radio" name="op6" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ถูกทุกข้อ</td>	<td ALIGN="CENTER"><input type="radio" name="op6" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">7. ข้อใด<u><strong>มิใช่</strong></u>คุณสมบัติเฉพาะของนักเรียนหรือนักศึกษาที่ในสาขาวิชาขาดแคลนหรือสาขาวิชาที่มุ่งส่งเสริมเป็นพิเศษ</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เป็นผู้ที่ศึกษาในสาขาวิชาขาดแคลนหรือสาขาวิชาที่มุ่งส่งเสริมเป็นพิเศษ ตามประกาศคณะกรรมการกองทุนฯ</td>	<td ALIGN="CENTER"><input type="radio" name="op7" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เป็นผู้ที่มีอายุไม่เกิน 35 ปีบริบูรณ์ ในปีการศึกษาที่ยื่นกู้คำขอกู้ยืมเงินกองทุนครั้งแรก</td>	<td ALIGN="CENTER"><input type="radio" name="op7" Value="2"></td></tr>
<tr> <td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เป็นผู้ที่เข้าศึกษาในระดับ ปวช. และหลักสูตร/ประเภทวิชาและสาขาวิชาเป็นไปตามประกาศที่คณะกรรมการกำหนด</td>	<td ALIGN="CENTER"><input type="radio" name="op7" Value="3"></td></tr>
<tr> <td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เป็นผู้ที่ทำประโยชน์ต่อสังคมหรือสาธารณะในระหว่างปีการศึกษาก่อนหน้าปีการศึกษาที่จะขอกู้ยืมเงิน</td>	<td ALIGN="CENTER"><input type="radio" name="op7" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">8. ข้อใด<u><strong>มิใช่</strong></u>ลักษณะต้องห้ามของนักเรียนหรือนักศึกษาที่จะขอกู้ยืมเงินเพื่อการศึกษา</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เป็นผู้สำเร็จการศึกษาระดับปริญญาตรีในสาขาใดสาขาหนึ่งมาก่อน เว้นแต่จะได้กำหนดเป็นอย่างอื่นใน คุณสมบัติเฉพาะสำหรับการให้เงินกู้ยืม<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เพื่อการศึกษาลักษณะหนึ่งลักษณะใด</td>	<td ALIGN="CENTER"><input type="radio" name="op8" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เป็นบุคคลล้มละลาย</td>	<td ALIGN="CENTER"><input type="radio" name="op8" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เป็นผู้ที่เรียนดี มีความประพฤติดี</td>	<td ALIGN="CENTER"><input type="radio" name="op8" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เป็นผู้ที่เป็นหรือเคยเป็นผู้ที่ผิดนัดชำระหนี้กับกองทุน เว้นแต่จะได้ชำระหนี้ดังกล่าวครบถ้วนแล้ว</td>	<td ALIGN="CENTER"><input type="radio" name="op8" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">9. กรณีที่ผู้กู้ยืมเสียชีวิต ผู้บริหารสถานศึกษาต้องรายงานผ่านระบบ DSL ภายในกี่วัน</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 7 วัน</td>	<td ALIGN="CENTER"><input type="radio" name="op9" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 15 วัน</td>	<td ALIGN="CENTER"><input type="radio" name="op9" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 30 วัน</td>	<td ALIGN="CENTER"><input type="radio" name="op9" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- รายงานทันทีที่ทราบ</td>	<td ALIGN="CENTER"><input type="radio" name="op9" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">10. กรณีที่สถานศึกษาตรวจสอบแล้วพบว่าผู้กู้ยืมเงิน<u><strong>ไม่ได้ลงทะเบียนเรียน</strong></u> สถานศึกษาต้องรายงานผ่านระบบ DSL ภายในกี่วัน</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 15 วัน</td>	<td ALIGN="CENTER"><input type="radio" name="op10" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 30 วัน</td>	<td ALIGN="CENTER"><input type="radio" name="op10" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 45 วัน</td>	<td ALIGN="CENTER"><input type="radio" name="op10" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- รายงานทันทีที่ทราบ</td>	<td ALIGN="CENTER"><input type="radio" name="op10" Value="4"></td></tr>
</table>
<br /><br />


<table width="1000" border="1"  cellSpacing="0" cellPadding="5">
<tr ALIGN="LEFT" BGCOLOR="#ccffcc"><td><strong>หมวดที่ 2  การลงทะเบียนเข้าใช้งาน และการบริหารจัดการสิทธิ์ของผู้ใช้งานในระบบ DSL ของสถานศึกษา</strong></td>	<td width="50"><strong><center>เลือก</center></strong></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">11. ผู้ใช้งานระบบ DSL สามารถลงทะเบียนเข้าใช้งานระบบได้โดยใช้ข้อมูลใดในการลงทะเบียน</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ลงทะเบียนด้วย E-mail</td>	<td ALIGN="CENTER"><input type="radio" name="op11" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ลงทะเบียนด้วยเลขบัตรประจำตัวประชาชน</td>	<td ALIGN="CENTER"><input type="radio" name="op11" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ลงทะเบียนด้วยบัญชีเดียวกับ Facebook</td>	<td ALIGN="CENTER"><input type="radio" name="op11" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ลงทะเบียนด้วยรหัสสถานศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op11" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">12. การใช้งานระบบ DSL สามารถเข้าใช้งานผ่านช่องทางใดได้บ้าง</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- Facebook  และ Line@กยศ.สถานศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op12" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เว็บไซต์กองทุน  และ Facebook</td>	<td ALIGN="CENTER"><input type="radio" name="op12" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เว็บไซต์กองทุน และ แอปพลิเคชั่น กยศ.Connect </td>	<td ALIGN="CENTER"><input type="radio" name="op12" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เว็บไซต์ของสถานศึกษา และ Line@กยศ.</td>	<td ALIGN="CENTER"><input type="radio" name="op12" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">13. สถานศึกษาต้องกำหนดสิทธิ์สำหรับผู้ใช้งานระบบ DSL ใดบ้าง</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้ดูแลระบบ,ผู้จัดการสิทธิ์สูงสุด และผู้ทำรายการ</td>	<td ALIGN="CENTER"><input type="radio" name="op13" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้จัดการสิทธิ์สูงสุด,ผู้ทำรายการ และผู้ตรวจสอบรายการ</td>	<td ALIGN="CENTER"><input type="radio" name="op13" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้จัดการสิทธิ์สูงสุด ผู้ตรวจสอบรายการ และผู้ดูแลระบบ</td>	<td ALIGN="CENTER"><input type="radio" name="op13" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้ดูแลระบบ,ผู้ทำรายการ และผู้ตรวจสอบรายการ</td>	<td ALIGN="CENTER"><input type="radio" name="op13" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">14. การกำหนดสิทธิ์การใช้งานในระบบ DSL ผู้ใช้งานใดที่ไม่สามารถเป็นบุคคลเดียวกันได้</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้ดูแลระบบ และผู้ทำรายการ</td>	<td ALIGN="CENTER"><input type="radio" name="op14" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้ทำรายการ และผู้ตรวจสอบรายการ</td>	<td ALIGN="CENTER"><input type="radio" name="op14" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้จัดการสิทธิ์สูงสุด และผู้ตรวจสอบรายการ</td>	<td ALIGN="CENTER"><input type="radio" name="op14" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้ดูแลระบบ และผู้ตรวจสอบรายการ</td>	<td ALIGN="CENTER"><input type="radio" name="op14" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">15. กรณีผู้จัดการสิทธิ์สูงสุด (Superuser)  ลืมรหัสผ่าน สถานศึกษาต้องทำอย่างไร</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- รีเซ็ตรหัสผ่านด้วยตนเอง</td>	<td ALIGN="CENTER"><input type="radio" name="op15" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สร้าง User ใหม่</td>	<td ALIGN="CENTER"><input type="radio" name="op15" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ติดต่อเจ้าหน้าที่กองทุน</td>	<td ALIGN="CENTER"><input type="radio" name="op15" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ติดต่อเจ้าหน้าที่ธนาคาร</td>	<td ALIGN="CENTER"><input type="radio" name="op15" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">16. สถานศึกษาต้องใช้รหัสผู้ใช้งานใดเพื่อแก้ไขข้อมูลการติดต่อสถานศึกษา</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้ทำรายการ (Maker)</td>	<td ALIGN="CENTER"><input type="radio" name="op16" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้ตรวจสอบรายการ (Checker)</td>	<td ALIGN="CENTER"><input type="radio" name="op16" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้จัดการสิทธิ์สูงสุด (Superuser)</td>	<td ALIGN="CENTER"><input type="radio" name="op16" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ถูกทุกข้อ</td>	<td ALIGN="CENTER"><input type="radio" name="op16" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">17. การเตรียมการให้กู้ยืมโดยสถานศึกษารายการใดมิใช่สิทธิ์ของผู้ทำรายการ (Maker)</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- รายงานสถานภาพการศึกษาของผู้กู้ยืม</td>	<td ALIGN="CENTER"><input type="radio" name="op17" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- บันทึกปฏิทินการศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op17" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- บันทึกค่าใช้จ่ายตามหลักสูตร</td>	<td ALIGN="CENTER"><input type="radio" name="op17" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- บันทึกค่าใช้จ่ายตามที่ผู้กู้ยืมเงินลงทะเบียนจริง</td>	<td ALIGN="CENTER"><input type="radio" name="op17" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">18. การเตรียมการให้กู้ยืมโดยสถานศึกษารายการใดที่ต้องทำการบันทึกข้อมูลโดยสิทธิ์ของผู้ทำรายการ (Maker)</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- บันทึกค่าใช้จ่ายตามที่ผู้กู้ยืมเงินลงทะเบียนจริง</td>	<td ALIGN="CENTER"><input type="radio" name="op18" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ยืนยันและแก้ไขข้อมูลการติดต่อของสถานศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op18" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- บันทึกค่าใช้จ่ายตามหลักสูตร</td>	<td ALIGN="CENTER"><input type="radio" name="op18" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ตรวจสอบคำขอกู้ยืมเงิน</td>	<td ALIGN="CENTER"><input type="radio" name="op18" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">19. สถานศึกษาต้องใช้รหัสผู้ใช้งานใดเพื่อบันทึกรายงานสถานภาพการศึกษาของผู้กู้ยืมเงิน</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้จัดการสิทธิ์สูงสุด (Superuser)</td>	<td ALIGN="CENTER"><input type="radio" name="op19" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้ทำรายการ (Maker)</td>	<td ALIGN="CENTER"><input type="radio" name="op19" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้ตรวจสอบรายการ (Checker)</td>	<td ALIGN="CENTER"><input type="radio" name="op19" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ถูกทุกข้อ</td>	<td ALIGN="CENTER"><input type="radio" name="op19" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">20. การบันทึกค่าใช้จ่ายตามที่ผู้กู้ยืมเงินลงทะเบียนจริงในระบบ DSL ต้องใช้รหัสผู้ใช้งานใด</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้จัดการสิทธิ์สูงสุด (Superuser)</td>	<td ALIGN="CENTER"><input type="radio" name="op20" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้ทำรายการ (Maker)</td>	<td ALIGN="CENTER"><input type="radio" name="op20" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้ดูแลระบบ (Admin)</td>	<td ALIGN="CENTER"><input type="radio" name="op20" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้ตรวจสอบรายการ (Checker)</td>	<td ALIGN="CENTER"><input type="radio" name="op20" Value="4"></td></tr>
</table>
<br /><br />


<table width="1000" border="1"  cellSpacing="0" cellPadding="5">
<tr ALIGN="LEFT" BGCOLOR="#ccffcc"><td><strong>หมวดที่ 3  การเตรียมการให้กู้ยืม และการรายงานสถานภาพการศึกษา</strong></td>	<td width="50"><strong><center>เลือก</center></strong></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">21. การบันทึกปฏิทินการศึกษา และค่าใช้จ่ายตามหลักสูตรสถานศึกษาสามารถบันทึกในระบบ DSL ได้เมื่อใด</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ก่อนการให้กู้ยืมประจำปีการศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op21" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ระหว่างการให้กู้ยืมประจำปีการศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op21" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- หลังการให้กู้ยืมประจำปีการศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op21" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ตามกำหนดการให้กู้ยืมประจำปีการศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op21" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">22. สถานศึกษาระดับใดที่ต้องดำเนินการบันทึกปฏิทินการศึกษา</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ระดับมัธยมศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op22" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ระดับอาชีวศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op22" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ระดับอุดมศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op22" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ถูกทุกข้อ</td>				<td ALIGN="CENTER"><input type="radio" name="op22" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">23. กรณีที่กองทุนไม่มีผลการประเมินคุณภาพภายในของสถานศึกษาหรือมีผลประเมินแต่ไม่ผ่านเกณฑ์ที่กองทุนกำหนด<br />&nbsp;&nbsp;&nbsp;&nbsp;สถานศึกษาจะสามารถให้กู้ยืมกับผู้กู้ยืมประเภทใดได้บ้าง</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- เฉพาะรายเก่าเลื่อนชั้นปีเท่านั้น</td>				<td ALIGN="CENTER"><input type="radio" name="op23" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- รายใหม่ และรายเก่าเปลี่ยนระดับการศึกษา</td>								<td ALIGN="CENTER"><input type="radio" name="op23" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- รายใหม่  และรายเก่าเลื่อนชั้นปี</td>	<td ALIGN="CENTER"><input type="radio" name="op23" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- รายเก่าเปลี่ยนระดับการศึกษา และรายเก่าเลื่อนชั้นปี</td>								<td ALIGN="CENTER"><input type="radio" name="op23" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">24. หลังจากที่สถานศึกษาบันทึกค่าใช้จ่ายตามหลักสูตรเรียบร้อยแล้ว ขั้นตอนต่อไปสถานศึกษาต้องดำเนินการอย่างไร</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- อนุมัติค่าใช้จ่ายตามหลักสูตรโดยผู้ทำรายการ (Maker)</td>					<td ALIGN="CENTER"><input type="radio" name="op24" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- อนุมัติค่าใช้จ่ายตามหลักสูตรโดยผู้ตรวจสอบรายการ (Checker)</td>		<td ALIGN="CENTER"><input type="radio" name="op24" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- อนุมัติค่าใช้จ่ายตามหลักสูตรโดยผู้จัดการสิทธิ์สูงสุด (Superuser)</td>	<td ALIGN="CENTER"><input type="radio" name="op24" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ถูกทุกข้อ</td>																				<td ALIGN="CENTER"><input type="radio" name="op24" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">25. สถานศึกษาต้องรายงานสถานภาพการศึกษากรณีใดบ้าง</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สำเร็จการศึกษา</td>					<td ALIGN="CENTER"><input type="radio" name="op25" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ศึกษาต่อ</td>							<td ALIGN="CENTER"><input type="radio" name="op25" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ลาออก/พ้นสภาพการศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op25" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ถูกทุกข้อ</td>							<td ALIGN="CENTER"><input type="radio" name="op25" Value="4"></td></tr>
</table>
<br /><br />


<table width="1000" border="1"  cellSpacing="0" cellPadding="5">
<tr ALIGN="LEFT" BGCOLOR="#ccffcc"><td><strong>หมวด 4 การยื่นคำขอกู้ยืม - การคืนเงิน</strong></td>	<td width="50"><strong><center>เลือก</center></strong></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">26. ขั้นตอนการให้กู้ยืมเงินผ่านระบบ DSL มีทั้งหมดกี่ขั้นตอน</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 3 ขั้นตอน</td>	<td ALIGN="CENTER"><input type="radio" name="op26" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 5 ขั้นตอน</td>	<td ALIGN="CENTER"><input type="radio" name="op26" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 7 ขั้นตอน</td>	<td ALIGN="CENTER"><input type="radio" name="op26" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 9 ขั้นตอน</td>	<td ALIGN="CENTER"><input type="radio" name="op26" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">27. กรณีที่ผู้กู้ยืมเงินรายใหม่ที่มีอายุไม่เกิน 20 ปีบริบูรณ์ จะต้องนำส่งเอกสารอะไรบ้าง</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สัญญากู้ยืมเงิน แบบยืนยันการเบิกเงินกู้ยืม</td>	<td ALIGN="CENTER"><input type="radio" name="op27" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สัญญากู้ยืมเงิน สำเนาบัตรประจำตัวประชาชนผู้กู้ยืมเงิน สำเนาบัตรประจำตัวประชาชนผู้แทนโดยชอบธรรม แบบยืนยันการเบิกเงินกู้ยืม</td>	<td ALIGN="CENTER"><input type="radio" name="op27" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- แบบยืนยันการเบิกเงินกู้ยืม สำเนาบัตรประจำตัวประชาชนผู้กู้ยืมเงิน สำเนาบัตรประจำตัวประชาชนผู้แทนโดยชอบธรรม</td>	<td ALIGN="CENTER"><input type="radio" name="op27" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สัญญากู้ยืมเงิน สำเนาบัตรประจำตัวประชาชนผู้กู้ยืมเงิน หนังสือรับรองจากสถานศึกษา สำเนาบัตรประจำตัวประชาชนผู้แทนโดยชอบธรรม<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แบบยืนยันการเบิกเงินกู้ยืม</td>	<td ALIGN="CENTER"><input type="radio" name="op27" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">28. กรณีที่ผู้กู้ยืมเงินรายเก่าเลื่อนชั้นปีที่มีอายุไม่เกิน 20 ปีบริบูรณ์ จะต้องนำส่งเอกสารอะไรบ้าง</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- แบบยืนยันการเบิกเงินกู้ยืม สำเนาบัตรประจำตัวประชาชนของผู้กู้ยืมเงิน สำเนาบัตรประจำตัวประชาชนของผู้แทน โดยชอบธรรม/ผู้ปกครอง<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เอกสารอื่น (ถ้ามี)</td>	<td ALIGN="CENTER"><input type="radio" name="op28" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สัญญากู้ยืมเงิน แบบยืนยันการเบิกเงินกู้ยืม สำเนาบัตรประจำตัวประชาชนของผู้กู้ยืมเงิน เอกสารอื่น (ถ้ามี)</td>	<td ALIGN="CENTER"><input type="radio" name="op28" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สัญญากู้ยืมเงิน สำเนาบัตรประจำตัวประชาชนของผู้กู้ยืมเงิน สำเนาบัตรประจำตัวประชาชนของผู้แทนโดยชอบธรรม/ผู้ปกครอง<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เอกสารอื่น (ถ้ามี)</td>	<td ALIGN="CENTER"><input type="radio" name="op28" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สัญญากู้ยืมเงิน แบบยืนยันการเบิกเงินกู้ยืม สำเนาบัตรประจำตัวประชาชนของผู้แทนโดยชอบธรรม/ผู้ปกครอง เอกสารอื่น (ถ้ามี)</td>	<td ALIGN="CENTER"><input type="radio" name="op28" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">29. กรณีที่บิดา มารดาหรือผู้ปกครองไม่มีรายได้ประจำ ผู้กู้ยืมต้องใช้เอกสารใดเพื่อประกอบการพิจารณารายได้</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- หนังสือรับรองรายได้ (กยศ.102)</td>				<td ALIGN="CENTER"><input type="radio" name="op29" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- หนังสือรับรองเงินเดือน</td>	<td ALIGN="CENTER"><input type="radio" name="op29" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สลิปเงินเดือน</td>							<td ALIGN="CENTER"><input type="radio" name="op29" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ถูกทุกข้อ</td>									<td ALIGN="CENTER"><input type="radio" name="op29" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">30. กองทุนได้กำหนดคุณสมบัติให้ผู้กู้ยืมรายเก่าเลื่อนชั้นปีต้องทำกิจกรรมจิตสาธารณะที่เป็นประโยชน์ต่อสังคม ในระหว่างปีการศึกษาอย่างน้อยกี่ชั่วโมง</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ไม่น้อยกว่า 12 ชั่วโมง</td>	<td ALIGN="CENTER"><input type="radio" name="op30" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ไม่น้อยกว่า 24 ชั่วโมง</td>	<td ALIGN="CENTER"><input type="radio" name="op30" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ไม่น้อยกว่า 36 ชั่วโมง</td>	<td ALIGN="CENTER"><input type="radio" name="op30" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ไม่น้อยกว่า 48 ชั่วโมง</td>	<td ALIGN="CENTER"><input type="radio" name="op30" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">31. กองทุนร่วมมือกับหน่วยงานต่างๆ เพื่อจัดทำกิจกรรมจิตสาธารณะยกเว้นหน่วยงานใด</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- กองทุนพัฒนาบทบาทสตรี</td>			<td ALIGN="CENTER"><input type="radio" name="op31" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- กรมกิจการเด็กและเยาวชน</td>		<td ALIGN="CENTER"><input type="radio" name="op31" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- กรมพัฒนาสังคมและสวัสดิการ</td>			<td ALIGN="CENTER"><input type="radio" name="op31" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- กองทุนการออมแห่งชาติ (กอช.)</td>	<td ALIGN="CENTER"><input type="radio" name="op31" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">32. การยกเลิกสัญญากู้ยืมเงิน หรือยกเลิกแบบยืนยันการเบิกเงินกู้ยืม ใครเป็นผู้พิจารณา</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- กองทุน</td>					<td ALIGN="CENTER"><input type="radio" name="op32" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สถานศึกษา</td>				<td ALIGN="CENTER"><input type="radio" name="op32" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้กู้ยืมเงิน</td>					<td ALIGN="CENTER"><input type="radio" name="op32" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ระบบยกเลิกอัตโนมัติ</td>	<td ALIGN="CENTER"><input type="radio" name="op32" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">33. การจัดทำใบนำส่งและยืนยันจัดพิมพ์ใบนำส่งเอกสาร ต้องใช้สิทธิ์ใดในการดำเนินการ</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้ตรวจสอบรายการ (Checker)</td>	<td ALIGN="CENTER"><input type="radio" name="op33" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้ดูแลระบบ (Admin)</td>				<td ALIGN="CENTER"><input type="radio" name="op33" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้ทำรายการ	(Maker)</td>				<td ALIGN="CENTER"><input type="radio" name="op33" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ถูกทุกข้อ</td>								<td ALIGN="CENTER"><input type="radio" name="op33" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">34. สถานศึกษาใดที่<strong><u>ไม่</u></strong>ต้องดำเนินการส่งข้อมูลและส่งคืนเงิน (e-Audit) ผ่านระบบ DSL</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สถานศึกษาที่มีการกู้ยืมเฉพาะค่าเล่าเรียน</td>	<td ALIGN="CENTER"><input type="radio" name="op34" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สถานศึกษาที่มีการกู้ยืมเฉพาะค่าใช้จ่ายที่เกี่ยวเนื่องกับการศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op34" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สถานศึกษาที่มีการกู้ยืมค่าเล่าเรียนและค่าใช้จ่ายที่เกี่ยวเนื่องกับการศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op34" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สถานศึกษาที่มีการกู้ยืมเฉพาะค่าครองชีพ</td>	<td ALIGN="CENTER"><input type="radio" name="op34" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">35. กรณีที่มีเงินส่วนเกินค่าลงทะเบียนเรียน สถานศึกษาต้องดำเนินการอย่างไร</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- คืนเงินให้ผู้กู้ยืมเงิน</td>														<td ALIGN="CENTER"><input type="radio" name="op35" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- คืนเงินเข้าบัญชีของสถานศึกษา</td>										<td ALIGN="CENTER"><input type="radio" name="op35" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ไม่ต้องดำเนินการใดๆ ให้เงินอยู่ในบัญชีสถานศึกษาต่อไป</td>							<td ALIGN="CENTER"><input type="radio" name="op35" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- คืนเงินกองทุน เพื่อลดหนี้ให้กับผู้กู้ยืมเงิน</td>	<td ALIGN="CENTER"><input type="radio" name="op35" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">36. กรณีมีเงินค่าเล่าเรียนและค่าใช้จ่ายที่เกี่ยวเนื่องกับการศึกษาของผู้กู้ยืมเงินที่มิได้ใช้ลงทะเบียนเรียน สถานศึกษาต้องส่งคืนแก่กองทุนเมื่อใด</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ก่อนวันสิ้นเดือนของวันสิ้นภาคการศึกษานั้น</td>	<td ALIGN="CENTER"><input type="radio" name="op36" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ก่อนสิ้นภาคการศึกษานั้น</td>							<td ALIGN="CENTER"><input type="radio" name="op36" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- หลังจากได้รับเงินโอนภายใน 30 วัน</td>			<td ALIGN="CENTER"><input type="radio" name="op36" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- หลังจากได้รับเงินโอนภายใน 45 วัน</td>			<td ALIGN="CENTER"><input type="radio" name="op36" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">37. ปัจจุบันการลงนามในสัญญากู้ยืมเงินมีแบบใดบ้าง</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ไม่ต้องลงนาม</td>		<td ALIGN="CENTER"><input type="radio" name="op37" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- แบบอิเล็กทรอนิกส์</td>	<td ALIGN="CENTER"><input type="radio" name="op37" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- แบบกระดาษ</td>		<td ALIGN="CENTER"><input type="radio" name="op37" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- แบบ DSL</td>				<td ALIGN="CENTER"><input type="radio" name="op37" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">38. เมื่อนักเรียน/นักศึกษายื่นคำขอกู้ยืมในระบบ DSL เรียบร้อยแล้ว คำขอกู้ยืมจะถูกส่งไปให้ส่วนงานใดตรวจสอบคำขอกู้ยืมเงิน</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- กองทุน</td>								<td ALIGN="CENTER"><input type="radio" name="op38" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ผู้บริหารและจัดการเงินให้กู้ยืม</td>	<td ALIGN="CENTER"><input type="radio" name="op38" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สถานศึกษา</td>							<td ALIGN="CENTER"><input type="radio" name="op38" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ตัวแทน</td>								<td ALIGN="CENTER"><input type="radio" name="op38" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">39. สาเหตุใดที่ทำให้ผู้กู้ยืมเงินรายเก่าเลื่อนชั้นปีไม่สามารถดำเนินการยืนยันแบบเบิกเงินกู้ยืมได้</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สถานศึกษายังไม่ได้บันทึกค่าใช้จ่ายตามหลักสูตร</td>				<td ALIGN="CENTER"><input type="radio" name="op39" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สถานศึกษายังไม่ได้ดำเนินการส่งคืนเงิน (e-Audit)</td>			<td ALIGN="CENTER"><input type="radio" name="op39" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สถานศึกษายังไม่ได้ตรวจสอบคุณสมบัติของผู้กู้ยืม</td>	<td ALIGN="CENTER"><input type="radio" name="op39" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สถานศึกษายังไม่ได้บันทึกค่าใช้จ่ายตามที่ลงทะเบียนจริง</td>			<td ALIGN="CENTER"><input type="radio" name="op39" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">40. ข้อใด<u><strong>มิใช่</strong></u>รายการที่ต้องดำเนินการผ่านระบบตัวแทน</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ตรวจสอบคำขอกู้ยืมเงิน</td>	<td ALIGN="CENTER"><input type="radio" name="op40" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ลงนามสัญญากู้ยืมเงิน และ/หรือแบบยืนยันการเบิกเงินกู้ยืม</td>	<td ALIGN="CENTER"><input type="radio" name="op40" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- จัดทำใบนำส่งและยืนยันจัดพิมพ์ใบนำส่งเอกสาร</td>	<td ALIGN="CENTER"><input type="radio" name="op40" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- แก้ไขแนบเอกสารสัญญากู้ยืมเงิน และ/หรือแบบยืนยันการเบิกเงินกู้ยืม</td>	<td ALIGN="CENTER"><input type="radio" name="op40" Value="4"></td></tr>
</table>
<br /><br />


<table width="1000" border="1"  cellSpacing="0" cellPadding="5">
<tr ALIGN="LEFT" BGCOLOR="#ccffcc"><td><strong>หมวด 5 อื่นๆ</strong></td>	<td width="50"><strong><center>เลือก</center></strong></td></tr>
<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">41. ข้อใดคือช่องทางหลักสำหรับสถานศึกษาในการติดต่อสื่อสารกับกองทุน</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- Line @ กยศ.</td>							<td ALIGN="CENTER"><input type="radio" name="op41" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- Line @ กยศ.สถานศึกษา</td>			<td ALIGN="CENTER"><input type="radio" name="op41" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- Line @ กยศ.ผู้กู้ยืม</td>					<td ALIGN="CENTER"><input type="radio" name="op41" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- Line @ กยศ.เจ้าหน้าที่กองทุน</td>	<td ALIGN="CENTER"><input type="radio" name="op41" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">42. การจ่ายเงินค่าเล่าเรียนและค่าใช้จ่ายที่เกี่ยวเนื่องกับการศึกษา กองทุนจะจ่ายเข้าบัญชีของสถานศึกษาทุกวันที่เท่าไหร่ของเดือน</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 7 14 และ 21</td>	<td ALIGN="CENTER"><input type="radio" name="op42" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 10 20 และ 30</td>	<td ALIGN="CENTER"><input type="radio" name="op42" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 5 15 และ 25</td>	<td ALIGN="CENTER"><input type="radio" name="op42" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 1 และ 16</td>			<td ALIGN="CENTER"><input type="radio" name="op42" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">43. กรณีมีดอกผลเกิดจากบัญชีกองทุนเงินให้กู้ยืมเพื่อการศึกษา สถานศึกษามีการดำเนินการอย่างไร</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ไม่ดำเนินการใดๆ</td>	<td ALIGN="CENTER"><input type="radio" name="op43" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- โอนเงินเข้าบัญชีของสถานศึกษาโดยตรง</td>															<td ALIGN="CENTER"><input type="radio" name="op43" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- โอนเงินให้เจ้าหน้าที่ที่ดูแลงานกองทุนของสถานศึกษา</td>								<td ALIGN="CENTER"><input type="radio" name="op43" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- โอนเงินดอกผลเข้าบัญชีเงินค่าใช้จ่ายในการบริหารงานกองทุน</td>			<td ALIGN="CENTER"><input type="radio" name="op43" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">44. เมื่อใดที่สถานศึกษาต้องจัดทำรายงานการรับจ่ายเงินค่าใช้จ่ายในการบริหารงานกองทุนประจำปีส่งให้แก่กองทุนเพื่อทราบ</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สิ้นสุด ณ 31 มกราคม</td>	<td ALIGN="CENTER"><input type="radio" name="op44" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สิ้นสุด ณ 30 มิถุนายน</td>	<td ALIGN="CENTER"><input type="radio" name="op44" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สิ้นสุด ณ 30 กันยายน</td>	<td ALIGN="CENTER"><input type="radio" name="op44" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- สิ้นสุด ณ 31 ธันวาคม</td>	<td ALIGN="CENTER"><input type="radio" name="op44" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">45. สถานศึกษาใช้บัญชีใดรับเงินค่าเล่าเรียนและค่าใช้จ่ายที่เกี่ยวเนื่องกับการศึกษาของสถานศึกษา</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- บัญชีกองทุนเงินให้กู้ยืมเพื่อการศึกษาของ ระบุชื่อสถานศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op45" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- บัญชี ระบุชื่อสถานศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op45" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- บัญชีค่าใช้จ่ายในการบริหารงานกองทุนเงินให้กู้ยืมเพื่อการศึกษาของ ระบุชื่อสถานศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op45" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- บัญชี ระบุชื่อเจ้าหน้าที่ของสถานศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op45" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">46. สถานศึกษาใช้บัญชีใดรับเงินค่าใช้จ่ายในการบริหารงานกองทุนของสถานศึกษา</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- บัญชีเงินอุดหนุนของ ระบุชื่อสถานศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op46" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- บัญชีค่าใช้จ่ายในการบริหารงานกองทุนเงินให้กู้ยืมเพื่อการศึกษาของ ระบุชื่อสถานศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op46" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- บัญชี ระบุชื่อสถานศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op46" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- บัญชีกองทุนเงินให้กู้ยืมเพื่อการศึกษาของ ระบุชื่อสถานศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op46" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3"><font style="font-size:98%;">47. กองทุนจะโอนเงินค่าครองชีพเดือนแรกให้กับผู้กู้ยืมภายในกี่วัน นับจากวันที่สถานศึกษายืนยันการลงนามแบบยืนยันการเบิกเงินในระบบ DSL เรียบร้อยแล้ว</font></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 15 วัน</td>	<td ALIGN="CENTER"><input type="radio" name="op47" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 30 วัน</td>	<td ALIGN="CENTER"><input type="radio" name="op47" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 45 วัน</td>	<td ALIGN="CENTER"><input type="radio" name="op47" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 60 วัน</td>	<td ALIGN="CENTER"><input type="radio" name="op47" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">48. การจัดส่งสัญญากู้ยืมเงินและ/หรือแบบยืนยันการเบิกเงินกู้ยืม และเอกสารประกอบการกู้ยืม สถานศึกษาต้องดำเนินการส่งเอกสารไปที่ใด</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- กองทุนเงินให้กู้ยืมเพื่อการศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op48" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ธนาคารแห่งประเทศไทย</td>	<td ALIGN="CENTER"><input type="radio" name="op48" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ต้นสังกัดของสถานศึกษา</td>	<td ALIGN="CENTER"><input type="radio" name="op48" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- ธนาคารกรุงไทยและ/หรือธนาคารอิสลามแห่งประเทศไทย</td>	<td ALIGN="CENTER"><input type="radio" name="op48" Value="4"></td></tr>


<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">49. กองทุนได้กำหนดให้ผู้กู้ยืมเงินรายเก่าเลื่อนชั้นปีทุกระดับการศึกษาต้องเข้าร่วมโครงการ/กิจกรรมที่มีประโยชน์ต่อสังคมหรือสาธารณะที่เชื่อถือได้กี่ชั่วโมง </td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 32 ชั่วโมง</td>	<td ALIGN="CENTER"><input type="radio" name="op49" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 34 ชั่วโมง</td>	<td ALIGN="CENTER"><input type="radio" name="op49" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 36 ชั่วโมง</td>	<td ALIGN="CENTER"><input type="radio" name="op49" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 38 ชั่วโมง</td>	<td ALIGN="CENTER"><input type="radio" name="op49" Value="4"></td></tr>

<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">50. 50.	หลักสูตรภาคบังคับที่ผู้กู้ยืมเงินจะต้องผ่านหลักสูตรการพัฒนาทักษะทางการเงิน สำหรับผู้กู้ยืมเงินในระดับ ปวส. และระดับปริญญาตรี จำนวนกี่ชั่วโมง</td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 3 ชั่วโมง</td>	<td ALIGN="CENTER"><input type="radio" name="op50" Value="1"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 6 ชั่วโมง</td>	<td ALIGN="CENTER"><input type="radio" name="op50" Value="2"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 7 ชั่วโมง</td>	<td ALIGN="CENTER"><input type="radio" name="op50" Value="3"></td></tr>
<tr><td ALIGN="LEFT">&nbsp;&nbsp;&nbsp;&nbsp;- 8 ชั่วโมง</td>	<td ALIGN="CENTER"><input type="radio" name="op50" Value="4"></td></tr>
</table>
<br /><br />


<table width="1000" border="1"  cellSpacing="0" cellPadding="5">
<tr ALIGN="LEFT" BGCOLOR="#ccffcc"><td colspan="3"><strong>หมวด 6 ข้อเสนอแนะ</strong></td>	</tr>
<tr BGCOLOR="#c0c0c0"><td ALIGN="LEFT" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การดำเนินงานการให้กู้ยืมผ่านระบบ DSL ในระยะเวลา 1 ปีที่ผ่านมาท่านเห็นว่าระบบมีประสิทธิภาพเพียงพอต่อการให้กู้ยืมหรือไม่ ขั้นตอนใดบ้าง และมีอย่างไร</td></tr>
<tr><td ALIGN="LEFT" rowspan="2" width="80">&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="op51" Value="Y"  onclick="if (this.checked){
								this.form.Y1.disabled = false;
								this.form.Y2.disabled = false;
								this.form.N1.disabled = true;
								this.form.N2.disabled = true;
							 }
                                        "> มี</td>	<td ALIGN="LEFT" width="180">ขั้นตอน  </td><td ALIGN="LEFT" ><textarea name="Y1" rows="" cols="50"></textarea>  </td></tr>
<TR><TD>อธิบายรายละเอียด</TD><TD><textarea name="Y2" rows="" cols="50"></textarea></TD></TR>


<tr><td ALIGN="LEFT" rowspan="2">&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="op51" Value="N" onclick="if (this.checked){
								this.form.Y1.disabled = true;
								this.form.Y2.disabled = true;
								this.form.N1.disabled = false;
								this.form.N2.disabled = false;
							 }
                                        "> ไม่มี</td>	<td ALIGN="LEFT">ขั้นตอน  </td><td ALIGN="LEFT" ><textarea name="N1" rows="" cols="50"></textarea></td></tr>
<TR><TD>อธิบายรายละเอียด</TD><TD><textarea name="N2" rows="" cols="50"></textarea></TD></TR>
</table>

</center>
</TD>
</TR>

<TR>
<TD>
<?php	$ddd=date("d-m-").$Y; ?>


<INPUT TYPE="hidden" NAME="key_date" VALUE="<?php echo $ddd;?>">
<INPUT TYPE="hidden" NAME="sch_id" VALUE="<?php echo $id_sch;?>">
<input type="hidden" name="province" VALUE='<?php echo $province;?>'>
<input type="hidden" name="school_type" VALUE="<?php echo $school_type;?>">
<INPUT TYPE="hidden" NAME="univ_name" VALUE="<?php echo $univ_name;?>">
<br>
<CENTER><INPUT  TYPE="submit" name="ok" value="ส่งข้อมูล"></CENTER>

<BR></TD>
</TR>
</FORM>
</TABLE>
</CENTER>
<!-- ปิดตาราง 4 -->
<BR></TD></TR>
</Table> 
<!-- ปิดตาราง 1 --></CENTER>
<FONT SIZE="2" COLOR="#0000FF"><CENTER><BR>
กองทุนเงินให้กู้ยืมเพื่อการศึกษา (กยศ.) เลขที่ 89 อาคาร เอไอเอ แคปปิตอล เซ็นเตอร์ ชั้น 5-6 ถนน รัชดาภิเษก แขวงดินแดง เขตดินแดง กทม. 10400<BR>
<?php 
}
?>
  </CENTER>
 </BODY>
</HTML>
