@include('layouts.head')
<div class="nav-head d-flex  justify-content-between align-items-center"
     style="width: 1500px ; margin: 20px auto; margin-bottom: 50px">
    <div class="d-flex justify-content-between" style="width: 1200px">
        <div class="menu-head"> VÌ SAO CHỌN CHÚNG TÔI</div>
        <div class="menu-head"> CƠ SỞ KHÁM</div>
        <div class="menu-head"> CÁC GÓI KHÁM</div>
        <div class="menu-head"> QUY TRÌNH KHÁM SỨC KHỎE</div>
        <div class="menu-head"> TRẢI NGHIỆM KHÁCH HÀNG</div>
    </div>
    <div>
        <a href="{{route('login')}}" class="btn btn-primary">Login</a>
        <a href="{{route('register')}}" class="btn btn-warning">Sign up</a>
    </div>

</div>
<div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel"
     style="margin-bottom: 20px">
    <div class="carousel-indicators">
        <button
            type="button"
            data-mdb-target="#carouselBasicExample"
            data-mdb-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
        ></button>
        <button
            type="button"
            data-mdb-target="#carouselBasicExample"
            data-mdb-slide-to="1"
            aria-label="Slide 2"
        ></button>
        <button
            type="button"
            data-mdb-target="#carouselBasicExample"
            data-mdb-slide-to="2"
            aria-label="Slide 3"
        ></button>
    </div>

    <!-- Inner -->
    <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item active">
            <img src="assets/hp2.png" class="d-block w-100" alt="Sunset Over the City"/>
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <img src="assets/banner.jpg" class="d-block w-100" alt="Canyon at Nigh"/>
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <img src="assets/homepage.jpg" class="d-block w-100" alt="Cliff Above a Stormy Sea"/>
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
        </div>
    </div>
    <!-- Inner -->

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
        <i class="fas fa-backward"></i>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
        <i class="fas fa-forward"></i>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Carousel wrapper -->
<div class="Main">

    <div id="container">
        <div>
            <img src="{{ asset("assets/bv1.png") }}"/>
            <p>
                Trang thiết bị hiện đại, nhập khẩu đồng bộ từ Nhật Bản, Hoa Kỳ
            </p>
        </div>
        <div>
            <img src="assets/bv2.png"/>
            <p>
                120 chuyên gia y tế đầu ngành, giàu kinh nghiệm
            </p>
        </div>
        <div>
            <img src="assets/bv3.png"/>
            <p>
                Danh mục khám, tầm soát thiết kế khoa học
            </p>
        </div>
    </div>
    <div id="container">
        <div>
            <img src="assets/bv4.png"/>
            <p>
                Thủ tục nhanh gọn, nhân viên hướng dẫn tận tình, chu đáo
            </p>
        </div>
        <div>
            <img src="assets/bv5.png"/>
            <p>
                Buffet miễn phí tại nhà hàng Hong Ngoc Eatery sang trọng
            </p>
        </div>
        <div>
            <img src="assets/bv6.jpg"/>
            <p>
                Cơ sở vật chất đầy đủ tiện nghi, rộng rãi, khang trang
            </p>
        </div>
    </div>
</div>
<div class="coso" ;>
    <div>
        CƠ SỞ KHÁM
    </div>
    <div>
        Đáp ứng nhu cầu KSK định kỳ nhanh chóng, thuận tiện

    </div>

