@extends('../main')
@section('content')

@include('../navbar')

   <style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
 
.demo{ background: #f8f8f8; }testimonial{
 
    margin: 0 20px 40px;
}
.testimonial .testimonial-content{
    padding: 35px 25px 35px 50px;
    margin-bottom: 35px;
    background: #C9DAE9;
    border: 1px solid #f0f0f0;
    position: relative;
    -webkit-box-shadow: 3px 2px 5px 0px rgba(211,227,242,1);
    -moz-box-shadow: 3px 2px 5px 0px rgba(211,227,242,1);
    box-shadow: 3px 2px 5px 0px rgba(211,227,242,1);
}
.testimonial .testimonial-content:after{
    content: "";
    display: inline-block;
    width: 20px;
    height: 20px;
    background: #C9DAE9;
    position: absolute;
    bottom: -10px;
    left: 22px;
    transform: rotate(45deg);
}
.testimonial-content .testimonial-icon{
    width: 50px;
    height: 45px;
    background: #ff4242;
    text-align: center;
    font-size: 22px;
    color: #fff;
    line-height: 42px;
    position: absolute;
    top: 37px;
    left: -19px;
}
.testimonial-content .testimonial-icon:before{
    content: "";
    border-bottom: 16px solid #e41212;
    border-left: 18px solid transparent;
    position: absolute;
    top: -16px;
    left: 1px;
}
.testimonial .description{
    font-size: 15px;
    font-style: italic;
    color: #38424A;
    line-height: 23px;
    margin: 0;
}
.testimonial .title{
    display: block;
    font-size: 18px;
    font-weight: 700;
    color: #525252;
    text-transform: capitalize;
    letter-spacing: 1px;
    margin: 0 0 5px 0;
}
.testimonial .post{
    display: block;
    font-size: 14px;
    color: #ff4242;
}
.owl-theme .owl-controls{
    margin-top: 20px;
}
.owl-theme .owl-controls .owl-page span{
    background: #ccc;
    opacity: 1;
    transition: all 0.4s ease 0s;
}
.owl-theme .owl-controls .owl-page.active span,
.owl-theme .owl-controls.clickable .owl-page:hover span{
    background: #ff4242;
}

  .star-rating {
    line-height: 32px;
    font-size: 1.25em;
}

.star-rating .fa-star {
    color: #da951d;
}

@media (min-width: 640px)
.sm\:px-4 {
    padding-left: 1rem;
    padding-right: 1rem;
}
@media (min-width: 640px)
.sm\:w-full {
    width: 100%;
}
@media (min-width: 640px)
.sm\:inline-block {
    display: inline-block;
}
.pt-8 {
    padding-top: 2rem;
}

.leading-6 {
    line-height: 1.5rem;
}
.text-sm {
    font-size: .875rem;
    line-height: 1.25rem;
}
.p-6 {
    padding: 1.5rem;
}
.bg-murky-700 {
    --tw-bg-opacity: 1;
    background-color: rgb(61 67 72/var(--tw-bg-opacity));
}
.rounded-2xl {
    border-radius: 1rem;
}
.w-full {
    width: 100%;
}
blockquote, dd, dl, figure, h1, h2, h3, h4, h5, h6, hr, p, pre {
    margin: 0;
}
</style>

<br>
<main class="relative">
    <div class="py-12 sm:py-24">
        <div class="container">
            <div class="mx-auto max-w-xl text-center">
                <h1 class="text-xxl font-semibold leading-8 tracking-tight text-primary-500">Testimonials</h1>
                <p class="mt-2 text-3xl font-bold tracking-tight text-white">Terima kasih untuk semua pelanggan yang memberi kami ulasan dan peringkat.</p>
            </div>
            
                @foreach ($ratings as $rating)
            <div class="mx-auto mt-16 flow-root max-w-2xl sm:mt-20 lg:mx-0 lg:max-w-none">
                <div class="-mt-8 sm:-mx-4 sm:columns-2 sm:text-[0] lg:columns-3">
                    <div class="pt-8 sm:inline-block sm:w-full sm:px-4">
                        <figure class="w-full rounded-2xl bg-murky-700 p-6 text-sm leading-6">
                            <h3 class="font-bold">Mobile Legends</h3>
                            <blockquote class="mt-3 italic text-white"><p>“{{ $rating->comment }}”</p></blockquote>
                            <figcaption class="mt-3 flex w-full flex-col items-center justify-center gap-x-4">
                                <div class="flex w-full items-center justify-between">
                                    <div class="text-murky-300">082******869</div>
                                    <div class="flex items-center">
                                         <div class="star-rating">
                                            <td>
                                                                @for($i=1; $i<=5; $i++)
                                                                    @if($i <= $rating->bintang)
                                                                        <i class="fas fa-star"></i>
                                                                    @else
                                                                        <i class="far fa-star"></i>
                                                                    @endif
                                                                @endfor</td>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 flex w-full items-center justify-between">
                                    <div class="text-xs text-murky-300">14 (13+1) Diamonds</div>
                                    <div class="flex items-center text-xs">{{ $rating->created_at }}</div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    
@endforeach
                </div>
            </div>
            <div class="flex items-center justify-center pt-12">
               
            </div>
        </div>
    </div>
</main>

               
    
<script src="https://pagead2.googlesyndication.com/pagead/managed/js/adsense/m202305040101/show_ads_impl_fy2021.js" id="google_shimpl"></script><script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
 
 <script>
$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:3,
        itemsDesktop:[1000,3],
        itemsDesktopSmall:[980,2],
        itemsTablet:[768,2],
        itemsMobile:[650,1],
        pagination:true,
        navigation:false,
        slideSpeed:1000,
        autoPlay:true
    });
});
</script>

@include('../footer')
@endsection