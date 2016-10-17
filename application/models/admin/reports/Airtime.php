<?php /* */
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . 'core/Api_model.php');

class Airtime extends Api_model
{
    private $endpoint;
    private $endpoint_sales;
    private $endpoint_stock_all;
    private $endpoint_master_history, $endpoint_master_current, $endpoint_master_add_balance, $endpoint_star_conciliation, $endpoint_company_conciliation;

    public function __construct()
    {
        parent::__construct();
        $this->endpoint_sales = 'api/admin/list/airtime/sales';
        $this->endpoint_stock_all = 'api/admin/list/services/balance';
        $this->endpoint_master_history = 'api/admin/balance/history';
        $this->endpoint_master_current = 'api/admin/master/balance';
        $this->endpoint_master_add_balance = 'api/assign/balance/admin';
        $this->endpoint_company_history = 'api/company/master/balance/history';
        $this->endpoint_company_current = 'api/company/master/balance';
        $this->endpoint_company_add_balance = 'api/admin/assign/balance/distributor';
        $this->endpoint_outlet_history = 'api/outlet/master/balance/history';
        $this->endpoint_outlet_current = 'api/outlet/master/balance';
        $this->endpoint_outlet_add_balance = 'api/assign/balance/outlet';
        $this->endpoint_star_conciliation = 'api/star/conciliation/report';
        $this->endpoint_company_conciliation = 'api/company/conciliation/report';
    }

    public function getData($data = [])
    {
        return $this->get($this->endpoint_sales, $this->furnishParameters($data));
    }

    public function furnishParameters($data)
    {
        if (array_key_exists('start_date', $data)) {
            $data['from_date'] = $data['start_date'];
            $data['to_date'] = $data['end_date'];
            unset($data['start_date']);
            unset($data['end_date']);
        }
        return $data;
    }

    public function getStock($data = [])
    {
        return $this->get($this->endpoint_stock_all, $this->furnishParameters($data));
    }

    public function getMasterHistory($data = [])
    {
        return $this->get($this->endpoint_master_history, $this->furnishParameters($data));
    }

    public function getMasterBalance($data = [])
    {
        return $this->get($this->endpoint_master_current, $data);
    }

    public function addToMasterBalance($data = [])
    {
        return $this->insert($this->endpoint_master_add_balance, $data);
    }

    public function getCompanyMasterHistory($data = [])
    {
        return $this->get($this->endpoint_company_history, $this->furnishParameters($data));
    }

    public function getCompanyMasterBalance($data = [])
    {
        return $this->get($this->endpoint_company_current, $data);
    }

    public function addToCompanyMasterBalance($data = [])
    {
        return $this->insert($this->endpoint_company_add_balance, $data);
    }

    public function getOutletMasterHistory($data = [])
    {
        return $this->get($this->endpoint_outlet_history, $this->furnishParameters($data));
    }

    public function getOutletMasterBalance($data = [])
    {
        return $this->get($this->endpoint_outlet_current, $data);
    }

    public function addToOutletMasterBalance($data = [])
    {
        return $this->insert($this->endpoint_outlet_add_balance, $data);
    }

    public function getStarConciliation($data = [])
    {
        return $this->get($this->endpoint_star_conciliation, $this->furnishParameters($data));
    }

    public function getCompanyConciliation($data = [])
    {
        return $this->get($this->endpoint_company_conciliation, $this->furnishParameters($data));
    }
}
