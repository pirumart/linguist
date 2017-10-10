<?php

use Illuminate\Database\Eloquent\Collection;

function getClass(string $alias)
{
	return [
		'u' => App\Models\User::class,
	][$alias];
}

function dgc(string $alias)
{
	return getClass($alias);
}