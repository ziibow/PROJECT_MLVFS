<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/menu.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/main.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/header.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/table.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/font.css">
<br><br>
 <!--<h2 id="headTitleContent" align="center"><?php echo $header ;?></h2>-->
 <!--<?php var_dump($funds,$loan,$sumdata);?>-->
	<div class="table" align="center">
  <p>&nbsp;</p>
  <br>
  <div id="searchResult">
  <div align="center">
<table width="40%" border="0" align="center" cellpadding="7" cellspacing="3">
    <tr> 
            <th width="19%" align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>ปี่ที่งบประมาณเข้า </p></th>
            <th width="19%" align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>จำนวนเงิน</p></th>
            <th width="18%" align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>ประเภทกองทุน</p></th>  
            <th width="44%" align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px">รายละเอีกยด</th>
    </tr>
    
   <?php
	if($funds){
		$i=0;
	 foreach($funds as $r){
		 ?>  
    <tr>      
      <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php echo $r['year'];?></p></td> 
      <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php echo $r['fundAmount'];?></p></td>
      <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php echo $r['typeName'];?></p></td>
      <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php echo $r['fundDetail'];?></p></td> 
    </tr>
    
    <?php }?>
	<tr>
  		<td colspan="8" align="center"><div class="ajax_paging"><?php echo $this->pagination->create_links(); ?></div></td>
    </tr>
    
   <?php 	}else{?>
  	<tr>
  		<td colspan="8" align="center">ไม่พบข้อมูล</td>
  </tr>
  <?php }?>
</table>




  <div align="center">
<table width="40%" border="0" align="center" cellpadding="7" cellspacing="3">
    <tr> 
            <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px">ปีที่กู้ยืม</th>
            <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>จำนวนเงิน</p></th>  
            
       
    </tr>
    
   <?php
	if($loan){
		$i=0;
	 foreach($loan as $s){	 
		 ?>  
    <tr>      
       <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php echo $s['year'];?></p></td> 
      <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php echo $s['loanNum'];?></p></td>
      
     
    </tr>
    
    <?php }?>
	<tr>
  		<td colspan="8" align="center"><div class="ajax_paging"><?php echo $this->pagination->create_links(); ?></div></td>
    </tr>
    
   <?php 	}else{?>
  	<tr>
  		<td colspan="8" align="center">ไม่พบข้อมูล</td>
  </tr>
  <?php }?>
</table>
<!--<?php echo $sum; ?>-->


<!--<?php var_dump($sumdata);?>-->
<div align="center">
<table width="40%" border="0" align="center" cellpadding="7" cellspacing="3">
    <tr> 
            <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px">ปีที่กู้ยืม</th>
            <th align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>ยอดคงเหลือ</p></th>  
    </tr>
    
   <?php
	if($sumdata){
		$i=0;
	 foreach($sumdata as $s){
		 	 
		 ?>  
    <tr>      
       <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php echo $s['year'];?></p></td> 
      <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php echo $s['sum'];?></p></td>
    </tr>
    
    
    <?php }?>
    
	<tr>
  		<td colspan="8" align="center"><div class="ajax_paging"><?php echo $this->pagination->create_links(); ?></div></td>
    </tr>
    
   <?php 	}else{?>
  	<tr>
  		<td colspan="8" align="center">ไม่พบข้อมูล</td>
  </tr>
  <?php }?>
  
  <!-------------------------------------------------------------->
  
</table>


<p align="center">
  <input type="button" onClick="window.print()" name="button" id="button" value="พิมพ์">
</p>

</div>
</div>
</div>
</div>
</div>
</div>
