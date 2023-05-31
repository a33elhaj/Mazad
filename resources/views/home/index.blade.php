@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>مجموعة يقترن لتقنية المعلومات</h1>
        <p class="lead">
            يمكن للمستخدمين المصادق عليهم فقط الوصول إلى هذا القسم
        </p>
        <a class="btn btn-lg btn-primary" href="https://hoopoe.com.sd" role="button">مزاد الخضار والفواكه &raquo;</a>
        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection
