<?php

namespace App;

class Booking extends \TCG\Voyager\Models\Page
{
	protected $hidden = [
		'author_id',
	];
}
