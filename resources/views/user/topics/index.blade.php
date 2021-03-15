@foreach ($topics as $topic)
<h3><a href="{{route('topics.show', $topic)}}"> {{$topic->title}}</a></h3>
<p>Create_at {{ \Carbon\Carbon::parse($topic->created_at)->diffForHumans() }}</p>
@endforeach