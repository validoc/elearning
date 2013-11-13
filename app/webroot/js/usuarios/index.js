(function($) {
	$(document).ready(function(e) {
		$("#tabla_usuarios").dataTable({
            "aoColumns":[
                {"bSortable": true},
                {"bSortable": true},
                {"bSortable": true},
                {"bSortable": false, "bSearchable" : false}
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