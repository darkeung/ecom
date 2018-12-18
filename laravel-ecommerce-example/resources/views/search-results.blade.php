@extends('layout')

@section('title', 'Search Results')

@section('extra-css')

@endsection

@section('content')

    @component('components.breadcrumbs')
        <a href="/">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Search</span>
    @endcomponent

    <div class="container">
        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="search-results-container container">
        <h1>Search Results</h1>
        <p class="search-results-count">{{ $products->total() }} result(s) for '{{ request()->input('query') }}'</p>

        @if ($products->total() > 0)
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Details</th>
                     <th>Image</th>
                   <!--  <th>Description</th> -->
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th><a href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a></th>
                        <th>{{ $product->details }}</th>
                         <th><img src="{{ asset('storage/'.$product->image) }}" alt="product" height="50" width="80"></th>
                     <!--    <td>{{ str_limit($product->description, 80) }}</td> -->
                        <th>{{ $product->presentPrice() }}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $products->appends(request()->input())->links() }}
        @endif
    </div> <!-- end search-results-container -->

@endsection

@section('extra-js')
@endsection