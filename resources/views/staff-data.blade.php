<div class="row sub-principles break-col">
    @foreach ($staff_members as $key => $member)
        <div class="col-lg-4 col-md-12 open-model justify-content-center d-flex flex-column align-self-center mb-3" data-doc="{{ $member->id() }}">
            <div class="frame sub-image align-self-center"
                 style="background-image: url({{ 'assets/backgrounds/frame-min.png' }})">
                @if (!empty($member->data()['image']))
                    <img src="{{ $member->data()['image'] }}" class="inside-frame"/>
                @else
                    <img src="{{asset("assets/images/demo1.jpg")}}" class="inside-frame"/>
                @endif
                <div class="read-more-image">
                    <h2 class="hidden-read-more" id="{{ $member->id() }}">READ<br>MORE</h2>
                </div>
            </div>
            <div class="principle-btn text-center pt-2 pb-5 align-self-center mt-3" data-id="{{ $member->id() }}">
                <a href="">{{ $member->data()['name'] }} <br> {{ $member->data()['year'] }}</a>
            </div>
        </div>
    @endforeach
    <div class="col-md-12 text-center pt-3 d-flex justify-content-center">
        {{ $staff_members->links() }}
    </div>
</div>
