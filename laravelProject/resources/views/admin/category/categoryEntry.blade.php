@extends('admin.master')

@section('pageTitle')
	category Entry
@endsection

@section('content-heading')
	Category Entry
@endsection

@section('mainContent')
	 <div class="panel-body">
         <div class="row">
             <div class="col-lg-6">
                
                 	{!! Form::open(['url'=>'/category/save','method'=>'post','role'=>'form']) !!}
                      <div class="form-group">
                       <label>Category Name</label>
                       <input class="form-control" name="name">
                     </div>
                  <div class="form-group">
                     <label>Short Description</label>
                    <textarea class="form-control" name="shortDescription" placeholder="short description"></textarea>
               </div>
               <div class="form-group">
                     <label>Publication status</label>
                    <select class="form-control" name="publicationStatus">
                    	<option value='1'>published</option>
                    	<option value='0'>unpublished</option>
                    </select>
               </div>
               <div class="form-group">
               		<input type="submit" class = "btn btn-block btn-primary"/>
               </div>
               {!! Form::close() !!}
            
        </div>
  </div>
</div>

@endsection
