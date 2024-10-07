@extends("admin.app")
@section("title","地圖 - 會員分布")
@section("content")
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/all.min.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
<link rel="stylesheet" href="/css/MarkerCluster.css">
<link rel="stylesheet" href="/css/myall.css">
<style>
    #regionList{
        height: 50vh;
        overflow-y: scroll;
    }
    .marker-cluster-large{
        background-color: rgba(255, 0, 0, 0.7);
        color: aliceblue;
        border-radius: 50%;
        font-size: 25px;  
        text-align: center;      
    }
    .marker-cluster-medium{
        background-color: rgba(255, 0, 0, 0.5);
        color: aliceblue;
        border-radius: 50%;
        justify-content: center;
        align-items: center;  
        font-size: 25px;  
        text-align: center;  
    }
    .marker-cluster-small{
        background-color: rgba(255, 0, 0, 0.3);
        color: aliceblue;
        border-radius: 50%;
        justify-content: center;
        align-items: center;  
        font-size: 25px;  
        text-align: center;  
    }
</style>

<div class="container-fluid">
    <div class="row" style="height: 70vh;">
        <div class="col-3">
            <select name="city" id="city" class="form-select form-select-lg mt-3">
                <option value="" disabled selected class="text-center">請選擇縣市名稱</option>
                <option value="台中市">台中市</option>
            </select>

            <select name="region" id="region" class="form-select form-select-lg mt-3">
                <option value="" disabled selected class="text-center">請選擇鄉鎮區名稱</option>
                <option value="西屯區">西屯區</option>
            </select>

            <ul class="list-group mt-3" id="regionList">
                <a href="javascript:move_to_there" data-x="" data-y="" style="text-decoration: none;" id="hotel_button">
                    <li class="list-group-item d-flex justify-content-between align-items-center my-1">
                        <div>
                            <div class="h3 fw-900">客戶名稱</div>
                            <div class="h4">地址:</div>
                            <div class="h4">電話:</div>
                        </div>
                        <span class="badge bg-primary rounded-pill"><i class="fa-solid fa-star text-info"></i></span>
                    </li>
                </a>
            </ul>
        </div>
        <div class="col-9">
            <div id="map" style="height: 71vh;"></div>
        </div>
    </div>
</div>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/jquery-3.7.1.min.js"></script>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script src="/js/leaflet.markercluster.js"></script>
<script>
    var CityCountyData = [];
    var ClientData = [];
    var citySelected;
    var regionSelected;
    var map;
    var markers;
    
    $(function (){
        // 產生地圖 
        map = L.map("map").setView([24.171557, 120.609475], 12);

            L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution:
                '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
            }).addTo(map);

            markers = new L.markerClusterGroup().addTo(map);

        // 載入縣市鄉鎮區資料
        $.ajax({
            type: "GET",
            url: "/js/CityCountyData.json",
            dataType: "json",
            async: false,
            success: function(data){
                CityCountyData = data;
            },
            error: function () {
                alert("error-js/CityCountyData.json");
            }
        });

        // 載入會員資料
        $.ajax({
            type: "GET",
            url: "/admin/map/getCoordinate",
            dataType: "json",
            async: false,
            success: function(data){
                ClientData = data.data;
            },
            error: function () {
                alert("error-js/hotel_C_f.json");
            }
        });

        // 產生縣市選單
        $("#city").empty();
        $("#city").append('<option value="" disabled selected class="text-center">請選擇縣市名稱</option>');
        CityCountyData.forEach(function (item) {
            var strHTML = '<option value="' + item.CityName + '">' + item.CityName + '</option>';
            $("#city").append(strHTML);
        });

        // 監聽縣市選單, 產生鄉鎮區選單
        $("#city").change(function(){
            citySelected = $(this).val();

            // 渲染鄉鎮區選單
            $("#region").empty();
            $("#region").append('<option value="" disabled selected class="text-center">請選擇鄉鎮區名稱</option>');
            CityCountyData.forEach(function(item){
                if(item.CityName == citySelected){
                    item.AreaList.forEach(function(item){
                        var strHTML = '<option value="' + item.AreaName + '">' + item.AreaName + '</option>';
                        $("#region").append(strHTML);
                    });
                }
            });
        });

        // 監聽鄉鎮區選單
        $("#region").change(function(){
            regionSelected = $(this).val();

            $("#regionList").empty();
            removeMarker(); // 清除所有地圖標記座標
            var counter = 0;
            ClientData.forEach(function(item){
                if(item.City == citySelected && item.Town == regionSelected){
                    var memberRankColor;
                    switch(item.Level){
                        case 100:
                            memberRankColor = "success";
                            break;
                        case 200:
                            memberRankColor = "primary";
                            break;
                        case 300:
                            memberRankColor = "danger";
                            break;
                        case 900:
                            memberRankColor = "warning";
                            break;
                    }
                    var strHTML = '<a href="javascript:move_to_there(' + item.CordY + ', ' + item.CordX + ')" data-x="' + item.CordY + '" data-y="' + item.CordX + '" style="text-decoration: none;" id="hotel_button"><li class="list-group-item d-flex justify-content-between align-items-center my-1"><div><div class="h3 fw-900">' + item.Username + '</div><div class="h4">地址: ' + item.Address + '</div><div class="h4">電話: ' + item.Tel + '</div></div><span class="badge bg-primary rounded-pill"><i class="fa-solid fa-star text-' + memberRankColor + '"></i></span></li></a>';
                    $("#regionList").append(strHTML);
                    var popupHTML = '<div class="card"><div class="card-body"><div class="h4 fw-900">' + item.Username + '</div><div class="h5">地址: ' + item.Address + '</div><div class="h5">電話: ' + item.Tel + '</div><div class="h5"><span class="badge bg-primary rounded-pill"><i class="fa-solid fa-star text-' + memberRankColor + '"></i></span></div></div></div>'

                    markers.addLayer(L.marker([item.CordY, item.CordX]).bindPopup(popupHTML));
                    
                    // 移動地圖
                    counter++;
                    if (counter == 1) {
                        map.panTo([item.CordY, item.CordX]);
                    }
                }
            });
        });
    });

    // 清除所有的地圖標記座標
    function removeMarker(){
        // 更新後語法 marker上有layer
        markers.eachLayer(function(layer){
            if(layer instanceof L.Marker){
                markers.removeLayer(layer);
            }
        });
    }

    // 點擊左側按鈕移動到指定座標
    function move_to_there(x, y){
        removeMarker_01();

        map.setZoom(17).panTo([x, y]);
        
    }

    // 清除所有的地圖標記座標(move_to_there專用)
    function removeMarker_01(){
        map.eachLayer(function(layer){
            if(layer instanceof L.Marker){
                map.removeLayer(layer);
            }
        });
    }

</script>
@endsection