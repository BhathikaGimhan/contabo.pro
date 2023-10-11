<div class="board-item-model">
    <img class="empty-board" src="{{ asset('assets/backgrounds/empty-board-long.jpg') }}"
         alt="">
    <div class="centered-model text-center">
        <h3>
            {{ $name }}
        </h3>
        <ul class="cv-carousel">
            <li class="">
                <div id="timeline-up-btn"><i class="fa fa-caret-up"></i></div>
            </li>
            @foreach($roll_call_info as $key => $item)
                {{-- @if($key < 4) --}}
                    <li class="item">
                        <div class="d-flex justify-content-start borad-item-name align-items-center">
                            <img class="crest" src="{{ asset('assets/backgrounds/Shadow Crest-min.png') }}" alt="">
                            <div style="padding-left: 20px">
                                <p>{{ $item->data()['year'] }}</p>
                                <p>{{ $item->data()['name'] }}</p>
                            </div>
                        </div>
                    </li>
                {{-- @endif --}}
            @endforeach
            <li class="">
                <div id="timeline-down-btn"><i class="fa fa-caret-down"></i></div>
            </li>
        </ul>
    </div>
</div>

<script>
    
    // $('ul li.item').hide();
    // $('ul li.item:lt("'+count+'")').show();

    $(document).ready(function(){
        let start = 0;
        let end = 4;
        $('ul li.item').hide().slice(start, end).show();

        $("#timeline-down-btn").click(function(){
            start = start+4;
            end = end+4;
            $('ul li.item').hide().slice(start, end).show();
        });

        $("#timeline-up-btn").click(function(){
            start = start-4;
            end = end-4;
            $('ul li.item').hide().slice(start, end).show();
        });
    });
</script>