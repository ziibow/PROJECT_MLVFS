<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/menu.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/main.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/header.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/table.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/font.css">
<br><br><br><br>
<div class="table" align="center">
<h2 id="headTitleContent">ทำรายการชำระ</h2>
<table width="80%" border="0" align="center" cellpadding="7" cellspacing="3">
 	  <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>รหัสการกู้</p></th>
      <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>จำนวนเงินที่กู้</p></th>
      <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>จำนวนที่ต้องชำระ</p></th>
      <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>วันที่กู้</p></th>
      <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>ประเภทกองทุน</p></th>
      <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>ชื่อสมาชิก</p></th>
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
       	   <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php echo number_format ($f['loanNum'],2,'.',',');?></p></td>
           <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php echo number_format ($f['loanNum']+(($f['loanNum']/100)*1),2,'.',',');?></p></td>
           <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php $date = new DateTime($f['loanDate']);
echo $date->format('d-m-Y');?></p>
      	 
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
</div>
<script>
	$('.radio').click(function(){
		var Id=$(this).val();
		$('#searchResult').load('<?php echo base_url();?>index.php/admin/showFundsByType/'+Id+'');
		
	});
</script>

</div>