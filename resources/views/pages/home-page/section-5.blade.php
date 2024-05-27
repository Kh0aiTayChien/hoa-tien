<div class="section-5 d-none d-md-block" >
    <h2 class="d-none">Kiến Trúc Dưỡng Chủ Nhân </h2>
    <div class="hall-of-fame5 ">
        <div class="slick-carousel position-relative ">
            <button class="custom-prev-arrow-hall-of-fame5" aria-label="Previous">
                <img src="{{asset('images/arrow/left.png')}}" alt="Previous" class="shadow-effect button-shake"/>
            </button>
            <button class="custom-next-arrow-hall-of-fame5" aria-label="Next">
                <img src="{{asset('images/arrow/right.png')}}" alt="Next" class="shadow-effect button-shake"/>
            </button>

            <div class="carousel-hall-of-fame5" style="padding-top: 24vh">
                <div class="d-flex justify-content-center">

                        <img class="rounded-custom img-fluid shadow-effect"
                             src="{{asset('images/homepage/section-5/1.jpg')}}"
                             alt="hoa-tien-image" loading="lazy"  width="65%">

                </div>
                <div class="d-flex justify-content-center">

                        <img class="rounded-custom img-fluid shadow-effect"
                             src="{{asset('images/homepage/section-5/2.jpg')}}"
                             alt="hoa-tien-image" loading="lazy"  width="65%">

                </div>
                <div class="d-flex justify-content-center">

                        <img class="rounded-custom img-fluid shadow-effect"
                             src="{{asset('images/homepage/section-5/3.jpg')}}"
                             alt="hoa-tien-image" loading="lazy"  width="65%">

                </div>
                <div class="d-flex justify-content-center">

                        <img class="rounded-custom img-fluid shadow-effect"
                             src="{{asset('images/homepage/section-5/4.jpg')}}"
                             alt="hoa-tien-image" loading="lazy"  width="65%">

                </div>
                <div class="d-flex justify-content-center">

                        <img class="rounded-custom img-fluid shadow-effect"
                             src="{{asset('images/homepage/section-5/5.jpg')}}"
                             alt="hoa-tien-image" loading="lazy"  width="65%">

                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $('.carousel-hall-of-fame5').slick({
                    infinite: true,
                    speed: 900,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    prevArrow: $('.custom-prev-arrow-hall-of-fame5'),
                    nextArrow: $('.custom-next-arrow-hall-of-fame5'),
                });
            });
        </script>

    </div>
    <style>
        .slick-list {
            position: relative;
            display: block;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }

        .section-5 .slick-dots {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            margin-top: 0;
        }

        .hall-of-fame .card {
            background: transparent;
        }

        .custom-prev-arrow-hall-of-fame5,
        .custom-next-arrow-hall-of-fame5 {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            scale: 75%;
            z-index: 2;
        }

        .custom-prev-arrow-hall-of-fame5 {
            left:12%;
        }

        .custom-next-arrow-hall-of-fame5 {
            right: 12%;
        }


        .slick-dots button {
            background-color: transparent; /* Màu nền trắng cho dot không active */
            border: 2px solid #fff; /* Viền vàng cho dot không active */
            color: transparent; /* Màu chữ xanh cho dot không active */
            padding: 5px;
            width: 12px; /* Đường kính của dot */
            height: 12px; /* Đường kính của dot */
            border-radius: 50%; /* Hình dạng tròn cho dot */
            cursor: pointer;
            margin-right: 7px;
        }

        .slick-dots .slick-active button {
            background-color: #fff; /* Màu nền vàng cho dot active */
            border-color: #fff; /* Viền vàng cho dot active */
            color: transparent; /* Màu chữ trắng cho dot active */
        }
    </style>


</div>
<style>
    .section-5 {
        display: block;
        justify-content: center;
        text-align: center;
        width: 100vw;
        height: 100vh;
        background-image: url("/images/homepage/section-5/slide1.webp");
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>
