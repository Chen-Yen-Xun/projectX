<style>
    ul li {
        list-style-type: none;
    }
</style>
<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script>
    $(function() {
        $("#tabs").tabs();
    });
</script>
<div class="row">
    <div class="col-md-12">
        <div>
            <div class="row mt-5">
                <div class="display-5 fw-900 text-color02"><span class="font_Audiowide" style="font-size: 48px;">Product</span> - 產品 - 前處理</div>
            </div>
            <div class="row my-5">
                <div id="tabs">
                    <ul>
                        <li><a href="#tab-1" class="fw-900 h4">腐蝕等級</a></li>
                        <li><a href="#tab-2" class="fw-900 h4">鍍鋅鋼</a></li>
                        <li><a href="#tab-3" class="fw-900 h4">鋼鐵</a></li>
                        <li><a href="#tab-4" class="fw-900 h4">鋁</a></li>
                        <li><a href="#tab-5" class="fw-900 h4">鎂</a></li>
                        <li><a href="#tab-6" class="fw-900 h4">銅和黃銅</a></li>
                        <li><a href="#tab-7" class="fw-900 h4">鍍鋁鋅</a></li>
                    </ul>
                    <div id="tab-1">
                        <h2 class="mt-3">腐蝕等級</h2>
                        <ul>
                            <li>等級0: 相對溼度低於60的室內</li>
                            <li>等級1: 室內無暖氣 通風良好的房間</li>
                            <li>等級2: 溫、濕度波動的室內 在內陸氣候下的戶外 遠離海洋和工業</li>
                            <li>等級3: 人口稠密地區或工業區附近 靠近海洋的開闊水域之上</li>
                            <li>等級4: 恆定高濕度 靠近製造或使用化學品的工業區</li>
                        </ul>
                        <h2 class="mt-3">前處理衡量標準</h2>
                        <ul>
                            <li><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x me-3"></i>建議</li>
                            <li><i class="fa-regular fa-thumbs-up text-gym-color-light04 fa-2x me-3"></i>可接受</li>
                            <li><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x me-3"></i>不建議</li>
                            <li><i class="fa-solid fa-check text-gym-color-main01 fa-2x me-3"></i>推薦 通常不要求</li>
                        </ul>
                        <h2 class="mt-3">以上列出常見的金屬素材對應列表，若您有不同素材的需求歡迎聯繫我們。</h2>
                    </div>
                    <div id="tab-2">
                        <h2>鍍鋅鋼</h2>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>前處理方法</th>
                                    <th>腐蝕等級: 0</th>
                                    <th>腐蝕等級: 1</th>
                                    <th>腐蝕等級: 2</th>
                                    <th>腐蝕等級: 3</th>
                                    <th>腐蝕等級: 4</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>清潔/脫脂</td>
                                    <td><i class="fa-regular fa-thumbs-up text-gym-color-light04 fa-2x"></i></td>
                                    <td><i class="fa-regular fa-thumbs-up text-gym-color-light04 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                </tr>
                                <tr>
                                    <td>噴砂</td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-regular fa-thumbs-up text-gym-color-light04 fa-2x"></i></td>
                                    <td><i class="fa-regular fa-thumbs-up text-gym-color-light04 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                </tr>
                                <tr>
                                    <td>磷酸鐵</td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-regular fa-thumbs-up text-gym-color-light04 fa-2x"></i></td>
                                    <td><i class="fa-regular fa-thumbs-up text-gym-color-light04 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                </tr>
                                <tr>
                                    <td>磷酸鋅</td>
                                    <td><i class="fa-solid fa-check text-gym-color-main01 fa-2x"></td>
                                    <td><i class="fa-solid fa-check text-gym-color-main01 fa-2x"></td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                </tr>
                                <tr>
                                    <td>鉻酸鹽</td>
                                    <td><i class="fa-solid fa-check text-gym-color-main01 fa-2x"></td>
                                    <td><i class="fa-solid fa-check text-gym-color-main01 fa-2x"></td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="tab-3">
                        <h2>鋼鐵</h2>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>前處理方法</th>
                                    <th>腐蝕等級: 0</th>
                                    <th>腐蝕等級: 1</th>
                                    <th>腐蝕等級: 2</th>
                                    <th>腐蝕等級: 3</th>
                                    <th>腐蝕等級: 4</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>清潔/脫脂</td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-regular fa-thumbs-up text-gym-color-light04 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                </tr>
                                <tr>
                                    <td>噴砂</td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-regular fa-thumbs-up text-gym-color-light04 fa-2x"></i></td>
                                    <td><i class="fa-regular fa-thumbs-up text-gym-color-light04 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                </tr>
                                <tr>
                                    <td>磷酸鐵</td>
                                    <td><i class="fa-solid fa-check text-gym-color-main01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-regular fa-thumbs-up text-gym-color-light04 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                </tr>
                                <tr>
                                    <td>磷酸鋅</td>
                                    <td><i class="fa-solid fa-check text-gym-color-main01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-check text-gym-color-main01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-regular fa-thumbs-up text-gym-color-light04 fa-2x"></i></td>
                                </tr>
                                <tr>
                                    <td>鉻酸鹽</td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="tab-4">
                        <h2>鋁</h2>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>前處理方法</th>
                                    <th>腐蝕等級: 0</th>
                                    <th>腐蝕等級: 1</th>
                                    <th>腐蝕等級: 2</th>
                                    <th>腐蝕等級: 3</th>
                                    <th>腐蝕等級: 4</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>清潔/脫脂</td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-regular fa-thumbs-up text-gym-color-light04 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                </tr>
                                <tr>
                                    <td>噴砂</td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                </tr>
                                <tr>
                                    <td>磷酸鐵</td>
                                    <td><i class="fa-regular fa-thumbs-up text-gym-color-light04 fa-2x"></i></td>
                                    <td><i class="fa-regular fa-thumbs-up text-gym-color-light04 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                </tr>
                                <tr>
                                    <td>磷酸鋅</td>
                                    <td><i class="fa-regular fa-thumbs-up text-gym-color-light04 fa-2x"></i></td>
                                    <td><i class="fa-regular fa-thumbs-up text-gym-color-light04 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                </tr>
                                <tr>
                                    <td>鉻酸鹽</td>
                                    <td><i class="fa-solid fa-check text-gym-color-main01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="tab-5">
                        <h2>鎂</h2>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>前處理方法</th>
                                    <th>腐蝕等級: 0</th>
                                    <th>腐蝕等級: 1</th>
                                    <th>腐蝕等級: 2</th>
                                    <th>腐蝕等級: 3</th>
                                    <th>腐蝕等級: 4</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>清潔/脫脂</td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                </tr>
                                <tr>
                                    <td>噴砂</td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                </tr>
                                <tr>
                                    <td>磷酸鐵</td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                </tr>
                                <tr>
                                    <td>磷酸鋅</td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                </tr>
                                <tr>
                                    <td>鉻酸鹽</td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-regular fa-thumbs-up text-gym-color-light04 fa-2x"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="tab-6">
                        <h2>銅和黃銅</h2>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>前處理方法</th>
                                    <th>腐蝕等級: 0</th>
                                    <th>腐蝕等級: 1</th>
                                    <th>腐蝕等級: 2</th>
                                    <th>腐蝕等級: 3</th>
                                    <th>腐蝕等級: 4</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>清潔/脫脂</td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                </tr>
                                <tr>
                                    <td>噴砂</td>
                                    <td><i class="fa-solid fa-check text-gym-color-main01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                </tr>
                                <tr>
                                    <td>磷酸鐵</td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                </tr>
                                <tr>
                                    <td>磷酸鋅</td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                </tr>
                                <tr>
                                    <td>鉻酸鹽</td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="tab-7">
                        <h2>鍍鋅鋁</h2>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>前處理方法</th>
                                    <th>腐蝕等級: 0</th>
                                    <th>腐蝕等級: 1</th>
                                    <th>腐蝕等級: 2</th>
                                    <th>腐蝕等級: 3</th>
                                    <th>腐蝕等級: 4</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>清潔/脫脂</td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-regular fa-thumbs-up text-gym-color-light04 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                </tr>
                                <tr>
                                    <td>噴砂</td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-down text-gym-color-light05 fa-2x"></i></td>
                                </tr>
                                <tr>
                                    <td>磷酸鐵</td>
                                    <td><i class="fa-solid fa-check text-gym-color-main01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                </tr>
                                <tr>
                                    <td>磷酸鋅</td>
                                    <td><i class="fa-solid fa-check text-gym-color-main01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                    <td><i class="fa-solid fa-thumbs-up text-gym-color-light01 fa-2x"></i></td>
                                </tr>
                                <tr>
                                    <td>鉻酸鹽</td>
                                    <td><i class="fa-regular fa-thumbs-up text-gym-color-light04 fa-2x"></i></td>
                                    <td><i class="fa-regular fa-thumbs-up text-gym-color-light04 fa-2x"></i></td>
                                    <td><i class="fa-regular fa-thumbs-up text-gym-color-light04 fa-2x"></i></td>
                                    <td><i class="fa-regular fa-thumbs-up text-gym-color-light04 fa-2x"></i></td>
                                    <td><i class="fa-regular fa-thumbs-up text-gym-color-light04 fa-2x"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>