@extends('layouts.site')

@section('content')


    <div id="content" class="site-content">
        <div class="page-header dtable text-center header-transparent page-header-contact">
            <div class="dcell">
                <div class="container">
                    <h1 class="page-title"></h1>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="index.html"></a></li>
                        <li class="active"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-center mb-5 mb-lg-0">
                    <div class="contact-left">
                        <br/>
                        <br/>
                        <br/>
                        <h2>Get in Touch</h2>
                        <p class="font14">Your email address will not be published. Required fields are marked *</p>
                        <form id="ajax-form" name="ajax-form" action="contact.php" method="post" class="wpcf7">
                            <div class="main-form">
                                <p>
                                    <label for="name"> <span class="error"
                                                             id="err-name">please enter name</span></label>
                                    <input type="text" name="name" value="" size="40" class="" aria-invalid="false"
                                           placeholder="Your Name *" required>
                                </p>
                                <p>
                                    <label for="email">
                                        <span class="error" id="err-email">please enter e-mail</span>
                                        <span class="error" id="err-emailvld">e-mail is not a valid format</span>
                                    </label>
                                    <input type="email" name="email" id="email" value="" size="40" class=""
                                           aria-invalid="false" placeholder="Your Email *" required>
                                </p>
                                <p>
                                    <label for="message"></label>
                                    <textarea name="message" id="message" cols="40" rows="10" class=""
                                              aria-invalid="false" placeholder="Message..." required></textarea>
                                </p>
                                <p>
                                    <button type="submit" id="send" class="octf-btn">Send Message</button>
                                </p>
                                <div class="clear"></div>
                                <div class="error" id="err-form">There was a problem validating the form please check!
                                </div>
                                <div class="error" id="err-timedout">The connection to the server timed out!</div>
                                <div class="error" id="err-state"></div>
                            </div>
                        </form>

                        <div class="clear"></div>
                        <div id="ajaxsuccess">Successfully sent!!</div>
                        <div class="clear"></div>
                    </div>
                </div>

                <div style="background-color: #58181a;" class="col-lg-6">
                    <div class="contact-right">
                        <div class="ot-heading">
                            <span>[ our contact details ]</span>
                            <h2 class="main-heading">Highlands !</h2>
                        </div>
                        <div class="contact-info">
                            <i class="ot-flaticon-place"></i>
                            <div class="info-text">
                                <h6>OUR ADDRESS:</h6>
                                <p> 7 Acturus Road
                                    Highlands, Harare</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <i class="ot-flaticon-mail"></i>
                            <div class="info-text">
                                <h6>OUR MAILBOX:</h6>
                                <p><a href="mailto:info@dynamicfloors.co.zw">info@dynamicfloors.co.zw</a></p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <i class="ot-flaticon-phone-call"></i>
                            <div class="info-text">
                                <h6>OUR PHONE:</h6>
                                <p><a href="tel:+263 778094514">+263 778094514</a></p>
                            </div>
                        </div>
                        <div class="list-social">
                            <ul>
                                <li><a href="http://twitter.com" target="_self"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="http://facebook.com" target="_self"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="http://linkedin.com" target="_self"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li><a href="http://instagram" target="_self"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div style="background-color: #58181a;" class="col-lg-6">
                    <div class="contact-right">
                        <div class="ot-heading">
                            <span>[ our contact details ]</span>
                            <h2 class="main-heading">Mt Pleasant !</h2>
                        </div>
                        <div class="contact-info">
                            <i class="ot-flaticon-place"></i>
                            <div class="info-text">
                                <h6>OUR ADDRESS:</h6>
                                <p>Shop 1 & 2
                                    Bond Shops
                                    Cnr The Chase & Bond Street
                                    Mt Pleasant Harare</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <i class="ot-flaticon-mail"></i>
                            <div class="info-text">
                                <h6>OUR MAILBOX:</h6>
                                <p><a href="mailto:info@dynamicfloors.co.zw">info@dynamicfloors.co.zw</a></p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <i class="ot-flaticon-phone-call"></i>
                            <div class="info-text">
                                <h6>OUR PHONE:</h6>
                                <p><a href="tel:+263 784588437">+263 784588437</a></p>
                            </div>
                        </div>
                        <div class="list-social">
                            <ul>
                                <li><a href="http://twitter.com" target="_self"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="http://facebook.com" target="_self"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="http://linkedin.com" target="_self"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li><a href="http://instagram" target="_self"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@stop
