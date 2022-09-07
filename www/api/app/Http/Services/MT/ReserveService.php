<?php
/**
 * Desc:
 * User: sukangshen@tal.com
 * Date: 2022/9/7
 */

namespace App\Http\Services\MT;

use App\Models\MT\Event;

class ReserveService
{

    public function index()
    {
        return Event::getList();
    }

    public function subRemind($params)
    {

    }

    public function unSubRemind($params)
    {

    }
}


