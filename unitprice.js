

$(document).ready(function(){
//retrieve all fund slots and store in variable
 var fund1 =  document.getElementById('f1')
 var fund2 =  document.getElementById('f2')
 var fund3 =  document.getElementById('f3')
 var fund4 =  document.getElementById('f4')

 //store url in variable
 var multifundObject = "https://mapps.leadway-pensure.com/LeadwayMobileApplicationWebAPI/WebData/UnitPrice?clientId=9dy8earw04r09wjefsdp90zsjs"

//extract  data
$.post(multifundObject)
  .done(function(data){
  	//convert data object to string
  	JSON.stringify(data);	
    var fundObject = data.Data
    console.log(fundObject);

    // store extracted values in variables
   var multifundOne = data.Data.Fund1UnitPrice
   var multifundTwo = data.Data.Fund2UnitPrice
   var multifundThree = data.Data.Fund3UnitPrice
   var multifundFour = data.Data.Fund4UnitPrice



   console.log(multifundOne)
    console.log(multifundTwo)
     console.log(multifundThree)
      console.log(multifundFour)

   // update html with values
     fund1.innerHTML = multifundOne 
     fund2.innerHTML = multifundTwo 
     fund3.innerHTML = multifundThree
     fund4.innerHTML = multifundFour




  });

 });


