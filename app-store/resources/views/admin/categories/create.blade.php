@extends('layouts.admin')
@section('content')
<div class="py-3">
    <form action="{{route('category_store')}}" method="POST">
        @csrf
        <br>
        <div class="mb-3">
            <label for="nameFormControlInput" class="from-label mb-2">اسم الصنف</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="اسم الصنف">
        </div>
        <div class="mb-3">
            <input type="submit" value="احفظ" class="btn btn-info">
        </div>
    </form>
</div>
@endsection
