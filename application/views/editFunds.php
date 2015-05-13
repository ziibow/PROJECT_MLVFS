<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/menu.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/main.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/header.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/table.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/font.css">
	<?php foreach ($funds as $f){?>
			<form action="<?php echo base_url(); ?>index.php/admin/editFundsAction" method="post">
			<input name="fundId" type="hidden" value="<?php echo $f['fundId'] ?>" required="required"  readonly="readonly">
<br><br><br><br>
	<div class="table" align="center">
		<table width="31%" height="168" border="0" align="center" cellpadding="0" cellspacing="0">
  			<tbody>
    			<tr>
      				
                    <td height="28" colspan="2" align="center" bgcolor="#0FCFB4"><h2 id="headTitleContent1">แก้ไขงบประมาณ</h2></td>
    			</tr>
    			<tr>
                    <td width="47%" height="35" align="right">วันที่ :</td>
                    <td width="53%"><?php $date = new DateTime($f['fundDate']);echo $date->format('d-m-Y');?></td>
    			</tr>
   				<tr>
                    <td height="37" align="right">ประเภทกองทุน : </td>
                    <td><select name="typeId" id="typeId">
                      <?php foreach ($type as $t ){?>
                    	<option <?php if($t ['typeId']==$f['typeId']){ echo "selected " ;} ?> value="<?php echo $t['typeId'];?>" ><?php echo $t['typeName'];?> </option>
                          <?php 
                          }?>
                        </select></td>
              </tr>
     		  <tr>
                  <td height="36" align="right">รายละเอียด : </td>
                  <td><input type="text" name="fundDetail" value="<?php echo $f['fundDetail'] ?>"id="fundDetail" required></td>
   			 </tr>
   			 <tr>
      			  <td height="36" align="right">จำนวนเงิน : </td>
      			  <td><input type="text" name="fundAmount" value="<?php echo number_format ($f['fundAmount'],2,'.',',');?>" id="fundAmount" required></td>
    		</tr>
    		<tr>
      			  <td colspan="2" align="center" bgcolor="#0FCFB4"><input type="submit" name="submit" id="submit" value="บันทึกข้อมูล"></td>
    		</tr>
 		</tbody>
	</table>
</div>
</form>
<?php }?>