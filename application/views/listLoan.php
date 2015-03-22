<script type="text/javascript">
		$(document).ready(function(){
			$(".searchBox").focus();
			 $(".searchBox").keyup(function(event){
				   event.preventDefault();
				    if($("#searchBox").val()!=""){
        		 $.post( 
             "<?php echo base_url();?>index.php/admin/searchMemberNoLoan",
             { searchBox: $("#searchBox").val() },
             function(data) {
                $('#searchResult').html(data);
             }
          ); 
		   }else{
			 $('.content').load("<?php echo base_url();?>index.php/admin/listLoan");
		  }
      });
 });
		
</script>


<br><br><br><br>
 <h2 id="headTitleContent">รายชื่อสมาชิกกองทุนหมู่บ้านทั้งหมด</h2>
	<div class="table" align="right">
  <p>
    <label for="textfield">ค้นหา:</label>
    <input type="text" name="searchBox" id="searchBox" class="searchBox" placeholder="ชื่อ-สกุล">

 
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
          
           <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px">ทำรายการกู้</th>
       
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
      
      <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><a href="<?php echo base_url();?>index.php/admin/addMemberLoanView/<?php echo $m['memberId'];?>" class="addLoanMember fancybox.iframe">
      <img class="iconAction" src="<?php echo base_url();?>img/editIcon.png" width="25px" height="25px"  style="margin-bottom:-8px;">
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
