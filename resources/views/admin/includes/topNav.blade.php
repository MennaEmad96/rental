<div class="nav_menu">
    <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
    </div>
    <nav class="nav navbar-nav">
        <ul class=" navbar-right">
            <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('assets/admin/images/img.jpg') }}" alt="">{{ Auth::user()->fullName }}
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="javascript:;"> Profile</a>
                    <a class="dropdown-item" href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                    </a>
                    <a class="dropdown-item" href="javascript:;">Help</a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>

            <li role="presentation" class="nav-item dropdown open">
                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">{{ $unreadMessagesCount }}</span>
                </a>
                <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    @foreach($unreadMessages as $message)
                    <li class="nav-item">
                        <a href="{{ route('showMessage', ['id'=>$message->id]) }}" class="dropdown-item">
                            <span class="image"><img src="{{ asset('assets/admin/images/img.jpg') }}" alt="Profile Image" /></span>
                            <span>
                                <span>{{ $message->firstName }} {{ $message->lastName }}</span>
                                <?php
                                    $timeAgo = $message->created_at->diffInMinutes(\Carbon\Carbon::now());
                                    $timeAgoHours = $message->created_at->diffInHours(\Carbon\Carbon::now());
                                    $timeAgoDays = $message->created_at->diffInDays(\Carbon\Carbon::now());
                                    // less than one hour
                                    if($timeAgo < 60){
                                        if($timeAgo == 1){
                                            $timeAgo = $timeAgo . " Minute Ago";
                                        }else{
                                            $timeAgo = $timeAgo . " Minutes Ago";
                                        }
                                    }// less than one day
                                    elseif($timeAgo > 60 && $timeAgo < 1440){
                                        if($timeAgoHours == 1){
                                            $timeAgo = $timeAgoHours . " Hour Ago";
                                        }else{
                                            $timeAgo = $timeAgoHours . " Hours Ago";
                                        }
                                    }// in days
                                    else{
                                        if($timeAgoDays == 1){
                                            $timeAgo = $timeAgoDays . " Day Ago";
                                        }else{
                                            $timeAgo = $timeAgoDays . " Days Ago";
                                        }
                                    }
                                ?>
                                
                                <span class="time">{{ $timeAgo }}</span>
                            </span>
                            <span class="message">
                                {{ Str::limit($message->content, 80) }}
                            </span>
                        </a>
                    </li>
                    @endforeach
                    
                    <li class="nav-item">
                        <div class="text-center">
                            <a class="dropdown-item">
                                <strong><a href="{{ route('messages') }}">See All Alerts</a></strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>