</div>
<div class="Main" style="margin-top: 20px" ;>
    <div>

        <div id="container1">
            <div class="Adress">
                <img src="assets/pk1.jpg"/>
                <div class="Infor">
                    <p>
                        BVĐK HỒNG NGỌC PHÚC TRƯỜNG MINH
                    </p>
                    <p>
                        Số 8 Châu Văn Liêm, Nam Từ Liêm, Hà Nội
                    </p>
                </div>
            </div>
            <div class="Adress">
                <img src="assets/pk2.jpg"/>
                <div class="Infor">
                    <p>
                        BỆNH VIỆN ĐA KHOA HỒNG NGỌC
                    </p>
                    <p>
                        55 Yên Ninh, Trúc Bạch, Ba Đình, Hà Nội
                    </p>
                </div>

            </div>
        </div>
        <div id="container1">
            <div class="Adress">
                <img src="assets/pk3.jpg"/>
                <div class="Infor">
                    <p>
                        PHÒNG KHÁM HỒNG NGỌC SAVICO
                    </p>
                    <p>
                        Savico Megamall Long Biên, Hà Nội
                    </p>
                </div>
            </div>
            <div class="Adress">
                <img src="assets/pk4.jpg"/>
                <div class="Infor">
                    <p>
                        PHÒNG KHÁM HỒNG NGỌC KEANGNAM
                    </p>
                    <p>
                        Tầng 10 tòa Keangnam, Landmark 72, Hà Nội
                    </p>
                </div>


            </div>
        </div>
    </div>
</div>

<div class="Nav">
    <div class="P1">
        <p>
            GÓI KHÁM SỨC KHỎE ĐỊNH KỲ
        </p>
    </div>
    <div class="Pro">

        <div class="P">
            <span>
                Gói KSK cơ bản
            </span>
        </div>
        <div class="P">
            <span>
                Gói KSK nâng cao
            </span>
        </div>
        <div class="P">
            <span>
                Gói KSK chuyên sâu
            </span>
        </div>
        <div class="P">
            <span>
                Gói KSK VVIP
            </span>
        </div>
        <div class="P">
            <span>
                Gói KSK nhi
            </span>
        </div>
    </div>
</div>
<div class="container" style="height: 450px">
    <div class="row">
        <div class="col-12 row justify-content-between justify-content-center">
            <div class="col-3 comment" id="r3">
                <p>
                    “Mặc dù ở xa nhưng tôi vẫn chọn Hồng Ngọc để khám định kỳ mỗi năm bởi tôi tin tưởng vào chuyên môn
                    của bác sĩ bệnh viện. Đặc biệt, khi có vấn đề gì thắc mắc, tôi vẫn gọi điện cho bác sĩ đều được tư
                    vấn rất tận tình”.
                </p>
                <h5 class="text-center">
                    Cô Thu Hà, Yên Bái
                </h5>
                <div class="Avatar">
                    <img src="assets/Avatars/bs1.png"/>
                </div>

            </div>
            <div class="col-4 comment" id="col-center">
                <i class="fas fa-quote-left"></i>
                <p>
                    “Tôi rất yên tâm khi lựa chọn khám sức khỏe định kỳ tại Hồng Ngọc bởi dịch vụ y tế ở đây rất chuyên
                    nghiệp, nhân viên ai cũng tận tình, vui vẻ từ lễ tân, y tá đến các bác sĩ. Đặc biệt, bác sĩ thăm
                    khám rất cẩn thận, tư vấn cặn kẽ về kết quả".
                </p>
                <h5 class="text-center">
                    Chị Minh Anh, Hà Nội
                </h5>
                <div class="Avatar">
                    <img src="assets/Avatars/bs2.png"/>
                </div>

            </div>
            <div class="col-3 comment" id="r3">
                <p>
                    “Nhiều năm nay tôi đều khám sức khỏe định kỳ tại Bệnh viện Hồng Ngọc. Không gian thăm khám sạch sẽ,
                    thoải mái. Bác sĩ tận tâm, chu đáo. Nói chung, tôi rất hài lòng về chất lượng dịch vụ y tế của bệnh
                    viện.”
                </p>
                <h5 class="text-center">
                    Anh Thái Long, Quảng Ninh
                </h5>
                <div class="Avatar">
                    <img src="assets/Avatars/bs3.png"/>
                </div>

            </div>
        </div>

    </div>
