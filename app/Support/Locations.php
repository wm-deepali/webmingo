<?php

namespace App\Support;

use Illuminate\Support\Facades\DB;

/**
 * Single place for state / city lookups.
 * ADJUST the table + column names below to match the project's own tables
 * (assumed: states(id, name) and cities(id, state_id, name)).
 */
class Locations
{
    public static function states()
    {
        return DB::table('states')->orderBy('name')->get(['id', 'name']);
    }

    public static function cities($stateId)
    {
        return DB::table('cities')->where('state_id', $stateId)->orderBy('name')->get(['id', 'name']);
    }

    public static function stateName($id): ?string
    {
        return $id ? DB::table('states')->where('id', $id)->value('name') : null;
    }

    public static function cityName($id): ?string
    {
        return $id ? DB::table('cities')->where('id', $id)->value('name') : null;
    }
}
