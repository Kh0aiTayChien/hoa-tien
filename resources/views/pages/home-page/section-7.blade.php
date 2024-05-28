<div class="section-7 d-none d-md-block">
    <h2 class="d-none">Trạm Thiên Nhiên Bình Yên Trải Nghiệm</h2>
    <div id="section-7-carousel" class="carousel slide w-100" data-bs-ride="carousel">
        <div class="carousel-indicators">
        </div>
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="{{asset('images/homepage/section-7/Sec07.png')}}" class="w-100" alt="hoa-tien-image" loading="lazy" style="">
            </div>

        </div>
    </div>
</div>
<div class="section-7 d-block d-md-none">
    <div class="slick-carousel position-relative ">
        <button class="custom-prev-arrow-hall-of-fame7" aria-label="Previous">
            <img src="{{asset('images/arrow/left.png')}}" alt="Previous" class="shadow-effect button-shake"/>
        </button>
        <button class="custom-next-arrow-hall-of-fame7" aria-label="Next">
            <img src="{{asset('images/arrow/right.png')}}" alt="Next" class="shadow-effect button-shake"/>
        </button>
        <div class="carousel-hall-of-fame7" style="padding-top: 19vh">
            <div class="d-flex justify-content-center">

                <img class="rounded-custom img-fluid shadow-effect"
                     src="{{asset('images/homepage/section-7/1-3.png')}}"
                     alt="hoa-tien-image" loading="lazy"  style="width: 65%">

            </div>
            <div class="d-flex justify-content-center">

                <img class="rounded-custom img-fluid shadow-effect"
                     src="{{asset('images/homepage/section-7/1-2.png')}}"
                     alt="hoa-tien-image" loading="lazy"  style="width: 65%">

            </div>
            <div class="d-flex justify-content-center">

                <img class="rounded-custom img-fluid shadow-effect"
                     src="{{asset('images/homepage/section-7/1-1.png')}}"
                     alt="hoa-tien-image" loading="lazy"  style="width: 65%">

            </div>
            <div class="d-flex justify-content-center">

                <img class="rounded-custom img-fluid shadow-effect"
                     src="{{asset('images/homepage/section-7/1.png')}}"
                     alt="hoa-tien-image" loading="lazy"  style="width: 65%">

            </div>
        </div>
    </div>
</div>
</div>
<style>
    @media only screen and (max-width: 800px) {
        .section-7 {
            display: block; /* hoặc display: flex; */
            justify-content: center;
            text-align: center;
            width: 100vw; /* Đảm bảo chiếm 100% chiều rộng cửa sổ xem */
            height: 90vh; /* Chiều cao tự động điều chỉnh */
            background-image: url("/images/homepage/section-7/Sec07Mobile.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            overflow: hidden;
        }
         .custom-prev-arrow-hall-of-fame7,
         .custom-next-arrow-hall-of-fame7 {
            position: absolute;
            top: 55%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            scale: 75%;
            z-index: 2;
             opacity: 50%;
        }
        .section-7 .slick-slide img{
            margin-top: -2vh;
            scale: 90%;
        }

        .custom-prev-arrow-hall-of-fame7 {
            left: -4%;
        }

        .custom-next-arrow-hall-of-fame7 {
            right: -4%;
        }

        .section-7 .slick-dots {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            margin-top: -22px;
        }
        .section-7 .rounded-custom {
            width: 100% !important;
        }
    }
</style>
<script>
    $(document).ready(function () {
        $('.carousel-hall-of-fame7').slick({
            infinite: true,
            speed: 900,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            prevArrow: $('.custom-prev-arrow-hall-of-fame7'),
            nextArrow: $('.custom-next-arrow-hall-of-fame7'),
        });
    });
</script>
