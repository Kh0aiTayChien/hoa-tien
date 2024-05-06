<div class="section-9 ">
    <div class="position-absolute ">
        <div class="btn btn-outline-info p-1 border-3 ms-3 vr360" style="border-color: #20715E; transform: translateY(-215%)">
            <div class="btn mulish-extrabold px-4 btn-long"
                 style="background-color: #20715E;
                 font-size: 15px; color: #fff;">
                TRẢI NGHIỆM VR 360
            </div>
        </div>
    </div>
</div>
<style>
    .section-9{
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
</style>
<script>
    $(document).ready(function(){
        $(".vr360").click(function(){
            window.open("https://digisky.net/360/HoaTienParadise/", "_blank");
        });
    });
</script>