</div>
<div class="footer">
    <div class="row" style="padding-top: 40px">
        <div class="col-2">

        </div>
        <div class="col-8">
            <div class="row">
                <div class="col-2" style="border-right: 6px solid #fff; padding-right: 0px">
                    <img src="assets/logo.png" class="d-block" style="margin: 0 auto"/>

                </div>
                <div class="col-6" style="padding-left: 30px">
                    <div class="b1">
                        KHÁM SỨC KHỎE ĐỊNH KỲ
                    </div>
                    <div class="b2">
                        BỆNH VIỆN ĐA KHOA HỒNG NGỌC
                    </div>
                    <div class="b3">
                        <div class="a2>"
                             Hotline
                    </div>
                    <div class="a2" style="border-radius: 35px;
    background-image: linear-gradient(rgb(253, 251, 251), rgb(234, 237, 238));
    background-color: initial;
    background-size: initial;
    background-origin: initial;
    background-position: initial;
    background-repeat: initial;
    background-attachment: initial;
    color:#18A049;
    width: 230px;
    padding: 3px 8px;">
                        0932 232 016 - 0911 908 856
                    </div>

                </div>

                <div class="a2">
                    Email: khamsuckhoecanhan@hongngochospital.vn

                </div>


            </div>
        </div>
        <div class="col-4" style="width: 200px; height: 74px">

        </div>
    </div>
    <div class="row" style="margin-top: 80px; border-bottom: 2px solid #fff; padding-bottom: 30px">
        <div class="col-4">
            <div class="a1">
                BỆNH VIỆN ĐA KHOA HỒNG NGỌC - PHÚC TRƯỜNG MINH
            </div>
            <div class="a2">
                <i class="fas fa-map-marker-alt"></i>
                Số 8 Châu Văn Liêm, Nam Từ Liêm, Hà Nội

            </div>
            <div class="a2">
                <i class="fas fa-phone-alt"></i>
                +84-24 7300 8866 ext *0

            </div>

        </div>
        <div class="col-4">
            <div class="a1">
                BỆNH VIỆN ĐA KHOA HỒNG NGỌC
            </div>
            <div class="a2">
                <i class="fas fa-map-marker-alt"></i>
                55 Yên Ninh, Trúc Bạch, Ba Đình, Hà Nội

            </div>
            <div class="a2">
                <i class="fas fa-phone-alt"></i>
                +84-24 3927 5568 ext*0

            </div>
            <div class="a2">
                <i class="fas fa-envelope"></i>
                info@hongngochospital.com
            </div>
            <div class="a2">
                <i class="fas fa-globe"></i>
                Website: hongngochospital.vn

            </div>

        </div>
        <div class="col-4">
            <div class="a1">
                PHÒNG KHÁM HỒNG NGỌC SAVICO

            </div>
            <div class="a2">
                <i class="fas fa-map-marker-alt"></i>
                Tầng 3, tòa B, Savico Megamall, 07- 09 Nguyễn Văn Linh, Long Biên, Hà Nội

            </div>
            <div class="a2">
                <i class="fas fa-phone-alt"></i>
                +84-24 3927 5568 ext*5

            </div>

        </div>
    </div>
</div>
</div>
<div class="col-2">

</div>
</div>


</div>
@include('layouts.footer')

