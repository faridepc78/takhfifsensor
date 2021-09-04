@if (count($sliders))

    <div class="home-v1-slider home-slider">

        @foreach($sliders as $value)

            <div class="slider-1" style="background-image: url({{$value->image->original}});">
                <div class="caption">
                    <div class="title">{{$value->name}}</div>
                </div>
            </div>

        @endforeach

    </div>

@endif
