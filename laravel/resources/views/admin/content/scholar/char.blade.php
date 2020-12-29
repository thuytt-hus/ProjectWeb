@extends('admin.layouts.glance')
@section('title')
    Thống kê
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-1 col-md-1"></div>
            <div class="col-sm-10 col-md-10">
                <div id="barchart_scholar" style="height:350px;width: 90%;"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-1 col-md-1"></div>
            <div class="col-sm-10 col-md-10">
                <div id="linecharchart_scholar" style="height:350px;width: 90%;"></div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages': ['corechart']});
        google.charts.setOnLoadCallback(drawChartPartner);
        google.charts.setOnLoadCallback(drawChart);

        function drawChartPartner() {
            var analytics = <?php echo $partner; ?>;
            var data = google.visualization.arrayToDataTable(analytics);

            var options = {
                title: 'Đơn vị giáo dục',
                is3D: false,
            };

            var chart = new google.visualization.PieChart(document.getElementById('barchart_scholar'));

            chart.draw(data, options);
        }
        function drawChart() {
            var analytics = <?php echo $user; ?>;
            var data = google.visualization.arrayToDataTable(analytics);
            var options = {
                title: 'Số người dùng trong tháng',
                curveType: 'function',
                legend: { position: 'bottom' }
            };
            var chart = new google.visualization.LineChart(document.getElementById('linecharchart_scholar'));
            chart.draw(data, options);

        }

    </script>
@endsection
