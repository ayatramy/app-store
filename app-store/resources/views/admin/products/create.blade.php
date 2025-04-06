@extends('layouts.admin')
@section('content')
<div class="py-3">
    <form action="{{ route('product_store') }}" method="POST">
        @csrf
        <br>
        <div class="mb-3">
            <label for="nameFormControlInput" class="from-label mb-2">اسم المنتج</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="اسم المنتج">
        </div>
        <div class="mb-3">
            <label for="quantityFormControlInput" class="from-label mb-2">الكمية</label>
            <input type="number" class="form-control" name="quantity" id="quantity" placeholder="الكمية">
        </div>
        <div class="mb-3">
            <label for="priceFormControlInput" class="from-label mb-2">السعر</label>
            <input type="number" class="form-control" name="price" id="price" placeholder="السعر">
        </div>
        <div class="mb-3">
            <label for="descriptionFormControlInput" class="from-label mb-2">وصف المنتج</label>
            <textarea class="form-control" name="description" id="description" rows="3"  placeholder="وصف المنتج"></textarea>
        </div>
        <div class="mb-3">
            <label for="categoryFormControlInput" class="from-label mb-2">اختر الصنف</label>
            <select class="form-control" name="category" id="category">
                <option value="#"></option>
                @foreach ($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <input type="submit" value="احفظ" class="btn btn-info">
        </div>
    </form>
</div>
@endsection
