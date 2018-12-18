<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ecommerce</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    </head>
    <body>
        <header class="with-background">
            <div class="top-nav container">
                <div class="top-nav-left">
                    <div class="logo">Ecommerce</div>
                    {{ menu('main', 'partials.menus.main') }}
                </div>
                <div class="top-nav-right">
                    @include('partials.menus.main-right')
                </div>
            </div> <!-- end top-nav -->
            <div class="hero container">
                <div class="hero-copy">
                    <h1>Ecommerce</h1>
                    <p>Includes multiple products, categories, a shopping cart and a checkout system with Stripe integration.</p>
                    <div class="hero-buttons">
                        <a href="https://www.youtube.com/playlist?list=PLEhEHUEU3x5oPTli631ZX9cxl6cU_sDaR" class="button button-white">Screencasts</a>
                        <a href="https://github.com/drehimself/laravel-ecommerce-example" class="button button-white">GitHub</a>
                    </div>
                </div> <!-- end hero-copy -->

                <div class="hero-image">
                    <img src="img/71Kchra215L._AC_.jpg" alt="hero image">
                </div> <!-- end hero-image -->
            </div> <!-- end hero -->
        </header>

        <div class="featured-section">

            <div class="container">
                <h1 class="text-center">Ecommerce</h1>

                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore vitae nisi, consequuntur illum dolores cumque pariatur quis provident deleniti nesciunt officia est reprehenderit sunt aliquid possimus temporibus enim eum hic lorem.</p>

              <!--   <div class="text-center button-container">
                    <a href="#" class="button">Featured</a>
                    <a href="#" class="button">On Sale</a>
                </div>

                {{-- <div class="tabs">
                    <div class="tab">
                        Featured
                    </div>
                    <div class="tab">
                        On Sale
                    </div>
                </div> --}} -->

                <div class="products text-center">
                    @foreach ($products as $product)
                        <div class="product">
                            <a href="{{ route('shop.show', $product->slug) }}"><img src="{{ productImage($product->image) }}" alt="product" height="270" width="500"></a>
                            <a href="{{ route('shop.show', $product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
                            <div class="product-price">{{ $product->presentPrice() }}</div>
                        </div>
                    @endforeach

                </div> <!-- end products -->

                <div class="text-center button-container">
                    <a href="{{ route('shop.index') }}" class="button">View more products</a>
                </div>

            </div> <!-- end container -->

        </div> <!-- end featured-section -->

        <div class="blog-section">
            <div class="container">
                <h1 class="text-center">From Our Blog</h1>

                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore vitae nisi, consequuntur illum dolores cumque pariatur quis provident deleniti nesciunt officia est reprehenderit sunt aliquid possimus temporibus enim eum hic.</p>

                <div class="blog-posts">
                    <div class="blog-post" id="blog1">
                        <a href="/blog"><img src="/img/5c0df54be763a752705727.jpg" alt="Blog Image"></a>
                        <a href="/blog"><h2 class="blog-title">Xmas Best Deals!</h2></a>
                        <div class="blog-description">Last Chance! Ultimate Christmas Gift Guide.</div>
                    </div>
                    <div class="blog-post" id="blog2">
                        <a href="/blog"><img src="/img/eb-games-boxing-week-2014.png" alt="Blog Image"></a>
                        <a href="/blog"><h2 class="blog-title">Boxing Day!</h2></a>
                        <div class="blog-description">Boxing Day-Trade 5 game gets $100 to buy a new PS4 console.</div>
                    </div>
                    <div class="blog-post" id="blog3">
                        <a href="/blog"><img src="/img/6p2p0003sr6786224o18.jpg" alt="Blog Image"></a>
                        <a href="/blog"><h2 class="blog-title">BLACK FRIDAY!</h2></a>
                        <div class="blog-description">LACK FRIDAY!</div>
                    </div>
                </div>
            </div> <!-- end container -->
        </div> <!-- end blog-section -->

        @include('partials.footer')


    </body>
</html>