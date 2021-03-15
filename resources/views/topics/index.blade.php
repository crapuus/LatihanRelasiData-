 @foreach ($topics as $topic)
   <h3><a href="{{route('topics.show', $topic)}}"> {{$topic->title}}</a></h3>
   <p>By {{$topic->user->name}}</p>
@endforeach