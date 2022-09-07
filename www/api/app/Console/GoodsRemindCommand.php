<?php
/**
 * Desc:
 * User: sukangshen@tal.com
 * Date: 2021/12/8
 */

namespace App\Console;

use Illuminate\Console\Command;

class GoodsRemindCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'goods:remind';



    public function handle()
    {
        $url= 'http://10.14.230.12/home/search/index/cate_id/581.html';
        $data= array('foo'=> 'bar');
        $data= http_build_query($data);
        $opts= array(
            'http'=> array(
                'method'=> 'POST',
                'header'=>"Content-type: application/x-www-form-urlencoded\r\n" .
                    "Content-Length: " . strlen($data) . "\r\n",
                'content'=> $data
            ));
        $ctx= stream_context_create($opts);
        $html= @file_get_contents($url,'',$ctx);

        var_dump($html);


    }
}
