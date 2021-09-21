<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ClubDefineGlobalController extends Controller
{
	
	    // Dashboard
    public function dashboard_1()
    {
      
     
        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
        $active="active";
        $event_class="schedule-event";
        $button_class="btn-primary";
        $action = __FUNCTION__;
		
        return view('dashboard.index', compact('page_title', 'page_description','action','logo','logoText','active','event_class','button_class'));
    }
    
	   // Page Analytics
    public function quickaccess()
    {
        
        $page_title = 'Quick Access';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
		
        $action = __FUNCTION__;

        return view('pages.quickaccess', compact('page_title', 'page_description','action','logo','logoText'));
    }
    
    //manual charges
    public function manualcharges()
    {
        $page_title = 'manualcharges';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('pages.manualcharges', compact('page_title', 'page_description','action'));
    }
	//bulk charges
    public function bulk_charges()
    {
        $page_title = 'Bulk charges';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('pages.bulkcharges', compact('page_title', 'page_description','action'));
    }
    //guest charges
    public function guest_charges()
    {
        $page_title = 'Guest charges';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('pages.guestusers', compact('page_title', 'page_description','action'));
    }
     //manual payments
     public function manual_payments()
     {
         $page_title = 'Manual Payments';
         $page_description = 'Some description for the page';
         
         $action = __FUNCTION__;
 
         return view('pages.manual_payments', compact('page_title', 'page_description','action'));
     }
     //reports
     public function reports()
     {
         $page_title = 'Accounts Receivable';
         $page_description = 'Some description for the page';
         
         $action = __FUNCTION__;
 
         return view('pages.reports', compact('page_title', 'page_description','action'));
     }
     //all charges
     public function all_charges()
     {
         $page_title = 'All charges';
         $page_description = 'Some description for the page';
         
         $action = __FUNCTION__;
 
         return view('pages.allcharges', compact('page_title', 'page_description','action'));
     }
     //fixed charges
     public function fixed_charges()
     {
         $page_title = 'Fixed charges';
         $page_description = 'Some description for the page';
         
         $action = __FUNCTION__;
 
         return view('pages.fixedcharges', compact('page_title', 'page_description','action'));
     }
     //payment_reports
     public function payment_reports()
     {
         $page_title = 'Payment charges';
         $page_description = 'Some description for the page';
         
         $action = __FUNCTION__;
 
         return view('pages.payment_reports', compact('page_title', 'page_description','action'));
     }
      //service_revenue
      public function service_revenue()
      {
          $page_title = 'Service revenue';
          $page_description = 'Some description for the page';
          
          $action = __FUNCTION__;
  
          return view('pages.service_revenue', compact('page_title', 'page_description','action'));
      }
    //non_fixed_chargese
    public function non_fixed_charges()
    {
        $page_title = 'Non Fixed Charges';
        $page_description = 'Some description for the page';
        
        $action = __FUNCTION__;

        return view('pages.nonfixedcharges', compact('page_title', 'page_description','action'));
    }
    //all-users
    public function all_users()
    {
        $page_title = 'All users';
        $page_description = 'Some description for the page';
        
        $action = __FUNCTION__;

        return view('pages.allusers', compact('page_title', 'page_description','action'));
    }

     //user roles
     public function user_roles()
     {
         $page_title = 'User roles';
         $page_description = 'Some description for the page';
         
         $action = __FUNCTION__;
 
         return view('pages.user_roles', compact('page_title', 'page_description','action'));
     }
     //add user
     public function adduser()
     {
         $page_title = 'Add user';
         $page_description = 'Some description for the page';
         
         $action = __FUNCTION__;
 
         return view('pages.adduser', compact('page_title', 'page_description','action'));
     }
      //guest_user
      public function guest_user()
      {
          $page_title = 'Guest user';
          $page_description = 'Some description for the page';
          
          $action = __FUNCTION__;
  
          return view('pages.guest-user', compact('page_title', 'page_description','action'));
      }
	    // Profile
    public function app_profile()
    {
        $page_title = 'Profile';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('app.profile', compact('page_title', 'page_description','action'));
    }

	
	

	


	



	    // Ecommerce Customers
    public function ecom_customers()
    {
        $page_title = 'Ecom Customers';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ecom.customers', compact('page_title', 'page_description','action'));
    }
	
	    // Ecommerce Invoice
    public function ecom_invoice()
    {
        $page_title = 'Invoice';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ecom.invoice', compact('page_title', 'page_description','action'));
    }
	
	
	
	

	    // Page Error 400
    public function page_error_400()
    {
        $page_title = 'Page Error 400';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('page.error400', compact('page_title', 'page_description','action'));
    }
	
	    // Page Error 403
    public function page_error_403()
    {
        $page_title = 'Page Error 403';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('page.error403', compact('page_title', 'page_description','action'));
    }
	
	    // Page Error 404
    public function page_error_404()
    {
        $page_title = 'Page Error 404';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('page.error404', compact('page_title', 'page_description','action'));
    }
	
	    // Page Error 500
    public function page_error_500()
    {
        $page_title = 'Page Error 500';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('page.error500', compact('page_title', 'page_description','action'));
    }
	
	    // Page Error 503
    public function page_error_503()
    {
        $page_title = 'Page Error 503';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('page.error503', compact('page_title', 'page_description','action'));
    }
	
	    // Page Forgot Password
    public function page_forgot_password()
    {
        $page_title = 'Page Forgot Password';
        $page_description = 'Some description for the page';
        
        $action = __FUNCTION__;

        return view('page.forgot_password', compact('page_title', 'page_description','action'));
    }
	
	    // Page Lock Screen
    public function page_lock_screen()
    {
        $page_title = 'Page Lock Screen';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('page.lockscreen', compact('page_title', 'page_description','action'));
    }
	
	    // Page Login
    public function page_login()
    {
        $page_title = 'Page Login';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('page.login', compact('page_title', 'page_description','action'));
    }
	
	    // Page Register
    public function page_register()
    {
        $page_title = 'Page Register';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('page.register', compact('page_title', 'page_description','action'));
    }
	
	    // Table Bootstrap Basic
    public function table_bootstrap_basic()
    {
        $page_title = 'Table Basic';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('table.bootstrapbasic', compact('page_title', 'page_description','action'));
    }
	
	    // Table Datatable Basic
    public function table_datatable_basic()
    {
        $page_title = 'Table Datatable';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('table.datatablebasic', compact('page_title', 'page_description','action'));
    }
	    // UC Nestable.
    public function uc_nestable()
    {
        $page_title = 'Nestable';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('uc.nestable', compact('page_title', 'page_description','action'));
    }
	    // UC Lightgallery.
    public function uc_lightgallery()
    {
        $page_title = 'Lightgallery';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('uc.lightgallery', compact('page_title', 'page_description','action'));
    }
	
	    // UC NoUi Slider
    public function uc_noui_slider()
    {
        $page_title = 'Noui Slider';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('uc.nouislider', compact('page_title', 'page_description','action'));
    }
	
	    // UC Select2
    public function uc_select2()
    {
        $page_title = 'Select2';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('uc.select2', compact('page_title', 'page_description','action'));
    }
	
	    // UC Sweetalert
    


	

	
	    // Ui List Group
    public function ui_list_group()
    {
        $page_title = 'List Group';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.listgroup', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Media Object
    public function ui_media_object()
    {
        $page_title = 'Media Object';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.mediaobject', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Modal
    public function ui_modal()
    {
        $page_title = 'Modal';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('ui.modal', compact('page_title', 'page_description','action'));
    }
	

}
