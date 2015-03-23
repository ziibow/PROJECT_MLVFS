
<br><br><br><br>
 <h2 id="headTitleContent">ข้อมูลรายละเอียดงบประมาณ</h2>
<div class="table" align="right">
<?php foreach ($type as $t){?>
  <input type="radio" name="radio" class="radio" value="<?php echo $t['typeId'] ?>">
  <label for="radio"><?php echo $t['typeName'] ?> </label>
  <?php } ?>
  <input checked type="radio" name="radio" class="radio" value="0">
  <label for="radio"> ทั้งหมด </label>
<br><br><br>
<div id="searchResult" >
<table width="75%" border="0" align="center" cellpadding="7" cellspacing="3">
 	  <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>รหัส</p></th>
      <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>รายละเอียด</p></th>
      <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>จำนวนเงิน</p></th>
      <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>วันที่งบประมาณเข้า</p></th>
      <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>ประเภท</p></th>
      <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>แก้ไข</p></th>
      <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>ลบ</p></th>
    <tr>   
  
   <?php
   $sum = 0;
   if($listFunds){
	   $i =1;
     foreach($listFunds as $f)
	 {
		$sum =$sum+ $f['fundAmount'];?>
     
    <tr>    
           <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php echo $f['fundId'];?></p></td>  
       	   <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php echo $f['fundDetail'];?></p></td>
      	   <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p ><?php echo number_format ($f['fundAmount'],2,'.',',');?></p></td>
       	   <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php $date = new DateTime($f['fundDate']);
echo $date->format('d-m-Y');?></p></td>
      	   <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php echo $f['typeName'];?></p></td>
      	   <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><a href="<?php echo base_url();?>index.php/admin/editFundsView/<?php echo $f['fundId'];?>" class="editFunds fancybox.iframe">
      <img class="iconAction" src="<?php echo base_url();?>img/editIcon.png" width="25px" height="25px"  style="margin-bottom:-8px;">
      </a></td>
      <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><a href="<?php echo base_url();?>index.php/admin/deleteFunds/<?php echo $f['fundId'];?>" class="deleteFunds fancybox.iframe">
      <img class="iconAction" src="<?php echo base_url();?>img/deleteIcon.png" width="25px" height="25px"  style="margin-bottom:-8px;">
      </a></td>
    </tr>
    <?php $i++; }?>
<tr>
  	<td colspan="8" align="center"><div class="ajax_paging"><?php echo $this->pagination->create_links(); ?></div></td>
  </tr>
   <?php 	}else{?>
  	<tr>
  	<td colspan="8" align="center">ไม่พบข้อมูล</td>
  </tr>
  <?php }?>
</table>
<table width="25%" border="0" align="center" cellpadding="7" cellspacing="3">
 <tr>
    <td bgcolor="#86C2F4"> <?php echo 'งบประมาณทั้งหมด';?></td>
    <td> <?php echo number_format ($sum ,2,'.',',') ;?></td>
    <td bgcolor="#86C2F4"> <?php echo 'บาท'?></td>
  
  </tr>
 
</table>


</div>
<br>
<br>
<br>
</div>
<script>
	$('.radio').click(function(){
		var Id=$(this).val();
		$('#searchResult').load('<?php echo base_url();?>index.php/admin/showFundsByType/'+Id+'');
		
	});
</script>

