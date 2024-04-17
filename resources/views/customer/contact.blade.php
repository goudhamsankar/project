@extends('layouts.customer')
@section('content')
    <div class="mapouter">
        <div class="gmap_canvas"><iframe width="100%" height="350" id="gmap_canvas"
                src="https://maps.google.com/maps?q=bangalore&amp;t=&amp;z=11&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                href="https://www.emojilib.com/"></a></div>
        <style>
            .mapouter {
                position: relative;
                text-align: right;
                height: 350px;
                width: 100%;
            }

            .gmap_canvas {
                overflow: hidden;
                background: none !important;
                height: 350px;
                width: 100%;
            }
        </style>
    </div>
    <section class="contact-section padding">
        <div class="map"></div>
        <div class="container">
            <div class="contact-wrap d-flex align-items-center row">
                <div class="col-lg-6 sm-padding">
                    <div class="contact-info">
                        <h2>Get in touch with us & <br>send us message today!</h2>
                        <p>Welcome to our salon's contact page! We're thrilled to connect with you. Whether you're seeking
                            an appointment, have questions about our services, or simply want to share feedback, we're here
                            to assist you. Our dedicated team is committed to providing exceptional customer service and
                            ensuring your experience with us is nothing short of extraordinary. Feel free to reach out to us
                            via phone, email, or by filling out the form below. We'll make sure to respond promptly and
                            address any inquiries you may have. Thank you for considering our salon, and we look forward to
                            hearing from you soon!.</p>
                        <h3> <br>INDIA, bangalore</h3>
                        <h4><span>Email:</span> salon@door@gmail.com <br> <span>Phone:</span> +91 9876543210 <br>
                            <span>Fax:</span> +91 9876543210
                        </h4>
                    </div>
                </div>
                <div class="col-lg-6 sm-padding">
                    <div class="contact-form">
                        <form action="{{ route('feedback.store') }}" method="post" class="form-horizontal">
                            @csrf
                            @method('post')
                            <div class="form-group colum-row row">
                                <div class="col-sm-6">
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Name" required value="{{ old('name') }}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="Email" required value="{{ old('email') }}">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea id="message" name="feedback" cols="30" rows="5" class="form-control message"
                                        placeholder="Feedback" required>{{ old('feedback') }}</textarea>
                                    @error('feedback')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button id="submit" class="default_btn" type="submit">Send Message</button>
                                </div>
                            </div>
                            <div id="form-messages" class="alert" role="alert"></div>
                        </form>
                        @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                         @if (Session::has('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ Session::get('error') }}
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="widget_section padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="footer_widget">
                        <img class="mb-15" src="img/logo.png" alt="Brand">
                        <p>Our barbershop is created for men who appreciate premium quality, time and flawless look. </p>
                        <ul class="widget_social">
                            <li><a href="#"><i class="social_facebook"></i></a></li>
                            <li><a href="#"><i class="social_twitter"></i></a></li>
                            <li><a href="#"><i class="social_googleplus"></i></a></li>
                            <li><a href="#"><i class="social_instagram"></i></a></li>
                            <li><a href="#"><i class="social_linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="footer_widget">
                        <h3>Headquarters</h3>
                        <p>123, Brigade Road,
                            Bangalore - 560001,
                            Karnataka, India.</p>
                        <h3>E-mail US</h3>
                        <p>salonatdoor@gmail.com</p>
                        <br>
                        <h3>Toll-free number</h3>
                        <p>+(91) 98 7654 3210</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="footer_widget">
                        <h3>Booking Open</h3>
                        <ul class="opening_time">
                            <li>24X7</li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 sm-padding">
                    <div class="footer_widget">
                        <h3>Subscribe to our contents</h3>
                        <div class="subscribe_form">
                            <form action="#" class="subscribe_form">
                                <input type="email" name="email" id="subs-email" class="form_input"
                                    placeholder="Email Address...">
                                <button type="submit" class="submit"
                                    onclick="location.href='subscribed.html'">SUBSCRIBE</button>
                                <div class="clearfix"></div>
                                <div id="subscribe-result">
                                    <p class="subscription-success"></p>
                                    <p class="subscription-error"></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
