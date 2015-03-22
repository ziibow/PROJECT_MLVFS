<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/menu.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/main.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/header.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/table.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/font.css">
<?php foreach ($member as $e){?>
<form action="<?php echo base_url(); ?>index.php/admin/addMemberLoanAction" method="post">
<input name="memberId" type="hidden" value="<?php echo $e['memberId'] ?>" required="required"  readonly="readonly">
<table width="43%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td height="33" colspan="2" align="center" bgcolor="#0FCFB4">แก้ไขข้อมูลสมาชิก</td>
    </tr>
    <tr>
      <td height="33" align="right">วันที่ :</td>
      <td><?php echo date('d-m-Y'); ?></td>
    </tr>
     <tr>
      <td height="33" align="right">ประเภทกองทุน :</td>
      <td>
      <select name="typeId">
	  <?php foreach ($type as $t){ ?>
      <option value="<?php echo $t['typeId']?>"><?php echo $t['typeName']?></option>
      <?php }?>
      </select>
      </td>
    </tr>
    <tr>
      <td height="33" align="right">ชื่อ :</td>
      <td><?php echo $e['memberName'] ?></td>
    </tr>
    <tr>
      <td height="37" align="right">นามสกุล :</td>
      <td><?php echo $e['memberLastname'] ?></td>
    </tr>
  
    
       <tr>
      <td height="31" align="right">จำนวนเงิน :</td>
      <td><input type="text" name="loanNum"  id="loanNum"></td>
    </tr>
   
    <tr>
      <td colspan="2" align="center" bgcolor="#0FCFB4"><input type="submit" name="submit" id="submit" value="บันทึกข้อมูล"></td>
    </tr>
  </tbody>
</table>
</form>
<?php }?>