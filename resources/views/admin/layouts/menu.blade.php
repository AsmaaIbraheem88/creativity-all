<li class="nav-item start {{ active_link(null,'active open') }} ">
    <a href="{{aurl('')}}" class="nav-link nav-toggle">
        <i class="fa fa-home"></i>
        <span class="title">{{trans('admin.dashboard')}}</span>
        <span class="selected"></span>
    </a>
</li>
<li class="nav-item start {{active_link('settings','active open')}}  ">
    <a href="{{aurl('settings')}}" class="nav-link nav-toggle">
        <i class="fa fa-cog"></i>
        <span class="title">{{trans('admin.settings')}}</span>
        <span class="selected"></span>
    </a>
</li>

<li class="nav-item start {{active_link('abouts','active open')}}  ">
    <a href="{{aurl('abouts')}}" class="nav-link nav-toggle">
        <i class="fa fa-cog"></i>
        <span class="title">{{trans('about.abouts')}}</span>
        <span class="selected"></span>
    </a>
</li>

<li class="nav-item start {{active_link('socials','active open')}}  ">
    <a href="{{aurl('socials')}}" class="nav-link nav-toggle">
        <i class="fa fa-cog"></i>
        <span class="title">{{trans('socials.socials')}}</span>
        <span class="selected"></span>
    </a>
</li>






<li class="nav-item start {{active_link('sliders','active open')}} ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-picture-o"></i>
        <span class="title">{{trans('slider.sliders')}} </span>
        <span class="selected"></span>
        <span class="arrow {{active_link('sliders','open')}}"></span>
    </a>
    <ul class="sub-menu" style="{{active_link('','block')}}"> 
        <li class="nav-item start {{active_link('sliders','active open')}}  "> 
            <a href="{{aurl('sliders')}}" class="nav-link "> 
                <i class="fa fa-picture-o"></i>
                <span class="title">{{trans('slider.sliders')}}  </span>
                <span class="selected"></span>
            </a>
        </li> 
        <li class="nav-item start"> 
            <a href="{{ aurl('sliders/create') }}" class="nav-link "> 
                <i class="fa fa-plus"></i> 
                <span class="title"> {{trans('slider.create')}}  </span> 
                <span class="selected"></span> 
            </a> 
        </li> 
    </ul> 
</li>
<li class="nav-item start {{active_link('clients','active open')}} ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-users"></i>
        <span class="title">{{trans('client.clients')}} </span>
        <span class="selected"></span>
        <span class="arrow {{active_link('clients','open')}}"></span>
    </a>
    <ul class="sub-menu" style="{{active_link('','block')}}"> 
        <li class="nav-item start {{active_link('clients','active open')}}  "> 
            <a href="{{aurl('clients')}}" class="nav-link "> 
                <i class="fa fa-users"></i>
                <span class="title">{{trans('client.clients')}}  </span>
                <span class="selected"></span>
            </a>
        </li> 
        <li class="nav-item start"> 
            <a href="{{ aurl('clients/create') }}" class="nav-link "> 
                <i class="fa fa-plus"></i> 
                <span class="title"> {{trans('client.create')}}  </span> 
                <span class="selected"></span> 
            </a> 
        </li> 
    </ul> 
</li>
<li class="nav-item start {{active_link('services','active open')}} ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-list "></i>
        <span class="title">{{trans('services.services')}} </span>
        <span class="selected"></span>
        <span class="arrow {{active_link('services','open')}}"></span>
    </a>
    <ul class="sub-menu" style="{{active_link('','block')}}"> 
        <li class="nav-item start {{active_link('services','active open')}}  "> 
            <a href="{{aurl('services')}}" class="nav-link "> 
                <i class="fa fa-list"></i>
                <span class="title">{{trans('services.services')}}  </span>
                <span class="selected"></span>
            </a>
        </li> 
        <li class="nav-item start"> 
            <a href="{{ aurl('services/create') }}" class="nav-link "> 
                <i class="fa fa-plus"></i> 
                <span class="title"> {{trans('services.create')}}  </span> 
                <span class="selected"></span> 
            </a> 
        </li> 
    </ul> 
</li>
<li class="nav-item start {{active_link('childservices','active open')}} ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-list"></i>
        <span class="title">{{trans('ChildService.childservices')}} </span>
        <span class="selected"></span>
        <span class="arrow {{active_link('childservices','open')}}"></span>
    </a>
    <ul class="sub-menu" style="{{active_link('','block')}}"> 
        <li class="nav-item start {{active_link('childservices','active open')}}  "> 
            <a href="{{aurl('childservices')}}" class="nav-link "> 
                <i class="fa fa-list"></i>
                <span class="title">{{trans('ChildService.childservices')}}  </span>
                <span class="selected"></span>
            </a>
        </li> 
        <li class="nav-item start"> 
            <a href="{{ aurl('childservices/create') }}" class="nav-link "> 
                <i class="fa fa-plus"></i> 
                <span class="title"> {{trans('ChildService.create')}}  </span> 
                <span class="selected"></span> 
            </a> 
        </li> 
    </ul> 
</li>
<li class="nav-item start {{active_link('subchildservices','active open')}} ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-list "></i>
        <span class="title">{{trans('SubChildService.subchildservices')}} </span>
        <span class="selected"></span>
        <span class="arrow {{active_link('subchildservices','open')}}"></span>
    </a>
    <ul class="sub-menu" style="{{active_link('','block')}}"> 
        <li class="nav-item start {{active_link('subchildservices','active open')}}  "> 
            <a href="{{aurl('subchildservices')}}" class="nav-link "> 
                <i class="fa fa-list "></i>
                <span class="title">{{trans('SubChildService.subchildservices')}}  </span>
                <span class="selected"></span>
            </a>
        </li> 
        <li class="nav-item start"> 
            <a href="{{ aurl('subchildservices/create') }}" class="nav-link "> 
                <i class="fa fa-plus"></i> 
                <span class="title"> {{trans('SubChildService.create')}}  </span> 
                <span class="selected"></span> 
            </a> 
        </li> 
    </ul> 
</li>
<li class="nav-item start {{active_link('portfolios','active open')}} ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-file-image-o"></i>
        <span class="title">{{trans('portfolios.portfolios')}} </span>
        <span class="selected"></span>
        <span class="arrow {{active_link('portfolios','open')}}"></span>
    </a>
    <ul class="sub-menu" style="{{active_link('','block')}}"> 
        <li class="nav-item start {{active_link('portfolios','active open')}}  "> 
            <a href="{{aurl('portfolios')}}" class="nav-link "> 
                <i class="fa fa-file-image-o"></i>
                <span class="title">{{trans('portfolios.portfolios')}}  </span>
                <span class="selected"></span>
            </a>
        </li> 
        <li class="nav-item start"> 
            <a href="{{ aurl('portfolios/create') }}" class="nav-link "> 
                <i class="fa fa-plus"></i> 
                <span class="title"> {{trans('portfolios.create')}}  </span> 
                <span class="selected"></span> 
            </a> 
        </li> 
    </ul> 
</li>