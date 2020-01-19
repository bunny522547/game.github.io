<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ยางพารา</title>
<style type="text/css">
.cd {
	font-size: 64px;
	font-weight: bold;
}
body {
	background-color: #FFF;
	background-image: url(000);
	font-size: 24px;
	font-family: "Comic Sans MS", cursive;
}
.t {
	font-size: x-large;
}
.o {
}
.i {
	font-size: 18px;
}
.y {
	font-size: 18px;
}
.y {
	color: #000;
}
.y {
	font-size: larger;
}
.พลิกชีวิต{
	font-weight: normal;
	font-size: xx-large;
}
.Change {
	font-size: xx-large;
}
taki taki {
	font-size: large;
}
</style>

</head>
    <body tracingsrc="6.png" tracingopacity="20">
    <center>
      <p><span class="cd">Change agriculturist's life<br></span><span class="Change"><span class="พลิกชีวิต">(พลิกชีวิตเกษตรกร)</span></span><span class="cd"><br>
      </span><span class="y">- กรุณากรอกค่าปุ๋ยในช่องที่กำหนด-<br>
      </span></p>
    </center>
    <center><form method="post" action="showrubber1.php">  
    <table width="721" border="0" cellpadding="3" cellspacing="2">
 <tr>
    <td width="174" bgcolor="#C1CBCB">สูตรปุ๋ยที่ต้องการ</td>ช่วงอายุของยางพารา
    <form id="form1" name="form1" method="post" action="">
      <label for="prefix1"></label>
      <select name="prefix1" size = "1" class="i" id="prefix1">
        <option value="1">1-2 ปี</option>
        <option value="2">3-6 ปี</option>
        <option value="3">7-15 ปี</option>
        <option value="4">15 ปีขึ้นไป</option>
      </select> 
    </form>
    
    <td width="529" bgcolor="#F2F5F5"><div align="left">
    ไนโตรเจน : <input type="text" name="nitrogen" size="14" />
    <br>ฟอสฟอรัส : <input type="text" name="phosphorus" size="14" />
    <br>โพแทสเซียม : <input type="text" name="potasium" size="14" />
    
     <br>ปลูก : <label for="prefix2"></label><input type="text" name="area" size="16" />
     <select name="prefix2" size = "1" class="i" id="prefix2">
       <option value="1">ไร่</option>
       <option value="2">งาน</option>
       <option value="3">ตารางวา</option>
     </select>
     <br>เลือกแม่ปุ๋ยไนโตรเจน: 
     <select name="prefix3" size = "1" class="i" id="prefix2">
       <option value="1">46-0-0</option>
       <option value="2">21-0-0</option>
     </select>
     <br>
      
            <input type="submit" value="คำนวณ">
             <input type="reset" value="ยกเลิก">
    </form>
    </div></td>
  
  </tr>
  <tr>
  </table>
</body>
</html>