<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/menu.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/main.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/header.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/table.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/font.css">
<div class="addMember">

<script>
function alertCheck(c,message){
	if(c==false){
		alert(message);
	}
}

function checktel(tel){

	if(tel*1==tel&&tel>0&&tel[0]==0){
		if(tel.length==10){
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
	
}
function main(){
	var c = true;
			c =checktel(document.getElementById('tel').value);
			alertCheck(c,'กรุณาใส่เบอร์โทรให้ถูกต้อง');
			return c;
		
		
	}
</script>



<form action="<?php echo base_url(); ?>index.php/admin/addMember" method="post" onSubmit="return main()">

<div class="table" align="center">
<table width="43%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td height="33" colspan="2" align="center" bgcolor="#0FCFB4">เพิ่มสมาชิก</td>
    </tr>
    <tr>
      <td height="33" align="right">ชื่อเข้าใช้งานระบบ :</td>
      <td><input type="text" name="memberUsername" id="memberUsername"></td>
    </tr>
    <tr>
      <td height="37" align="right">รหัสผ่าน :</td>
      <td><input type="password" name="memberPassword" id="memberPassword"></td>
    </tr>
    <tr>
      <td height="33" align="right">ชื่อ :</td>
      <td><input type="text" name="memberName" id="memberName"></td>
    </tr>
    <tr>
      <td height="37" align="right">นามสกุล :</td>
      <td><input type="text" name="memberLastname" id="memberLastname"></td>
    </tr>
    <tr>
      <td height="40" align="right">เพศ :</td>
      <td><select name="memberSex" id="memberSex">
          <option value="man">ชาย</option>
          <option value="owman">หญิง</option>
      </select></td>
    </tr>
    <tr>
      <td height="31" align="right">ตำแหน่ง :</td>
      <td><input type="text" name="memberPosition" id="memberPosition"></td>
    </tr>
    <tr>
      <td height="30" align="right">วันเกิด :</td>
      <td><input type="date" name="memberBirthday" id="memberBirthday"></td>
    </tr>
     <tr>
      <td height="31" align="right">ที่อยู่ :</td>
      <td><input type="text" name="memberAddress" id="memberAddress"></td>
    </tr>
       <tr>
      <td height="31" align="right">เบอร์โทร :</td>
      <td><input type="text" name="memberTel" id="tel"></td>
    </tr>
    <tr>
      <td height="40" align="right">สถานะ</td>
      <td><select name="memberStatus" id="memberStatus">
          <option value="boss">ประธาน</option>
          <option value="member">กรรมการ</option>
      </select></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#0FCFB4"><input type="submit" name="submit" id="submit" value="บันทึกข้อมูล"></td>
    </tr>
  </tbody>
</table>
</div>
</form>
</div>