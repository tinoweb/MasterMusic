@extends('layouts.adm')

@section('content')
		
		<div class="container body">
			
			<div class="main_container">
				@include('admin.admin_left')

				@include('admin.admin_top')
				
				{{-- todas as paginas devem ser appresentada aabixo. --}}
				<div class="right_col" role="main" style="min-height: 1684px;">
			    <div class="x_panel">
              <div class="x_title">
                <h2><i class="fa fa-align-left"></i> Lista dos Subscritos no site </h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li>
                  <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">

                <!-- start accordion -->
                <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel">
                      <div class="panel-body">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>email</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            
                            
                            <tr>
                              <th scope="row">212</th>
                              <td>@sdasdas</td>
                              <td>ijahjhdhajks</td>
                            </tr>
                           
                          </tbody>
                        </table>
                      </div>
                  </div>
                </div>
                <!-- end of accordion -->
              </div>
          </div>
        </div>
				{{-- fim todas as paginas devem ser appresentada aabixo. --}}

				@include('admin.admin_footer')
			</div>

		</div>

@endsection