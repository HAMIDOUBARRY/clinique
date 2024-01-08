$('document').ready(function () {
	    // Fonction pour initialiser ou réinitialiser DataTable
		function initialiserOuReinitialiserDataTable(selector, options) {
			// Détruire DataTable s'il existe déjà
			if ($.fn.DataTable.isDataTable(selector)) {
				$(selector).DataTable().destroy();
			}
			// Initialiser DataTable avec les nouvelles options
			$(selector).DataTable(options);
		}
	
		// Initialiser ou réinitialiser le premier DataTable
		initialiserOuReinitialiserDataTable('.data-table', {
			scrollCollapse: true,
			autoWidth: false,
			responsive: true,
			columnDefs: [{
				targets: "datatable-nosort",
				orderable: false,
			}],
			lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
			language: {
				info: "_START_-_END_ of _TOTAL_ entries",
				searchPlaceholder: "Search",
				paginate: {
					next: '<i class="ion-chevron-right"></i>',
					previous: '<i class="ion-chevron-left"></i>'
				}
			},
		});
	
		// Initialiser ou réinitialiser le deuxième DataTable avec export
		initialiserOuReinitialiserDataTable('.data-table-export', {
			scrollCollapse: true,
			autoWidth: false,
			responsive: true,
			columnDefs: [{
				targets: "datatable-nosort",
				orderable: false,
			}],
			lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
			language: {
				info: "_START_-_END_ of _TOTAL_ entries",
				searchPlaceholder: "Search",
				paginate: {
					next: '<i class="ion-chevron-right"></i>',
					previous: '<i class="ion-chevron-left"></i>'
				}
			},
			dom: 'Bfrtp',
			buttons: ['copy', 'csv', 'pdf', 'print']
		});
	
	$('#example-select-all').on('click', function () {
		var rows = table.rows({ 'search': 'applied' }).nodes();
		$('input[type="checkbox"]', rows).prop('checked', this.checked);
	});

	$('.checkbox-datatable tbody').on('change', 'input[type="checkbox"]', function () {
		if (!this.checked) {
			var el = $('#example-select-all').get(0);
			if (el && el.checked && ('indeterminate' in el)) {
				el.indeterminate = true;
			}
		}
	});
});