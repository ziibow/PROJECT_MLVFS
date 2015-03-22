<script type="text/javascript">
	$('.loan').click(function(){
		$('.content').load('<?php echo base_url();?>index.php/admin/magLoan/'+$(this).val());
	});
		
</script>


<br><br><br><br>
 <h2 id="headTitleContent">รายชื่อสมาชิกการกู้ยืม</h2>
	<div class="table" align="right">
  <p>
    <input type="radio" <?php if ($select==1){echo 'checked';}?> class="loan" name="radio" id="radio" value="1">
    <label for="radio">อยู่ในระหว่างการกู้ </label>
      <input type="radio"  <?php if ($select==2){echo 'checked';}?> class="loan" name="radio" id="radio" value="2">
    <label for="radio">ผุ้ชำระเงินแล้ว </label>
      <input type="radio" <?php if ($select==3){echo 'checked';}?> class="loan" name="radio" id="radio" value="3">
    <label for="radio">ทั้ง 2ประเภท </label>
  </p>
  <br>
  <div id="searchResult">
<table width="80%" border="0" align="center" cellpadding="7" cellspacing="3">
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
<br>
<br>
<br>
</div>
</div>
