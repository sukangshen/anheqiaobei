<?php
/**
 * Desc:
 * User: sukangshen@tal.com
 * Date: 2022/9/7
 */

namespace App\Models\MT;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    const IS_ACTIVE_ON = 1;
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'event';

    public static function getList()
    {
        $res = self::query()->where('is_active', self::IS_ACTIVE_ON)->get();

        return $res->isNotEmpty() ? $res->toArray() : [];
    }
}
