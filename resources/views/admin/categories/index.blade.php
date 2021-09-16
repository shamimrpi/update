@extends('layouts.admin')
@section('title', 'DataTable')
@section('main-content')
<main>
    <div class="container-fluid">
        <div class="heading-title p-2 my-2">
            <span class="my-3 heading "><i class="fas fa-home"></i> <a class="" href="">Home</a> > Input Group</span>
        </div>
        <div class="card my-3">
            <div class="card-header d-flex justify-content-between">
                <div class="table-head"><i class="fas fa-user me-1"></i>Category</div>
                
            </div>
            <div class="card-body table-card-body">
              <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="row justify-content-center">
                        <div class="col-sm-10">
                          <label>Category Name</label>
                          <input type="text" name="name" class="form-control">
                        </div>
                        <div class="col-sm-10">
                          <label>Image</label>
                          <input type="file" id="imgload" name="image" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="category-img">
                        <img  id="showImage" style="height: 150px;width:150px;margin-top:5px">
                      </div>
                    </div>
                      
                      <div class="clearfix">
                          <div class="text-end m-auto">
                            
                              <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                      </div>
                      <hr class="my-2">
                  
                </div>
              </form>
                
            </div>

            <div class="card-body table-card-body">
              <table id="datatablesSimple">
                  <thead class="text-center bg-light">
                      <tr>
                          <th>SL</th>
                          <th>Name</th>
                          <th>Image</th>
                          <th>Action</th>
                      
                      </tr>
                  </thead>
                  <tbody>
                    @foreach($categories as $key=>$category)
                      <tr>
                          <td>{{$key+1}}</td>
                          <td>{{$category->name}}</td>
                          <td>{{$category->image}}</td>
                          <td class="text-center">
                              <a href="" class="btn btn-edit"><i class="fas fa-pencil-alt"></i></a>
                              <a href="" class="btn btn-delete"><i class="fa fa-trash"></i></a>
                          </td>
                      </tr>
                      @endforeach
                    
                  </tbody>
              </table>
          </div>

        </div>  
    </div>
</main>
@endsection
@section('scripts')
<script type="text/javascript">
  $(document).ready(function(){
     // image show javascript
     $("#imgload").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
  });
</script>
@endsection