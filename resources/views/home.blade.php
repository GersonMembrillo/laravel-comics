@extends('layouts.app')

@section('content')
    <div class="main-top py-3 bg-dark position-relative">
        <div class="container">
            <div class="row">
                @foreach ($mainCards as $card)
                    <div class="col-12 col-lg-2 my-4">

                        <div class="card border-0">
                            <div class="card-body p-0">
                                <div class="card-image">
                                    <img src="{{ $card['thumb'] }}" alt="{{ $card['series'] }}" class="img-fluid">
                                </div>
                                <div class="card-title text-uppercase text-white bg-dark mb-0 pt-2">
                                    {{ $card['series'] }}
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-primary d-flex rounded-0 mb-4">LOAD MORE</button>
            </div>

        </div>
        <div class="main-bottom p-5">
            <div class="container">
                <ul class="d-flex list-unstyled row-cols-5 mb-0">
                    @foreach ($mainButtons as $button)
                        <li>
                            <a class="text-decoration-none text-white d-flex justify-content-center align-items-center"
                                href="{{ $button['url'] }}">
                                <img class="bottom-img pe-2" src="{{ $button['src'] }}" alt="{{ $button['name'] }}">
                                <p class="mb-0 text-uppercase">{{ $button['name'] }}</p>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <style lang="scss" scoped>
                .main-bottom {
                    background-color: #0082F9;

                    .bottom-img {
                        width: auto;
                        height: 50px;
                    }
                }

                main .img-fluid {
                    width: 100%;
                    height: 200px;
                    object-fit: cover;
                    object-position: top;
                }
            </style>
        @endsection
