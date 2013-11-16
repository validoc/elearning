(function($) {
	$(document).ready(function(e) {
		$("#tabla_ingresos").dataTable({
            "aoColumns":[
                {"bSortable": true},
                {"bSortable": true}
            ],
            "aaSorting": [[0, "desc" ]],
            "oLanguage": {
                "sUrl": "/js/es_BO.txt"
            },
            "bFilter": true,
            "sPaginationType": "full_numbers"
        });
	});
}) (jQuery);