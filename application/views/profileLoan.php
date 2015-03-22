
<table width="80%" border="0" align="center" cellpadding="7" cellspacing="3">
 	  <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>รหัสการกู้</p></th>
      <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>จำนวนเงินที่กู้</p></th>
      <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>จำนวนที่ต้องชำระ</p></th>
      <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>วันที่กู้</p></th>
      <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>รหัสประเภท</p></th>
      <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>รหัสสมาชิก</p></th>
      <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>ชำระ</p></th>
   
    <tr>   
  
   <?php
   if($listLoan){
	   $i =1;
     foreach($listLoan as $f)
	 {
	?>
     
    <tr>    
           <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php echo $f['loanId'];?></p></td>  
       	   <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php echo $f['loanNum'];?></p></td>
           <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php echo $f['loanNum']+(($f['loanNum']/100)*1);?></p></td>
      	   <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p ><?php echo  $f['loanDate'];?></p></td>
       	   <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php echo $f['typeName'];?></p></td>
      	   <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php echo $f['memberName'];?></p></td>
           <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php 
		   if($f['statusLoan']==1)
		   {
			    echo "<a href='".base_url()."index.php/admin/pay/".$f['loanId']."/".$f['memberId']."'>ชำระ</a>";
			   }
			   else {
				   echo '-';
				   }
		  ?></p></td>
      	  
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

