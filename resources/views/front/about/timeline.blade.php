<style>
    .timeline-arrow01{
        position: relative;
    }
    .timeline-arrow01::before{
        position: absolute;
        content: url('images/front/about/Arrow_1.png');
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        z-index: 100;
    }
    .timeline-circle01{
        position: relative;
    }
    .timeline-circle01::before{
        position: absolute;
        content: url('images/front/about/timelinecircle_01.png');
        top: 500%;
        left: 50%;
        transform: translateX(-50%);
        z-index: 200;
    }
    .timeline-circle02{
        position: relative;
    }
    .timeline-circle02::before{
        position: absolute;
        content: url('images/front/about/timelinecircle_02.png');
        top: 500%;
        left: 50%;
        transform: translateX(-50%);
        z-index: 200;
    }
    .timeline-circle03{
        position: relative;
    }
    .timeline-circle03::before{
        position: absolute;
        content: url('images/front/about/timelinecircle_03.png');
        top: 500%;
        left: 50%;
        transform: translateX(-50%);
        z-index: 200;
    }
    .timeline-text01{
        background-color: rgba(0, 0, 0, 0.6);
        border-radius: 5px;
        top: 180%;
        margin: 10px;
        padding: 20px;  
        color: var(--pccolorminor03);
    }
    .timeline-text02{
        background-color: rgba(0, 0, 0, 0.6);
        border-radius: 5px;
        top: 180%;
        margin: 10px;
        padding: 20px;  
        color: var(--pccolorminor03);
    }
    .timeline-text03{
        background-color: rgba(0, 0, 0, 0.6);
        border-radius: 5px;
        top: 180%;
        margin: 10px;
        padding: 20px;  
        color: var(--pccolorminor03);
    }
</style>
<div class="row">
    <div class="col-md-12">
        <div>
            <div class="row my-5">
                <div class="display-5 fw-900 text-pc-color-main01"><span class="font_Audiowide" style="font-size: 48px;">About us</span> - 關於我們</div>
            </div>
            <div class="row">
                <div style="height: 10vh;">
                    <div class="timeline-arrow01"></div>
                </div>  
                <div class="timeline-circle01"></div>
                <div class="col-md-3 offset-md-8">
                    <h1 class="timeline-text01">1985年<br>創立於臺中縣<br>太平鄉長龍路</h1>
                </div>
                <div style="height: 10vh;">
                    <div class="timeline-arrow01"></div>
                </div>
                <div class="timeline-circle02"></div>
                <div class="col-md-3 offset-md-1">
                    <h1 class="timeline-text02">1995年<br>遷址於臺中縣<br>太平鄉民生路</h1>
                </div>
                <div style="height: 10vh;">
                    <div class="timeline-arrow01"></div>
                </div>
                <div class="timeline-circle03"></div>
                <div class="col-md-3 offset-md-8">
                    <h1 class="timeline-text03">2010年<br>於台中市<br>太平工業區<br>設立銷售據點<br>及實驗展示間</h1>
                </div>
                <div class="timeline-arrow01"></div>
            </div>
        </div>
    </div>  
</div>