@extends('layout')

@section('content')
<h1 class="mb-4">Quản lí sản phẩm</h1>
<a class="btn btn-primary" href="{{ route('add') }}">Add</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Photo</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        {{-- <th scope="col">Type</th> --}}
        <th scope="col">Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
         @foreach ($product as $item)
            <tr>
                <td>{{$item->id}}</td>
                {{-- <td> <img src="{{asset('/img/products/'. $item->product_photo)}}" alt="" width="100px"height="100px" srcset=""></td> --}}
                <td>
                  <img src="{{asset('/img/products/' . explode(',', $item->product_photo)[0])}}" alt="" width="100px"height="100px" srcset="">
                </td>
                <td>{{$item->product_name}} </td>
                <td>{{$item->product_price}} </td>
                {{-- <td>{{$item->type}} </td> --}}
                <td>{{$item->product_description}}</td>
                {{-- <td style="text-align: center;">
                  <a href="{{route('edit', ['id'=>$item->id])}}" type="button" class="btn btn-info">Edit</a>
                  <a onclick="return confirm('Are you sure you want delete?')" href="{{route('delete', ['id'=>$item->id])}}" type="button" class="btn btn-danger">Delete</a>
              </td> --}}
                <td>
                  <form action="{{ route('delete', $item->id) }}" onsubmit="return confirm('Do you want to delete?')">
                    <a  href="{{ route('editscreenproduct', $item->id) }}" class="btn btn-primary" >Sửa</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary">Xóa</button>
                  </form>
                  
                </td>
            </tr>
        @endforeach 
    </tbody>
  </table>
  {{ $product->links() }}

  
@endsection