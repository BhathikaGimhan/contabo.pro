<style>

</style>

<div class="board-item-model">
    <img class="empty-board" src="{{ asset('assets/backgrounds/empty-board-long.jpg') }}"
         alt="">
    <div class="centered-model text-center">
        <h3>
            {{ $name }}
        </h3>
        <ul class="cv-carousel">
            <li class="">
                <i class="fa fa-caret-up"></i>
            </li>
            @foreach($roll_call_info as $key => $item)
                @if($key < 4)
                    <li class="item">
                        <div class="d-flex justify-content-start borad-item-name align-items-center">
                            <img class="crest" src="{{ asset('assets/backgrounds/Shadow Crest-min.png') }}" alt="">
                            <div style="padding-left: 20px">
                                <p>{{ $item->data()['year'] }}</p>
                                <p>{{ $item->data()['name'] }}</p>
                            </div>
                        </div>
                    </li>
                @endif
                {{-- <div>{!! $roll_call_info->links() !!}</div> --}}
            @endforeach
            <li class="">
                <div id="timeline-down-btn"><i class="fa fa-caret-down"></i></div>
            </li>
            {{-- <div>{!! $roll_call_info->links() !!}</div> --}}
        </ul>
    </div>
</div>
