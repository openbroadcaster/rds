<!DOCTYPE html> 
<html lang="en"> 
<head>  
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">

 <meta name="viewport" content="width=device-width, initial-scale=1">


 <title>OB - RDS Module</title>

 <!-- Bootstrap -->   <link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->   <!-- WARNING:
Respond.js doesn't work if you view the page via file:// -->     <!--[if lt IE 9]>       <script
src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>       <script
src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>       <![endif]-->
</head>



<body role="document">

	<div class="container">



			<div> <h1>OpenBroadcaster</h1>
				<h4>RDS Encoder</h4>
				  <p id="lastInfo">This is version <strong>1.1</strong> generated on May 11, 2014.</p>

				<!-- Developer: Emil Imrith			email:technotrom@live.com  --> 
				 <br> 
			</div>

       
       		<div class="panel panel-default">
            <div class="panel-heading">ON Air</div>
            	<div class="panel-body">

                  <div class="col-md-4">
                      	<input id="sessionName" maxlength="25"  class="form-control" type="text"  placeholder="Session Name" data-toggle="tooltip" 
															                            data-placement="left" title="Tooltip on left" size="8">   
                   </div> 



                  <div class="col-md-8">

							                       <button id="tabBasics" type="button" class="btn btn-default btn-md" value"Send">
                              <span class="glyphicon glyphicon-chevron-right"></span> Basics Next </button>

                              <button id="storeBasics" type="button" class="btn btn-default btn-md" value"Send">
                              <span class="glyphicon glyphicon-floppy-saved"></span> Store Basics </button>

                              <button id="storeAll" type="button" class="btn btn-warning btn-md" value"Send">
                              <span class="glyphicon glyphicon-flash"></span> Store All </button> 

                                          
                              
                             
									         </div>

             
                  


              </div>
          </div>
       
          




			<ul class="nav nav-pills" id="myTab">           
				<li class="active"><a href="#program" data-toggle="tab">Program</a></li>
				<li><a href="#dynamicps1" data-toggle="tab">Dynamic PS 1</a></li>
				<li><a href="#dynamicps2" data-toggle="tab">Dynamic PS 2</a></li>
				<li><a href="#radiotext" data-toggle="tab">Radiotext</a></li>
				<li><a href="#messages" data-toggle="tab">Messages</a></li>
				<li><a href="#eon" data-toggle="tab">EON</a></li>
				<li><a href="#datagroups" data-toggle="tab">Data Groups</a></li>
				<li><a href="#system" data-toggle="tab">System</a></li>

			</ul>


			<div class="tab-content">

<!-- ///////////////////////    program    ///////////////////////////// -->
				<div class="tab-pane active" id="program"> <hr>

					<br>


              
               
                   <div class="row">
						           

											

						                   <div class="col-md-4">
						                    	<div class="panel panel-default">
                              <div class="panel-body">
                           
								                        <label>Program Identification:</label> 
									                          <input   id="PI" maxlength="4"  class="form-control" type="text"  placeholder="PI" data-toggle="tooltip" 
															                            data-placement="left" title="Tooltip on left" size="8">   
                            </div>
                           </div>
                         </div>
											 




                     <div class="col-md-4">
                     	<div class="panel panel-default">
                         <div class="panel-body">

							                     	<label >Program Service name:  </label> 
								                       <input id="PS" type="text" class="form-control" placeholder="PS" maxlength="8"  size="8"> 
												
                         </div>
                       </div>
                     </div>



              </div>

                
                  </br>



                    <div class="row">

                       <div class="col-md-4">
                            <div class="panel panel-default">
                               <div class="panel-body">


                          	<label>Program Type: </label>

																															<select  id="PTY" class="form-control">
																															 <option value="none" selected>none</option>
																															 <option value="News" >News</option>
																															 <option value="Affairs" >Affairs</option>
																															 <option value="info" >info</option>
																															 <option value="Sport" >Sport</option>
																															 <option value="Educate" >Educate</option>
																															 <option value="Drama" >Drama</option>
																															 <option value="culture" >culture</option>
																															 <option value="varied" >varied</option>
																															 <option value="Science" >Science</option>
																															 <option value="Pop M" >Pop M</option>
																															 <option value="Pop M" >Classic</option>
																															 <option value="Other" >Other</option>
																															 <option value="children" >children</option>
																															 <option value="Social" >Social</option>
																															 <option value="Finance" >Finance</option>
																															 <option value="Weather" >Weather</option>
																															 <option value="Religion" >Religion</option>
																															 <option value="Phone In" >Phone In</option>
																															 <option value="Travel" >Travel</option>
																															 <option value="Leisure" >Leisure</option>
																															 <option value="Nation" >Nation </option>
																															 <option value="Folk M" >Folk M</option>
																															 <option value="Jazz" >Jazz</option>
																															 <option value="Oldies" >Oldies</option>
																															 <option value="Country" >Country </option>
																															 <option value="Document" >Document</option>
																															 <option value="Alarm" >Alarm!</option>
																															 <option value="TEST" >TEST</option>

																														 </select>

                            </div>
										            			</div>
                       </div>



                       <div class="col-md-4">
                       	 <div class="panel panel-default">
                            <div class="panel-body">


                       			<label>Traffic Program: &nbsp &nbsp</label>   
														                 <input  id="TP" type="checkbox"  >   

                       		</div>
                       	</div>
                       </div>


                       <div class="col-md-4">
                         	<div class="panel panel-default">
                            <div class="panel-body">

                               <label>Music/Speech:</label> 
                            <select id="MS" class="form-control">
															                <option value="music" selected>Music</option>
														                	<option value="speech" >Speech</option>
														              </select>

                       			</div>
                       		</div>
                       	</div>



                    </div>

												
													


											



												 





											 <!--  <li class="list-group-item">
															 <label><a data-toggle="tooltip"        title="The Alternative
																	Frequencies are used to tell receivers what frequencies they can receive the radio station on. This
																	facility is particularly useful in the case of car and portable radios. For this to work, each
																	transmitter must have RDS with the same PI code. Important note: If second PI digit is set to zero
																	(x0xx), this indicates that the station has only one transmitter and the AF list is ignored on most
																	receivers." data-placements="right" href="#" class="nullLink" >Alternative Frequencies: </a></label> 
														 <input id="AF" type="text" class="form-control" placeholder="AF">
												</li> -->


											 


 
							


		</div>


		<!-- ______________________________ End of program  __________________________ -->







