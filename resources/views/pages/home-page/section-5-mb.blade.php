<div class="section-5-mb d-block d-md-none" >
    <div class="hall-of-famemb ">
        <div class="slick-carousel position-relative ">
            <button class="custom-prev-arrow-hall-of-famemb" aria-label="Previous">
                <img src="{{asset('images/arrow/left.png')}}" alt="Previous" class="shadow-effect button-shake"/>
            </button>
            <button class="custom-next-arrow-hall-of-famemb" aria-label="Next">
                <img src="{{asset('images/arrow/right.png')}}" alt="Next" class="shadow-effect button-shake"/>
            </button>

            <div class="carousel-hall-of-famemb" style="padding-top: 19vh">
                <div class="d-flex justify-content-center">

                    <img class="rounded-custom img-fluid shadow-effect"
                         src="{{asset('images/homepage/section-5/1.png')}}"
                         alt="hoa-tien-image"  style="width: 65%">

                </div>
                <div class="d-flex justify-content-center">

                    <img class="rounded-custom img-fluid shadow-effect"
                         src="{{asset('images/homepage/section-5/2.png')}}"
                         alt="hoa-tien-image"  style="width: 65%">

                </div>
                <div class="d-flex justify-content-center">

                    <img class="rounded-custom img-fluid shadow-effect"
                         src="{{asset('images/homepage/section-5/3.png')}}"
                         alt="hoa-tien-image"  style="width: 65%">

                </div>
                <div class="d-flex justify-content-center">

                    <img class="rounded-custom img-fluid shadow-effect"
                         src="{{asset('images/homepage/section-5/4.png')}}"
                         alt="hoa-tien-image"  style="width: 65%">

                </div>
                <div class="d-flex justify-content-center">

                    <img class="rounded-custom img-fluid shadow-effect"
                         src="{{asset('images/homepage/section-5/5.png')}}"
                         alt="hoa-tien-image"  style="width: 65%">

                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $('.carousel-hall-of-famemb').slick({
                    infinite: true,
                    speed: 900,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    prevArrow: $('.custom-prev-arrow-hall-of-famemb'),
                    nextArrow: $('.custom-next-arrow-hall-of-famemb'),
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

        .section-8 .custom-prev-arrow-hall-of-fame8,
        .section-8 .custom-next-arrow-hall-of-fame8 {
            position: absolute;
            top: 55%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            scale: 75%;
            z-index: 2;
        }

        .section-8 .custom-prev-arrow-hall-of-fame8 {
            left:12%;
        }

        .section-8 .custom-next-arrow-hall-of-fame8 {
            right: 12%;
        }

        .section-8 .slick-dots {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            margin-top: 3rem;
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

</div>
<style>

    @media only screen and (max-width: 800px) {
        .section-5-mb {
            display: block; /* hoặc display: flex; */
            justify-content: center;
            text-align: center;
            width: 100vw; /* Đảm bảo chiếm 100% chiều rộng cửa sổ xem */
            height: auto; /* Chiều cao tự động điều chỉnh */
            background-image: url("/images/homepage/section-5/sec5.jpg");
            background-size: 100% auto;
            background-repeat: no-repeat;
            background-position: center center;
            overflow: hidden;
        }
        .carousel-hall-of-famemb{
            padding-top: unset !important;
        }
        .section-5-mb .slick-slide img{
            margin-top: 35.5vh;
        }
        .section-5-mb .rounded-custom{
            width: 95% !important;
        }
        .custom-prev-arrow-hall-of-famemb,
        .custom-next-arrow-hall-of-famemb {
            position: absolute;
            top: 70% !important;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            scale: 75%;
            z-index: 2;
            opacity: 50%;
        }

        .custom-prev-arrow-hall-of-famemb {
            left: -4% !important;
        }

        .custom-next-arrow-hall-of-famemb {
            right: -4% !important;
        }
        .section-5-mb .slick-dots {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            margin-top: 2rem;
        }
    }
</style>
