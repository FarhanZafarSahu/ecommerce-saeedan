@include('web.parts.header.beforeheader')

<header class="bg-white border-bottom shadow-sm main-header">
    <div class="position-relative logo-bar-area z-1">
        <div class="container">
            <div class="d-flex align-items-center">
                <div class="align-items-center col-auto col-xl-3 d-flex side-logo-black">
                    <a rel="preload" class="d-block py-4" href="https://briconet.ma">
                        <img src="https://briconet.ma/public/uploads/all/1uaI44LCcfV5wdt3Mrb6xUKLtpIZ3JIkRF14TWgY.png"
                             alt="Briconet" class="mw-100 h-30px h-md-40px" height="40">
                    </a>
                </div>
                <div class="d-lg-none ml-auto mr-0">
                    <a class="p-2 d-block text-reset active" href="javascript:void(0);" data-toggle="class-toggle"
                       data-target=".front-header-search">
                        <i class="las la-search la-flip-horizontal la-2x"></i>
                    </a>
                </div>
                <div class="align-items-center bg-white d-flex flex-grow-1 front-header-search py-4 search-box">
                    <div class="d-lg-block d-none flex-grow-1 position-relative search-form-block">
                        <form action="https://briconet.ma/boutique" method="GET" class="stop-propagation search-form">
                            <div class="d-flex position-relative align-items-center">
                                <div class="d-lg-none " onclick="headerHideSearch()">
                                    <i class="fa fa-2x fa-long-arrow-left"></i>
                                </div>
                                <div class="input-group mx-2">
                                    <input type="text" class=" form-control search-field" id="search"
                                           name="keyword" placeholder="Je fais des achats pour..." autocomplete="off">
                                    <div class="input-group-append d-none d-lg-block">
                                        <button class="btn btn-primary search-submit" type="submit">
                                            <i class="fa fa-search fa-flip-horizontal fs-18"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div
                            class="typed-search-box stop-propagation document-click-d-none bg-white rounded shadow-lg position-absolute left-0 top-100 w-100 d-none"
                            style="min-height: 200px">
                            <div class="search-preloader absolute-top-center d-none">
                                <div class="dot-loader">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="search-nothing d-none p-3 text-center fs-16"></div>
                            <div id="search-content" class="text-left">
                                <div class="">
                                    <div class="px-2 py-1 text-uppercase fs-10 text-right text-muted bg-soft-secondary">
                                        Suggestions populaires
                                    </div>
                                    <ul class="list-group list-group-raw">
                                        <li class="list-group-item py-1">
                                            <a class="text-reset hov-text-primary"
                                               href="https://briconet.ma/boutique?keyword=d%C3%A9broussailleuse%20robeli">débroussailleuse
                                                robeli</a>
                                        </li>
                                        <li class="list-group-item py-1">
                                            <a class="text-reset hov-text-primary"
                                               href="https://briconet.ma/boutique?keyword=d%C3%A9broussailleuse%20professionnelle">débroussailleuse
                                                professionnelle</a>
                                        </li>
                                        <li class="list-group-item py-1">
                                            <a class="text-reset hov-text-primary"
                                               href="https://briconet.ma/boutique?keyword=d%C3%A9broussailleuse%20%C3%A0%20usage%20domestique">débroussailleuse
                                                à usage domestique</a>
                                        </li>
                                        <li class="list-group-item py-1">
                                            <a class="text-reset hov-text-primary"
                                               href="https://briconet.ma/boutique?keyword=d%C3%A9broussailleuse%20%C3%A0%20usage%20intensif">débroussailleuse
                                                à usage intensif</a>
                                        </li>
                                        <li class="list-group-item py-1">
                                            <a class="text-reset hov-text-primary"
                                               href="https://briconet.ma/boutique?keyword=potagers">potagers</a>
                                        </li>
                                        <li class="list-group-item py-1">
                                            <a class="text-reset hov-text-primary"
                                               href="https://briconet.ma/boutique?keyword=plantes%20basses">plantes
                                                basses</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="">
                                    <div class="px-2 py-1 text-uppercase fs-10 text-right text-muted bg-soft-secondary">
                                        Suggestions de catégories
                                    </div>
                                    <ul class="list-group list-group-raw">
                                        <li class="list-group-item py-1">
                                            <a class="text-reset hov-text-primary"
                                               href="https://briconet.ma/product-category/batiment-et-travaux-publics">Bâtiment
                                                et travaux publics</a>
                                        </li>
                                        <li class="list-group-item py-1">
                                            <a class="text-reset hov-text-primary"
                                               href="https://briconet.ma/product-category/energie-solaire-et-pompage">Énergie
                                                solaire et pompage</a>
                                        </li>
                                        <li class="list-group-item py-1">
                                            <a class="text-reset hov-text-primary"
                                               href="https://briconet.ma/product-category/sanitaire-plomberie">Sanitaire
                                                Plomberie</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="">
                                    <div class="px-2 py-1 text-uppercase fs-10 text-right text-muted bg-soft-secondary">
                                        Des produits
                                    </div>
                                    <ul class="list-group list-group-raw">
                                        <li class="list-group-item">
                                            <a class="text-reset"
                                               href="https://briconet.ma/product/debroussailleuse-robeli">
                                                <div class="d-flex search-product align-items-center">
                                                    <div class="mr-3">
                                                        <img class="size-40px img-fit rounded"
                                                             src="https://briconet.ma/public/uploads/all/zXqrkEiByQP8jMLwdgCev6VIEcsVC4DVwOQHri2Q.webp">
                                                    </div>
                                                    <div class="flex-grow-1 overflow--hidden minw-0">
                                                        <div class="product-name text-truncate fs-14 mb-5px">
                                                            Débroussailleuse robeli
                                                        </div>
                                                        <div class="">
                                                            <span class="fw-600 fs-16 text-primary">1,400.00DH</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a class="text-reset" href="https://briconet.ma/product/semoir-manuel">
                                                <div class="d-flex search-product align-items-center">
                                                    <div class="mr-3">
                                                        <img class="size-40px img-fit rounded"
                                                             src="https://briconet.ma/public/uploads/all/B81gWtzSrS9ZOIMlpmF9fzrDG6rl0MTH7Znhj9Tj.jpg">
                                                    </div>
                                                    <div class="flex-grow-1 overflow--hidden minw-0">
                                                        <div class="product-name text-truncate fs-14 mb-5px">
                                                            Semoir manuel
                                                        </div>
                                                        <div class="">
                                                            <del class="opacity-60 fs-15">1,600.00DH</del>
                                                            <span class="fw-600 fs-16 text-primary">1,099.00DH</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a class="text-reset"
                                               href="https://briconet.ma/product/kit-pistolet-arrosage-manche-caoutchouc">
                                                <div class="d-flex search-product align-items-center">
                                                    <div class="mr-3">
                                                        <img class="size-40px img-fit rounded"
                                                             src="https://briconet.ma/public/uploads/all/3pAVNVqGtTXxYu7yNULOKR2nUfvneC9L57VvoSp4.png">
                                                    </div>
                                                    <div class="flex-grow-1 overflow--hidden minw-0">
                                                        <div class="product-name text-truncate fs-14 mb-5px">
                                                            Kit pistolet arrosage manche caoutchouc
                                                        </div>
                                                        <div class="">
                                                            <span class="fw-600 fs-16 text-primary">80.00DH</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-lg-none ml-3 mr-0">
                    <div class="nav-search-box">
                        <a href="javascript:void(0)" class="nav-box-link text-dark" onclick="headerShowSearch()">
                            <i class="d-inline-block fa fa-search nav-box-icon"></i>
                        </a>
                    </div>
                </div>
                <div class="d-none d-lg-block  align-self-stretch ml-3 mr-0" >
                    <div class="dropdown h-100 nav-cart-box text-secondary" id="cart_items"  data-bs-toggle="dropdown" aria-expanded="false">
                        <a href="javascript:void(0)" class="d-flex align-items-center text-reset h-100"
                           data-toggle="dropdown" data-display="static">
                            <i class="fa fa-shopping-cart la-2x opacity-80"></i>
                            <span class="flex-grow-1 ml-1">
                                <span class="badge badge-primary badge-inline badge-pill cart-count">0</span>
                                <span class="d-none d-xl-block mx-2 nav-box-text opacity-70">Panier</span>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg p-0 stop-propagation"
                             style="min-width: 300px !important;">
                            <div class="text-center p-3">
                                <i class="fa fa-frown la-3x opacity-60 mb-3"></i>
                                <h3 class="h6 fw-700">Votre panier est vide</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