<style type="text/css">
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
    }

    .P {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #container {
        display: flex;
        justify-content: space-between;
    }

    .Main {
        width: 900px;
        margin: 0 auto;

    }

    .Main #container div {
        width: 285px;
    }

    .Main #container img {
        width: 100%;
        object-fit: cover;
        border-top-right-radius: 20px;
        border-bottom-left-radius: 20px;
    }

    #container > div:nth-child(3) > img {
        height: 214px;
    }

    #container:first-child {
        margin-bottom: 20px;
    }

    #container p {
        font-weight: bold;
        line-height: 1.6;
        color: rgb(24, 160, 73);
        text-align: center;
    }

    #container1 {
        display: flex;
        justify-content: space-between;
    }

    #container1 div {
        width: 440px;
    }

    #container1 img {
        width: 100%;
        border-radius: 20px;

    }

    #container1 div {

        margin-bottom: 20px;
    }

    .Adress {
        position: relative;

    }

    .Infor {
        position: absolute;
        z-index: 10;
        bottom: -15px;
        left: 0;
        background-color: rgba(25, 160, 74, 0.6);
        border-radius: 20px;
        color: white;
        padding-left: 10px;
        width: 430px !important;
    }

    #container1 > div:nth-child(2) > img {
        height: 293px;
    }

    .P1 {
        width: 300px;
        margin: 0 auto;
        font-weight: bold;
        color: rgb(0, 168, 79);
    }

    .Pro {
        display: flex;
        justify-content: space-between;
        width: 1200px;
        margin: 0 auto;

    }

    .P {
        width: 200px;
        height: 50px;
        border-radius: 5px;
        box-shadow: rgb(0, 0, 0) 0px 10px 20px -15px;
        background-color: white;
        text-align: center;
        font-weight: bold;
        color: rgb(0, 168, 79);
    }

    .Nav {
        background-color: #8fbc8f75;
        padding: 30px 0;

    }

    body > div.container > div > div {
        margin: 0 auto;
    }

    .Avatar img {
        width: 100%;
        border-radius: 50%;
        border-width: 5px;
        border-style: solid;
    }

    .Avatar {
        width: 100px;
        margin: 0 auto;
        position: absolute;
        bottom: -80px;
        margin-left: auto;
        margin-right: auto;
        left: 0;
        right: 0;
        text-align: center;
    }

    .comment {
        position: relative;
        border-radius: 14px;
        box-shadow: rgba(0, 0, 0, 0.4) 0px 15px 20px -20px;
        margin-top: 100px;


    }

    .text-center {
        text-align: center !important;
        padding-bottom: 30px;
        font-size: 14px;
        font-weight: bold;

    }

    #col-center {
        background-color: rgba(0, 168, 79, 0.8);
        color: #fff;
        margin-top: 45px;
        height: 220px;

    }

    #col-center > i {
        display: flex;
        justify-content: center;
        padding: 10px;
    }

    #col-center .text-center {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    #r3 .Avatar {
        color: #fff;
    }

    .menu-head {
        font-size: 16px;
        font-weight: bold;
        line-height: 1.6;
        color: rgb(0, 0, 0);
        text-align: center;
    }

    .coso {
        height: 100px;
        background-color: rgb(0, 168, 79);
        color: #fff;
        line-height: 1.2;
        color: rgb(255, 255, 255);
        text-align: center;
        font-size: 38.33px;


    }

    .coso div:first-child {
        padding-top: 10px;
        font-family: VVJXKysgLSBVUldESUtQmxhYsubRm;
        font-weight: bold;
    }

    .coso div:last-child {
        font-size: 20px;
        margin-top: 15px;
        color: #3f3f3f;
    }

    .footer {
        height: 515px;
        width: 100%;
        background-image: url("assets/footer.png");
        background-size: cover;

    }
    .a1 {
        color: #fff;
        font-size: 18px;
        font-family: UZOLVNlZlIFVJIEJvbGQudHRm;
        font-weight: bold;
        line-height: 1.6;
    }
    .a2 {
        color: #fff;
    }
    .b1 {
        color: #fff;
        font-size: 25px;
        font-family: UZOLVNlZlIFVJLnRZg;
        line-height: 1.6;
        color: rgb(255, 255, 255);
    }
    .b2 {
        color: #fff;
        font-size: 28px;
        font-family: UZOLVNlZlIFVJIEJvbGQudHRm;
        font-weight: bold;
        line-height: 1.6;
        color: rgb(255, 255, 255);

    }
    .a1, .a2 {
        margin-top: 10px
    }
</style>



