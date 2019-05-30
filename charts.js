

chartsObject = "https://mapps.leadway-pensure.com/LeadwayMobileApplicationWebAPI/WebData/Chart"

$.post(chartsObject, ["RetireeFund":true])
  .done(function(data){
  	//convert data object to string
  	JSON.stringify(data);	
    var chartsObject = data.Data
    console.log(chartsObject);