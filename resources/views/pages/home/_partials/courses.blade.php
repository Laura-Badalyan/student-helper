@if(count($groups))
    <section class="global_margin">
        <div class="page_content">

            <h2 class="block_title">Վիդեոդասեր</h2>

            <div class="flex courses">
                @foreach($groups as $group)
                    <a href="/groups/{{$group->id}}" class="course white mb-20">
                        <div class="course_img">
                            @include("icons.play",["class" => "main"])
                            <img src="/img/groups/{{$group->id}}.png" width="100%" alt="{{$group->name}}">
                        </div>
                        <div class="course_content">
                            <p>{{$group->name}} <span class="mini_info">{{count($group->courses)}} վիդեո</span></p>

                            <p
                                @if($group->discount)
                                class="discount"
                                @endif
                            >
                                {!! $group->showPrice() !!} @if($group->discount) {!! $group->showDiscount() !!} @endif
                            </p>


                        </div>
                    </a>
                @endforeach
            </div>

            @if(Request::route()->getName() != 'groups')
                <div class="right">
                    <a href="/groups" class="main">ավելին</a>
                </div>
            @endif
        </div>
    </section>
@endif
