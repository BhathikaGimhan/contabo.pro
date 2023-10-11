<div class="row main-principle d-flex justify-content-center pb-5 mt-2 break-col">
    @foreach ($principals as $key => $principal)
        @if($key == 0 || $key == 1)
            <div class="col-md-12 col-lg-6 open-model justify-content-center d-flex flex-column align-self-center" data-doc="{{ $principal->id() }}">
                @if($key == 0)
                    <h2 class="text-center">FOUNDING FATHER</h2>
                @else
                    <h2 class="text-center">FIRST PRINCIPAL</h2>
                @endif
                <div class="frame sub-image align-self-center"
                     style="background-image: url({{ 'assets/backgrounds/frame-min.png' }})">
                    @if (!empty($principal->data()['image']))
                        <img src="{{ $principal->data()['image'] }}" class="inside-frame"/>
                    @else
                        <img src="{{asset("assets/images/demo1.jpg")}}" class="inside-frame"/>
                    @endif
                    <div class="read-more-image">
                        <h2 class="hidden-read-more" id="{{ $principal->id() }}">READ<br>MORE</h2>
                    </div>
                </div>
                <div class="principle-btn text-center pt-2 pb-5 align-self-center mt-3" data-id="{{ $principal->id() }}">
                    <a href="">{{ $principal->data()['name'] }} <br> {{ $principal->data()['year'] }} </a>
                </div>
            </div>
        @endif
    @endforeach
</div>

<div class="row sub-principles mt-3 break-col">
    @foreach ($principals as $key => $principal)
        <div class="col-lg-4 col-md-12 open-model justify-content-center d-flex flex-column align-self-center mb-3" data-doc="{{ $principal->id() }}">
            <div class="frame sub-image align-self-center"
                 style="background-image: url({{ 'assets/backgrounds/frame-min.png' }})">
                @if (!empty($principal->data()['image']))
                    <img src="{{ $principal->data()['image'] }}" class="inside-frame"/>
                @else
                    <img src="{{asset("assets/images/demo1.jpg")}}" class="inside-frame"/>
                @endif
                <div class="read-more-image">
                    <h2 class="hidden-read-more" id="{{ $principal->id() }}">READ<br>MORE</h2>
                </div>
            </div>
            <div class="principle-btn text-center pt-2 pb-5 align-self-center mt-3" data-id="{{ $principal->id() }}">
                <a href="">{{ $principal->data()['name'] }} <br> {{ $principal->data()['year'] }}</a>
            </div>
        </div>
    @endforeach
    <div class="col-md-12 text-center pt-3 d-flex justify-content-center">
        {{ $principals->links() }}
    </div>
</div>
