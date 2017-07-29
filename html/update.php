<?php 
   session_start();
 
				//	 including 
          include_once "Db_info.php";
			include_once "updateBorder.php"; 
          include_once "Border.php";
 			 include_once "PropertyClass.php";
 			 include_once "BorderDelete.php";
         	

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="NorVanK" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>admin manegment panel</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!--Echo border stuff-->
<?php 
  SearchBorder::ShowHeader($_SESSION["UserName"] , $_SESSION["RSname"]);

?>
    <!-- LOGO HEADER END-->
        
    <!-- MENU SECTION END-->
         <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Search</h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">
                     search what you want!
                    </div>
                </div>
            </div>
            
     <div class="col-md-12 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Search BOX
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills">
                                <li class=""><a href="#home-pills" data-toggle="tab">Sale Property</a>
                                </li>
                                <li class=""><a href="#profile-pills" data-toggle="tab"> Rent Property</a>
                                </li>
                                <li class=""><a href="#messages-pills" data-toggle="tab">Renter</a>
                                </li>
                                <li class=""><a href="#settings-pills" data-toggle="tab">Buyer</a>
                                </li>
                                <li class=""><a href="#SaleAgreement" data-toggle="tab">Sale Agreement</a>
                                </li> <!-- class = active  -> abi mishe emam -->
                                
                                <li class="active"><a href="#RentAgreement" data-toggle="tab">Rent Agreement</a>
                                </li> <!-- class = active  -> abi mishe emam -->
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade" id="home-pills"> <!-- Property -->
                                    
                                    
                                    
                                    <!-- Property-->
      		                              <?php 
      		                              
      		                              
      		                              			
																		if(strcmp( $_POST['submit'] , "Dubmit1" ) == 0  )
																		{
																			
      		            		      		   	         	UpdateBorder::ShowSaleFormUpdate();
      		            		      		   	      }
      		            		      		   	      else {
      		            		      		   	     				DeleteBorder::ShowSaleFormDelete();
      		            		      		   	      }
      		                              ?>
      		                               
      		                              
                                   <!-- property form end -->
                                    
                                </div>
                                <!-- end property search -->
                                
                                <div class="tab-pane fade" id="profile-pills">
                                    
                                     <?php 
                                     			
                                    			 if(strcmp( $_POST['submit'] , "Dubmit2" ) == 0  )
																		{
      		                           					   UpdateBorder::ShowRentFormUpdate();
      		                              			    } 
      		                              			    else {
      		                              			    	 DeleteBorder::ShowRentFormDelete();
      		                              			    }
      		                            ?>
                                    <!-- RENTTTTTTTTTTTTTTTT Form -->
                                   
                                    
                                </div><!-- end of RENT-->
                                
                                
											 <!-- Renter form  -->                        
                                <div class="tab-pane fade" id="messages-pills">
                                			<?php
                                			
                                			
                                    			 if(strcmp( $_POST['submit'] , "Dubmit3" ) == 0  )
																		{
                              				  					UpdateBorder::ShowRenterFormUpdate();
                              				  				} 
      		                              			    else {
      		                              			    	 DeleteBorder::ShowRenterFormDelete();
      		                              			    }
                                			 ?>
                                <!-- Renter form end -->
                                	</div>
                                
                                
                                
                              		<!--Buyer form -->     
                                <div class="tab-pane fade " id="settings-pills">
										       
												<?php
													
                                    			 if(strcmp( $_POST['submit'] , "Dubmit4" ) == 0  )
																		{  
																			UpdateBorder::ShowBuyerFormUpdate();
																		}
																		else																		
																		DeleteBorder::ShowBuyerFormDelete();
												?>										       
										       <!--Buyer form end -->                 	     
                                </div>
                                
   										<div class="tab-pane fade " id="SaleAgreement">
										       
												<?php
												
                                    			 if(strcmp( $_POST['submit'] , "Dubmit5" ) == 0  )
																		{  
													 							UpdateBorder::ShowSaleAgreementFormUpdate(); 
																		}
																		else {
																				DeleteBorder::ShowSaleAgreementFormDelete();
																			}											  
												  ?>										       
										       <!--Buyer form end -->                 	     
                                </div>
                                                             
	                                 
   										<div class="tab-pane fade active in" id="RentAgreement">
										       
												<?php
														
																	
                                    			 if(strcmp( $_POST['submit'] , "Dubmit6" ) == 0  )
																		{  
												 							UpdateBorder::ShowRentAgreementFormUpdate(); 
																		}	
																		else											
																			DeleteBorder::ShowRentAgreementFormDelete();
												  ?>										       
										       <!--Buyer form end -->                 	     
                                </div>
                                
                                <!--REst of search forms -->
                              
                                <!--			following pattern should be followed 
											<div class="tab-pane fade active in" id="settings-pills">
										                        	     
                                </div> 
                                -->                                
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- -->
            
            
            <!-------------------------------------------- -->
           
            <?php
            
            
         
          
          
