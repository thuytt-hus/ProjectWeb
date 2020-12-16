@extends('admin.layouts.glance')
@section('title')
    Trang quản trị viên
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 widget widget1">
                <div class="r3_counter_box">
                    <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
                    <div class="stats">
                        <h5><strong>{{isset($countpartner) ? $countpartner : '12'}}</strong></h5>
                        <span>Nhà tuyển dụng</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 widget">
                <div class="r3_counter_box">
                    <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
                    <div class="stats">
                        <h5><strong>{{isset($countscholar) ? $countscholar : '12'}}</strong></h5>
                        <span>Học giả</span>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <div id="piechart_partner" style="height:350px;width: 90%;"></div>

            </div>
            <div class="col-sm-6 col-md-6">
                <div id="piechart_scholar" style="height:350px;width: 90%;"></div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages': ['corechart']});
        google.charts.setOnLoadCallback(drawChartPartner);
        google.charts.setOnLoadCallback(drawChartScholar);

        function drawChartPartner() {
            var analytics = <?php echo $partner; ?>;
            var data = google.visualization.arrayToDataTable(analytics);

            var options = {
                title: 'Đơn vị giới thiệu nhà tuyển dụng',
                is3D: false,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_partner'));

            chart.draw(data, options);
        }

        function drawChartScholar() {
            var analytics = <?php echo $scholar; ?>;
            var data = google.visualization.arrayToDataTable(analytics);

            var options = {
                title: 'Đơn vị giới thiệu học giả',
                is3D: false,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_scholar'));

            chart.draw(data, options);
        }
    </script>
@endsection
