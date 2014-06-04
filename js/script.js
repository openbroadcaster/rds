



(function() {

  
  var info = document.getElementById("lastInfo");


  var mouseHandler = function(evt) {
      var target = eventUtility.getTarget(evt),
          className = target.className,
          tagName = target.tagName,
          idName=target.id,
          calue = target.value;
  



      if (idName == "storeAll" ) {

            

                  
                
        
       

         

         }











      if (idName == "storeBasics" ) {

              eventUtility.preventDefault(evt);

                var btn = $(this)
                 btn.button('loading')
       

                // variable to hold request
                var request;





            var er = _.compact(_.map(pira(),function(value,key) {
               
               if(value != "" || value != false ) return  key + "=" + value;               

                 }));






              var basics =  er.toString();

                 
               
                var disableBasicInputs = function () {
                   PI.disabled = true,
                   PS.disabled = true,
                   PTY.disabled = true,
                   TP.disabled = true,
                   MS.disabled = true,
                   RT1.disabled = true ;
                };

                 var enableBasicInputs = function () {
                   PI.disabled = false,
                   PS.disabled = false,
                   PTY.disabled = false,
                   TP.disabled = false,
                   MS.disabled = false,
                   RT1.disabled = false ;
                };



                



               



                 //   alert(typeof basicsComands);
         
        
                 disableBasicInputs();

                      if (request) {
                           request.abort();
                        }

                  

                    var data = {};

                    data.datetime = "ahi schii ke lindo";
                    data.commands = basics;


                    // fire off the request to 
                  request = $.ajax({
                      url: "encoder.php",
                      type: "post",
                      data: data
                  });

                  // callback handler that will be called on success
                  request.done(function (response, textStatus, jqXHR){
                      // log a message to the console
                    //  console.log("Hooray, it worked!");
                    alert(response);
                  });

                  // callback handler that will be called on failure
                  request.fail(function (jqXHR, textStatus, errorThrown){
                      // log the error to the console
                      console.error(
                          "The following error occured: "+
                          textStatus, errorThrown
                      );
                  });

                  // callback handler that will be called regardless
                  // if the request failed or succeeded
                  request.always(function () {
                      // reenable the inputs
                      enableBasicInputs();
                  });




       }  //end of IF





 };// end mouseHandler




 

eventUtility.addEvent(document, "click", mouseHandler);
// eventUtility.addEvent(document, "mouseover", mouseHandler);






}());




