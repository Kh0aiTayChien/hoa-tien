<div class="section-5 " >
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
                             src="{{asset('images/homepage/section-5/1.png')}}"
                             alt="" width="65%">

                </div>
                <div class="d-flex justify-content-center">

                        <img class="rounded-custom img-fluid shadow-effect"
                             src="{{asset('images/homepage/section-5/2.png')}}"
                             alt="" width="65%">

                </div>
                <div class="d-flex justify-content-center">

                        <img class="rounded-custom img-fluid shadow-effect"
                             src="{{asset('images/homepage/section-5/3.png')}}"
                             alt="" width="65%">

                </div>
                <div class="d-flex justify-content-center">

                        <img class="rounded-custom img-fluid shadow-effect"
                             src="{{asset('images/homepage/section-5/4.png')}}"
                             alt="" width="65%">

                </div>
                <div class="d-flex justify-content-center">

                        <img class="rounded-custom img-fluid shadow-effect"
                             src="{{asset('images/homepage/section-5/5.png')}}"
                             alt="" width="65%">

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
        }

        .hall-of-fame .card {
            background: transparent;
        }

        .custom-prev-arrow-hall-of-fame5,
        .custom-next-arrow-hall-of-fame5 {
            position: absolute;
            top: 60%;
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
    .section-5 {
        display: block;
        justify-content: center;
        text-align: center;
        width: 100vw;
        height: 100vh;
        background-image: url("/images/homepage/section-5/slide1.png");
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>
