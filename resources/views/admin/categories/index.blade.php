@extends('layouts.admin')
@section('main_body')
	 <div class="app-title">

          <h1><i class="fa fa-dashboard"></i> Category</h1>
          <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="{{ route('category') }}">Category</a></li>
        </ul>
        </div>
   
        	
        		<form action="{{ route('category.store') }}" method="post">
        		 	@csrf
        		 	<div class="tile">
	        		<div class="row justify-content-center">
	        		<div class="form-group col-md-6">
	                  <label class="control-label"><strong>Category Name</strong></label>
	                  <input class="form-control" type="text" name="name" placeholder="Enter your name">
	                </div>
	              
	                <div class="form-group col-md-4">
	                  <button class="btn btn-primary" type="submit" style="margin-top: 28px"><i class="fa fa-fw fa-lg fa-check-circle"></i>Create</button>
	                </div>
	            	</div>
	            </form>
        	</div>
       <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($categories as $key=>$category)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $category->name }}</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
   

 @endsection
 @section('scripts')
 <script type="text/javascript" src="{{ asset('admin') }}/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="{{ asset('admin') }}/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
 @endsection 
