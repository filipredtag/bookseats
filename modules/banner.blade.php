<div class="container-fluid">

            
            
            <picture>
                <!--[if IE 9]><video style="display: none;"><![endif]-->
                <!-- Large -->
                <source srcset="{{ $banner->bannerImageUrls->desktop }}" media="(min-width: 1200px)">
                @if(!empty($banner->bannerImageUrls->mobile))
                <!-- Medium -->
                <source srcset="{{  $banner->bannerImageUrls->tablet }}" media="
                (min-width:768px) and (max-width: 1199px),
                (min-width:768px) and (max-width: 1199px) and (orientation : landscape)
                ">
                @endif
                @if(!empty($banner->bannerImageUrls->mobile))
                <!-- Small Retina -->
                <source srcset="{{  $banner->bannerImageUrls->mobile }}" media="
                only screen and (-webkit-min-device-pixel-ratio: 1.5) and (max-width: 768px) and (orientation : portrait),
                only screen and (-moz-min-device-pixel-ratio: 1.5) and (max-width: 768px) and (orientation : portrait),
                only screen and (-o-min-device-pixel-ratio: 3/2) and (max-width: 768px) and (orientation : portrait),
                only screen and (min-device-pixel-ratio: 1.5) and (max-width: 768px) and (orientation : portrait)
                ">
                <!-- Small -->
                <source srcset="{{  $banner->bannerImageUrls->mobile }}" media="
                (max-width: 767px) and (orientation : portrait),
                (max-width: 767px) and (orientation : landscape)
                ">
                @endif
                <!--[if IE 9]></video><![endif]-->
                <!-- Output -->
                <img srcset="{{  $banner->bannerImageUrls->desktop }}" class="">
            </picture>

</div>