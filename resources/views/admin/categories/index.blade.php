@extends('layouts.admin')
@section('main_mody')
    <div class="container-fluid">
        <br>
        <br>
              
                <div class="row">
                    <div class="col-sm-10 m-auto">
                        <div class="card crate_form" style="">
                            
                                <form class="form" action="{{route('product.store')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-2 right">
                                            <label class="right">Category Name</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Category Name" name="name">
                                        </div>
                                         @if($errors->has('name'))
                                        <span class="text-danger">{{$errors->first('name')}}</span>
                                        @endif
                                        <div class="col-md-3">
                                            <input type="submit" value="Create" class="btn btn-info">
                                        </div>
                                    </div>
                                </form>
                          
                        </div>
                    </div>
                </div>
               
                    <br>
                    <br>

                    <!-- column -->
                    <h1 class="text-center"> Product Category Table</h1>
                    <br/>
                    <br/>
                    <div class="row justify-content-md-center">
                    <div class="col-md-10">
                        <div class="card mycard">
                            <div class="card-body">
                                <h4 class="card-title">Category Table</h4>
                               <br/>
                            
                                <div class="table-responsive">
                                    <table class="table" id="category-table">
                                        <thead >
                                            <tr>
                                                <th class="border-top-0">#SL</th>
                                                <th class="border-top-0">Name</th>
                                                <th class="border-top-0">Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($categories as $key=>$category)
                                                <tr>
                                                   <td width="10%">{{$key+1}}</td>
                                                    <td>{{$category->name}}</td>
                                                    <td width="30%">
                                                        <a href="{{ route('product.category.edit',$category->id) }}" class="btn btn-info edit_btn"><i class="fa fa-edit"></i>Edit</a>

                                                        <a href="{{route('product.category.delete',$category->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                                                    </td>
                                                    
                                                </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
@endsection
@section('scripts')
<script type="text/javascript">
    $('.create_btn').on('click',function(){
        $(this).show('.crate_form');
    })
</script>
@endsection
