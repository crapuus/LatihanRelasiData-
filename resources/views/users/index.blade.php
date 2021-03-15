@foreach ($users as $user)
<h4><a href="{{route('user.show', $user)}}">{{$user->name}}</a></h4>
@endforeach 