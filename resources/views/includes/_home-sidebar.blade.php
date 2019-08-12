<div class="home-sidebar-wrapper">
  <ul class="sidebar-menu-list">
  
    <li class="menu-item @if(Route::currentRouteName() == "home") current @endif">
    	<a href="">
    		1. Dashboard <i class="icon ion-md-apps"></i>
    	</a>
    </li>

        <li class="menu-item @if(Route::currentRouteName() == "notifications.index") current @endif">
    	<a href="{{ route('notifications.index') }}">
    		2. Notifications
    		@if(isset($notifications_count) && $notifications_count)<span class="badge">{{ $notifications_count }}</span>@endif
    		 <i class="icon ion-md-apps"></i>
    	</a>
    	</li>

        <li class="menu-item @if(Route::currentRouteName() == "queries.index") current @endif">
    	<a href="{{ route('queries.index') }}">
    		2. Messages @if(isset($message_count) && $message_count)<span class="badge">{{ $message_count }}</span>@endif<i class="icon ion-md-apps"></i>
    	</a>
    	</li>


    <li class="menu-item @if(Route::currentRouteName() == "listing.index") current @endif">
    	<a href="{{ route('listing.index') }}">
    		2. View your Listing <i class="icon ion-md-apps"></i>
    	</a>
    </li>

    <li class="menu-item @if(Route::currentRouteName() == "listing.create") current @endif">
    	<a href="{{ route('listing.create') }}">
    		3. Add new Listing <i class="icon ion-md-apps"></i>
    	</a>
    </li>

    <li class="menu-item @if(Route::currentRouteName() == "bids.index") current @endif">
    	<a href="{{ route('bids.index') }}">
    		4. View your bids <i class="icon ion-md-apps"></i>
    	</a>
    </li>
  


  </ul>
</div>