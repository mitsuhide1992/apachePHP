<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\KpiModel;

class BidemoController extends Controller {
    public function querytest () {
        $KpiM = new KpiModel();
        $kpi = $KpiM->query('SELECT * FROM kpi');
        var_dump($kpi);
    }
}