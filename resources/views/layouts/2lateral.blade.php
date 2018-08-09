@if( true | Auth::user() )

                           <li><a class="nav-link " href="{{ route('register') }}"   onmouseover="this.style.background='grey'" onmouseout="this.style.background='black'" ><FONT COLOR="#F1BE00"><strong>{{ __('Registrar') }}</strong></FONT></a></li>

@endif

                           <li><a class="nav-link " href="{{ route('register') }}" style="display: none"  onmouseover="this.style.background='grey'" onmouseout="this.style.background='black'" ><FONT COLOR="#F1BE00"><strong>{{ __('Registrar') }}</strong></FONT></a></li>