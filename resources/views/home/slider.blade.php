<body>
<!-- Swiper -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        @foreach($sliderdata as $rs)
        <div class="swiper-slide" style="background-image: url({{Storage::url($rs->image)}}); width: 1920px; height: 575px;">

            <div class="container text-capitalize font-medium wow zoomIn" style="color: #00D9A5 ">
                <span class="subhead">HAYATINIZI YENİLEYELİM </span>
                <h1 {{$rs->title}}</h1>
                <a href="  {{route('policlinic' ,['id'=>$rs->id])}}" class="btn btn-primary">DETAIL</a>

            </div>
           </div>
        @endforeach


             </div>


    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

</div>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
</body>
