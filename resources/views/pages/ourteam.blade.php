@extends('layouts.app')

@section('content')

    <div class="site-section testimonial-wrap custom-owl-carousel" id="testimonials-section" style="padding: 6em">
        <div class="container">
            <div class="row text-center justify-content-center mb-5"  data-aos="fade-up">
                <div class="col-lg-6 mb-5 text-center">
                    <h2 class="section-title w-100 mx-auto">Hello!</h2>
                    <p>We would like to meet you and introduce you to our team</p>
                </div>
            </div>
            <div class="row align-items-center"  data-aos="fade-up" data-aos-delay="100" style="margin-top: -3em">
                <div class="col-lg-5 mr-auto">

                    <div class="owl-carousel slide-one-item-alt-text">
                        <div class="slide-text">
                            <blockquote>
                                <p><span>&ldquo;</span>Praise the sun!<span>&rdquo;</span></p>
                                <p class="author">&mdash;  Nikita Minakov, 20 y.o.</p>
                            </blockquote>
                        </div>
                        <div class="slide-text">
                            <blockquote>
                                <p><span>&ldquo;</span>The sun went down with practiced bravado. Twilight crawled across the sky, laden with foreboding. I didn’t like the way the show started. But they had given me the best seat in the house. Front row center.<span>&rdquo;</span></p>
                                <p class="author">&mdash;  Dilnaz Niyazova, 20 y.o.</p>
                            </blockquote>
                        </div>
                        <div class="slide-text">
                            <blockquote>
                                <p><span>&ldquo;</span>Did I ever tell you the definition of insanity?<span>&rdquo;</span></p>
                                <p class="author">&mdash;  Alisher Akhmetkaliyev, 20 y.o.</p>
                            </blockquote>
                        </div>
                        <div class="slide-text">
                            <blockquote>
                                <p><span>&ldquo;</span>What is better – to be born good, or to overcome your evil nature through great effort?<span>&rdquo;</span></p>
                                <p class="author">&mdash;  Sanzhar Abilmazhnov, 20 y.o.</p>
                            </blockquote>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 ml-auto"  data-aos="fade-up" data-aos-delay="200">

                    <div class="owl-carousel slide-one-item-alt">
                        <img src="images/person_n.JPG" alt="Image" class="img-fluid">
                        <img src="images/person_d.jpg" alt="Image" class="img-fluid">
                        <img src="images/person_a.jpg" alt="Image" class="img-fluid">
                        <img src="images/person_s.jpg" alt="Image" class="img-fluid">
                    </div>

                    <div class="owl-custom-direction">
                        <a href="#" class="custom-prev"><span class="icon-keyboard_arrow_left"></span></a>
                        <a href="#" class="custom-next"><span class="icon-keyboard_arrow_right"></span></a>
                    </div>

                </div>
            </div>
        </div>
    </div>

@stop
