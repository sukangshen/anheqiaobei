<?php
/**
 * Desc:
 * User: kangshensu@gmail.com
 * Date: 2019-09-12
 */


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resources extends Model
{
    const SOURCE_PROFILE_IMG    = 1;    //  帖子图片
    const SOURCE_IDENTITY_IMG   = 2;    //  身份图片
    const SOURCE_WORK_IMG       = 3;    //  工作图片


    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'resources';

    protected $guarded = [];

    /**
     * @param \DateTime|int $value
     * @return false|int
     * @author dividez
     */
    public function fromDateTime($value)
    {
        return strtotime(parent::fromDateTime($value));
    }


}
