@extends('frontend/layouts/main')
@push('title') <title>{{$pageName}}</title> @endpush
@section('main-section')
@php
$first_name = $last_name = $email = $phone = $country = $address = $city = $zip = '';
if(!empty($lastAddress)){
    $first_name = $lastAddress->first_name;
    $last_name = $lastAddress->last_name;
    $email = $lastAddress->email;
    $phone = $lastAddress->mobile_no;
    $country = $lastAddress->country;
    $address = $lastAddress->address;
    $city = $lastAddress->city;
    $zip = $lastAddress->zip;
}else if(!empty($userData)){
    $first_name = $userData->first_name;
    $email = $userData->email;
    $phone  = $userData->phone ;
}
@endphp
<link href="{{url('')}}/frontend/css/module-css/checkout.css" rel="stylesheet">
<style>
    .hs_delivery_price{
        display: none;
    }
</style>
<div class="clear"></div>
<br><br>
<!-- checkout-section -->
<section class="checkout-section pb_80">
    <div class="large-container">
        <div class="sec-title centred pb_30">
            <h2>Checkout</h2>
        </div>
        <div class="inner-container">
            <p class="error_show"></p>
            <form method="post" id="checkout_submit">
                <div class="row clearfix">
                    @if(!empty($cartData))
                    <div class="col-lg-8 col-md-12 col-sm-12 billing-column">
                        <div class="billing-content mr_30">
                            <h3>Billing Details</h3>
                            <div class="form-inner">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 field-column">
                                        <div class="form-group">
                                            <label>First Name<span>*</span></label>
                                            <input type="text" id="first_name" name="first_name" value="{{$first_name}}">
                                            <div class="invalid-feedback" id="error_first_name"> Enter first name.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 field-column">
                                        <div class="form-group">
                                            <label>Last Name<span>*</span></label>
                                            <input type="text" id="last_name" name="last_name" value="{{$last_name}}">
                                            <div class="invalid-feedback" id="error_last_name"> Enter last name.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 field-column">
                                        <div class="form-group">
                                            <label>Email Address<span>*</span></label>
                                            <input type="text" id="email" name="email" value="{{$email}}">
                                            <div class="invalid-feedback" id="error_email"> Enter email address.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 field-column">
                                        <div class="form-group">
                                            <label>Phone Number<span>*</span></label>
                                            <input type="text" id="phone" name="phone" value="{{$phone}}">
                                            <div class="invalid-feedback" id="error_phone"> Enter phone number.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 field-column">
                                        <div class="form-group">
                                            <label>Country<span>*</span></label>
                                            <input type="text" id="country" name="country" value="{{$country}}">
                                            <div class="invalid-feedback" id="error_country"> Enter country.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 field-column">
                                        <div class="form-group">
                                            <label>Address<span>*</span></label>
                                            <input type="text" id="address" name="address" value="{{$address}}">
                                            <div class="invalid-feedback" id="error_address"> Enter address.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 field-column">
                                        <div class="form-group">
                                            <label>Town / City<span>*</span></label>
                                            <input type="text" id="city" name="city" value="{{$city}}">
                                            <div class="invalid-feedback" id="error_city"> Enter city.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 field-column">
                                        <div class="form-group">
                                            <label>Postcode / ZIP<span>*</span></label>
                                            <input style="text-transform: capitalize;" oninput="validatePostcode()" type="text" id="zip" name="zip" value="{{$zip}}">
                                            <div class="invalid-feedback" id="error_zip"> Enter zip.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-12 col-sm-12 order-column">
                        <div class="order-box">
                            <h3>Order Summary</h3>
                            <div class="order-info">
                                <div class="title-box">
                                    <span class="text">Product</span>
                                    <span class="text">total</span>
                                </div>
                                <div class="order-product">
                                    @foreach($cartData as $skey => $svalue)
                                    @php
                                    $qty = $svalue['uqty'];
                                    $pid = $svalue['p']->product_id;
                                    $price = $svalue['p']->price;
                                    $delivery_price = $svalue['p']->delivery_price;
                                    $image = $svalue['p']->image;
                                    $attName = '';
                                    if (!empty($svalue['c']['metadata']))
                                    {
                                        $price = $svalue['c']['metadata']['price'];
                                        $delivery_price = $svalue['c']['metadata']['delivery_price'];
                                        $attName = " (".$svalue['c']['metadata']['label'].") - (".$svalue['c']['metadata']['item_name'].")";
                                    }
                                    @endphp
                                    <div class="single-item remove_pro{{$skey}}">
                                        <div class="product-box">
                                            <figure class="image-box"><img src="{{$image}}" alt=""></figure>
                                            <h6>{{$svalue['p']->product_name}} {!!$attName!!}</h6>
                                        </div>
                                        <h4>{{currency()}}<span class="hs_collection_price">{{ decnum($price * $qty) }}</span><span class="hs_delivery_price">{{ decnum($delivery_price * $qty) }}</span> </h4>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="selct_date_time cart-section">
                                    <div class="total-cart coupon-box">
                                        <h4>Have a Coupon?</h4>
                                        <div class="form-group">
                                            <input type="text" id="voucher_code" name="coupon" class="cbox" placeholder="Apply Coupon">
                                            <button class="voucher_code_submit"  type="button">Apply</button>
                                        </div>
                                        <div class="voucher_msg"></div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                
                                <div class="selct_date_time">
                                    <div class="selct_date_time_titl"  >
                                        Are you booking a delivery or Collection ?
                                    </div>
                                    <div class="clear"></div>
                                    <!-- 1 means Collection 2 means Delivery  -->
                                    <label class="slct_date slct_date_radio">
                                        <input name="delivery_type" type="radio" class="slct_date_input delivery_type" value="1" >
                                        <div class="slct_date_labl">Collection</div>
                                    </label>
                                    <label class="slct_date slct_date_radio">
                                        <input name="delivery_type" type="radio" class="slct_date_input delivery_type" value="2" checked>
                                        <div class="slct_date_labl">Delivery</div>
                                    </label>
                                    <div class="invalid-feedback" id="error_delivery_type"> </div>
                                    <div class="clear"></div> <br>
                                </div>
                                <div class="selct_date_time time_slot_div">
                                    <div class="selct_date_time_titl">Select Date & Time Slot For Collection </div>
                                    <div class="clear"></div>
                                    <div class="slct_date">
                                        <div class="slct_date_labl">Select Date</div>
                                        <input type="date" name="delivery_date" id="dateInput" class="slct_date_input" >
                                    </div>
                                    <div class="slct_date slct_date_right">
                                        <div class="slct_date_labl">Select Time</div>
                                        {{-- <input type="time" class="slct_date_input" > --}}
                                        <select id="timeSlot" class="form-control" name="delivery_time">
                                        </select>
                                        <p id="emtp_slotMessage">
                                        </p>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                
                                <div class="clear"></div>
                                <div class="clear"></div>
                                <ul class="cost-box">
                                {{-- <li><h4><span>Subtotal</span></h4><h4>$<span class="total_sale_price hs_collection_price checkout_sub_total_amount">{{$priceSummary['cartPrice']}}</span> <span class="total_sale_price_delivery hs_delivery_price">{{$priceSummary['cartPrice']}}</span></h4></li>
                                <li><h4><span>Shipping Charg</span></h4><h4>$<span class="checkout_shipping_amount shipping_amt hs_collection_price">{{$priceSummary['shippingAmount']}}</span> <span class="shipping_amt_delivery hs_delivery_price">{{$priceSummary['shippingAmount']}}</span></h4></li> --}}
                                <li>
                                    <h4><span>Subtotal</span></h4><h4>{{currency()}}
                                        <span class="checkout_sub_total_amount">0</span>
                                    </h4>
                                </li>
                                <li class="che_voucher">
                                    <h4>Shipping Amt<span class="shipping_msg"></span></h4>
                                    <h4>{{currency()}}<span class="checkout_shipping_amount">0</span></h4>
                                </li>
                                <li class="che_voucher">
                                    <h4><span>Voucher Amt</span></h4>
                                    <h4>{{currency()}}<span class="checkout_voucher_amount">0</span></h4>
                                </li>
                                <li class="che_voucher">
                                    <h4><span>Tax Amt</span></h4><h4>{{currency()}}
                                        <span class="checkout_tax_amount">0</span>
                                    </h4>
                                </li>
                            </ul>
                            <div class="total-box">
                                <h4><span>Total</span></h4>
                                <h4>{{currency()}}<span class="checkout_grand_total"></span></h4>
                            </div>
                            <div class="payment-option">
                                <span class="text">Selet Your Credit/Debit Cards or Paypal</span>
                                <div class="bank-payment">
                                    <ul class="card-list clearfix">
                                        <li><a href="#"><img src="{{url('')}}/frontend/images/icons/card-19.png" alt=""></a></li>
                                        <li><a href="#"><img src="{{url('')}}/frontend/images/icons/card-20.png" alt=""></a></li>
                                        <li><a href="#"><img src="{{url('')}}/frontend/images/icons/card-21.png" alt=""></a></li>
                                        <li><a href="#"><img src="{{url('')}}/frontend/images/icons/card-22.png" alt=""></a></li>
                                        <li><a class="apl_pay" href="#"><img src="{{url('')}}/frontend/images/apple.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <ul class="other-payment">
                                    <li>
                                        <div class="check-box mb_12">
                                            <input class="check" type="radio" id="payment_mode1" name="payment_mode" value="Cash" checked>
                                            <label for="payment_mode1">Cash on Delivery</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="check-box mb_12">
                                            <input class="check" type="radio" id="payment_mode2" name="payment_mode" value="Stripe">
                                            <label for="payment_mode2">Stripe</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="check-box mb_12">
                                            <input class="check" type="radio" id="payment_mode3" name="payment_mode" value="Google Pay">
                                            <label for="payment_mode3">Google Pay</label>
                                        </div>
                                    </li>
                                    <div class="invalid-feedback" id="error_payment_mode"> </div>
                                </ul>
                                <div class="text-box pt_10">
                                    <p class="min_order_msg"></p>
                                </div>
                            </div>
                            <div class="btn-box pt_40">
                                <button type="submit" class="place_order_btn theme-btn btn-one">Make Payment</button>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <h2 class="error_cls">Look like your cart is empty..!!</h2>
                @endif
            </div>
        </form>
    </div>
