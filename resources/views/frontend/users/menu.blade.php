<style type="text/css">
    .left-icon{
            height: 30px;
    background-position: left;
    background-repeat: no-repeat;
    background-size: 28px;
    padding-left: 40px;
    padding-top: 5px;
    }

    .menu-menu-col a{
        margin-left: 30px !important;
    }
    .menu-menu-col a.active i{
        color: white;
    }

    
#mainFeatures li {
    list-style: none;
    padding:1px;
}

</style>
<div class="menu-menu-col">
    @php $types = getDataArray('types'); @endphp

        <style type="text/css">
            @if($types)
                @foreach($types as $type)
               
                        #mainFeatures li#menu_{{$type->slug}} { 
                             background: url("{{asset('storage/type/icon/'.$type->icon)}}") no-repeat 0 10px;
                             background-size:25px 25px;
                            }
                  
                @endforeach
            @endif
        </style>

        <ul class="list-unstyled" >
            <li><a href="{{ route('frontend.users.profileEdit') }}"  class="{{ Request::segment(2) == 'edit' ? 'active' : '' }}"><i class="fa fa-user"></i> My Profile</a></li>
            <!-- <li><a href="{{ route('frontend.users.quotations', auth()->user()->id) }}"><i class="far fa-file-alt"></i> Quotations</a></li> -->
            <li  data-toggle="collapse" data-target="#service" class="{{ Request::segment(1) == 'vendors' ? 'collapsed' : '' }} ">
              <a class="{{ Request::segment(1) == 'vendors' ? 'active' : '' }}" href="{{ route('frontend.vendors.slug')}}"><i class="fa fa-globe fa-lg"></i> My Vendors <span class="arrow"></span></a>
                <ul id="mainFeatures"  class="sub-menu collapse {{ Request::segment(1) == 'vendors' ? 'show' : '' }}  ">
                    @foreach($types as $type)
                        <li id="menu_{{$type->slug}}">
                            <a href="{{ route('frontend.vendors.slug', ['slug'=> $type->slug ])}}"  class="{{ Request::segment(2) == $type->slug ? 'active' : '' }}">
                                <i class="left-icon- -icon-{{$type->slug}}">{{$type->name}}</i>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>  
            <li><a href="{{ route('frontend.users.changePassword') }}"  class="{{ Request::segment(2) == 'changePassword' ? 'active' : '' }}" ><i class="fa fa-key"></i> Change Password</a></li>
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('account-logout-form').submit();">
                    Logout
                </a>
            </li>
            <form id="account-logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ul>
</div>
