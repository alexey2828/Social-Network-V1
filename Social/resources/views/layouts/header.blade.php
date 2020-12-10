
 
<header class="header">
	<div class="container" style="max-width: 1350px;">
 	<a class="logo" id = "val" href="{{ url('main') }}">logo</a>
    <input class="menu-btn" type="checkbox" id="menu-btn"/>
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu" style="">
            <li><a href="{{ url('main') }}"><img id="ico" src="https://img.icons8.com/material-rounded/50/ffffff/home-page.png"/> Home</a></li>
            <li><a href="{{ url('main') }}"><img id="ico" src="https://img.icons8.com/material-outlined/50/ffffff/search-chat.png"/> Search</a></li>
            <li><a href="{{ url('main') }}"><img id="ico" src="https://img.icons8.com/material-outlined/64/ffffff/file.png"/> News</a></li>
            <li><a id="settings-menu" style="margin-left: -40px;">|</a></li>
            <li><a id="settings-menu" href="{{ url('settings') }}"><img width="20" style="margin-top: 2px; margin-left: -20px;" src="https://img.icons8.com/ios-glyphs/30/ffffff/filled-appointment-reminders.png"/></a></li>
            <li><a href="{{ url('settings') }}" id="settings-menu"><img width="20" style="margin-top: 2px;margin-left: -20px;" src="https://img.icons8.com/material-sharp/24/ffffff/settings.png"/></a></li>
            <li><a id="settings-menu" style="margin-left: -50px;">|</a></li>
            <li>                
                @auth
                    @if(Auth::user()->avatar == null)
                        <a id="settings-menu" href="http://127.0.0.1:8000/user/{{Auth::user()->id}}" style="margin-left: -50px;"><div class="user-avatar" style="background: url('https://beckysgraphicdesign.com/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png')no-repeat center; margin: -8px; margin-left: 5px; width: 40px; height: 40px; border-radius: 50%; background-size: cover;"></div></a>
                    @else
                        <a id="settings-menu" href="http://127.0.0.1:8000/user/{{Auth::user()->id}}" style="margin-left: -50px;"><div class="user-avatar" style="background: url('{{asset('images/'.Auth::user()->avatar)}}') no-repeat center; margin: -8px; margin-left: 5px; width: 40px; height: 40px; border-radius: 50%; background-size: cover;"></div></a>
                    @endif
                @else
                    <a id="settings-menu" href="{{ url('login') }}" style="margin-left: -50px;"><div class="user-avatar" style="background: url('https://beckysgraphicdesign.com/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png')no-repeat center; margin: -8px; margin-left: 5px; width: 40px; height: 40px; border-radius: 50%; background-size: cover;"></div></a>
                @endauth</li>

        </ul>
        </div>
</header>
