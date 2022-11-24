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
                <div class="col-3">
                    <a href="#">
                        <img src="{{ asset('img/robot-vacuum-cleaner.jpg') }}" alt="" class="img-thumbnail">
                    </a>
                    <div class="row">
                        <div class="col-12">
                            <p class="laravelmart-product-label mt-2">
                                ロボット掃除機<br>
                                <label>￥55,000</label>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <a href="#">
                        <img src="{{ asset('img/sofa.jpg') }}" alt="" class="img-thumbnail">
                    </a>
                    <div class="row">
                        <div class="col-12">
                            <p class="laravelmart-product-label mt-2">
                                3人掛けソファー<br>
                                <label>￥35,000</label>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <a href="#">
                        <img src="{{ asset('img/cup.jpg') }}" alt="" class="img-thumbnail">
                    </a>
                    <div class="row">
                        <div class="col-12">
                            <p class="laravelmart-product-label mt-2">
                                コーヒーカップ<br>
                                <label>￥1,000</label>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <a href="#">
                        <img src="{{ asset('img/cutlery.jpg') }}" alt="" class="img-thumbnail">
                    </a>
                    <div class="row">
                        <div class="col-12">
                            <p class="laravelmart-product-label mt-2">
                                食器 カトラリーセット1組<br>
                                <label>￥2,000</label>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
