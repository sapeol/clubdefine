<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'name' => env('APP_NAME', 'Welly Laravel'),


    'public' => [
        'favicon' => 'media/img/logo/favicon.ico',
        'fonts' => [
            'google' => [
                'families' => [
                    'Poppins:300,400,500,600,700'
                ]
            ]
        ],
		'global' => [
			'css' => [
				'css/style.css',  'https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap',
			],
			'js' => [
				'vendor/global/global.min.js',
			],
		],
		'pagelevel' => [
			'css' => [
				'dashboard_1' => [
							'vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'vendor/jqvmap/css/jqvmap.min.css',
							'vendor/chartist/css/chartist.min.css',
							'vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
				],
			
				'quickaccess' => [
							'vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
				],
				'manualcharges' => [
					'vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
					'vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
				],
				'bulk_charges' => [
						'vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
						'vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
						'vendor/lightgallery/css/lightgallery.min.css',
				],
				'app_calender' => [
							'vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'vendor/fullcalendar/css/fullcalendar.min.css',
				],
				'app_profile' => [
							'vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
							'vendor/lightgallery/css/lightgallery.min.css',
				],
				'guest_charges' => [
					'vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
					'vendor/lightgallery/css/lightgallery.min.css',
				],
				'manual_payments' => [
					'vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
						'vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
						'vendor/lightgallery/css/lightgallery.min.css',
				],
				'reports' => [
					'vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
					'vendor/lightgallery/css/lightgallery.min.css',
					'vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
					'vendor/datatables/css/jquery.dataTables.min.css',
				],
				'all_charges' => [
					'vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
					'vendor/lightgallery/css/lightgallery.min.css',
					'vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
					'vendor/datatables/css/jquery.dataTables.min.css',
				],
				'fixed_charges' => [
					'vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
					'vendor/lightgallery/css/lightgallery.min.css',
					'vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
					'vendor/datatables/css/jquery.dataTables.min.css',
				],
				'payment_reports' => [
					'vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
					'vendor/lightgallery/css/lightgallery.min.css',
					'vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
					'vendor/datatables/css/jquery.dataTables.min.css',
				],
				'service_revenue' => [
					'vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
					'vendor/lightgallery/css/lightgallery.min.css',
					'vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
					'vendor/datatables/css/jquery.dataTables.min.css',
				],
				'non_fixed_charges' => [
					'vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
					'vendor/lightgallery/css/lightgallery.min.css',
					'vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
					'vendor/datatables/css/jquery.dataTables.min.css',
				],
				'all_users' => [
					'vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
					'vendor/lightgallery/css/lightgallery.min.css',
					'vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
					'vendor/datatables/css/jquery.dataTables.min.css',
				],
				'user_roles' => [
					'vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
					'vendor/lightgallery/css/lightgallery.min.css',
					'vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
					'vendor/datatables/css/jquery.dataTables.min.css',
				],
				'adduser' => [
					'vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				
				],
				'guest_user' => [
					'vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				
				],

				
				
				'ecom_invoice' => [
							'vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				],
				
			
			],
			'js' => [
				'dashboard_1' => [
							'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'vendor/chart.js/Chart.bundle.min.js',
							'vendor/apexchart/apexchart.js',
							'vendor/bootstrap-datetimepicker/js/moment.js',
							'vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
							'vendor/peity/jquery.peity.min.js',
							'vendor/apexchart/apexchart.js',
							'js/dashboard/dashboard-1.js',
              'js/custom.min.js',
              'js/deznav-init.js',
				],
				'quickaccess' => [
					'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
					'js/custom.min.js',
					'js/deznav-init.js',
					],
				'manualcharges' => [
					'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
					'js/custom.min.js',
					'js/deznav-init.js',
					],
				'bulk_charges' => [
					'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
					'js/custom.min.js',
					'js/deznav-init.js',
					],
				'guest_charges' => [
					'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
					'js/custom.min.js',
					'js/deznav-init.js',
					],

				'manual_payments' => [
					'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
					'js/custom.min.js',
					'js/deznav-init.js',
					],
				'reports' => [
					'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
					'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
					'vendor/datatables/js/jquery.dataTables.min.js',
					'js/plugins-init/datatables.init.js',
					'js/custom.min.js',
					'js/deznav-init.js',
					],
				'all_charges' => [
					'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
					'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
					'vendor/datatables/js/jquery.dataTables.min.js',
					'js/plugins-init/datatables.init.js',
					'js/custom.min.js',
					'js/deznav-init.js',
					],
				'fixed_charges' => [
					'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
					'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
					'vendor/datatables/js/jquery.dataTables.min.js',
					'js/plugins-init/datatables.init.js',
					'js/custom.min.js',
					'js/deznav-init.js',
					],
				'payment_reports' => [
					'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
					'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
					'vendor/datatables/js/jquery.dataTables.min.js',
					'js/plugins-init/datatables.init.js',
					'js/custom.min.js',
					'js/deznav-init.js',
					],
				'service_revenue' => [
					'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
					'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
					'vendor/datatables/js/jquery.dataTables.min.js',
					'js/plugins-init/datatables.init.js',
					'js/custom.min.js',
					'js/deznav-init.js',
					],
				'non_fixed_charges' => [
					'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
					'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
					'vendor/datatables/js/jquery.dataTables.min.js',
					'js/plugins-init/datatables.init.js',
					'js/custom.min.js',
					'js/deznav-init.js',
					],

				'all_users' => [
					'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
					'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
					'vendor/datatables/js/jquery.dataTables.min.js',
					'js/plugins-init/datatables.init.js',
					'js/custom.min.js',
					'js/deznav-init.js',
					],

				'user_roles' => [
					'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
					'js/custom.min.js',
					'js/deznav-init.js',
					],
				'adduser' => [
					'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
					'js/custom.min.js',
					'js/deznav-init.js',
					],
				'guest_user' => [
					'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
					'js/custom.min.js',
					'js/deznav-init.js',
					],
				'app_profile' => [
              'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
              'vendor/lightgallery/js/lightgallery-all.min.js',
              'js/custom.min.js',
              'js/deznav-init.js',
				],
				
				
			
				
				'ecom_customers' => [
              'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'vendor/highlightjs/highlight.pack.min.js',
              'js/custom.min.js',
              'js/deznav-init.js',
				],
				'ecom_invoice' => [
              'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'vendor/highlightjs/highlight.pack.min.js',
              'js/custom.min.js',
              'js/deznav-init.js',
				],
				
			
			
				'form_validation_jquery' => [
              'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'vendor/jquery-validation/jquery.validate.min.js',
							'js/plugins-init/jquery.validate-init.js',
              'js/custom.min.js',
              'js/deznav-init.js',
				],
				'form_wizard' => [
              'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'vendor/jquery-steps/build/jquery.steps.min.js',
							'vendor/jquery-validation/jquery.validate.min.js',
							'js/plugins-init/jquery.validate-init.js',
							'vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js',
              'js/custom.min.js',
              'js/deznav-init.js',
				],
				'map_jqvmap' => [
              'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
							'vendor/jqvmap/js/jquery.vmap.min.js',
							'vendor/jqvmap/js/jquery.vmap.world.js',
							'vendor/jqvmap/js/jquery.vmap.usa.js',
							'js/plugins-init/jqvmap-init.js',
              'js/custom.min.js',
              'js/deznav-init.js',
				],
				'page_error_400' => [
              'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
              'js/custom.min.js',
              'js/deznav-init.js',
				],
				'page_error_403' => [
              'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
              'js/custom.min.js',
              'js/deznav-init.js',
				],
				'page_error_404' => [
              'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
              'js/custom.min.js',
              'js/deznav-init.js',
				],
				'page_error_500' => [
            'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				],
				'page_error_503' => [
            'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				],
				'page_forgot_password' => [
            'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				],
				'page_lock_screen' => [
            'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
            'vendor/deznav/deznav.min.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				],
				'page_login' => [
            'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				],
				'page_register' => [
            'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				],
				'table_bootstrap_basic' => [
            'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				],
				'table_datatable_basic' => [
            'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
            'vendor/datatables/js/jquery.dataTables.min.js',
            'js/plugins-init/datatables.init.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				],
				'uc_lightgallery' => [
            'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
            'vendor/lightgallery/js/lightgallery-all.min.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				],
				'uc_nestable' => [
            'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
            'vendor/nestable2/js/jquery.nestable.min.js',
            'js/plugins-init/nestable-init.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				],
				'uc_noui_slider' => [
            'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
            'vendor/nouislider/nouislider.min.js',
            'vendor/wnumb/wNumb.js',
            'js/plugins-init/nouislider-init.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				],
				'uc_select2' => [
            'vendor/select2/js/select2.full.min.js',
            'js/plugins-init/select2-init.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				],
				'uc_sweetalert' => [
            'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
            'vendor/sweetalert2/dist/sweetalert2.min.js',
            'js/plugins-init/sweetalert.init.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				],
				'uc_toastr' => [
            'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
            'vendor/toastr/js/toastr.min.js',
            'js/plugins-init/toastr-init.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				],
				'ui_accordion' => [
            'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				],
				'ui_alert' => [
            'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				],
				'ui_badge' => [
            'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				],
				'ui_button' => [
            'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				],
				'ui_button_group' => [
            'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				],
				'ui_card' => [
            'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				],
				'ui_carousel' => [
            'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				],
				'ui_dropdown' => [
            'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				],
				'ui_manualcharges' => [
            'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				],
				'ui_list_group' => [
            'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				],
				'ui_media_object' => [
            'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				],
				'ui_modal' => [
            'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				],
				'ui_pagination' => [
            'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				],
				'ui_popover' => [
            'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				],
				'ui_progressbar' => [
            'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				],
				'ui_tab' => [
            'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				],
				'ui_typography' => [
            'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				],
				'widget_basic' => [
            'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
            'vendor/chartist/js/chartist.min.js',
            'vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js',
            'vendor/flot/jquery.flot.js',
            'vendor/flot/jquery.flot.pie.js',
            'vendor/flot/jquery.flot.resize.js',
            'vendor/flot-spline/jquery.flot.spline.min.js',
            'vendor/jquery-sparkline/jquery.sparkline.min.js',
            'js/plugins-init/sparkline-init.js',
            'vendor/peity/jquery.peity.min.js',
            'js/plugins-init/piety-init.js',
            'vendor/chart.js/Chart.bundle.min.js',
            'js/plugins-init/widgets-script-init.js',
            'js/custom.min.js',
            'js/deznav-init.js',
				]
					
			]
		],
	]
];
