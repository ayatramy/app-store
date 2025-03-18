@extends('layouts.front')
@section('content')
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                </svg>
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>عنوان المثال.</h1>
                        <p class="opacity-75">تشير الدراسات الإحصائية حسب الجمعية الأمريكية للغات بأن الإقبال على العربية
                            زاد %126 في الولايات المتحدة الأمريكية وحدها بين عامي 2002 و2009م.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">سجل اليوم</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                </svg>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>عنوان مثال آخر.</h1>
                        <p>حسب المجلس الثقافي البريطاني فإن تعليم الإنجليزية داخل بريطانيا يسهم في تعزيز اقتصادها بما يتجاوز
                            ملياري جنيه سنوياً، كما أنه وفر أكثر من 26 ألف وظيفة.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">أعرف أكثر</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                </svg>
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>واحد أكثر لقياس جيد.</h1>
                        <p>الإحصاءات لحجم الاستثمار اللغوي خارج بريطانيا تتفاوت من سنة لأخرى إلا أن المدير التنفيذي للمجلس
                            الثقافي البريطاني إدي بايرز يرى أن استثمار تعليم الإنجليزية في الخارج لا يحسب على المستوى المالي
                            فحسب بل على المستوى السياسي أيضاً.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">تصفح المعرض</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">السابق</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">التالي</span>
        </button>
    </div>


    <!-- Marketing messaging and featurettes
      ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container mt-5">
        <h2 class="text-center mb-4">قائمة المنتجات</h2>

        <div class="mb-3">
            <label for="categoryFilter" class="form-label">اختر الصنف:</label>
            <select id="categoryFilter" class="form-select">
                <option value="">جميع الأصناف</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div id="productsList" class="row">
            @foreach($products as $product)
                <div class="col-md-4 product-item">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#categoryFilter').change(function() {
                let categoryId = $(this).val();
                $.ajax({
                    url: "{{ route('products.filter') }}",
                    type: "GET",
                    data: { category_id: categoryId },
                    success: function(response) {
                        let productList = $('#productsList');
                        productList.empty();
                        if (response.length > 0) {
                            response.forEach(product => {
                                productList.append(`
                                    <div class="col-md-4 product-item">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <h5 class="card-title">${product.name}</h5>
                                            </div>
                                        </div>
                                    </div>
                                `);
                            });
                        } else {
                            productList.append('<p class="text-center">لا توجد منتجات متاحة</p>');
                        }
                    }
                });
            });
        });
    </script>




    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row mb-3">
            @foreach ($products as $product)
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </svg>
                    <h2 class="fw-normal">{{$product->name}}</h2>
                    <p>{{$product->description}}</p>
                    <p><a class="btn btn-secondary" href="#">عرض التفاصيل</a></p>
                </div><!-- /.col-lg-4 -->
            @endforeach

        </div><!-- /.row -->

    </div><!-- /.container -->
@endsection