</div>
</section>
<!-- checkout-section end -->
<!-- highlights-section -->
<section class="highlights-section alternat-2">
    <div class="large-container">
        <div class="inner-container clearfix">
            <div class="shape" style="background-image: url({{url('')}}/frontend/images/shape/shape-10.png);"></div>
            <div class="highlights-block-one">
                <div class="inner-box">
                    <div class="icon-box"><img src="{{url('')}}/frontend/images/icons/icon-20.png" alt=""></div>
                    <h5>Same day Product Delivery</h5>
                </div>
            </div>
            <div class="highlights-block-one">
                <div class="inner-box">
                    <div class="icon-box"><img src="{{url('')}}/frontend/images/icons/icon-21.png" alt=""></div>
                    <h5>100% Customer Satisfaction</h5>
                </div>
            </div>
            <div class="highlights-block-one">
                <div class="inner-box">
                    <div class="icon-box"><img src="{{url('')}}/frontend/images/icons/icon-22.png" alt=""></div>
                    <h5>Help and access is our mission</h5>
                </div>
            </div>
            <div class="highlights-block-one">
                <div class="inner-box">
                    <div class="icon-box"><img src="{{url('')}}/frontend/images/icons/icon-23.png" alt=""></div>
                    <h5>100% quality Car Accessories</h5>
                </div>
            </div>
            <div class="highlights-block-one">
                <div class="inner-box">
                    <div class="icon-box"><img src="{{url('')}}/frontend/images/icons/icon-24.png" alt=""></div>
                    <h5>24/7 Support for Clients</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- highlights-section -->
<div class="clear"></div>
<br><br>
<script src="{{url('')}}/frontend/custome_js/checkout.js"></script>
@endsection
<style type="text/css">
    .cbox {
        position: relative;
        display: block;
        width: 100%;
        height: 48px;
        border: 1px solid rgba(229, 229, 229, 1);
        border-radius: 55px;
        font-size: 16px;
        color: var(--title-color);
        padding: 10px 110px 10px 20px;
        transition: all 500ms ease;
    }
    .voucher_code_submit {
/*        position: absolute;*/
        display: inline-block;
        top: 201px;
        right: 22px;
        width: 90px;
        height: 36px;
        line-height: 36px;
        font-size: 16px;
        font-family: var(--title-font);
        font-weight: 700;
        border-radius: 55px;
        color: #fff;
        text-align: center;
        transition: all 500ms ease;
    }
    .nice-select
    {
        color: black !important;
        width: 100% !important;
        padding: 12px !important;
        margin-top: 4px;
        text-align: center;
    }
    span.shipping_msg
    {
        font-size: 12px;
        display: block;
        clear: both;
    }
    p.min_order_msg {
        padding: 0px;
        margin: 0px;
        color: red !important;
        font-weight: bold;
        font-size: 18px !important;
    }
</style>