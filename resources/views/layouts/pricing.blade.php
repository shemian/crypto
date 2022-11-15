
<style>


a {
    text-decoration: none;
}

.pricingTable {
    text-align: center;
    background: #fff;
    margin: 0 -15px;
    box-shadow: 0 0 10px #ababab;
    padding-bottom: 40px;
    border-radius: 10px;
    color: #cad0de;
    transform: scale(1);
    transition: all .5s ease 0s
}

.pricingTable:hover {
    transform: scale(1.05);
    z-index: 1
}

.pricingTable .pricingTable-header {
    padding: 40px 0;
    background: #f5f6f9;
    border-radius: 10px 10px 50% 50%;
    transition: all .5s ease 0s
}

.pricingTable:hover .pricingTable-header {
    background: #ff9624
}

.pricingTable .pricingTable-header i {
    font-size: 50px;
    color: #858c9a;
    margin-bottom: 10px;
    transition: all .5s ease 0s
}

.pricingTable .price-value {
    font-size: 35px;
    color: #ff9624;
    transition: all .5s ease 0s
}

.pricingTable .month {
    display: block;
    font-size: 14px;
    color: #cad0de
}

.pricingTable:hover .month,
.pricingTable:hover .price-value,
.pricingTable:hover .pricingTable-header i {
    color: #fff
}

.pricingTable .heading {
    font-size: 24px;
    color: #212529;
    margin-bottom: 20px;
    text-transform: uppercase
}

.pricingTable .pricing-content ul {
    list-style: none;
    padding: 0;
    margin-bottom: 30px
}

.pricingTable .pricing-content ul li {
    line-height: 30px;
    color: #a7a8aa
}

.pricingTable .pricingTable-signup a {
    display: inline-block;
    font-size: 15px;
    color: #fff;
    padding: 10px 35px;
    border-radius: 20px;
    background: #ffa442;
    text-transform: uppercase;
    transition: all .3s ease 0s
}

.pricingTable .pricingTable-signup a:hover {
    box-shadow: 0 0 10px #ffa442
}

.pricingTable.blue .heading,
.pricingTable.blue .price-value {
    color: #4b64ff
}

.pricingTable.blue .pricingTable-signup a,
.pricingTable.blue:hover .pricingTable-header {
    background: #4b64ff
}

.pricingTable.blue .pricingTable-signup a:hover {
    box-shadow: 0 0 10px #4b64ff
}

.pricingTable.red .heading,
.pricingTable.red .price-value {
    color: #ff4b4b
}

.pricingTable.red .pricingTable-signup a,
.pricingTable.red:hover .pricingTable-header {
    background: #ff4b4b
}

.pricingTable.red .pricingTable-signup a:hover {
    box-shadow: 0 0 10px #ff4b4b
}

.pricingTable.green .heading,
.pricingTable.green .price-value {
    color: #40c952
}

.pricingTable.green .pricingTable-signup a,
.pricingTable.green:hover .pricingTable-header {
    background: #40c952
}

.pricingTable.green .pricingTable-signup a:hover {
    box-shadow: 0 0 10px #40c952
}

.pricingTable.blue:hover .price-value,
.pricingTable.green:hover .price-value,
.pricingTable.red:hover .price-value {
    color: #fff
}

@media screen and (max-width:990px) {
    .pricingTable {
        margin: 0 0 20px
    }
}</style>
 
<div class="demo">
    <div class="container">
        <div class="row">
        <div class="col-md-12" style="text-align:center; color:#FFFFFF">
          <h2>Investment Plans</h2>
        </div>
            <div class="col-md-3 col-sm-6">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <i class="fa fa-adjust"></i>
                        <div class="price-value"> $50.00 <span class="month">per month</span> </div>
                    </div>
                    <h3 class="heading">Starter Plan</h3>
                    <div class="pricing-content">
                        <ul>
                            <li> For 1 day(s) </li>
                            <li><b>10%</b>Intrest</li>
                            <li><b>$499</b> Max Price</li>
                            <li> Order Notification </li>
                            <li><b>5%</b> Referral Bonus</li>
                            <li><b>24/7</b> Support</li>
                            <li> Updates </li>
                            <li> return of investment (ROI)</li>
                        </ul>
                    </div>
                    <div class="pricingTable-signup">
                        <a href="{{route('register')}}">Get Started</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6">
                <div class="pricingTable green">
                    <div class="pricingTable-header">
                        <i class="fa fa-briefcase"></i>
                        <div class="price-value"> $500.00 <span class="month">per month</span> </div>
                    </div>
                    <h3 class="heading">Professional plan</h3>
                    <div class="pricing-content">
                        <ul>
                            <li> For 1 day(s) </li>
                            <li><b>20%</b>Intrest</li>
                            <li><b>$1,499</b> Max Price</li>
                            <li> Order Notification </li>
                            <li><b>5%</b> Referral Bonus</li>
                            <li><b>24/7</b> Support</li>
                            <li> Updates </li>
                            <li> return of investment (ROI)</li>
                        </ul>
                    </div>
                    <div class="pricingTable-signup">
                        <a href="{{route('register')}}">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="pricingTable blue">
                    <div class="pricingTable-header">
                        <i class="fa fa-diamond"></i>
                        <div class="price-value"> $1,500.00 <span class="month">per month</span> </div>
                    </div>
                    <h3 class="heading">Golden Plan</h3>
                    <div class="pricing-content">
                        <ul>
                        <li> For 2 day(s) </li>
                            <li><b>25%</b>Intrest</li>
                            <li><b>$9,999</b> Max Price</li>
                            <li> Order Notification </li>
                            <li><b>5%</b> Referral Bonus</li>
                            <li><b>24/7</b> Support</li>
                            <li> Updates </li>
                            <li> return of investment (ROI)</li>
                        </ul>
                    </div>
                    <div class="pricingTable-signup">
                        <a href="{{route('register')}}">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="pricingTable red">
                    <div class="pricingTable-header">
                        <i class="fa fa-cube"></i>
                        <div class="price-value"> $10,000.00 <span class="month">per month</span> </div>
                    </div>
                    <h3 class="heading">Premium Plan</h3>
                    <div class="pricing-content">
                        <ul>
                            <li> For 8 day(s) </li>
                            <li><b>40%</b>Intrest</li>
                            <li><b>$100,000</b> Max Price</li>
                            <li> Order Notification </li>
                            <li><b>5%</b> Referral Bonus</li>
                            <li><b>24/7</b> Support</li>
                            <li> Updates </li>
                            <li> return of investment (ROI)</li>
                        </ul>
                    </div>
                    <div class="pricingTable-signup">
                        <a href="{{route('register')}}">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>