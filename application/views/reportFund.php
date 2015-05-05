<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/menu.css"/>

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
<table width="73%" border="0" align="center" cellpadding="7" cellspacing="3">
				<th colspan="4" align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>
                    	<div id="logo">
                        	<img src="<?php echo base_url();?>imgs/logo.png" width="100px">
                    </div> 
                    <h2 id="headTitleContent" align="left"><?php echo "กองทุนหมู่บ้าน บ้านแม่เลิม" ;?></h2>
                    <h2 align="left"><?php echo "บ้านแม่เลิม หมู่2 ตำบลบ้านเป้า  อำเภอแม่แตง  จังหวัดเชียงใหม่" ;?></h2> 
                    <h2 id="headTitleContent" align="center"><?php echo "รายงานสรุปยอดงบประมาณคงเหลือ";?></h2></th>  
                </tr>
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
      <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php echo number_format ($r['fundAmount'],2,'.',',');?></p></td>
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
<table width="73%" height="142" border="0" align="center" cellpadding="7" cellspacing="3">
    <tr> 
            <th width="41%" align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px">ปีที่กู้ยืม</th>
            <th width="59%" align="center" valign="baseline" nowrap="nowrap" style="font-size: 12px"><p>จำนวนเงิน</p></th>  
            
       
    </tr>
    
   <?php
	if($loan){
		$i=0;
	 foreach($loan as $s){	 
		 ?>  
    <tr>      
       <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php echo $s['year'];?></p></td> 
      <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php echo number_format ($s['loanNum'],2,'.',',');?></p></td>
      
     
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
<table width="73%" height="156" border="0" align="center" cellpadding="7" cellspacing="3">
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
      <td align="center" valign="middle" nowrap="nowrap" style="font-size: 12px"><p><?php echo number_format ($s['sum'],2,'.',',');?></p></td>
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
