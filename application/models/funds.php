<?php 
class Funds extends CI_Model {

    function __construct(){
	   parent::__construct();
    }

######  Attribute  ###### 
    var $fundId ; ######  รหัสกองทุน  ######
    var $typeId ; ######  รหัสประเภทกองทุน  ######
    var $fundDetail ; ######  รายละเอียดกองทุน  ######
    var $fundAmount ; ######  จำนวนเงินที่เข้ากองทุน  ######
    var $fundDate ; ######  วันที่งบประมาณเข้า  ######
###### End Attribute  ###### 

 ###### SET : $fundId ######
    function setFundId($fundId){
        $this->fundId = $fundId; 
     }
###### End SET : $fundId ###### 


###### GET : $fundId ######
    function getFundId(){
        return $this->fundId; 
     }
###### End GET : $fundId ###### 


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


 ###### SET : $fundDetail ######
    function setFundDetail($fundDetail){
        $this->fundDetail = $fundDetail; 
     }
###### End SET : $fundDetail ###### 


###### GET : $fundDetail ######
    function getFundDetail(){
        return $this->fundDetail; 
     }
###### End GET : $fundDetail ###### 


 ###### SET : $fundAmount ######
    function setFundAmount($fundAmount){
        $this->fundAmount = $fundAmount; 
     }
###### End SET : $fundAmount ###### 


###### GET : $fundAmount ######
    function getFundAmount(){
        return $this->fundAmount; 
     }
###### End GET : $fundAmount ###### 


 ###### SET : $fundDate ######
    function setFundDate($fundDate){
        $this->fundDate = $fundDate; 
     }
###### End SET : $fundDate ###### 


###### GET : $fundDate ######
    function getFundDate(){
        return $this->fundDate; 
     }
###### End GET : $fundDate ###### 

############ FUNCTION FINDBYALL ###############
function findByAll()
	{	
	$this->db->join('tbltype','tbltype.typeId = tblfunds.typeId');
		$query = $this->db->get('tblfunds')->result_array();
		return $query;
	}
########## END FUNCTION FINDBYALL #############

############ FUNCTION ADDFUND #################
function addFund()
	{
	$data = array(
			'typeId ' => $this->getTypeId(),
			'fundDetail' => $this->getFundDetail(),
			'fundAmount' => $this->getFundAmount(),
			'fundDate' => date('Y-m-d'),
			'year' => date('Y')
			
		);
	$this->db->insert('tblfunds', $data); 
	return $this->db->insert_id();
	}

########## END FUNCTION ADDFUND ###############

function editFund()
	{
	$data = array(
			'typeId ' => $this->getTypeId(),
			'fundDetail' => $this->getFundDetail(),
			'fundAmount' => $this->getFundAmount(),
			'fundDate' => $this->getFundDate()
			
		);
		$this->db->where('fundId',$this->getFundId());
		$this->db->update('tblfunds', $data); 
	
	}

function getPK()
{
		$this->db->join('tbltype','tbltype.typeId = tblfunds.typeId');
		$this->db->where('tblfunds.fundId',$this->getFundId());
		$query = $this->db->get('tblfunds')->result_array();
		return $query;
	}
	
	
	
############################################
	function getAllFunds()
	{
		$this->db->select('*');
		$this->db->select('sum(fundAmount) AS sumfundAmount');
		$this->db->group_by('year');
		$query = $this->db->get('tblfunds')->result_array();
		return $query;
		}
############################################

############################################
	function getAllUseFunds()
	{
		$this->db->select('*');
		$this->db->select('sum(loanNum) AS sumloanNum');
		$this->db->group_by('year');
		$query = $this->db->get('tblloan')->result_array();
		return $query;
		}
############################################
	
	function deleteFund()
	{
	
		$this->db->where('fundId',$this->getFundId());
		$this->db->delete('tblfunds'); 
	
	}
	
function getByType()
{
		$this->db->join('tbltype','tbltype.typeId = tblfunds.typeId');
		$this->db->where('tblfunds.typeId',$this->getTypeId());
		$query = $this->db->get('tblfunds')->result_array();
		return $query;
	}
	
	
############ FUNCTION FINDBYALL ###############
function findAllFund()
	{	
	$this->db->select_sum('fundAmount');
	$this->db->group_by('year');
		$query = $this->db->get('tblfunds')->result_array();
		return $query;
	}
########## END FUNCTION FINDBYALL #############
	

}
?>