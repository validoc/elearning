(function($) {
	$(document).ready(function(e) {
		$("#tabla_intentos").dataTable({
            "aoColumns":[
                {"bSortable": true},
                {"bSortable": true},
                {"bSortable": true}
            ],
            "aaSorting": [[0, "asc" ]],
            "oLanguage": {
                "sUrl": "/js/es_BO.txt"
            },
            "bFilter": true,
            "sPaginationType": "full_numbers"
        });
	});
}) (jQuery);