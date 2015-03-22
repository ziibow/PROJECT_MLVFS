<?php 
class Pay extends CI_Model {

    function __construct(){
	   parent::__construct();
    }

######  Attribute  ###### 
    var $paymentId ; ######  รหัสชำระ  ######
    var $loanId ; ######  รหัสการกู้  ######
    var $loanNum ; ######  จำนวนเงินที่กู้  ######
    var $loanDate ; ######  วันที่กู้  ######
    var $fundsType ; ######  ประเภทกองทุน  ######
    var $loanStatus ; ######  สถานะการกู้  ######
    var $loanAmount ; ######  จำนวนเงินที่กู้  ######
    var $memberId ; ######  รหัสสมาชิก  ######
    var $paymentDate ; ######  รหัสชำระ  ######
	 var $typeId ; ######  รหัสประเภทกองทุน  ######
  
###### End Attribute  ###### 

 ###### SET : $paymentId ######
    function setPaymentId($paymentId){
        $this->paymentId = $paymentId; 
     }
###### End SET : $paymentId ###### 


###### GET : $paymentId ######
    function getPaymentId(){
        return $this->paymentId; 
     }
###### End GET : $paymentId ###### 


 ###### SET : $loanId ######
    function setLoanId($loanId){
        $this->loanId = $loanId; 
     }
###### End SET : $loanId ###### 


###### GET : $loanId ######
    function getLoanId(){
        return $this->loanId; 
     }
###### End GET : $loanId ###### 


 ###### SET : $loanNum ######
    function setLoanNum($loanNum){
        $this->loanNum = $loanNum; 
     }
###### End SET : $loanNum ###### 


###### GET : $loanNum ######
    function getLoanNum(){
        return $this->loanNum; 
     }
###### End GET : $loanNum ###### 


 ###### SET : $loanDate ######
    function setLoanDate($loanDate){
        $this->loanDate = $loanDate; 
     }
###### End SET : $loanDate ###### 


###### GET : $loanDate ######
    function getLoanDate(){
        return $this->loanDate; 
     }
###### End GET : $loanDate ###### 


 ###### SET : $fundsType ######
    function setFundsType($fundsType){
        $this->fundsType = $fundsType; 
     }
###### End SET : $fundsType ###### 


###### GET : $fundsType ######
    function getFundsType(){
        return $this->fundsType; 
     }
###### End GET : $fundsType ###### 


 ###### SET : $loanStatus ######
    function setLoanStatus($loanStatus){
        $this->loanStatus = $loanStatus; 
     }
###### End SET : $loanStatus ###### 


###### GET : $loanStatus ######
    function getLoanStatus(){
        return $this->loanStatus; 
     }
###### End GET : $loanStatus ###### 


 ###### SET : $loanAmount ######
    function setLoanAmount($loanAmount){
        $this->loanAmount = $loanAmount; 
     }
###### End SET : $loanAmount ###### 


###### GET : $loanAmount ######
    function getLoanAmount(){
        return $this->loanAmount; 
     }
###### End GET : $loanAmount ###### 


 ###### SET : $memberId ######
    function setMemberId($memberId){
        $this->memberId = $memberId; 
     }
###### End SET : $memberId ###### 


###### GET : $memberId ######
    function getMemberId(){
        return $this->memberId; 
     }
###### End GET : $memberId ###### 


 ###### SET : $paymentDate ######
    function setPaymentDate($paymentDate){
        $this->paymentDate = $paymentDate; 
     }
###### End SET : $paymentDate ###### 


###### GET : $paymentDate ######
    function getPaymentDate(){
        return $this->paymentDate; 
     }
	 
###### End GET : $paymentDate ###### 
 ###### SET : $typeId ######
    function setTypeId($typeId){
        $this->typeId = $typeId; 
     }
###### End SET : $typeId ###### 


###### GET : $typeId ######
    function getTypeId(){
        return $this->typeId; 
     }
###### End GET : $typeId ###### 

function addLoan()
{
	$data = array(
			'loanNum' => $this->getLoanNum(),
			'loanDate' => date('Y-m-d'),
			'typeId' => $this->getTypeId(),
			'memberId' => $this->getMemberId(),
			
		);
	$this->db->insert('tblloan', $data); 
	
	}
	

	
	function getPaymentMember()
	{
		$this->db->join('tblmember','tblmember.memberId = tblloan.memberId');
		$this->db->join('tbltype','tbltype.typeId = tblloan.typeId');
		$this->db->where('tblloan.memberId',$this->getMemberId());
		$this->db->order_by('tblloan.loanDate','ASC');
		return $this->db->get('tblloan')->result_array();
		}
		
	function updateStatus()
	{
		$data = array('statusLoan'=>'2');
		$this->db->where('loanId',$this->getLoanId());
		$this->db->update('tblloan',$data);
		}
		
	function getLoanPaymentMember()
	{
		$this->db->where('tblloan.memberId',$this->getMemberId());
		$this->db->where('tblloan.statusLoan','1');
		return $this->db->get('tblloan')->result_array();
		}
		
		
function updateStatusNoLoan()
{
	$data=array('loanStatus'=>'noLoan');
	$this->db->where('memberId',$this->getMemberId());
	$this->db->update('tblmember',$data);
	}
		

}
?>