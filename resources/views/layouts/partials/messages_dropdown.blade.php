<li class="dropdown custom" id="header-dd-notification">
    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
        <span class="meta">
            <span class="icon"><i class="ico-envelop"></i></span>
        </span>
    </a>

    <!-- Dropdown menu -->
    <div class="dropdown-menu" role="menu">
        <div class="dropdown-header">
            <span class="title">Notification <span class="count"></span></span>
            <span class="option text-right"><a href="javascript:void(0);">Clear all</a></span>
        </div>
        <div class="dropdown-body slimscroll">

            <!-- Message list -->
            <div class="media-list">
                @if(isset($messages))
                    @foreach( $messages as $message)
                <a href="/page/message/rich.html" class="media border-dotted read">
                    <span class="media-body">
                        <span class="media-heading">{{$message->sender->full_name}}</span>
                        <span class="media-heading">{{$message->title}}</span>
                        <span class="media-text ellipsis nm">{{$message->body}}</span>
                        <!-- meta icon -->
                        <span class="media-meta"><i class="ico-reply"></i></span>
                        <span class="media-meta"><i class="ico-attachment"></i></span>
                        <span class="media-meta pull-right">{{ Carbon\Carbon::instance($message->created_at)->diffForHumans() }}</span>
                        <!--/ meta icon -->
                    </span>
                </a>
                    @endforeach
                @endif
            </div>
            <!--/ Message list -->
        </div>
    </div>
    <!--/ Dropdown menu -->
</li>