$("#inputvalue").change(function(e){
    e.preventDefault();
    var amount = $("#inputvalue").val();
    var to = $(".to").val();
    var from = $(".from").val();
    
    $.ajax({
        url : "/api/currencyConvertor",
        data : '?a='+amount+'&to='+to+'f&rom='+from,
        success : function(data){
        	console.log(data);
            $('#convertedvalue').html(data);
        }
    });
});