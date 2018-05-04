<a href="{{ url('/') }}">home</a> |

@auth
<a href="{{ route('submit') }}">submit</a> |
@endauth

@guest
<a href="{{ route('login') }}">login</a> |
<a href="{{ route('register') }}">signup</a> 
@endguest

@auth

<a href="{{ route('logout') }}"
    onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
    logout
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<a href="{{ url('/') }}/user/{{ Auth::user()->name }}" style="float:right;">{{ Auth::user()->name }}</a>

@endauth