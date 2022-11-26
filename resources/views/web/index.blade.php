@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-2">
            @component('components.sidebar', ['categories' => $categories, 'major_categories' => $major_categories])
            @endcomponent
        </div>
        <div class="col-9">
            <h1>おすすめ商品</h1>
            <div class="row">
                <div class="col-4">
                    <a href="#">
                        <img src="{{ asset('img/chestnut.jpg') }}" alt="" class="img-thumbnail">
                    </a>
                    <div class="row">
                        <div class="col-12">
                            <p class="laravelmart-product-label mt-2">
                                和栗の詰め合わせ<br>
                                <label>￥2,000</label>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <a href="#">
                        <img src="{{ asset('img/persimmon.jpg') }}" alt="" class="img-thumbnail">
                    </a>
                    <div class="row">
                        <div class="col-12">
                            <p class="laravelmart-product-label mt-2">
                                おいしい柿<br>
                                <label>￥500</label>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <a href="#">
                        <img src="{{ asset('img/orange.jpg') }}" alt="" class="img-thumbnail">
                    </a>
                    <div class="row">
                        <div class="col-12">
                            <p class="laravelmart-product-label mt-2">
                                旬なみかん<br>
                                <label>￥1,200</label>
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <h1>新着商品</h1>
            <div class="row">
                @foreach ($recently_products as $recently_product)
                    <div class="col-3">
                        <a href="{{ route('products.show', $recently_product) }}">
                            @if ($recently_product->image !== "")
                                <img src="{{ asset($recently_product->image) }}" alt="img" class="img-thumbnail">
                            @else
                                <img src="img/dummy.png" alt="img" class="img-thumbnail">
                            @endif
                        </a>
                        <div class="row">
                            <div class="col-12">
                                <p class="laravelmart-product-label mt-2">
                                    {{ $recently_product->name }}<br>
                                    <label>￥{{ $recently_product->price }}</label>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
