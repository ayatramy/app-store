@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة الطلبات والمنتجات</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function changeLanguage(lang) {
            document.documentElement.lang = lang;
            document.body.style.direction = lang === 'ar' ? 'rtl' : 'ltr';
            document.body.style.textAlign = lang === 'ar' ? 'right' : 'left';

            document.getElementById('title').innerText = lang === 'ar' ? 'إدارة الطلبات والمنتجات' : 'Orders & Products Management';
            document.getElementById('orders-table').innerText = lang === 'ar' ? 'عرض جدول الطلبات' : 'View Orders Table';
            document.getElementById('add-order').innerText = lang === 'ar' ? 'إضافة طلب' : 'Add Order';
            document.getElementById('products-table').innerText = lang === 'ar' ? 'عرض جدول المنتجات' : 'View Products Table';
            document.getElementById('add-product').innerText = lang === 'ar' ? 'إضافة منتج' : 'Add Product';
            document.getElementById('change-lang').innerText = lang === 'ar' ? 'تغيير اللغة' : 'Change Language';
        }
    </script>
</head>
<body class="bg-light" style="direction: rtl; text-align: right;">

    <div class="container mt-5">
        <h2 id="title" class="mb-4 text-center">إدارة الطلبات والمنتجات</h2>

        <div class="text-center mb-3">
            <button onclick="changeLanguage('ar')" class="btn btn-primary">العربية</button>
            <button onclick="changeLanguage('en')" class="btn btn-secondary">English</button>
        </div>

        <div class="list-group">
            <a id="orders-table" href="{{route('products.index')}}" class="list-group-item list-group-item-action">عرض جدول الطلبات</a>
            <a id="add-order" href="{{route('products.create')}}" class="list-group-item list-group-item-action">إضافة طلب</a>
            <a id="products-table" href="{{route('categories.index')}}" class="list-group-item list-group-item-action">عرض جدول المنتجات</a>
            <a id="add-product" href="{{route('categories.create')}}" class="list-group-item list-group-item-action">إضافة منتج</a>
        </div>
    </div>

</body>
</html>


{{-- <!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة الروابط</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h2 class="mb-4 text-center">روابط مهمة</h2>
        <div class="list-group">
            <a href="products" class="list-group-item list-group-item-action" target="_blank">عرض جدول الطلبات</a>
            <a href="products/create" class="list-group-item list-group-item-action" target="_blank">اضافة طلب</a>
            <a href="categories" class="list-group-item list-group-item-action" target="_blank">عرض جدول المنتجات</a>
            <a href="categories/create" class="list-group-item list-group-item-action" target="_blank">اضافة منتج</a>
        </div>
    </div>

</body>
</html> --}}
{{-- <!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>روابط مهمة</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function changeLanguage(lang) {
            document.documentElement.lang = lang;
            document.body.style.direction = lang === 'ar' ? 'rtl' : 'ltr';
            document.body.style.textAlign = lang === 'ar' ? 'right' : 'left';

            document.getElementById('title').innerText = lang === 'ar' ? 'روابط مهمة' : 'Important Links';
            document.getElementById('laravel').innerText = lang === 'ar' ? 'موقع Laravel الرسمي' : 'Laravel Official Website';
            document.getElementById('laracasts').innerText = lang === 'ar' ? 'Laracasts - تعلم Laravel' : 'Laracasts - Learn Laravel';
            document.getElementById('github').innerText = lang === 'ar' ? 'مستودع Laravel على GitHub' : 'Laravel Repository on GitHub';
            document.getElementById('packagist').innerText = lang === 'ar' ? 'Packagist - مستودع الحزم' : 'Packagist - Package Repository';
            document.getElementById('bootstrap').innerText = lang === 'ar' ? 'Bootstrap - مكتبة التصميم' : 'Bootstrap - UI Framework';
            document.getElementById('change-lang').innerText = lang === 'ar' ? 'تغيير اللغة' : 'Change Language';
        }
    </script>
</head>
<body class="bg-light" style="direction: rtl; text-align: right;">

    <div class="container mt-5">
        <h2 id="title" class="mb-4 text-center">روابط مهمة</h2>

        <div class="text-center mb-3">
            <button onclick="changeLanguage('ar')" class="btn btn-primary">العربية</button>
            <button onclick="changeLanguage('en')" class="btn btn-secondary">English</button>
        </div>

        <div class="list-group">
            <a id="laravel" href="products" class="list-group-item list-group-item-action" target="_blank">موقع Laravel الرسمي</a>
            <a id="laracasts" href="products/create" class="list-group-item list-group-item-action" target="_blank">Laracasts - تعلم Laravel</a>
            <a id="github" href="categories" class="list-group-item list-group-item-action" target="_blank">مستودع Laravel على GitHub</a>
            <a id="packagist" href="categories/create" class="list-group-item list-group-item-action" target="_blank">Packagist - مستودع الحزم</a>
        </div>
    </div>

</body>
</html> --}}
@endsection