<!-- ///////////////////////    dynamicps 1    ///////////////////////////// -->

		<div class="tab-pane" id="dynamicps1"> <hr>

       </br>

					    <div class="row">
					    	 <div class="col-md-12"> 
					      <div class="panel panel-default">
                     <div class="panel-body">
						 

					  <input  type="text" placeholder=" 1 "  
					        name="DynamicPS11" size="8" maxlength="8"  min="" max="" accept=""/> 
					  
					  
					  <input  type="text"  placeholder=" 2 "
						     name="DynamicPS12" size="8" maxlength="8"  min="" max="" accept=""/>
						 
					  
					  <input  type="text" placeholder=" 3 "
						      name="DynamicPS13" size="8" maxlength="8"  min="" max="" accept=""/>
							  
						
					  
					  <input  type="text"  placeholder=" 4 "
						     name="DynamicPS14" size="8" maxlength="8"  min="" max="" accept=""/>
						
					  <input  type="text" placeholder=" 5 "  
					        name="DynamicPS15" size="8" maxlength="8"  min="" max="" accept=""/> 
					  
					  
					  <input  type="text"  placeholder=" 6 "
						      name="DynamicPS16" size="8" maxlength="8"  min="" max="" accept=""/>
						 
					  
					  <input  type="text" placeholder=" 7 "
						     name="DynamicPS17" size="8" maxlength="8"  min="" max="" accept=""/>
							  
						
					  
					  <input  type="text"  placeholder=" 8 "
						      name="DynamicPS18" size="8" maxlength="8"  min="" max="" accept=""/>	
						
						
					  <input  type="text" placeholder=" 9 "  
					        name="DynamicPS21" size="8" maxlength="8"  min="" max="" accept=""/> 
					  
					  
					  <input  type="text"  placeholder=" 10 "
						     name="DynamicPS22" size="8" maxlength="8"  min="" max="" accept=""/>
						 
					  
					  <input  type="text" placeholder=" 11 "
						      name="DynamicPS23" size="8" maxlength="8"  min="" max="" accept=""/>
							  
						
					  
					  <input  type="text"  placeholder=" 12 "
						     name="DynamicPS24" size="8" maxlength="8"  min="" max="" accept=""/>
						
					  <input  type="text" placeholder=" 13 "  
					        name="DynamicPS25" size="8" maxlength="8"  min="" max="" accept=""/> 
					  
					  
					  <input  type="text"  placeholder=" 14 "
						      name="DynamicPS26" size="8" maxlength="8"  min="" max="" accept=""/>
						 
					  
					  <input  type="text" placeholder=" 15 "
						     name="DynamicPS27" size="8" maxlength="8"  min="" max="" accept=""/>
							  
						
					  
					  <input  type="text"  placeholder=" 16 "
						      name="DynamicPS28" size="8" maxlength="8"  min="" max="" accept=""/>	
						
						
					  <input  type="text" placeholder=" 17 "  
					        name="DynamicPS31" size="8" maxlength="8"  min="" max="" accept=""/> 
					  
					  
					  <input  type="text"  placeholder=" 18 "
						     name="DynamicPS32" size="8" maxlength="8"  min="" max="" accept=""/>
						 
					  
					  <input  type="text" placeholder=" 19 "
						      name="DynamicPS33" size="8" maxlength="8"  min="" max="" accept=""/>
							  
						
					  
					  <input  type="text"  placeholder=" 20 "
						     name="DynamicPS34" size="8" maxlength="8"  min="" max="" accept=""/>
						
					  <input  type="text" placeholder=" 21 "  
					        name="DynamicPS35" size="8" maxlength="8"  min="" max="" accept=""/> 
					  
					  
					  <input  type="text"  placeholder=" 22 "
						      name="DynamicPS36" size="8" maxlength="8"  min="" max="" accept=""/>
						 
					  
					  <input  type="text" placeholder=" 23 "
						     name="DynamicPS37" size="8" maxlength="8"  min="" max="" accept=""/>
							  
						
					  
					  <input  type="text"  placeholder=" 24 "
						      name="DynamicPS38" size="8" maxlength="8"  min="" max="" accept=""/>	
						
					
					  <input  type="text" placeholder=" 25 "  
					        name="DynamicPS41" size="8" maxlength="8"  min="" max="" accept=""/> 
					  
					  
					  <input  type="text"  placeholder=" 26 "
						     name="DynamicPS42" size="8" maxlength="8"  min="" max="" accept=""/>
						 
					  
					  <input  type="text" placeholder=" 27 "
						      name="DynamicPS43" size="8" maxlength="8"  min="" max="" accept=""/>
							  
						
					  
					  <input  type="text"  placeholder=" 28 "
						     name="DynamicPS44" size="8" maxlength="8"  min="" max="" accept=""/>
						
					  <input  type="text" placeholder=" 29 "  
					        name="DynamicPS45" size="8" maxlength="8"  min="" max="" accept=""/> 
					  
					  
					  <input  type="text"  placeholder=" 30 "
						      name="DynamicPS46" size="8" maxlength="8"  min="" max="" accept=""/>
						 
					  
					  <input  type="text" placeholder=" 31 "
						     name="DynamicPS47" size="8" maxlength="8"  min="" max="" accept=""/>
							  
						
					  
					  <input  type="text"  placeholder=" 32 "
						      name="DynamicPS48" size="8" maxlength="8"  min="" max="" accept=""/>	
						
						
							
							      </div>
									</div>	
							 </div> 	  
						</div>






		</div>

