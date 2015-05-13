<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/menu.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/main.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/header.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/table.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/font.css">
<?php foreach ($member as $e){?>
<form action="<?php echo base_url(); ?>index.php/admin/editMemberAction" method="post">
<input name="memberId" type="hidden" value="<?php echo $e['memberId'] ?>" required="required"  readonly="readonly">
<br><br>
<div class="table" align="center">
<table width="43%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      
      <td height="28" colspan="2" align="center" bgcolor="#0FCFB4"><h2 id="headTitleContent1">แก้ไขข้อมูลสมาชิก</h2></td>
    </tr>
   
    <tr>
      <td height="33" align="right">ชื่อ :</td>
      <td><input type="text" name="memberName" value="<?php echo $e['memberName'] ?>" id="memberName"></td>
    </tr>
    <tr>
      <td height="37" align="right">นามสกุล :</td>
      <td><input type="text" name="memberLastname" value="<?php echo $e['memberLastname'] ?>" id="memberLastname"></td>
    </tr>
    <tr>
      <td height="40" align="right">เพศ :</td>
      <td><select name="memberSex" value="<?php echo $e['memberSex'] ?>" id="memberSex">
      	
          <?php if($e ['memberSex']=='man'){ echo '<option value="man" selcted" ;}>ชาย</option>';}?>
          <?php if($e ['memberSex']=='owman'){ echo '<option value="owman" selcted" ;}>หญิง</option>';}?>
      </select></td>
      
    </tr>
    <tr>
      <td height="31" align="right">ตำแหน่ง :</td>
      <td><input type="text" name="memberPosition" value="<?php echo $e['memberPosition'] ?>"id="memberPosition"></td>
    </tr>
    <tr>
      <td height="30" align="right">วันเกิด :</td>
      <td><input type="date" name="memberBirthday" value="<?php echo $e['memberBirthday'] ?>" id="memberBirthday"></td>
    </tr>
     <tr>
      <td height="31" align="right">ที่อยู่ :</td>
      <td><input type="text" name="memberAddress" value="<?php echo $e['memberAddress'] ?>" id="memberAddress"></td>
    </tr>
       <tr>
      <td height="31" align="right">เบอร์โทร :</td>
      <td><input type="text" name="memberTel" value="<?php echo $e['memberTel'] ?>" id="memberTel"></td>
    </tr>
    <tr>
      <td height="40" align="right">สถานะ</td>
      <td><select name="memberStatus" value="<?php echo $e['memberStatus'] ?>" id="memberStatus">
          <option value="boss">กรรมการ</option>
          <option value="member">สมาชิก</option>
      </select></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#0FCFB4"><input type="submit" name="submit" id="submit" value="บันทึกข้อมูล"></td>
    </tr>
</table>
</div>

</form>
<?php }?>