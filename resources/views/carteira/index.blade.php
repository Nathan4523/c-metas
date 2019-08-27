@extends('layouts.app')
@section('content')
<!-- sales report area start -->
<div class="sales-report-area mt-5 mb-5">
    <div class="row">
        <div class="col-md-4">
            <div class="single-report mb-xs-30">
                <div class="s-report-inner pr--20 pt--30 mb-3">
                    <div class="icon"><i class="fas fa-coins"></i></div>
                    <div class="s-report-title d-flex justify-content-between">
                        <h4 class="header-title mb-0">Tesouro IPCA</h4>
                        <p>24 H</p>
                    </div>
                    <div class="d-flex justify-content-between pb-2">
                        <h2>$ 4567809,987</h2>
                        <span>- 45.87</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single-report mb-xs-30">
                <div class="s-report-inner pr--20 pt--30 mb-3">
                    <div class="icon"><i class="fas fa-city"></i></div>
                    <div class="s-report-title d-flex justify-content-between">
                        <h4 class="header-title mb-0">HGLG11</h4>
                        <p>24 H</p>
                    </div>
                    <div class="d-flex justify-content-between pb-2">
                        <h2>$ 4567809,987</h2>
                        <span>- 45.87</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single-report">
                <div class="s-report-inner pr--20 pt--30 mb-3">
                    <div class="icon"><i class="far fa-chart-bar"></i></div>
                    <div class="s-report-title d-flex justify-content-between">
                        <h4 class="header-title mb-0">SQIA3</h4>
                        <p>24 H</p>
                    </div>
                    <div class="d-flex justify-content-between pb-2">
                        <h2>$ 4567809,987</h2>
                        <span>- 45.87</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="btn_cicle_create">
    <a href="{{route('carteira.create')}}">
        <i class="fas fa-plus-circle"></i>
    </a>
</div>  
<!-- sales report area end -->
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
