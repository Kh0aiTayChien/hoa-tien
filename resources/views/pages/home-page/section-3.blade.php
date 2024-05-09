<div class="section-3 " >
    <div class="hall-of-fame ">
        <div class="slick-carousel position-relative ">
            <button class="custom-prev-arrow-hall-of-fame" aria-label="Previous">
                <img src="{{asset('images/arrow/left.png')}}" alt="Previous" class="shadow-effect button-shake"/>
            </button>
            <button class="custom-next-arrow-hall-of-fame" aria-label="Next">
                <img src="{{asset('images/arrow/right.png')}}" alt="Next" class="shadow-effect button-shake"/>
            </button>

            <div class="carousel-hall-of-fame" style="padding-top: 19vh">
                <div class="d-flex justify-content-center">
                    <div class="card rounded-custom me-1 border-0"
                         style="width:65%; height: 80vh">
                        <img class="rounded-custom img-fluid shadow-effect"
                             src="{{asset('images/homepage/section-3/1.png')}}"
                             alt="">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="card rounded-custom me-1 border-0"
                         style="width:65%; height: 80vh">
                        <img class="rounded-custom img-fluid shadow-effect"
                             src="{{asset('images/homepage/section-3/2.png')}}"
                             alt="">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="card rounded-custom me-1 border-0"
                         style="width:65%; height: 80vh">
                        <img class="rounded-custom img-fluid shadow-effect"
                             src="{{asset('images/homepage/section-3/3.png')}}"
                             alt="">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="card rounded-custom me-1 border-0"
                         style="width:65%; height: 80vh">
                        <img class="rounded-custom img-fluid shadow-effect"
                             src="{{asset('images/homepage/section-3/4.png')}}"
                             alt="">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="card rounded-custom me-1 border-0"
                         style="width:65%; height: 80vh">
                        <img class="rounded-custom img-fluid shadow-effect"
                             src="{{asset('images/homepage/section-3/5.png')}}"
                             alt="">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="card rounded-custom me-1 border-0"
                         style="width:65%; height: 80vh">
                        <img class="rounded-custom img-fluid shadow-effect"
                             src="{{asset('images/homepage/section-3/6.png')}}"
                             alt="">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="card rounded-custom me-1 border-0"
                         style="width:65%; height: 80vh">
                        <img class="rounded-custom img-fluid shadow-effect"
                             src="{{asset('images/homepage/section-3/7.png')}}"
                             alt="">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="card rounded-custom me-1 border-0"
                         style="width:65%; height: 80vh">
                        <img class="rounded-custom img-fluid shadow-effect"
                             src="{{asset('images/homepage/section-3/8.png')}}"
                             alt="">
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $('.carousel-hall-of-fame').slick({
                    infinite: true,
                    speed: 900,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    prevArrow: $('.custom-prev-arrow-hall-of-fame'),
                    nextArrow: $('.custom-next-arrow-hall-of-fame'),
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


        .hall-of-fame .card {
            background: transparent;
        }

        .custom-prev-arrow-hall-of-fame,
        .custom-next-arrow-hall-of-fame {
            position: absolute;
            top: 55%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            scale: 75%;
            z-index: 2;
        }

        .custom-prev-arrow-hall-of-fame {
            left:12%;
        }

        .custom-next-arrow-hall-of-fame {
            right: 12%;
        }

        .section-3 .slick-dots {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            margin-top: -3rem;
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
        .rounded-custom {
            border-radius: 9px
        }
    </style>




{{--    <div class="slick-carousel position-relative">--}}
{{--        <button class="custom-prev-arrow-1 product-pc-title" aria-label="Previous">--}}
{{--            <img src="{{asset('images/arrow/left.png')}}" alt="Previous" class=" button-shake"/>--}}
{{--        </button>--}}
{{--        <button class="custom-next-arrow-1  product-pc-title" aria-label="Next">--}}
{{--            <img src="{{asset('images/arrow/right.png')}}" alt="Next" class=" button-shake"/>--}}
{{--        </button>--}}

{{--        <div class="carousel-courses-1">--}}
{{--            <div class="d-flex justify-content-center">--}}
{{--                   a--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            $('.carousel-courses-1').slick({--}}
{{--                infinite: true,--}}
{{--                speed: 900,--}}
{{--                slidesToShow: 1,--}}
{{--                slidesToScroll: 1,--}}
{{--                prevArrow: $('.custom-prev-arrow-1'),--}}
{{--                nextArrow: $('.custom-next-arrow-1'),--}}
{{--                responsive: [--}}
{{--                    {--}}
{{--                        breakpoint: 1324,--}}
{{--                        settings: {--}}
{{--                            slidesToShow: 1,--}}
{{--                            slidesToScroll: 1--}}
{{--                        }--}}
{{--                    },--}}
{{--                    {--}}
{{--                        breakpoint: 800,--}}
{{--                        settings: {--}}
{{--                            slidesToShow: 1,--}}
{{--                            slidesToScroll: 1,--}}
{{--                        }--}}
{{--                    },--}}
{{--                    {--}}
{{--                        breakpoint: 480,--}}
{{--                        settings: {--}}
{{--                            slidesToShow: 1,--}}
{{--                            slidesToScroll: 1,--}}
{{--                            variableWidth: false,--}}
{{--                        }--}}
{{--                    }--}}
{{--                ]--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}

</div>
<style>
    .section-3 {
        display: block;
        justify-content: center;
        text-align: center;
        width: 100vw;
        height: 100vh;
        background-image: url("/images/homepage/section-3/background.png");
        background-size: cover;
        background-repeat: no-repeat;
    }
    @media only screen and (max-width: 800px) {
        .section-3 {
            display: block; /* hoặc display: flex; */
            justify-content: center;
            text-align: center;
            width: 100%; /* Đảm bảo chiếm 100% chiều rộng cửa sổ xem */
            height: auto; /* Chiều cao tự động điều chỉnh */
            background-image: url("/images/homepage/section-3/sec3.jpg");
            background-size: 100% auto; /* Chiều rộng 100%, chiều cao tự động */
            background-repeat: no-repeat;
            background-position: center center;
            overflow: hidden; /* Cắt bớt phần ngoài phạm vi của .section-3 */
        }
        .carousel-hall-of-fame{
            padding-top: unset !important;
        }
        .section-3 .slick-slide img{
            margin-top: 33vh;
        }
        .section-3 .slick-slide {
            height: 65vh !important;
        }
        .section-3 .card{
            width: 95% !important;
        }
        .custom-prev-arrow-hall-of-fame,
        .custom-next-arrow-hall-of-fame {
            position: absolute;
            top: 70%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            scale: 75%;
            z-index: 2;
            opacity: 50%;
        }

        .custom-prev-arrow-hall-of-fame {
            left: -4%;
        }

        .custom-next-arrow-hall-of-fame {
            right: -4%;
        }
        .section-3 .slick-dots {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            margin-top: -3rem;
        }
        .section-3 .rounded-custom {

        }
    }
</style>
