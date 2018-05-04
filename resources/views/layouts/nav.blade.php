<a href="{{ url('/') }}">home</a> |

@auth
<a href="#">submit</a> |
@endauth

@guest
<a href="#">login</a> |
<a href="#">signup</a> 
@endguest

@auth
<a href="#">logout</a>
@endauth