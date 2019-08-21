@extends('layouts.app')
@section('content')
<!-- sales report area start -->
<div class="sales-report-area mt-5 mb-5">
    <div class="row">
        <div class="col-md-4">
            <div class="single-report mb-xs-30">
                <div class="s-report-inner pr--20 pt--30 mb-3">
                    <div class="icon"><i class="fa fa-btc"></i></div>
                    <div class="s-report-title d-flex justify-content-between">
                        <h4 class="header-title mb-0">Bitcoin</h4>
                        <p>24 H</p>
                    </div>
                    <div class="d-flex justify-content-between pb-2">
                        <h2>$ 4567809,987</h2>
                        <span>- 45.87</span>
                    </div>
                </div>
                <canvas id="coin_sales1" height="100"></canvas>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single-report mb-xs-30">
                <div class="s-report-inner pr--20 pt--30 mb-3">
                    <div class="icon"><i class="fa fa-btc"></i></div>
                    <div class="s-report-title d-flex justify-content-between">
                        <h4 class="header-title mb-0">Bitcoin Dash</h4>
                        <p>24 H</p>
                    </div>
                    <div class="d-flex justify-content-between pb-2">
                        <h2>$ 4567809,987</h2>
                        <span>- 45.87</span>
                    </div>
                </div>
                <canvas id="coin_sales2" height="100"></canvas>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single-report">
                <div class="s-report-inner pr--20 pt--30 mb-3">
                    <div class="icon"><i class="fa fa-eur"></i></div>
                    <div class="s-report-title d-flex justify-content-between">
                        <h4 class="header-title mb-0">Euthorium</h4>
                        <p>24 H</p>
                    </div>
                    <div class="d-flex justify-content-between pb-2">
                        <h2>$ 4567809,987</h2>
                        <span>- 45.87</span>
                    </div>
                </div>
                <canvas id="coin_sales3" height="100"></canvas>
            </div>
        </div>
    </div>
</div>
<!-- sales report area end -->
<!-- row area start -->
<div class="row">
    <!-- Live Crypto Price area start -->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Live Crypto Price</h4>
                <div class="cripto-live mt-5">
                    <ul>
                        <li>
                            <div class="icon b">b</div> Bitcoin<span><i
                                    class="fa fa-long-arrow-up"></i>$876909.00</span>
                        </li>
                        <li>
                            <div class="icon l">l</div> Litecoin<span><i
                                    class="fa fa-long-arrow-up"></i>$29780.00</span>
                        </li>
                        <li>
                            <div class="icon d">d</div> Dashcoin<span><i
                                    class="fa fa-long-arrow-up"></i>$13276.00</span>
                        </li>
                        <li>
                            <div class="icon b">b</div> Bitcoindash<span><i
                                    class="fa fa-long-arrow-down"></i>$5684.890</span>
                        </li>
                        <li>
                            <div class="icon e">e</div> Euthorium<span><i
                                    class="fa fa-long-arrow-down"></i>$3890.98</span>
                        </li>
                        <li>
                            <div class="icon t">b</div> Tcoin<span><i class="fa fa-long-arrow-up"></i>$750.789</span>
                        </li>
                        <li>
                            <div class="icon b">b</div> Bitcoin<span><i class="fa fa-long-arrow-up"></i>$325.037</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Live Crypto Price area end -->
    <!-- trading history area start -->
    <div class="col-lg-8 mt-sm-30 mt-xs-30">
        <div class="card">
            <div class="card-body">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h4 class="header-title">Trading History</h4>
                    <div class="trd-history-tabs">
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#buy_order" role="tab">Buy Order</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#sell_order" role="tab">Sell Order</a>
                            </li>
                        </ul>
                    </div>
                    <select class="custome-select border-0 pr-3">
                        <option selected>Last 24 Hours</option>
                        <option value="0">01 July 2018</option>
                    </select>
                </div>
                <div class="trad-history mt-4">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="buy_order" role="tabpanel">
                            <div class="table-responsive">
                                <table class="dbkit-table">
                                    <tr class="heading-td">
                                        <td>Trading ID</td>
                                        <td>Time</td>
                                        <td>Status</td>
                                        <td>Amount</td>
                                        <td>Last Trade</td>
                                    </tr>
                                    <tr>
                                        <td>78211</td>
                                        <td>4.00 AM</td>
                                        <td>Pending</td>
                                        <td>$758.90</td>
                                        <td>$05245.090</td>
                                    </tr>
                                    <tr>
                                        <td>782782</td>
                                        <td>4.00 AM</td>
                                        <td>Pending</td>
                                        <td>$77878.90</td>
                                        <td>$7778.090</td>
                                    </tr>
                                    <tr>
                                        <td>89675978</td>
                                        <td>4.00 AM</td>
                                        <td>Pending</td>
                                        <td>$0768.90</td>
                                        <td>$0945.090</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sell_order" role="tabpanel">
                            <div class="table-responsive">
                                <table class="dbkit-table">
                                    <tr class="heading-td">
                                        <td>Trading ID</td>
                                        <td>Time</td>
                                        <td>Status</td>
                                        <td>Amount</td>
                                        <td>Last Trade</td>
                                    </tr>
                                    <tr>
                                        <td>8964978</td>
                                        <td>4.00 AM</td>
                                        <td>Pending</td>
                                        <td>$445.90</td>
                                        <td>$094545.090</td>
                                    </tr>
                                    <tr>
                                        <td>89675978</td>
                                        <td>4.00 AM</td>
                                        <td>Pending</td>
                                        <td>$78.90</td>
                                        <td>$074852945.090</td>
                                    </tr>
                                    <tr>
                                        <td>78527878</td>
                                        <td>4.00 AM</td>
                                        <td>Pending</td>
                                        <td>$0768.90</td>
                                        <td>$65465.090</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- trading history area end -->
</div>
@endsection
@section('scripts')
<!-- start chart js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<!-- start highcharts js -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<!-- start zingchart js -->
<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
<script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];

</script>
<!-- all line chart activation -->
<script src="{{asset('js/line-chart.js')}}"></script>
<!-- all pie chart -->
<script src="{{asset('js/pie-chart.js') }}"></script>
@endsection
