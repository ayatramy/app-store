@extends('layouts.admin')
@section('content')
    <div class="py-5">
        <button type="submit" class="btn btn-success my-3" width="200" height="30">
            <a href="{{url('categories/create')}}" class="text-white">اضف صنف جديد</a>
        </button>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">اسم الصنف</th>
                    <th scope="col">الاحداث</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                        <td class="d-flex gap-2">
                            <a href="{{url('categories/delete/'.$category->id)}}" class="btn btn-danger">حذف</a>
                            {{-- <form action="/delete/{{ $category->id }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash me-2">حذف</i>
                                </button>
                            </form> --}}
                            <a href="{{url('categories/edit/'.$category->id)}}" class="btn btn-info">تعديل</a>
                            {{-- <form action="/edit/{{ $category->id }}" method="POST">
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
    </div>
@endsection
