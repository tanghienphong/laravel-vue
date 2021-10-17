@extends('layouts.ecommerce')
@section('content')
    <div class="container" id="category">
        <div class="row justify-content-center">
            <div class="col-md-12">
{{--                <my-component></my-component>--}}
                <list-rendering></list-rendering>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
{{--    <script src="{{ asset('js/category.js') }}" defer></script>--}}
@endpush
