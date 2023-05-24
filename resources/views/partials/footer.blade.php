<footer>
    <div class="top-footer position-relative">
        <div class="container d-flex py-5">
            <div>
                <ul class="ps-0">
                    <h3>DC Comics</h3>
                    @foreach ($footerComics as $footerComic)
                        <li>
                            <a href="#">{{ $footerComic }}</a>
                        </li>
                    @endforeach
                </ul>
                <ul class="ps-0">
                    <h3>Shop</h3>
                    @foreach ($footerShop as $footerShopItem)
                        <li>
                            <a href="#">{{ $footerShopItem }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <ul>
                <h3>DC</h3>
                @foreach ($footerDC as $footerDCItem)
                    <li>
                        <a href="#">{{ $footerDCItem }}</a>
                    </li>
                @endforeach
            </ul>
            <ul>
                <h3>Sites</h3>
                @foreach ($footerSites as $footerSite)
                    <li>
                        <a href="#">{{ $footerSite }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="position-absolute" style="top: 0;">
            <div class="container d-flex flex-row-reverse">
                <img class="img-fluid" src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="bottom-footer">
        <div class="container d-flex justify-content-between">
            <button type="button" class="btn btn-outline-primary">SIGN UP NOW!</button>
            <div class="right-bf d-flex align-items-center g-3">
                <h5 class="text-primary pe-4 mb-0">FOLLOW US</h5>
                <a href=""><img class="py-3 px-2" src="{{ Vite::asset('resources/img/footer-facebook.png') }}"
                        alt=""></a>
                <a href=""><img class="py-3 px-2" src="{{ Vite::asset('resources/img/footer-twitter.png') }}"
                        alt=""></a>
                <a href=""><img class="py-3 px-2" src="{{ Vite::asset('resources/img/footer-youtube.png') }}"
                        alt=""></a>
                <a href=""><img class="py-3 px-2" src="{{ Vite::asset('resources/img/footer-pinterest.png') }}"
                        alt=""></a>
                <a href=""><img class="py-3 px-2" src="{{ Vite::asset('resources/img/footer-periscope.png') }}"
                        alt=""></a>
            </div>
        </div>
    </div>
</footer>

<style lang="scss" scoped>
    .top-footer {
        width: 100%;
        height: 420px;
        background-image: url({{ Vite::asset('resources/img/footer-bg.jpg') }});
        background-repeat: no-repeat;
        background-size: cover;
    }

    footer h3 {
        color: white;
    }

    footer a {
        color: rgb(150, 150, 150);
        text-decoration: none;
    }

    footer a:hover {
        color: white;
    }

    .bottom-footer {
        background-color: #303030;
        padding: 40px 0px;
    }

    footer .btn-outline-primary {
        border-radius: 0px;
        color: white;
        width: 150px;
        height: 60px;
    }

    footer .position-absolute {
        width: 100%;
        height: 420px;
        top: 100,
    }

    footer .img-fluid {
        width: 560px;
        height: 420px;
        object-fit: cover;
    }
</style>
