@extends('layouts.admin')
@section('content')
<div class="py-3">
    <form action="{{url('products/update/'.$product->id)}}" method="POST">
        @csrf
        @method('patch')
        {{-- @foreach ($products as $product) --}}
        <input type="hidden" name="id" value="{{$product->id}}">
        <br>
        <div class="mb-3">
            <label for="nameFormControlInput" class="from-label mb-2">اسم المنتج</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$product->name}}">
        </div>
        <div class="mb-3">
            <label for="quantityFormControlInput" class="from-label mb-2">الكمية</label>
            <input type="number" class="form-control" name="quantity" id="quantity" value="{{$product->quantity}}">
        </div>
        <div class="mb-3">
            <label for="priceFormControlInput" class="from-label mb-2">السعر</label>
            <input type="number" class="form-control" name="price" id="price" value="{{$product->price}}">
        </div>
        <div class="mb-3">
            <label for="descriptionFormControlInput" class="from-label mb-2">وصف المنتج</label>
            <textarea class="form-control" name="description" id="description" rows="3">{{$product->description}}</textarea>
        </div>
        <div class="mb-3">
            <label for="categoryFormControlInput" class="from-label mb-2">اختر الصنف</label>
            <select class="form-control" name="category_id" id="category_id">
                <option value="{{$category_name->id}}">{{$category_name->name}}</option>
                @foreach ($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <input type="submit" value="تعديل" class="btn btn-info text-white">
        </div>
        {{-- @endforeach --}}
    </form>
</div>
@endsection
