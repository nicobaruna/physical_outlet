/**
 * @author user
 */

$(document).ready(function(){
	
});

function autoComplete(key){
	$.get(base+'/reporters/reporterLookUp/'+key+'.json',function(data){
		$( "#reporter" ).autocomplete({
	      source: data
	    });
	});
}
