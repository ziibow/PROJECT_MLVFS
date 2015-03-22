<?php foreach ($funds as $f){?>
<form action="<?php echo base_url(); ?>index.php/admin/editFundsAction" method="post">
<input name="fundId" type="hidden" value="<?php echo $f['fundId'] ?>" required="required"  readonly="readonly">
<table width="31%" height="168" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td height="28" colspan="2" align="center" bgcolor="#0FCFB4">เพิ่มงบประมาณ</td>
    </tr>
    <tr>
      <td width="47%" height="35" align="right">วันที่ :</td>
      <td width="53%"><input name="fundDate" type="text" value="<?php echo $f['fundDate'] ?>" required="required"  readonly="readonly"></td>
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
      <td><input type="text" name="fundDetail" value="<?php echo $f['fundDetail'] ?>"id="fundDetail"></td>
    </tr>
    <tr>
      <td height="36" align="right">จำนวนเงิน : </td>
      <td><input type="text" name="fundAmount" value="<?php echo $f['fundAmount'] ?>" id="fundAmount"></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#0FCFB4"><input type="submit" name="submit" id="submit" value="บันทึกข้อมูล"></td>
    </tr>
  </tbody>
</table>
</form>
<?php }?>