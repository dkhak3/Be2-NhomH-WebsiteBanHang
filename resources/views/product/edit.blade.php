@extends('layout')

@section('content')

<div class="container-fluid pt-4 px-4 add-product">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h5 class="mb-4">EDIT PRODUCT</h5>
                <form action="{{ route('edit',$product[0]->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="product_name" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="product_name" name="product_name" value="{{$product[0]->product_name}}" maxlength="255" >
                    </div>
                    <div class="mb-3">
                        <label for="product_price" class="form-label">Product Price</label>
                        <input type="text" class="form-control" id="product_price" name="product_price" value="{{$product[0]->product_price}}" maxlength="10">
                    </div>
                    
                    {{-- <div class="form-floating mb-3">
                        <select class="form-select" id="type" name="type">
                            <option selected >Open this select menu</option>
                            <option value="1">Electronic Device</option>
                            <option value="2">Household Electrical Appliances</option>
                            <option value="3">Household Appliances</option>
                        </select>
                        <label for="type">CATEGORY</label>
                    </div> --}}
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea product_description" name="product_description" style="height: 150px;" maxlength="255">{{$product[0]->product_description}} </textarea>
                        <label for="floatingTextarea product_description" >Description</label>
                    </div>
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Photos</label>
                        <input class="form-control" type="file" name="product_photo" id="product_photo" multiple>
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                    
                </form>
            </div>
        </div>
    </div>
</div>

@endsection