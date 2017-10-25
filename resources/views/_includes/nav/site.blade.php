<header class="table-row pp-header" role="banner">
    <div>
        <div class="containerCentered ">

            <a href="#Menu" id="menu-button" role="button">Menu</a>

            <a data-pa-click="header|paypal-logo" href="/" class=""><img src="images/footer-logo.png" alt="StudyChoice"></a>

            <nav id="main-menu" class="main-menu" role="navigation">
                <ul>
<!--                           Personal-->
                    <li><a href="/" id="header-personal" rel="menuitem" aria-controls="submenu-personal" data-pa-click="header|personal">Student</a>
                        <div class="menu-wrapper" id="submenu-personal" aria-labelledby="header-personal">
                            <ul id="header-personal-menu" class="subnav list"><a href="#" id="header-personal" rel="menuitem" aria-controls="submenu-personal" data-pa-click="header|personal">Student</a>
                                <li><a href="{{ route('student.getting-started') }}" data-pa-click="sub|student" data-highlight="header-personal">Getting Started <em>How to use the Student Portal</em></a></li>
                                <li><a href="../../us/webapps/mpp/pay-online/index.html" data-pa-click="sub|pay_online" data-highlight="header-personal">Check Out Securely Online <em>Use your credit cards or other funds</em></a></li>
                                <li><a href="../../us/webapps/mpp/paypal-credit/index.html" data-pa-click="sub|paypal-credit" data-highlight="header-personal">PayPal Credit <em>Get more time to pay</em></a></li>
                                <li><a href="../../us/webapps/mpp/pay-in-stores/index.html" data-pa-click="sub|pay-in-stores" data-highlight="header-personal">Mobile Wallet <em>Pay in stores with our app</em></a></li>
                                <li><a href="../../us/webapps/mpp/pay-on-ebay/index.html" data-pa-click="sub|pay-on-ebay" data-highlight="header-personal">eBay Payments <em>Speed through checkout on eBay</em></a></li>
                                <li><a href="../../us/webapps/mpp/about-paypal-products/index.html" data-pa-click="sub|about-paypal-products" data-highlight="header-personal">Shopping and More <em>Deals, gift cards and donations</em></a></li>
                            </ul>
                        </div>
                    </li>
<!--                            Business-->
                    <li><a href="../../us/webapps/mpp/merchant/index.html" id="header-business" rel="menuitem" aria-controls="submenu-business" data-pa-click="header|business">Institution</a>
                        <div class="menu-wrapper" id="submenu-business" aria-labelledby="header-business">
                            <ul id="header-business-menu" class="subnav list"><a href="../../us/webapps/mpp/merchant/index.html" id="header-business" rel="menuitem" aria-controls="submenu-business" data-pa-click="header|business">Business</a>
                                <li><a href="../../us/webapps/mpp/merchant/index.html" data-pa-click="sub|merchant" data-highlight="header-business">All Business Solutions <em>Merchant services, invoicing, and more</em></a></li>
                                <li><a href="../../us/webapps/mpp/credit-card-reader/index.html" data-pa-click="sub|credit-card-reader" data-highlight="header-business">Get Paid in Person <em>Mobile card readers and POS solutions</em></a></li>
                                <li><a href="../../us/webapps/mpp/accept-payments-online/index.html" data-pa-click="sub|accept-payments-online" data-highlight="header-business">Credit Card Processing <em>Accept credit, debit cards, and PayPal</em></a></li>
                                <li><a href="../../us/webapps/mpp/merchant-working-capital/index.html" data-pa-click="sub|merchant-working-capital" data-highlight="header-business">Borrow for Your Business <em>Affordable business loans</em></a></li>
                                <li><a href="../../us/webapps/mpp/express-checkout/index.html" data-pa-click="sub|express-checkout" data-highlight="header-business">Add PayPal to Your Checkout <em>Add the button to accept payments</em></a</li>
                                <li><a href="../../us/webapps/mpp/promotional-financing/index.html" data-pa-click="sub|promotional-financing" data-highlight="header-business">Offer Credit to Your Customers <em>Promote financing to help increase sales</em></a></li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="../../us/webapps/mpp/send-money-online/index.html" data-pa-click="header|send-money-online" id="header-send" class="no-drop" data-highlight="header-send">Scholarship</a>
                        <div class="menu-wrapper light" id="submenu-send" aria-labelledby="header-send">
                            <div id="header-send-menu" class="menu subnav light">

                                <form method="get" class="form-inline form-stepper 8ball" id="header-send-money-form" novalidate data-flow-type="8ball" action="">

                                    <div class="step shown" id="send-money-step-1" data-step="step">

                                        <div>
                                            <strong class="headline medium"></strong>
                                            <a href="" class="learn-more-link contentLink" data-pa-click="header|send-money-online|learn-more"></a>
                                        </div>

                                        <div class="controls">
                                            <div class="input-wrapper">
                                                <input class="emailf" name="recipient" type="text" id="recipient" placeholder="" required="required" autocapitalize="off" autocorrect="off" /><label for="recipient" class="accessAid"></label></div>
                                        </div>
                                        <div class="controls">
                                            <div class="input-wrapper caboose">
                                                <label for="amount_send" class="accessAid"></label>
                                                <input class="amount-currency" type="number" min="0" name="amount" id="amount_send" placeholder="" autocapitalize="off" autocorrect="off" required="required" maxlength="17" />
                                                <select class="currency no-arrow required" id="currency_code" name="currencyCode"></select>
                                                <label for="currency_code" class="select-arrow"></label>
                                            </div>
                                        </div>

                                        <input type="button" value="" data-pa-click="" class="btn continue" />

                                    </div>
                                    <div class="step" id="send-money-step-2" data-step="submit">
                                        <div class="button-choices">

                                            <div class="choice">
                                                <strong class="headline medium"></strong>
                                                <p id="choice-1"></p>
                                                <button type="submit" name="payment_type" data-pa-click="" value="Gift" class="btn gift" data-step="submit" aria-describedby="choice-1" data-url="/myaccount/transfer/send/external/mpp"></button>
                                            </div>
                                            <div class="choice">
                                                <strong class="headline medium"></strong>
                                                <p id="choice-2"></p>
                                                <button type="submit" name="payment_type" data-pa-click="" value="Goods" class="btn goods" data-step="submit" aria-describedby="choice-2" data-url="/myaccount/transfer/buy/external/mpp"></button>
                                            </div>

                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </li>

                    <li><a href="../../us/webapps/mpp/requesting-payments/index.html" data-pa-click="header|requesting-payments" id="header-request" class="no-drop" data-highlight="header-request">Career/Job</a></li>
                </ul>

                <ul class="sublist">
                    <li><a href="../../webapps/mpp/account-selection/index.html" id="signup-button-mobile" name="SignUp_header" class="btn btn-small btn-white-border signup-mobile" data-pa-click="header|signup-mobile">Sign Up for Free</a></li>
                </ul>

            </nav>

            <div id="header-buttons" class="header-buttons">

                <a href="../../signin/index-country.x=US&locale.x=en_US.html" data-pa-click="header|login" id="ul-btn" class="btn btn-small btn-secondary">Log In</a>

                <a href="../../us/webapps/mpp/account-selection/index.html" id="signup-button" data-pa-click="header|signup" class="btn btn-small btn-signup">Sign Up</a>

            </div>

        </div>
    </div>
</header>