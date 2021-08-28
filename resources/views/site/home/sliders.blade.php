@if (count($sliders))

    <div class="home-v1-slider home-slider">

        @foreach($sliders as $value)

            <div class="slider-1">
                <img src="{{$value->image->original}}" alt="{{$value->name}}">
                <div class="caption">
                    <div class="title">{{$value->name}}</div>
                </div>
            </div>

        @endforeach

    </div>

@endif