<!-- ______________________________ End of dynamicps 1  __________________________ -->



<!-- ///////////////////////    dynamicps 2    ///////////////////////////// -->

		<div class="tab-pane" id="dynamicps2"> <hr>

		</br>


					<div class="row">
						<div class="col-md-12">
					      <div class="panel panel-default">
                     <div class="panel-body">
						 

					  <input  type="text" placeholder=" 1 "  
					        name="Dynamic2PS11" size="8" maxlength="8"  min="" max="" accept=""/> 
					  
					  
					  <input  type="text"  placeholder=" 2 "
						     name="Dynamic2PS12" size="8" maxlength="8"  min="" max="" accept=""/>
						 
					  
					  <input  type="text" placeholder=" 3 "
						      name="Dynamic2PS13" size="8" maxlength="8"  min="" max="" accept=""/>
							  
						
					  
					  <input  type="text"  placeholder=" 4 "
						     name="Dynamic2PS14" size="8" maxlength="8"  min="" max="" accept=""/>
						
					  <input  type="text" placeholder=" 5 "  
					        name="Dynamic2PS15" size="8" maxlength="8"  min="" max="" accept=""/> 
					  
					  
					  <input  type="text"  placeholder=" 6 "
						      name="Dynamic2PS16" size="8" maxlength="8"  min="" max="" accept=""/>
						 
					  
					  <input  type="text" placeholder=" 7 "
						     name="Dynamic2PS17" size="8" maxlength="8"  min="" max="" accept=""/>
							  
						
					  
					  <input  type="text"  placeholder=" 8 "
						      name="Dynamic2PS18" size="8" maxlength="8"  min="" max="" accept=""/>	
						
						</tr>
													
						 <tr>
					  <input  type="text" placeholder=" 9 "  
					        name="Dynamic2PS21" size="8" maxlength="8"  min="" max="" accept=""/> 
					  
					  
					  <input  type="text"  placeholder=" 10 "
						     name="Dynamic2PS22" size="8" maxlength="8"  min="" max="" accept=""/>
						 
					  
					  <input  type="text" placeholder=" 11 "
						      name="Dynamic2PS23" size="8" maxlength="8"  min="" max="" accept=""/>
							  
						
					  
					  <input  type="text"  placeholder=" 12 "
						     name="Dynamic2PS24" size="8" maxlength="8"  min="" max="" accept=""/>
						
					  <input  type="text" placeholder=" 13 "  
					        name="Dynamic2PS25" size="8" maxlength="8"  min="" max="" accept=""/> 
					  
					  
					  <input  type="text"  placeholder=" 14 "
						      name="Dynamic2PS26" size="8" maxlength="8"  min="" max="" accept=""/>
						 
					  
					  <input  type="text" placeholder=" 15 "
						     name="Dynamic2PS27" size="8" maxlength="8"  min="" max="" accept=""/>
							  
						
					  
					  <input  type="text"  placeholder=" 16 "
						      name="Dynamic2PS28" size="8" maxlength="8"  min="" max="" accept=""/>	
						
						</tr>		
							
							
						 <tr>
					  <input  type="text" placeholder=" 17 "  
					        name="Dynamic2PS31" size="8" maxlength="8"  min="" max="" accept=""/> 
					  
					  
					  <input  type="text"  placeholder=" 18 "
						     name="Dynamic2PS32" size="8" maxlength="8"  min="" max="" accept=""/>
						 
					  
					  <input  type="text" placeholder=" 19 "
						      name="Dynamic2PS33" size="8" maxlength="8"  min="" max="" accept=""/>
							  
						
					  
					  <input  type="text"  placeholder=" 20 "
						     name="Dynamic2PS34" size="8" maxlength="8"  min="" max="" accept=""/>
						
					  <input  type="text" placeholder=" 21 "  
					        name="Dynamic2PS35" size="8" maxlength="8"  min="" max="" accept=""/> 
					  
					  
					  <input  type="text"  placeholder=" 22 "
						      name="Dynamic2PS36" size="8" maxlength="8"  min="" max="" accept=""/>
						 
					  
					  <input  type="text" placeholder=" 23 "
						     name="Dynamic2PS37" size="8" maxlength="8"  min="" max="" accept=""/>
							  
						
					  
					  <input  type="text"  placeholder=" 24 "
						      name="Dynamic2PS38" size="8" maxlength="8"  min="" max="" accept=""/>	
						
						</tr>	
							
						 <tr>
					  <input  type="text" placeholder=" 25 "  
					        name="Dynamic2PS41" size="8" maxlength="8"  min="" max="" accept=""/> 
					  
					  
					  <input  type="text"  placeholder=" 26 "
						     name="Dynamic2PS42" size="8" maxlength="8"  min="" max="" accept=""/>
						 
					  
					  <input  type="text" placeholder=" 27 "
						      name="Dynamic2PS43" size="8" maxlength="8"  min="" max="" accept=""/>
							  
						
					  
					  <input  type="text"  placeholder=" 28 "
						     name="Dynamic2PS44" size="8" maxlength="8"  min="" max="" accept=""/>
						
					  <input  type="text" placeholder=" 29 "  
					        name="Dynamic2PS45" size="8" maxlength="8"  min="" max="" accept=""/> 
					  
					  
					  <input  type="text"  placeholder=" 30 "
						      name="Dynamic2PS46" size="8" maxlength="8"  min="" max="" accept=""/>
						 
					  
					  <input  type="text" placeholder=" 31 "
						     name="Dynamic2PS47" size="8" maxlength="8"  min="" max="" accept=""/>
							  
						
					  
					  <input  type="text"  placeholder=" 32 "
						      name="Dynamic2PS48" size="8" maxlength="8"  min="" max="" accept=""/>	
						
						
							
							      </div>
									</div>	
							 </div> 	  
						</div>




		</div>

<!-- ______________________________ End of dynamicps 2  __________________________ -->



<!-- ///////////////////////    Radio text    ///////////////////////////// -->


		<div class="tab-pane" id="radiotext"> <hr>
      

							 
             <div class="row">

							 <div class="col-xs-6">

                        <div class="panel panel-default">
                               <div class="panel-body">
										            
										            <label>Radio Text</label> 
													         <textarea id="RT1" class="form-control" rows="3" maxlength="64" placeholder="*If you leave this field empty RT will be disable automatically..."></textarea>
											
                      </div> 
						 				</div>	 
					     </div>


             </div>

		</div>

<!-- _______________________ end Radio text _________________________________ -->





		<div class="tab-pane" id="messages"> <hr>...</div>
		<div class="tab-pane" id="eon"> <hr>...</div> 
		<div class="tab-pane" id="datagroups"> <hr>...</div>
		<div class="tab-pane" id="system"> <hr>...</div>


	</div>







	<script>   $(function () { 
		$('#myTab a:last').tab('show')
	})   </script>



</div> <!--container-->





<script src="js/underscore-min.js"></script> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.1.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/rds_commands.js"></script>
<script src="js/eventUtility.js"></script> 
<script src="js/script.js"></script>



</body>


</html>
