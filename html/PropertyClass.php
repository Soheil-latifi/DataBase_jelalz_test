<?php 
			
   class Property {
			
	   
      /* Member variables */
       private  $Name;
       private  $Sname;
       private  $Phone;  
       private  $OwnerSsn;  
       private  $Postalcode;  
       private  $Address; 
       private  $BuildDate;
       private  $Heating;
       private  $Cooling;  
       private  $Elevator;  
       private  $Note;  
       private  $BusineNum; 	
       private  $Meter;  
       //----------------------------\\
       
	  function __construct($par1,$par2,$par3,$par4,$par5,$par6,$par7,$par8,$par9 )  
	   {
			$this->Name= $par1;
			$this->Sname= $par2;
			$this->Phone = $par3;
			$this->OwnerSsn = $par4;
			$this->PostalCode = $par5;
			$this->Address = $par6;
			$this->BuildDate = $par7;
			$this->Heating =0;
			$this->Cooling = 0;	
			$this->Elevator = 0;
			$this->Note = 0;
			$this->BusineNum = $par8;
			$this->Meter = $par9;
      }
      

      function __destruct() {  
           
      }
      
      //  					getter Setter                   \\\
      
      public function setName($Name_){
         $this->Name = $Name_;
      } 
      public function getName(){
         return $this->Name ;
      }
      
		public function setMeter($Meter_){
         $this->Meter = $Meter_;
      } 
      
      public function getMeter(){
         return $this->Meter ;
      }	  
      	  
	  
      public function setSname($Sname_){
         $this->Sname = $Sname_;
      } 
      public function getSname(){
         return $this->Sname ;
      }    
	  
      public function setOwnerSsn($OwnerSsn_){
         $this->OwnerSsn = $OwnerSsn_;
      } 
      public function getOwnerSsn(){
         return $this->OwnerSsn ;
      }
	  
      public function setPostalCode($PostalCode_){
         $this->PostalCode = $PostalCode_;
      } 
      public function getPostalCode(){
         return $this->PostalCode ;
      }
	  
	  	  	  	  
	  public function setAddress($Address_){
         $this->Address = $Address_;
      } 
      public function getAddress(){
         return $this->Address ;
      }	  
	  	  
	  
      public function setBuildDate($BuildDate_){
         $this->BuildDate = $BuildDate_;
      } 
      public function getBuildDate(){
         return $this->BuildDate ;
      }
	  
	  	  
      public function setHeating($Heating_){
         $this->Heating = $Heating_;
      } 
      public function getHeating(){
         return $this->Heating ;
      }
	  
	  	  
      public function setCooling($Cooling_){
         $this->Cooling = $Cooling_;
      } 
      public function getCooling(){
         return $this->Cooling ;
      }
	  
	  
      public function setElevator($Elevator_){
         $this->Elevator = $Elevator_;
      } 
      public function getElevator(){
         return $this->Elevator ;
      }
	  
	  
      public function setNote($Note_){
         $this->Note = $Note_;
      } 
      public function getNote(){
         return $this->Note ;
      }	  
	  
	  
      public function setBusineNum($BusineNum_){
         $this->BusineNum = $BusineNum_;
      } 
      public function getBusineNum(){
         return $this->BusineNum ;
      }	  

  
       /* Member functions */

	   /* Add Property function */
      public function Add_Property()
	   {
	   	
      }
      // this function checks if parameters    are  valid 
      
	   public  function is_valid()
	   {
	   	 	if($this->Meter <=0) {
				return false; 	   	 	
	   	 	}
	   	 	else 
	   	 	return true; 
	   }
	  	 /* Show Property function */
	 
	  
	  	  /* Edit Property function */
	  public static function Edit_Property($saleProp , $mysqli , $q ){
      
	  
      }
	  
	  	   /* Search Property function */
	  public function Search_Property($PostalCode_){
      
	  
      }

	  
	      /* Delete Property function */
	  public function Delete_Property($PostalCode_){
      

      }
	  
      
      
      
      
}
?>

