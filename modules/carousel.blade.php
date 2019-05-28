
<div class="home-gallery d-flex justify-content-center mt-2">
    <div id="hme_{{$section}}Gallery" class="slides">
        <div class="gallery-pane col-md-4">
            <div class="card">
                <div class="card-img-top">
                    @auth
                    
                        <button class="icon-fav-wrapper">
                            <svg class="icon icon-box-icon" viewBox="2 0 86 100"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-heart"></use></svg>
                        </button>

                    @else

                        <button data-toggle="modal" data-backdrop="false" data-target="#auth-modal" class="icon-fav-wrapper auth-modal-trigger">
                            <svg class="icon icon-box-icon" viewBox="2 0 86 100"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-heart"></use></svg>
                        </button>

                    @endauth
                    <img src="/img/cities/Toronto.jpg" />
                    <div class="gradient-wrapper">
                        <div class="price-box">
                            <p>As low as</p>
                            <div class="price">C$9999</div>
                        </div>
                        <div class="pkg-icons">
                             <svg class="icon icon-box-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-tickets"></use></svg>
                             <svg class="icon icon-box-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-building"></use></svg>
                             <svg class="icon icon-box-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-plane"></use></svg>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper">
                    <a href="#">
                        <article class="card-block">
                            <p>Future with Migos, Tory Lanez, Zoey Dollaz and A$AP Ferg</p>
                            <ul class="list-unstyled list-divider">
                                <li>May 16</li>
                                <li>7:30PM</li>
                            </ul>
                            <p>Air Canada Center, Toronto</p>
                        </article>
                    </a>
                </div>
            </div>
        </div>
        <div class="gallery-pane col-md-4">
            <div class="card">
                <div class="card-img-top">

                    @auth
                    
                        <button class="icon-fav-wrapper fav-active">
                            <svg class="icon icon-box-icon" viewBox="2 0 86 100"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-heart"></use></svg>
                        </button>


                    @else

                        <button data-toggle="modal" data-backdrop="false" data-target="#auth-modal" class="icon-fav-wrapper auth-modal-trigger">
                            <svg class="icon icon-box-icon" viewBox="2 0 86 100"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-heart"></use></svg>
                        </button>


                    @endauth


                    <img src="/img/cities/LosAngeles.jpg" />
                    <div class="gradient-wrapper">
                        <div class="price-box">
                            <p>As low as</p>
                            <div class="price">C$9999</div>
                        </div>
                        <div class="pkg-icons">
                             <svg class="icon icon-box-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-tickets"></use></svg>
                             <svg class="icon icon-box-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-building"></use></svg>
                             <svg class="icon icon-box-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-plane"></use></svg>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper">
                    <a href="#">
                        <article class="card-block">
                            <p>Future with Migos, Tory Lanez, Zoey Dollaz and A$AP Ferg</p>
                            <ul class="list-unstyled list-divider">
                                <li>May 16</li>
                                <li>7:30PM</li>
                            </ul>
                            <p>Air Canada Center, Toronto</p>
                        </article>
                    </a>
                </div>
            </div>
        </div>
        <div class="gallery-pane col-md-4">
            <div class="card">
                <div class="card-img-top">
                    <img src="/img/cities/Vancouver.jpg" />
                    <div class="gradient-wrapper">
                        <div class="price-box">
                            <p>As low as</p>
                            <div class="price">C$9999</div>
                        </div>
                        <div class="pkg-icons">
                             <svg class="icon icon-box-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-tickets"></use></svg>
                             <svg class="icon icon-box-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-building"></use></svg>
                             <svg class="icon icon-box-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-plane"></use></svg>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper">
                    <a href="#">
                        <article class="card-block">
                            <p>Future with Migos, Tory Lanez, Zoey Dollaz and A$AP Ferg</p>
                            <ul class="list-unstyled list-divider">
                                <li>May 16</li>
                                <li>7:30PM</li>
                            </ul>
                            <p>Air Canada Center, Toronto</p>
                        </article>
                    </a>
                </div>
            </div>
        </div>
        <div class="gallery-pane col-md-4">
            <div class="card">
                <div class="card-img-top">
                    <img src="/img/cities/Toronto.jpg" />
                    <div class="gradient-wrapper">
                        <div class="price-box">
                            <p>As low as</p>
                            <div class="price">C$9999</div>
                        </div>
                        <div class="pkg-icons">
                             <svg class="icon icon-box-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-tickets"></use></svg>
                             <svg class="icon icon-box-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-building"></use></svg>
                             <svg class="icon icon-box-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-plane"></use></svg>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper">
                    <a href="#">
                        <article class="card-block">
                            <p>Future with Migos, Tory Lanez, Zoey Dollaz and A$AP Ferg</p>
                            <ul class="list-unstyled list-divider">
                                <li>May 16</li>
                                <li>7:30PM</li>
                            </ul>
                            <p>Air Canada Center, Toronto</p>
                        </article>
                    </a>
                </div>
            </div>
        </div>
        <div class="gallery-pane col-md-4">
            <div class="card">
                <div class="card-img-top">
                    <img src="/img/cities/Vancouver.jpg" />
                    <div class="gradient-wrapper">
                        <div class="price-box">
                            <p>As low as</p>
                            <div class="price">C$9999</div>
                        </div>
                        <div class="pkg-icons">
                             <svg class="icon icon-box-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-tickets"></use></svg>
                             <svg class="icon icon-box-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-building"></use></svg>
                             <svg class="icon icon-box-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-plane"></use></svg>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper">
                    <a href="#">
                        <article class="card-block">
                            <p>Future with Migos, Tory Lanez, Zoey Dollaz and A$AP Ferg</p>
                            <ul class="list-unstyled list-divider">
                                <li>May 16</li>
                                <li>7:30PM</li>
                            </ul>
                            <p>Air Canada Center, Toronto</p>
                        </article>
                    </a>
                </div>
            </div>
        </div>
        <div class="gallery-pane col-md-4">
            <div class="card">
                <div class="card-img-top">
                    <img src="/img/cities/LosAngeles.jpg" />
                    <div class="gradient-wrapper">
                        <div class="price-box">
                            <p>As low as</p>
                            <div class="price">C$9999</div>
                        </div>
                        <div class="pkg-icons">
                             <svg class="icon icon-box-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-tickets"></use></svg>
                             <svg class="icon icon-box-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-building"></use></svg>
                             <svg class="icon icon-box-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-plane"></use></svg>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper">
                    <a href="#">
                        <article class="card-block">
                            <p>Future with Migos, Tory Lanez, Zoey Dollaz and A$AP Ferg</p>
                            <ul class="list-unstyled list-divider">
                                <li>May 16</li>
                                <li>7:30PM</li>
                            </ul>
                            <p>Air Canada Center, Toronto</p>
                        </article>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <button id="hme_{{$section}}Next" class="next control d-none d-md-block" title="next" alt="next">
        <svg class="icon icon-box-icon chevron-right"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-chevron"></use></svg>
    </button>
    <button id="hme_{{$section}}Prev" class="prev control d-none d-md-block" title="previous" alt="previous">
        <svg class="icon icon-box-icon chevron-left"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-chevron"></use></svg>
    </button>

</div>
