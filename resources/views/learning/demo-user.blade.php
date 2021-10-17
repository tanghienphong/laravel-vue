@extends('layouts.ecommerce')
@section('content')
    <div class="container" id="category">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <user-dashboard></user-dashboard>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    {{--    <script src="{{ asset('js/category.js') }}" defer></script>--}}
@endpush
