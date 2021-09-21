{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')


		<!--**********************************
            Content body start
        ***********************************-->
		
        <div class="container-fluid">
                <div class="page-titles">
					<h4>Reports of Account Receivable </h4>
                    <div class="reports-sub row " >
					
                        <div class="features-btn col-lg-6  col-sm-12">
                            <div class="row">
                               
                                <div class="col-lg-6  col-sm-12">
                                    <br>
                                    <div class="btn-group ">
                                        <button type="button" class="btn btn-primary">Excel</button>
                                        <button type="button" class="btn btn-primary mx-2">Print</button>
                                       
                                    </div> 
                                </div>
                            </div>
                        </div>
                       <!-- <div class="search col-lg-6  col-sm-12"> 
                           
                        <div class="row"><div class="col-8"></div><div class="col-xl-4"> <span>search</span> <input  class="form-control input-default" type="text"> </div></div>
                    </div> -->
                    </div >
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">User Name</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th>User Name</th>
                                                <th>Balance</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                               
                                                <td>61</td>
                                               
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                
                                                <td>63</td>
                                               
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                               
                                                
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                
                                                <td>$433,060</td>
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                              
                                                <td>$162,700</td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                               
                                                <td>$372,000</td>
                                            </tr>
                                            <tr>
                                                <td>Herrod Chandler</td>
                                               
                                                <td>$137,500</td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                             
                                                <td>$327,900</td>
                                            </tr>
                                            <tr>
                                                <td>Colleen Hurst</td>
                                          
                                                <td>$205,500</td>
                                            </tr>
                                           
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>User Name</th>
                                                
                                                <th>Balance</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                  
				</div>
            </div>
		
		<!--**********************************
            Content body end
        ***********************************-->
			
@endsection