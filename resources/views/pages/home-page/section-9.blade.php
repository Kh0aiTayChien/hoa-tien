<div class="section-9 ">
    <h2 class="d-none">Trải nghiệm 360</h2>
    <div class="position-absolute ">
        <div class="btn btn-outline-light p-1 border-3 me-5 vr360 d-none d-md-block"
             style="border-color: #20715E; transform: translateY(-215%)">
            <div class="btn mulish-extrabold px-4 btn-long"
                 style="background-color: #20715E;
                 font-size: 15px; color: #fff;">
                TRẢI NGHIỆM VR 360
            </div>
        </div>
    </div>
</div>
<div class="section-9-mb ">

    <div class="btn btn-outline-light p-1 border-3 vr360" style="border-color: #20715E; margin-top: 30vh">
        <div class="btn mulish-extrabold px-4 d-md-none"
             style="background-color: #20715E;
                 font-size: 15px; color: #fff;">
            TRẢI NGHIỆM VR 360
        </div>
    </div>

</div>
<style>
    @media only screen and (min-width: 800px) {
        .section-9 {
            background-image: url("/images/homepage/section-9/sec9bg.png");
            background-position: center;
            background-size: cover; /* Đảm bảo hình nền phủ toàn bộ kích thước của phần tử */
            height: 100vh;
            width: 100vw;
            display: flex; /* Để sử dụng các tính năng canh giữa */
            justify-content: center; /* Canh giữa theo chiều ngang */
            align-items: center; /* Canh giữa theo chiều dọc */
        }

        .btn-long {
            width: 300px;
        }

        .section-9-mb{
            display: none;
        }
    }

    @media only screen and (max-width: 800px) {
        .section-9-mb {
            display: block; /* hoặc display: flex; */
            justify-content: center;
            text-align: center;
            width: 100vw; /* Đảm bảo chiếm 100% chiều rộng cửa sổ xem */
            height: 80vh;
            background-image: url("/images/homepage/section-9/sec9t.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }
        .section-9{
            display: none;
        }
    }
</style>
<script>
    $(document).ready(function () {
        $(".vr360").click(function () {
            window.open("https://digisky.net/360/HoaTienParadise/", "_blank");
        });
    });
</script>
