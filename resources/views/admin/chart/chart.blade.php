@extends("admin.app")
@section("title","圖表 - 會員分析")
@section("content")
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/myall.css">
<link rel="stylesheet" href="/css/sweetalert2.min.css">
<link rel="stylesheet" href="/css/all.min.css">
<div class="container">
    <div class="row my-3">
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-body">
                    <div>
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div>
                        <canvas id="myChart01"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <canvas id="myChart02"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/jquery-3.7.1.min.js"></script>
<script src="/js/sweetalert2.all.min.js"></script>
<script src="/js/chart.js"></script>
<script>
    $(function(){
        $.ajax({
            type: 'GET',
            dataType: "json",
            url: '/admin/chart/getList',
            success: showdata_member_level,
            error: function(){
                alert("error-member-chart-level.php");
            }
        });

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "/admin/chart/getAll",
            success: showdata_member_township,
            error: function(){
                alert("error-member-chart-township.php");
            }
        });

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "/admin/chart/getYear",
            success: showdata_member_created_at,
            error: function(){
                alert("error-member-chart-created_at.php");
            }
        });

        const ctx = document.getElementById('myChart');
    
        mychart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
            }]
        },
        options: {
            scales: {
            y: {
                beginAtZero: true
            }
            }
        }
        });

        const ctx01 = document.getElementById('myChart01');
    
        mychart01 = new Chart(ctx01, {
        type: 'pie',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
            }]
        },
        options: {
            scales: {
            y: {
                beginAtZero: true
            }
            }
        }
        });

        const ctx02 = document.getElementById('myChart02');
    
        mychart02 = new Chart(ctx02, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
            }],
        },
        options: {
            scales: {
            y: {
                beginAtZero: true
            }
            }
        }
        });
        mychart.update();
    });

    function addData(chart, label, newData) {
        chart.data.labels.push(label);
        chart.data.datasets.forEach((dataset) => {
            dataset.data.push(newData);
        });
        chart.update();
    }

    function showdata_member_level(data) {
        // 清空圖表
        mychart.data.labels = [];
        mychart.data.datasets[0].data = [];

        // 更改圖表類型(config)
        mychart.config.type = 'line';

        // 更改圖表名稱
        mychart.data.datasets[0].label = "會員等級分布圖";

        data.data.forEach(function(item){
            if (item.Level == 900){
                mylevel = "管理員"
            }else if (item.Level == 300){
                mylevel = "老主顧"
            }else if (item.Level == 200){
                mylevel = "高級會員"
            }else if (item.Level == 100){
                mylevel = "一般會員"
            }
            mychart.data.labels.push(mylevel);
            mychart.data.datasets[0].data.push(item.Levelnum);
            mychart.update();
        });
    }

    function showdata_member_township (data) {
        // 清空圖表
        mychart01.data.labels = [];
        mychart01.data.datasets[0].data = [];

        // 更改圖表名稱
        mychart01.data.datasets[0].label = "會員居住地分布圖";

        data.data.forEach(function(item){
            mychart01.data.labels.push(item.City);
            mychart01.data.datasets[0].data.push(item.City_Count);
            mychart01.update();
        });
    }

    function showdata_member_created_at(data){
        // 清空圖表
        mychart02.data.labels = [];
        mychart02.data.datasets[0].data = [];

        // 更改圖表名稱
        mychart02.data.datasets[0].label = "會員建立時間分布圖";

        data.data.forEach(function(item){
            mychart02.data.labels.push(item.CreateTime.toString().substring(0, 4) + "年" + item.CreateTime.toString().substring(4) + "月");
            mychart02.data.datasets[0].data.push(item.Created_timeline);
            mychart02.update();
        });
    }
</script>
@endsection