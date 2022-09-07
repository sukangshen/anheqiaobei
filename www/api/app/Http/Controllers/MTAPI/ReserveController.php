<?php
/**
 * Desc:预约页面
 * User: sukangshen
 * Date: 2022/9/7
 */

use App\Http\Controllers\Api\Controller as Controller;
use App\Http\Services\MT\ReserveService;
use Illuminate\Http\Request;

class ReserveController extends Controller
{

    protected $reserveService;

    public function __construct(ReserveService $reserveService)
    {
        $this->reserveService = $reserveService;
    }

    public function index(Request $request)
    {
        return $this->success($this->reserveService->index());
    }

    public function subRemind(Request $request)
    {
        return $this->success($this->reserveService->subRemind($request->all()));
    }

    public function unSubRemind(Request $request)
    {
        return $this->success($this->reserveService->unSubRemind($request->all()));

    }

}
