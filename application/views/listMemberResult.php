
<table width="75%" border="0" align="center" cellpadding="7" cellspacing="3">
    <tr>   
    	<th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>รหัสสมาชิก</p></th>
    	<th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>ชื่อ - สกุล</p></th>
        <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>ที่อยู่</p></th>
        <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px">เบอร์โทร</th>
        <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px">ตำแหน่ง</th>
        <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px">สถานะ</th>
          
           <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px">แก้ไข</th>
        <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px">ลบ</th>
    </tr>
    <?php
	if($listMember){
	$i = 1;
	 foreach($listMember as $m){?>
    <tr>    
       <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php echo $m['memberId'];?></p></td>  
       <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php echo $m['memberName'];?>&nbsp;&nbsp;<?php echo $m['memberLastname'];?></p></td>
      <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p ><?php echo $m['memberAddress'];?></p></td>
      <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php echo $m['memberTel'];?></p></td>
      <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php echo $m['memberPosition'];?></p></td>
       <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php 
	  
	  if($m['loanStatus']=='loan')
	  {
		  echo 'อยู่ในระหว่างการกู้ยืม';
		  }
		  else {
			  	echo 'พ้นสภาพการกู้';
			  }
	  ;?></p></td>
      
      <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><a href="<?php echo base_url();?>index.php/admin/editMemberView/<?php echo $m['memberId'];?>" class="editMember fancybox.iframe">
      <img class="iconAction" src="<?php echo base_url();?>img/editIcon.png" width="25px" height="25px"  style="margin-bottom:-8px;">
      </a></td>
      <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><a href="<?php echo base_url();?>index.php/admin/deleteMember/<?php echo $m['memberId'];?>" class="deleteMember fancybox.iframe">
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

