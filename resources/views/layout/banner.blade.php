<div class="banner__carousel owl-carousel">
    @foreach ($banner as $item)
        @if ($item->Active==1)
        <div class="item__banner">
            <a href="">
                <img src="upload/banner/{{$item->Image}}" 
                     alt="" 
                     style="width:200px; height:auto; object-fit:contain; display:block; margin:0 auto;">
            </a>
        </div>
        @endif
    @endforeach
</div>
