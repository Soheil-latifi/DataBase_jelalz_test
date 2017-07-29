<?php 
    include_once "PropertyClass.php";
    class SaleProperty extends Property{
	   
	   
      /* Member variables */
       private  $EstimatedWorth;
 	  	
      /* Member functions */

    
	
function __construct()
	   {
      }
	  
	  
      function __destruct() {  
           
      }
  		function is_valid(){
  			
		if(	$this->EstimatedWorth >=0 and $this->Meter > 0)
				return true; 
				return false; 
  		}
  
      /* get,set functions */

	  
      public function setEstimatedWorth($EstimatedWorth_){
         $this->EstimatedWorth = $EstimatedWorth_;
      } 
      public function getEstimatedWorth(){
         return $this->EstimatedWorth ;
      }
	  
      public function setPostalCode($PostalCode_){
         $this->PostalCode = $PostalCode_;
      } 
      public function getPostalCode(){
         return $this->PostalCode ;
      }
	  public function setBusinessNum($BusinessNum_){
         $this->BusinessNum = $BusinessNum_;
      } 
      public function getBusinessNum(){
         return $this->BusinessNum ;
      }
	  	
	  	  
    
       /* Member functions */

	   /* Add SalePropery function */
      public function Add_SalePropery($par1,$par2)
	   {
			$this->EstimatedWorth= $par1;
			$this->Postalcode= $par2;
      }
	  
	  
	  	 /* Show SalePropery function */
	  public function Show_SalePropery(){
      
	  
      }
	  
	  	  /* Edit SalePropery function */
	  public function Edit_SalePropery($OldPostalcode_,$EstimatedWorth_){
      
	  
      }
	  
	  	   /* Search SalePropery function */
	  public function Search_SalePropery($Postalcode_){
      
	  
      }

	  
	      /* Delete SalePropery function */
	  public function Delete_SalePropery($Postalcode_){
      

      }
      }

?>