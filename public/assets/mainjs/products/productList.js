$(document).ready(function () {
	productListData();
});    

function productListData(){
		// Datatable Initialize
    var table = $('#product_list').DataTable({
    	 "rowCallback": function( row, data ) {
		    if ( data.product_status == "Out of Stock" ) {
		      $( row).css('background-color','#f7b9b9');
		    }
		  },
    	"serverSide": true,
		// "stateSave": true,
		"paging": true,
    	"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
    	"order": [[ 0, "desc" ]],  
		"dom": '<"top"f <"toolbar"> >rt<"main"<"bottom main-info"i><"main-lenght"l><"main-pagination"p>><"clear">',
		"pageLength": 25,	
		"ordering"   :false,
        "processing": true,
        "ajax":{
	     "url": base +"products/product_list",
	     "dataType": "json",
	     "type": "POST",
	                   },
    "columns": [
	          { "data": "name" },
	          { "data": "image" },
	          { "data": "category" },
	          { "data": "sub_category" },
	          { "data": "price" },
	          { "data": "status" },
	          { "data": "Action" },
	       ],   	 

    });// Datatable Initialize End
}


