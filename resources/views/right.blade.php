@inject('sidebarInjector', 'App\Repository\SidebarInjector')

<div class="sidebar">

    <div class="sidebar-item">
        <h4>Recent Discussions</h4>
        <hr>
        @foreach($sidebarInjector->getRecentDiscussions() as $discussion)
            <a href="{{ url('discussion', [$discussion->id]) }}"
               style="margin-bottom: 5px; color: #666">{{ $discussion->subject }}</a><br>
        @endforeach
    </div>

    <div class="sidebar-item">
        <h4>Most Popular</h4>
        <hr>
        @foreach($sidebarInjector->getPopularDiscussions() as $discussion)
            <a href="{{ url('discussion', [$discussion->id]) }}"
               style="margin-bottom: 5px; color: #666">{{ $discussion->subject }}</a><br>
        @endforeach

    </div>

    <div class="sidebar-item poll-box">
        <h4>Poll</h4>
        <hr>
        @foreach($sidebarInjector->getActivePolls() as $poll)
            <span style="font-weight: 600; margin-bottom: 15px; display: block">Q. {{ $poll->agenda}}</span>
            <a href="{{ url('poll', ['vote', $poll->id, 'option1']) }}">A. {{ $poll->option1 }} <span
                        class="pull-right">{{ $poll->getVotePercentage('option1') }}%</span></a>
            <div class="poll-result">
                <div class="poll-result-bar" style="width:{{ $poll->getVotePercentage('option1') }}%"></div>
            </div>
            <a href="{{ url('poll', ['vote', $poll->id, 'option2']) }}">B. {{ $poll->option2 }} <span
                        class="pull-right">{{ $poll->getVotePercentage('option2') }}%</span></a>
            <div class="poll-result">
                <div class="poll-result-bar" style="width: {{ $poll->getVotePercentage('option2') }}%"></div>
            </div>
            @if($poll->option3 != '')
                <a href="{{ url('poll', ['vote', $poll->id, 'option3']) }}">C. {{ $poll->option3 }} <span
                            class="pull-right">{{ $poll->getVotePercentage('option3') }}%</span></a>
                <div class="poll-result">
                    <div class="poll-result-bar" style="width: {{ $poll->getVotePercentage('option3') }}%"></div>
                </div>
            @endif
            @if($poll->option4 != '')
                <a href="{{ url('poll', ['vote', $poll->id, 'option4']) }}">D. {{ $poll->option4 }} <span
                            class="pull-right">{{ $poll->getVotePercentage('option4') }}%</span></a>
                <div class="poll-result">
                    <div class="poll-result-bar" style="width: {{ $poll->getVotePercentage('option4') }}%"></div>
                </div>
            @endif
            <hr>

        @endforeach
    </div>

</div>