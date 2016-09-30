@if(auth()->check() && auth()->user()->can('moderate', 'comment'))
    @include('comment.moderate-comment')
@else
    @include('comment.view-comment')
@endif