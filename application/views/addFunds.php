<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/menu.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/main.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/header.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/table.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/font.css">
<div class="addFunds">

<script>
function alertCheck(c,message){
	if(c==false){
		alert(message);
	}
}

function checknum(num){
	if(num*1!=num){
		return false;
	}else{
		return true;
	}
}

function checkmiuns(num){
	if(num<0){
		return false;
	}else{
		return true;
	}
}

function main(){
	var c = true;
	c = checknum(document.getElementById('num').value);
	alertCheck(c,'กรุณากรอกตัวเลข');
	if(c==true){
		c = checkmiuns(document.getElementById('num').value);
		alertCheck(c,'ไม่สามารถใส่ค่าติดลบได้');
		return c;
	}else{
		return false;
	}
}

function confirme(){
	var x = confirm("คุณต้องการลบหรือไม่");
	return x;
}
</script>

<form action="<?php echo base_url(); ?>index.php/admin/addFunds" method="post" onSubmit="return main()">
<br><br><br><br>
<div class="table" align="center">
<table width="31%" height="168" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td height="28" colspan="2" align="center" bgcolor="#0FCFB4">เพิ่มงบประมาณ</td>
    </tr>
    <tr>
      <td width="47%" height="35" align="right">วันที่ :</td>
      <td width="53%"><?php echo date('d-m-Y') ?><input name="fundDate" type="hidden" value="<?php echo date('d-m-Y') ?>" required="required"  readonly="readonly"></td>
    </tr>
    <tr>
      <td height="37" align="right">ประเภทกองทุน : </td>
      <td><select name="typeId" id="typeId">
      <?php foreach ($type as $t ){?>
    <option value="<?php echo $t['typeId'];?>" ><?php echo $t['typeName'];?></option>
		  <?php 
		  }?>
        </select></td>
    </tr>
     <tr>
      <td height="36" align="right">รายละเอียด : </td>
      <td><input type="text" name="fundDetail" id="fundDetail"></td>
    </tr>
    <tr>
      <td height="36" align="right">จำนวนเงิน : </td>
      <td><input type="text" name="fundAmount" id="num"></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#0FCFB4"><input type="submit" name="submit" id="submit" value="บันทึกข้อมูล"></td>
    </tr>
  </tbody>
</table>
</div>
</form>
</div>