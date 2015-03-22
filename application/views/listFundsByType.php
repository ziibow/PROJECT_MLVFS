
<table width="80%" border="0" align="center" cellpadding="7" cellspacing="3">
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
     foreach($listFunds as $f){
		 $sum =$sum+ $f['fundAmount'];?>
     
    <tr>    
           <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php echo $f['fundId'];?></p></td>  
       	   <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php echo $f['fundDetail'];?></p></td>
      	   <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p ><?php echo number_format ($f['fundAmount'],2,'.',',')?></p></td>
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
<?php echo number_format ($sum ,2,'.',',') ;?>


