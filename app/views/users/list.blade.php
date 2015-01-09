@foreach($users as $u)
  <ul>
      <li>
          <a href="{{url('users/1')}}"> {{ $u }}</a>
      </li>
  </ul>
@endforeach

