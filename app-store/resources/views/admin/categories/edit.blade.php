@extends('layouts.admin')
@section('content')
<div class="py-3">
    <form action="{{url('categories/update/'.$category->id)}}" method="POST">
        @csrf
        @method('patch')
        {{-- @foreach ($products as $product) --}}
        {{-- <input type="hidden" name="id" value="{{$category->id}}"> --}}
        <br>
        <div class="mb-3">
            <label for="nameFormControlInput" class="from-label mb-2">اسم الصنف</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$category->name}}">
        </div>
        <div class="mb-3">
            <input type="submit" value="تعديل" class="btn btn-info text-white">
        </div>
        {{-- @endforeach --}}
    </form>
</div>
@endsection
