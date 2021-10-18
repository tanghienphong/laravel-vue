@extends('front-end.layout')
@section('content')
    <div>
        <!-- ========================= SECTION PAGETOP ========================= -->
        <section class="section-pagetop bg">
            <div class="container">
                <h2 class="title-page">Category products</h2>
                <nav>
                    <ol class="breadcrumb text-white">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Best category</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Great articles</li>
                    </ol>
                </nav>
            </div> <!-- container //  -->
        </section>
        <!-- ========================= SECTION INTRO END// ========================= -->
        <category></category>
    </div>
@endsection
@push('scripts')
    {{--    <script src="{{ asset('js/category.js') }}" defer></script>--}}
@endpush
