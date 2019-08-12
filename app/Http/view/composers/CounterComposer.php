<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Query;
use App\Repositories\QueryRepository;
use Auth;


class CounterComposer{
	protected $queries;
	protected $notifications;

	public function __construct(QueryRepository $queries)
	{
		$this->queries = $queries;
		if(Auth::user()){
		$this->notifications    = Auth::user()->unreadNotifications();
	}
	}

	public function compose(View $view)
	{
		$message_count = $this->queries->count();
		if(Auth::user())
			$notification_count = $this->notifications->count();
		else 
			$notification_count = 0;	
		$view->with('message_count', $message_count)
			 ->with('notifications_count', $notification_count);

	}
}