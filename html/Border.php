<?php 
	class SearchBorder	
	{
		############################################
		function ShowFooter () {     
    	echo '
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    © 2015 YourCompany | By : <a href="http://www.designbootstrap.com/" target="_blank">DesignBootstrap</a>
                </div>

            </div>
        </div>
    </footer>
    
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>' ;
             
             }
             ##################################
             
		function ShowPropertySale ($row) {
		echo '
			 			<div class="col-md-4 col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading"> ' ;
                       echo    'postalcode =';
                       echo $row["Postalcode"];
                       echo ' </div>
                        <div class="panel-body">
                            <p>' ;
                            
                            
                            echo $row["address"];
									echo '</p>'; 
									echo '<h>EstimatedWorth :';
							
                            echo $row["EstimatedWorth"];
                            
									                             
                            echo'</h><br>Meter:';
                            echo $row["meter"] ;
                            echo'</br><br> Owner :' ;
                            echo $row["Name"];echo $row["Sname"];
                            echo '</br><br>Phone :';
                            echo $row["Phone"]; 
                                                       
                            echo ' 
                        </div>
                        <div class="panel-footer">
                            Sale Property
                        </div>
                    </div>
                </div> ' ;
             }
             
#################################             
      function ShowRentFormSearch(){
		echo '<form method="post" action="" >
                                    <div class="form-group col-md-3 ">
   	 											<label for="Value">Mortage</label>
	    											<input type="number" class="form-control" name="Mortage" value="0"> 
    											</div>
    											
    											<div class="form-group col-md-3 ">
    												<label for="PT">Mortage Tolerance</label>
    												<input type="number" class="form-control" name="MT" value="0"> 
    											</div>
    											
												<div class="form-group col-md-3 ">
    												<label for="fl">Rent</label>
    												<input type="number" class="form-control" name="Rent" value="0"> 
    											</div>
    											<div class="form-group col-md-3 ">
    									
    												<label for="FT">Rent Tolerance</label>
    												<input type="number" class="form-control" name="RT" value="0"> 
    												
    											</div>    											
    												<div class="form-group col-md-6 ">
    									
    												<label for="FT">Floor</label>
    												<input type="number" class="form-control" name="RFloor" value="0"> 
    												
    											</div>
    											
    											<div class="form-group col-md-6 ">
    									
    												<label for="FT">Floor Tolerance</label>
    												<input type="number" class="form-control" name="RFT" value="0"> 
    												
    											</div>
    											
    											<div class="form-group col-md-3 ">
  												<button type="submit" class="btn btn-default" name="submit"  id="emam" value="Submit2" >Submit</button>
                             			</div>
                                   </form>';  		
  		
  		    }  
  		       
  		    #########################
  		    
  		    function ShowSaleFormSearch(){
echo '<form class="form" method="post" action=""> 
                                    <div class="form-group col-md-3 ">
   	 											<label for="Value">Value</label>
	    											<input type="number" class="form-control" name="Value" value="0"> 
    											</div>
    											
    											<div class="form-group col-md-3 ">
    												<label for="PT">Price Tolerance</label>
    												<input type="number" class="form-control" name="VT" value="0"> 
    											</div>
    											
												<div class="form-group col-md-3 ">
    												<label for="fl">Floor</label>
    												<input type="number" class="form-control" name="Floor" value="0"> 
    											</div>
    											<div class="form-group col-md-3 ">
    									
    												<label for="FT">Floor Tolerance</label>
    												<input type="number" class="form-control" name="FT" value="0"> 
    												
    											</div>    											
    											
    											
    											
    											<div class="form-group col-md-3 ">
  												<button type="submit" class="btn btn-default" name="submit"  id="emam" value="Submit1" >Submit</button>
                             			</div>
                                   </form>';
  		    }
  		    
  		    
#################################################  		    
  		    function ShowRenterFormSearch(){
echo '<form class="form" method="post" action=""> 
                                    <div class="form-group col-md-3 ">
   	 											<label for="Value">Rent</label>
	    											<input type="number" class="form-control" name="RenterRent" value="0"> 
    											</div>
    											
    											<div class="form-group col-md-3 ">
    												<label for="PT">Rent Tolerance</label>
    												<input type="number" class="form-control" name="RTRenter" value="0"> 
    											</div>
    											
												<div class="form-group col-md-3 ">
    												<label for="fl">Mortage</label>
    												<input type="number" class="form-control" name="MortageRenter" value="0"> 
    											</div>
    											<div class="form-group col-md-3 ">
    									
    												<label for="FT">Mortage Tolerance</label>
    												<input type="number" class="form-control" name="MTRenter" value="0"> 
    												
    											</div>    											
    											
    											
    											
    											<div class="form-group col-md-3 ">
  												<button type="submit" class="btn btn-default" name="submit"  id="emam" value="Submit3" >Submit</button>
                             			</div>
                                   </form>';
  		    }
 ######################################################## 
 
   		    
  		   function  ShowBuyerFormSearch() {
  		   	echo '<form class="form" method="post" action=""> 
                                    <div class="form-group col-md-6 ">
   	 											<label for="Value">Budget</label>
	    											<input type="number" class="form-control" name="BuyerBudget" value="0"> 
    											</div>
    											
    											<div class="form-group col-md-6 ">
    												<label for="PT">Budget Tolerance</label>
    												<input type="number" class="form-control" name="BTBuyer" value="0"> 
    											</div>
    											
																						
    											
    											
    											
    											<div class="form-group col-md-3 ">
  												<button type="submit" class="btn btn-default" name="submit"  id="emam" value="Submit4" >Submit</button>
                             			</div>
                                   </form>';
  		   
  		   
  		   }
##############################################################

		function  ShowAgreementFormSearch()
		{
			echo '<form class="form" method="post" action=""> 
                                    <div class="form-group col-md-6 ">
   	 											<label for="Value">Start Date</label>
	    											<input type="date" class="form-control" name="Sdate" value="0"> 
    											</div>
    											
    											<div class="form-group col-md-6 ">
    												<label for="PT">End Date</label>
    												<input type="date" class="form-control" name="Edate" value="0"> 
    											</div>
    											
																						
    											
    											
    											
    											<div class="form-group col-md-4 ">
  												<button type="submit" class="btn btn-default" name="submit"  id="emam" value="Submit5" >Submit</button>
                             			</div>
                                   </form>';
		}  		   
  		   
##################################################################
  		    
  		      
             function ShowHeader($UserName ,$RSname ){
             
echo '
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>User Name: </strong> <!-- username -->' ; 
                   echo $UserName;
                   echo'
                    &nbsp;&nbsp;     
                    <strong>Real State Name: </strong> <!-- AmlackName-->'; 
                    echo $RSname; 
                    echo '  
                </div>

            </div>
        </div>
    </header>
    
    
    <!-- HEADER END-->
    
    <div class="navbar_mine">
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                
                <a class="navbar-brand" href="Admin.php">

                    <img src="assets/img/logo.png" />
                </a>

            </div>

            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">

                        

                    </ul>
                </div>
            </div>
        </div>
    </div>
                <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a class="menu-top-active" href="index.php">Logout</a></li>
                            

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
    ';             
             }
           
      ############################     
             
		function ShowPropertyRent ($row) {
		echo '
			 			<div class="col-md-4 col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading"> ' ;
                       echo    'postalcode =';
                       echo $row["Postalcode"];
                       echo ' </div>
                        <div class="panel-body">
                            <p>Address:' ;
                            
                            
                            echo $row["address"];
									echo '</p>'; 
									echo '<br>Rent :';
							
                            echo $row["Rent"];
                            
									 echo'</br><br>Meter:';
                            echo $row["meter"] ;
                            echo'</br><br> Owner :' ;
                            echo $row["Name"];echo" " ;echo $row["Sname"];
                            echo '</br><br>Phone :';
                            echo $row["Phone"]; 
                            
                            echo'</br><br>Mortage:'; 
                            echo $row["Mortage"];                           
                            echo ' </br>';
                            
                            echo '
                        </div>
                        <div class="panel-footer">
                            Rent Property
                        </div>
                    </div>
                </div> ' ;
             }  
             
             	     ############################     
             
		function ShowRenter ($row) {
				 $MarriageState = array(
    1    => "Married",
    2    => "Single",
   
);
		echo '
			 			<div class="col-md-4 col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading"> ' ;
                       echo    'SSN =';
                       echo $row["Ssn"];
                       echo ' </div>
                        <div class="panel-body">
                            <br>Name : ' ;
                            
                            
                            echo $row["Name"];
									echo ' ';
							
                            echo $row["Sname"];
                            
									                             
                            echo'</br><br>Phone:';
                            echo $row["Phone"] ;
                            echo'</br><br>Rent:'; 
                            echo $row["Rentestimate"];                           
                            echo ' </br>';
                            echo '<br>MarriageState: ';
                            echo $MarriageState[$row["Marriage"]] ;
                            echo '</br>';
                            echo'
                        </div>
                        <div class="panel-footer">
                            Renter
                        </div>
                    </div>
                </div> ' ;
             } 
    ##############################################################
             
             function ShowBuyer ($row) {
		echo '
			 			<div class="col-md-4 col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading"> ' ;
                       echo    'SSN =';
                       echo $row["Ssn"];
                       echo ' </div>
                        <div class="panel-body">
                            <br>Name:' ;
                            
                            
                            echo $row["Name"];
									echo ' '; 
							
                            echo $row["Sname"];
                            
									                             
                            echo'</br><br>Phone:';
                            echo $row["Phone"] ;
                            echo'</br><br>Rent:'; 
                            echo $row["Budget"];                           
                            echo ' </br>
                        </div>
                        <div class="panel-footer">
                            Buyer
                        </div>
                    </div>
                </div> ' ;
             } 
             
             
             
	}
	
?>