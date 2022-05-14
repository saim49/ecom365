/*
Name: 			Tables / Advanced - Examples
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version: 	1.7.0
*/

(function($) {

	'use strict';

	var datatableInit = function() {

		$('#datatable-default').dataTable({
			// "lengthMenu": [[25, 50, -1], [25, 50, "All"]],
			// "dom": '<f<t>ilp>',
		});


	};

	$(function() {
		datatableInit();
	});

}).apply(this, [jQuery]);