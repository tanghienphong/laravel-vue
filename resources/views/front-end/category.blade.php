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
                    <li class="breadcrumb-item active">{{$model->title}}</li>
                </ol>
            </nav>
        </div> <!-- container //  -->
    </section>
    <!-- ========================= SECTION INTRO END// ========================= -->
    <category></category>
</div>
@endsection
@push('scripts')
{{-- <script src="{{ asset('js/category.js') }}" defer></script>--}}
@endpush