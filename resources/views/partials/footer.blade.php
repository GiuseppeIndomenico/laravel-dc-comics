<footer>
    <section class="gi-bg">


        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="row p-4 text-light">
                        <div class="col-4 ">
                            <h3 class="py-3">DC Comics</h3>
                            <ul class="ul-footer" v-for="i in dcComics">
                                @foreach ($dcComics as $i)
                                    <li>
                                        <a>{{ $i }}</a>
                                    </li>
                                @endforeach
                                <h3 class="py-3">SHOP</h3>
                                <ul class="ul-footer" v-for="i in dcComics">
                                    @foreach ($shop as $i)
                                        <li>
                                            <a>{{ $i }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </ul>

                        </div>

                        <div class="col-4 ">
                            <h3 class="py-3">DC</h3>
                            <ul class="ul-footer" v-for="i in dcComics">
                                @foreach ($dc as $i)
                                    <li>
                                        <a>{{ $i }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="col-4 ">
                            <h3 class="py-3">Sites</h3>
                            <ul class="ul-footer" v-for="i in dcComics">
                                @foreach ($sites as $i)
                                    <li>
                                        <a>{{ $i }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>

                </div>
                <div class="col-6 gi-logo">
                    <img src="\img\dc-logo-bg.png" alt="">
                </div>

            </div>
        </div>
    </section>

    <section class="gi-dark text-light">

        <div class="container p-4 d-flex align-items-center justify-content-between">
            <button> SIGN-UP NOW!</button>

            <div class="d-flex align-items-center justify-content-center">
                <h5 class="text-primary me-3">FOLLOW US</h5>
                @foreach ($socials as $social)
                    <div>
                        <div class="img-social">
                            <img class="" src="/img/{{ $social['path'] }}" alt="{{ $social['alt'] }}">
                        </div>
                    </div>
                @endforeach
            </div>
    </section>
</footer>
