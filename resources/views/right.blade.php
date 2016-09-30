@inject('sidebarInjector', 'App\Repository\SidebarInjector')

<div class="sidebar" style="padding: 0">

    <div class="sidebar-item poll-box">
        <h4>Control Panel</h4>
        <hr>
        @can('create', 'announcement')
        <a href="{{ url('announcement', 'create') }}">Create announcement</a>
        @endcan
        @can('create', 'discussion')
        <a href="{{ url('discussion', 'create') }}">Create discussion</a>
        @endcan
        @can('create', 'member')
        <a href="{{ url('member', 'create') }}">Create member</a>
        @endcan
        @can('create', 'poll')
        <a href="{{ url('poll', 'create') }}">Create poll</a>
        @endcan
    </div>

    <div class="sidebar-item poll-box">
        <h4>Poll</h4>
        <hr>
        @foreach($sidebarInjector->getActivePolls() as $poll)

            <span style="font-weight: 600; margin-bottom: 15px; display: block">Q. {{ $poll->agenda}}</span>
            @foreach($poll->pollOptions as $pollOption)
                <div class="row">
                    <div class="col-md-10">
                        <a href="{{ url('poll', ['vote', $poll->id, $pollOption->id]) }}"
                           style="display: block;"> {{ $pollOption->option }}
                        </a>
                    </div>
                    <div class="col-md-2">
                        <span class="pull-right">{{ $pollOption->votePercentage() }}%</span>
                    </div>
                    <div class="col-md-12">
                        <div class="poll-result">
                            <div class="poll-result-bar" style="width:{{ $pollOption->votePercentage() }}%"></div>
                        </div>
                    </div>
                </div>
            @endforeach
            <hr>
        @endforeach
    </div>

    <div class="sidebar-item">
        <h4>Recent Discussions</h4>
        <hr>
        @foreach($sidebarInjector->getRecentDiscussions() as $discussion)
            <a href="{{ url('discussion', [$discussion->id]) }}"
               style="display:block; padding: 3px; color: #666">{{ $discussion->subject }}</a>
        @endforeach
    </div>

    <div class="sidebar-item">
        <h4>Most Popular</h4>
        <hr>
        @foreach($sidebarInjector->getPopularDiscussions() as $discussion)
            <a href="{{ url('discussion', [$discussion->id]) }}"
               style="display:block; padding: 3px; color: #666">{{ $discussion->subject }}</a>
        @endforeach
    </div>

</div>