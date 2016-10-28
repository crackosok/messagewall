 <ul class="nav pull-right">
            <li><a>{{Auth::user()->username}}</a></li>
            <li><a href="{{ url('/logout') }}">Выход</a></li>
        </ul>