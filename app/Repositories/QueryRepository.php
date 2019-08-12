<?php

namespace App\Repositories;
use App\Query;
use Auth;


class QueryRepository{
	public $queries;


	public function __construct()
	{
		$queries = Query::where('receiver_id', Auth::id())->whereNull('read_at')->get();
		$this->queries = $queries;
	}

	public function count(){
		return $this->queries->count();
	}


}