$mysqli = new mysqli($Server, $UserName, $Password, $DBname);
  $BN =  $_SESSION['BusinessNum'];
				// sale form	            
      if($_SERVER["REQUEST_METHOD"] == "POST") 
      {
           
           	
				if(strcmp( $_POST['submit'] , "Submit1" ) == 0  )
					{
						  	          
            	
        				$property = new Property($_POST['Name'] , $_POST['Sname'] ,$_POST['Phone'],
        				$_POST['Ssn'],$_POST['Postalcode'],$_POST['Address'],
        				$_POST['BDate'],$BN,$_POST['Meter']) ;
        					
			 			
			 		}
			 			
			 			
			 						 			
		//                     rent property	 			
					if(strcmp( $_POST['submit'] , "Submit2" ) == 0  )
					{
						            
            	
        			$Mortage=$_POST['Mortage'];
					$MT=$_POST['MT'];
					$Rent   =$_POST['Rent']; 
					$RT	=$_POST['RT'];
					$RFloor   =$_POST['RFloor']; 
					$RFT	=$_POST['RFT'];
									
					$MTD=  $Mortage - $MT ;
					$MTU=  $Mortage + $MT ;
					$FD =   $RFloor - $RFT;
					$FU =   $RFloor + $RFT;
					$RD =   $Rent - $RT;
					$RU =   $Rent + $RT;
				
					$q =  "select P.OwnerSsn ,P.address , P.Postalcode , P.meter , S.Rent,S.Mortage ,P.Name ,P.Sname ,P.Phone
 from Property P , RentProperty S 

      where S.Postalcode = P.Postalcode and  P.BusinessNum
	   = ' $BN 'and ('$RD  '<S.Rent or S.Rent <'$RU') 
	   and ('$MTD  '<S.Mortage or S.Mortage <'$MTU')
	   and ('$FD  '<P.Meter or P.Meter <'$FU') ";  
					
							
							$result=$mysqli->query( $q ) ; // MakeQueryPropertySearch($BN, $x ,$xp)
							
					while	($row = $result->fetch_assoc() ){
					SearchBorder::ShowPropertyRent ($row) ;
				
								 }			
			 			
			 			}	
			 		
			 		
	 // 												renter
					if(strcmp( $_POST['submit'] , "Submit3" ) == 0  )
					{
						            
            	
        			$RenterRent=$_POST['RenterRent'];
					$Rtt		  =$_POST['RTRenter'];
					$MTR   	  =$_POST['MortageRenter']; 
					$MTT		  =$_POST['MTRenter'];
									
					$MU=  $MTR +  $MTT ;
					$MD=  $MTR -  $MTT ;
					$RU=  $RenterRent +$Rtt;
					$RD=  $RenterRent -$Rtt; 
					$q ="select P.Ssn,P.Name , P.Sname , P.Phone , R.Rentestimate , R.Mortage , R.Marriage , R.FamilyNum 
 from Person P , Renter R 

      where P.Ssn = R.Ssn and  P.BusinessNum
	   = '$BN' and ('$RD  '<R.Rentestimate or R.Rentestimate <'$RU')  and
	     
	    ('$MD  '<R.Mortage or R.Mortage <'$MU')  "; 
				
							
			if		(	$result =  $mysqli->query($q )   )
							
					while	($row = $result->fetch_assoc() ){
					SearchBorder::ShowRenter ($row) ;
					
								 }			
			 			
			 			}
			 			
			 			
	//                      Buyer			 		
			 		if(strcmp( $_POST['submit'] , "Submit4" ) == 0  )
					{
						            
            	
        			$BuyerBudget=$_POST['Budgeter'];
					$BBT		   =$_POST['BTBuyer'];
					
									
					$BU=  $BuyerBudget +  $BBT ;
					$BD=  $BuyerBudget -  $BBT ; 
					$q ="select P.Ssn,P.Name , P.Sname , P.Phone , B.Budget 
 from Person P , Buyer B 

      where P.Ssn = B.Ssn and  P.BusinessNum
	   = ' $BN ' and ('$BD  '<B.Budget or B.Budget <'$BU')" ; 
				
							
			if		(	$result =  $mysqli->query($q )   )
							
					while	($row = $result->fetch_assoc() ){
					SearchBorder::ShowBuyer ($row) ;
					
								 }			
			 			
			 			}	
			 	########################################################
			 	if(strcmp( $_POST['submit'] , "Submit5" ) == 0  )
					{
						            
            	
        			$Sdate=$_POST['Sdate'];
					$Edate=$_POST['Edate'];
					
									 /*
					$q ="select P.Ssn,P.Name , P.Sname , P.Phone , B.Budget 
 from Person P , Buyer B 

      where P.Ssn = B.Ssn and  P.BusinessNum
	   = ' $BN ' and ('$BD  '<B.Budget or B.Budget <'$BU')" ; 
				
							
			if		(	$result =  $mysqli->query($q )   )
							
					while	($row = $result->fetch_assoc() ){
					SearchBorder::ShowBuyer ($row) ;
					
								 }	
								 */		
			 			
			 			}	
			 		
			 		
					}	
			 			
			 			
            	 
             
               
            ?>
            
             <!-------------------------------------------- -->
            
            
            
            
             </div>
         
        </div>

    
    <?php
    
	 SearchBorder::ShowFooter();
 
    ?>    
    </body>
</html>
