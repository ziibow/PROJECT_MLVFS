<?php 
class Type extends CI_Model {

    function __construct(){
	   parent::__construct();
    }

######  Attribute  ###### 
    var $typeId ; ######  รหัสประเภทกองทุน  ######
    var $typeName ; ######  ชื่อประเภทกองทุน  ######
###### End Attribute  ###### 

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


 ###### SET : $typeName ######
    function setTypeName($typeName){
        $this->typeName = $typeName; 
     }
###### End SET : $typeName ###### 


###### GET : $typeName ######
    function getTypeName(){
        return $this->typeName; 
     }
###### End GET : $typeName ###### 

}
?>