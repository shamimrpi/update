@extends('layouts.admin')
@section('main_mody')
    <div class="container-fluid">
  
      
       <div class="row justify-content-center">
           <div class="col-md-10">
            <div class="form-cart">
             <h1>Product Create Form</h1>
                  <form action="" method="POST" enctype="multipart/form-data">
                     <div class="row"> 
                        
                            <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Product Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Product Name">
                                   </div>
                            </div>
                            <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Product Name</label>
                                    <input type="text" name="brand_name" class="form-control" placeholder="Brand Name">
                                   </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label>Category Name</label>
                                    <select class="form-control" name="category_id">
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                             <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="4" placeholder="Description Here"></textarea>
                                   </div>
                            </div>
                            <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Buying Price</label>
                                    <input type="text" name="b_price" class="form-control" placeholder="Buying Price">
                                   </div>
                            </div>

                             <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Sales Price</label>
                                    <input type="text" name="s_price" class="form-control" placeholder="Sales Price">
                                   </div>
                            </div>

                            <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Product Image One</label>
                                    <input type="file" name="image_one" id="one_image_load" class="form-control">
                                   </div>
                            </div>
                            <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Product Image Two</label>
                                    <input type="file" name="image_two" id="two_image_load" class="form-control">
                                   </div>
                            </div>
                            <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Product Image Three</label>
                                    <input type="file" name="image_three" id="three_image_load" class="form-control">
                                   </div>
                            </div>
                            <div class="col-md-4">
                                <img id="one_showImage" class="form-control"  style="height: 150px;margin-top: 20px;width: 170px;border: 1px solid #eee">
                            </div>
                             <div class="col-md-4">
                                <img id="two_showImage" class="form-control"  style="height: 150px;margin-top: 20px;width: 170px;border: 1px solid #eee">
                            </div>
                             <div class="col-md-4">
                                <img id="three_showImage" class="form-control"  style="height: 150px;margin-top: 20px;width: 170px;border: 1px solid #eee">
                            </div>
                             <div class="col-md-4">
                               <input type="submit" value="Craete">
                            </div>
                            
                        </div>
                    </form>
                </div>
               
           </div>  
        </div>
    </div>    
              



@endsection
@section('scripts')
<script type="text/javascript">

     // image show javascript
     $("#one_img_load").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#one_showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });

       // image show javascript
     $("#two_img_load").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#two_showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });

       // image show javascript
     $("#three_img_load").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#three_showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });

</script>
</script>
@endsection
