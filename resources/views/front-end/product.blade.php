@extends('front-end.layout')
@section('content')
<div>
    <!-- ========================= SECTION PAGETOP ========================= -->
    <section class="section-pagetop bg">
        <div class="container">
            <h2 class="title-page">{{$model->title}}</h2>
            <nav>
                <ol class="breadcrumb text-white">
                    <li class="breadcrumb-item"><a href="/" title="Homepage">Home</a></li>
                    <li class="breadcrumb-item">
                        <a href="{{route('front-end.category', ['category' => $model->category->slug] ?? '')}}"
                            title="{{$model->category->title}}">
                            {{$model->category->title}}
                        </a>
                    </li>
                    <li class="breadcrumb-item active">{{$model->name}}</li>
                </ol>
            </nav>
        </div> <!-- container //  -->
    </section>
    <!-- ========================= SECTION INTRO END// ========================= -->
    <product-detail></product-detail>
</div>
@endsection
@push('scripts')
{{-- <script src="{{ asset('js/category.js') }}" defer></script>--}}
@endpush