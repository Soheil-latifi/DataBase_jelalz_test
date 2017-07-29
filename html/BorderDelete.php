<?php 
  
  include_once "CLasses.php"; 
	class DeleteBorder	
	{      
	  
      function ShowRentFormDelete(){
      	
			echo '<form method="post" action="" >
                                    <div class="form-group col-md-4 ">
   	 											<label for="Value">Postal Code</label>
	    											<input type="text" class="form-control" name="Postalcode" value=""> 
    											</div>
    											
    											<div class="form-group col-md-12 ">
  												<button type="submit" class="btn btn-primary" name="submit"  id="emam" value="Dubmit2" >Submit</button>
                             			</div>
                                   </form>';  		
  		
  		    }  
  		       
  		    #########################
  		    
  		    function ShowSaleFormDelete(){
		echo '<form method="post" action="" >
                                    <div class="form-group col-md-4 ">
   	 											<label for="Value">Postal code</label>
	    											<input type="text" class="form-control" name="Postalcode" value=""> 
    											</div>
    											
    											<div class="form-group col-md-12 ">
  												<button type="submit" class="btn btn-primary" name="submit"  id="emam" value="Dubmit1" >Submit</button>
                             			</div>
                                   </form>';  		
  		  		    }
  		    
  		    
#################################################  		    
  		    function ShowRenterFormDelete(){
echo '<form class="form" method="post" action=""> 
                                    <div class="form-group col-md-4 ">
   	 											<label for="Value">SSN</label>
	    											<input type="text" class="form-control" name="Ssn" value=""> 
    											</div>
    											
    											
    											<div class="form-group col-md-12 ">
  												<button type="submit" class="btn btn-primary" name="submit"  id="emam" value="Dubmit3" >Submit</button>
                             			</div>
                                   </form>';
  		    }
 ######################################################## 
 
   		    
  		   function  ShowBuyerFormDelete() {
  		   	echo '<form class="form" method="post" action=""> 
                                    <div class="form-group col-md-4 ">
   	 											<label for="Value">SSN</label>
	    											<input type="text" class="form-control" name="Ssn" value=""> 
    											</div>
    											
    											<div class="form-group col-md-12 ">
  												<button type="submit" class="btn btn-primary" name="submit"  id="emam" value="Dubmit4" >Submit</button>
                             			</div>
  		   
                                   </form>';
                                   
  		   }
##############################################################

		function  ShowSaleAgreementFormDelete()
		{
			echo '<form class="form" method="post" action=""> 
                                     
    											<div class="form-group col-md-3 ">
    									
    												<label for="FT">Owner SSN</label>
    												<input type="text" class="form-control" name="OSsn" value=""> 
    												
    											</div> 
    											<!-- -->
    											<div class="form-group col-md-3 ">
   	 											<label for="Value">Buyer SSN</label>
	    											<input type="text" class="form-control" name="BSSN" value=""> 
    											</div>
    											
    											<div class="form-group col-md-3 ">
   	 											<label for="Value">Postal Code</label>
	    											<input type="text" class="form-control" name="Postalcode" value=""> 
    											</div>
    											
												<div class="form-group col-md-3 ">
    												<label for="fl">Sell Date</label>
    												<input type="date" class="form-control" name="SDate" value=""> 
    											</div>
    											
    											
    											
    																			
    											
    											
    											
    											<div class="form-group col-md-4 ">
  												<button type="submit" class="btn btn-primary" name="submit"  id="emam" value="Dubmit5" >Submit</button>
                             			</div>
                                   </form>';
		}  		   
#################################################################
function  ShowRentAgreementFormDelete()
		{ 
    				echo'							<div class="form-group col-md-3 ">
    									
    												<label for="FT">Owner SSN</label>
    												<input type="text" class="form-control" name="OSsn" value=""> 
    												
    											</div> 
    											<!-- -->
    											<div class="form-group col-md-3 ">
   	 											<label for="Value">Renter SSN</label>
	    											<input type="text" class="form-control" name="RSSN" value=""> 
    											</div>
    											
    											<div class="form-group col-md-3 ">
   	 											<label for="Value">Postal Code</label>
	    											<input type="text" class="form-control" name="Postalcode" value=""> 
    											</div>
    											
												<div class="form-group col-md-3 ">
    												<label for="fl">Sell Date</label>
    												<input type="date" class="form-control" name="SDate" value=""> 
    											</div>
    											
    											
    											
    																			
    											
    											
    											
    											<div class="form-group col-md-4 ">
  												<button type="submit" class="btn btn-primary" name="submit"  id="emam" value="Dubmit6" >Submit</button>
                             			</div>
                                   </form>';
		}  		 
  		 
  		 
  		 
  		 
  		   
##################################################################
  	function  ShowDeleteSaleProperty($obj)
  	{
  		
  	
  	echo '                                    <div class="col-md-6">
                        <div class="alert alert-warning">
                         <div class="col-md-7 col-sm-offset-5">
                            <span style="font-size: 50px;" class="glyphicon glyphicon-home"></span> </div>
                         
                        <br >
                        <h3>
                          Sale Property To Be Deleted : 
                          </h3>
                          </br>
                           <br>Address : ';
                           echo   $obj->getAddress();
                         echo   '   Postal Code :';echo 	$obj->getPostalCode();
                   echo       ' </br>Owner Name :';echo $obj->getName();echo ' '; echo $obj->getSname();  
                     	
                     echo      '<br />Owner Phone:'; echo $obj->getPhone(); 
                           
          		
                              
         
     				 echo 					
     				 	' <div class" col-md-12">
     				 	<form method="post" action="" >
     				 	
	    											<input type="text" class="form-control" style="visibility: hidden;" name="Postalcode" value="';
	    											echo $obj->getPostalCode();
	    											 echo '"> 
    											</div>
    				
     				 	<button type="submit" class="btn btn-danger" name="submit"  id="emam" value="DSP" >Delete</button>
     				 	</form>
                        </div>
                        </div>
                    </div>' ; 
  	
  	}	    
  	#########################
  		        
    function  ShowDeletePerson($obj)
  	{
  		
  	
  	echo '                                    <div class="col-md-6">
                        <div class="alert alert-warning">
                         <div class="col-md-7 col-sm-offset-5">
                            <span style="font-size: 50px;" class="glyphicon glyphicons-user-remove"></span> </div>
                         
                        <br >
                        <h3>
                          Sale Property To Be Deleted : 
                          </h3>
                          </br>
                           <br>Address : ';
                           echo   $obj->getAddress();
                         echo   '   Ssn  :';echo 	$obj->getSsn();
                   echo       ' </br> Name :';echo $obj->getName();echo ' '; echo $obj->getSname();  
                     	
                     echo      '<br /> Phone:'; echo $obj->getPhone(); 
                           
          		
                              
         
     				 echo 					
     				 	' <div class" col-md-12">
     				 	<form method="post" action="" >
     				 	
	    											<input type="text" class="form-control" style="visibility: hidden;" name="Ssn" value="';
	    											echo $obj->getSsn();
	    											 echo '"> 
    											</div>
    				
     				 	<button type="submit" class="btn btn-danger" name="submit"  id="emam" value="DR" >Delete</button>
     				 	</form>
                        </div>
                        </div>
                    </div>' ; 
  	
  	}	         
   
	        
    function  ShowDeletePersonBuyer($obj)
  	{
  		
  	
  	echo '                                    <div class="col-md-6">
                        <div class="alert alert-warning">
                         <div class="col-md-7 col-sm-offset-5">
                            <span style="font-size: 50px;" class="glyphicon glyphicons-user-remove"></span> </div>
                         
                        <br >
                        <h3>
                          Sale Property To Be Deleted : 
                          </h3>
                          </br>
                           <br>Address : ';
                           echo   $obj->getAddress();
                         echo   '   Ssn  :';echo 	$obj->getSsn();
                   echo       ' </br> Name :';echo $obj->getName();echo ' '; echo $obj->getSname();  
                     	
                     echo      '<br /> Phone:'; echo $obj->getPhone(); 
                           
          		
                              
         
     				 echo 					
     				 	' <div class" col-md-12">
     				 	<form method="post" action="" >
     				 	
	    											<input type="text" class="form-control" style="visibility: hidden;" name="Ssn" value="';
	    											echo $obj->getSsn();
	    											 echo '"> 
    											</div>
    				
     				 	<button type="submit" class="btn btn-danger" name="submit"  id="emam" value="DS" >Delete</button>
     				 	</form>
                        </div>
                        </div>
                    </div>' ; 
  	
  	}   
             
             
	
}
	
?>