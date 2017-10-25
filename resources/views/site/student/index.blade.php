@extends('layouts.site')

@section('content')
    <section class="row-fluid row hero-bg dark lightContent reverseLink">

        <div class="parallax-bg scroll-animate" data-translate-y-start="0" data-translate-y-end="80"></div>

        <div class="containerCentered container">
            <div class="center-content center-block center-text text-center reverseLink editorial-container">
                <div class="editorial-cell ">
                    <h1 class="x-large h2"></h1>
                    <div class="lp-links x-large">
                        <a class="lp-active contentLink lp-buyer" data-pa-click="hero|sub-nav|get-an-account" href="https://www.paypal.com/us/webapps/mpp/getting-started/get-account/overview">
Get an Account
</a>
                        <a class=" contentLink lp-seller" data-pa-click="hero|sub-nav|explore-account" href="https://www.paypal.com/us/webapps/mpp/getting-started/explore-account/overview">
Explore Your Account
</a>
                    </div>
                    <h1 class="x-large h2 lp-title">Get started.</h1>
                    <p class="contentPara">
                        Join more than 200+ million active customers using PayPal.
                    </p>

                    <a class="btn heroBtn span4" data-pa-click="hero|hero-cta|sign-up-for-free" href="https://www.paypal.com/us/signup/account">
    Sign Up for Free
</a>
                </div>
            </div>

        </div>
    </section>




    <section class="row row-fluid panel panel-body ">
        <div class="container containerCentered">


            <div class="span3 leftNav">

                <h4 class="leftNav-headline">Learn More</h4>
                <ul class="leftNav-list">

                    <li><a data-pa-click="left-nav|overview" class="leftNav-links link-active" href="https://www.paypal.com/us/webapps/mpp/getting-started/get-account/overview">Overview</a></li>

                    <li><a data-pa-click="left-nav|add-a-payment-method" class="leftNav-links " href="https://www.paypal.com/us/webapps/mpp/getting-started/get-account/add-payment-method">Add a Payment Method</a></li>

                </ul>

            </div>




            <div class="span9">

                <div class="center-text">
                    <h2 class="pulloutHeadline">Welcome.</h2>

                    <p class="subheadline">Check out the video below to learn how you can use PayPal to shop on millions of sites or to send money to family and friends.</p>


                    <div class="row row-fluid container hero-bg mini-hero-bg ">
                        <div class="containerCentered container">
                            <div class="span6 col-sm-6  editorial-container">
                                <div class="editorial-cell">
                                    <h3 class="contentHead">How does PayPal work? Spend money. Not time.</h3>

                                    <p class="hatch span8 col-sm-8">
                                        <a href="#" id="video-cta" class="youtube-player-modal btn btn-white-border center-block video-cta" video-id="lkz4GZgyb9o" data-pa-click="rightPanel|mini-hero-video-cta|how-paypal-works">
                                            <span class="icon-play-media"></span> How PayPal Works
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="steps-section icon-mod row-fluid">

                    <div class="container containerExtend">

                        <div class="steps ">
                            <div class="icon icon-0"><img src="https://www.paypalobjects.com/digitalassets/c/website/marketing/na/us/getting-started/icon-getting-started-secure.jpg"></div>
                            <div class="icon-text">
                                <p class="icon-headline">
                                    <b>Secure</b>
                                </p>
                                <p>Whether you are paying bills, sending money or making a purchase, PayPal works hard to keep your financial information secure.</p>
                            </div>
                        </div>

                        <div class="steps ">
                            <div class="icon icon-1"><img src="https://www.paypalobjects.com/digitalassets/c/website/marketing/na/us/getting-started/overview/icon-getting-started-100x100-clock-2x.png"></div>
                            <div class="icon-text">
                                <p class="icon-headline">
                                    <b>Fast</b>
                                </p>
                                <p>No need to enter all your financial information every time you shop. Speed through checkout with PayPal.</p>
                            </div>
                        </div>

                        <div class="steps ">
                            <div class="icon icon-2"><img src="https://www.paypalobjects.com/digitalassets/c/website/marketing/na/us/getting-started/icon-getting-started-cost.jpg"></div>
                            <div class="icon-text">
                                <p class="icon-headline">
                                    <b>Easy</b>
                                </p>
                                <p>Not only is signing up for PayPal free, but you can also make purchases and send money to family and friends in the U.S. using your PayPal balance or bank account, at no extra cost. <a href="https://www.paypal.com/us/webapps/mpp/paypal-fees" data-pa-click="fees|PayPal-fees">See All Fees</a>. </p>
                            </div>
                        </div>

                    </div>
                </div>



            </div>
        </div>
    </section>

    <section class="closing-section row-fluid panel center-text panel-closing light">
        <div class="containerCentered">
            <div class="span12">
                <p class="closingHeadline headline large">Already sold?</p>



                <a data-pa-click="closing|Sign Up for Free" class="btn closing-cta center-block " href="https://www.paypal.com/us/signup/account">Sign Up for Free</a>



            </div>
        </div>

    </section>
@endsection