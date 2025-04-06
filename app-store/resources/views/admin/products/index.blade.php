@extends('layouts.admin')
{{-- @extends('layouts.app') --}}
@section('content')
    <div class="py-5">
        <a href="{{ route('products.create') }}" class="btn btn-success my-3 text-white">اضف صنف جديد</a>

        {{-- <button type="submit" class="btn btn-success my-3" width="200" height="30">
            <a href="{{ route('product_create') }}" class="text-white">اضف منتج جديد</a>
        </button> --}}
        {{-- <br> --}}
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">اسم المنتج</th>
                    <th scope="col">الكمية</th>
                    <th scope="col">السعر</th>
                    <th scope="col">الصنف</th>
                    <th scope="col">الاحداث</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($products as $key  => $product)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td class="d-flex gap-2">
                            <a href="{{ route('products.destroy', $product->id) }}" class="btn btn-danger">حذف</a>
                            {{-- <form action="/delete/{{ $product->id }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash me-2">حذف</i>
                                </button>
                            </form> --}}
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-info">تعديل</a>
                            {{-- <form action="/edit/{{ $product->id }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-info">
                                    <i class="fa fa-info text-white me-2">تعديل</i>
                                </button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$products->links()}}
    </div>
@endsection
