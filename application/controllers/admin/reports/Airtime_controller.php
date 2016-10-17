<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Airtime_controller extends Admin_Controller
{


    public function __construct()

    {

        parent::__construct();

        $this->lang->load('common');

        $this->lang->load('admin/reports/common');

        $this->lang->load('admin/reports/airtime');

        $this->lang->load('admin/services');


        if (!$this->auricell_auth->logged_in()) redirect('auth/login', 'refresh');


        $this->load->model('admin/reports/airtime');

    }


    public function index()

    {

        /* Title Page :: Common */

        $this->page_title->push(lang('menu_reports_airtime_sale'));

        $this->data['pagetitle'] = $this->page_title->show();



        /* Breadcrumbs :: Common */

        $this->breadcrumbs->unshift(1, lang('menu_reports_airtime_sale'), 'admin/report/airtime/sales');

        $this->data['breadcrumb'] = $this->breadcrumbs->show();



        /* Data */

        $this->data['error'] = NULL;

        $this->data['charset'] = 'utf-8';

        $this->data['table_data_ajax_path'] = 'admin/report/airtime/sales/ajax';



        $data = [];

        if (isset($_REQUEST['start_date'])) list($data['start_date'], $data['end_date']) = [$_REQUEST['start_date'], isset($_REQUEST['end_date']) ? $_REQUEST['end_date'] : $_REQUEST['start_date']];

        $this->data['data'] = $this->airtime->getData($data);

        $this->data['token'] = $this->session->secret;


        /* Companies */

        if ($this->data['user_data']->user_type == 'a'):

            $this->load->model('admin/companies');

            $companies = $this->companies->getData();

            $this->data['companies_option'] = '';

            foreach ($companies[0]->data as $company) {

                $this->data['companies_option'] .= '<option value="' . $company->company_id . '">' . $company->company_id . ' -- ' . $company->name . '</option>';

            }

        endif;


        /* Load Template */

        $this->template->admin_render('admin/reports/airtime/sales', $this->data);


    }


    public function getRawData()
    {

        $data = $_REQUEST;

        $data = $this->airtime->getData($data);

        $this->output->set_content_type('application/json')

            ->set_output(json_encode($data[0]));

    }



    public function index_stock()

    {

        /* Title Page :: Common */

        $this->page_title->push(lang('menu_history_airtime'));

        $this->data['pagetitle'] = $this->page_title->show();



        /* Breadcrumbs :: Common */

        $this->breadcrumbs->unshift(1, lang('menu_history_airtime'), 'admin/report/airtime/stock/history');

        $this->data['breadcrumb'] = $this->breadcrumbs->show();



        /* Data */

        $this->data['error'] = NULL;

        $this->data['charset'] = 'utf-8';

        $this->data['table_data_ajax_path'] = 'admin/report/airtime/stock/history/ajax';



        /* Companies */

        $this->load->model('admin/companies');

        $companies = $this->companies->getData();

        $this->data['companies_option'] = '';

        foreach ($companies[0]->data as $company) {

            $this->data['companies_option'] .= '<option value="' . $company->company_id . '">' . $company->company_id . ' -- ' . $company->name . '</option>';

        }



        /* Load Template */

        $this->template->admin_render('admin/reports/airtime/stock', $this->data);



    }


    public function getRawData_stock()
    {

        $data = $_REQUEST;

        $data['bar_code'] = '900000';

        $data = $this->airtime->getCompanyMasterHistory($data);

        $this->output->set_content_type('application/json')

            ->set_output(json_encode($data[0]));

    }


    public function index_conciliation()

    {

        /* Title Page :: Common */

        $this->page_title->push(lang('menu_reports_conciliation'));

        $this->data['pagetitle'] = $this->page_title->show();


        /* Breadcrumbs :: Common */

        $this->breadcrumbs->unshift(1, lang('menu_reports_conciliation'), 'admin/report/airtime/conciliation');

        $this->data['breadcrumb'] = $this->breadcrumbs->show();


        /* Data */

        $this->data['error'] = NULL;

        $this->data['charset'] = 'utf-8';

        $this->data['table_data_ajax_path'] = 'admin/report/airtime/conciliation/ajax';


        /* Companies */

        $this->load->model('admin/companies');

        $companies = $this->companies->getData();

        $this->data['companies_option'] = '';

        foreach ($companies[0]->data as $company) {

            $this->data['companies_option'] .= '<option value="' . $company->company_id . '">' . $company->company_id . ' -- ' . $company->name . '</option>';

        }


        /* Load Template */

        $this->template->admin_render('admin/reports/airtime/conciliation', $this->data);


    }


    public function getRawData_conciliation()
    {
        $data = $_REQUEST;
        $data = $this->airtime->getConciliation($data);
        $this->output->set_content_type('application/json')
            ->set_output(json_encode($data[0]));
    }


    public function index_star_conciliation()
    {
        /* Title Page :: Common */
        $this->page_title->push(lang('airtime_star_conciliation_report_title'));
        $this->data['pagetitle'] = $this->page_title->show();

        /* Breadcrumbs :: Common */
        $this->breadcrumbs->unshift(1, lang('menu_reports_star_conciliation'), 'admin/report/airtime/star/conciliation');
        $this->data['breadcrumb'] = $this->breadcrumbs->show();

        /* Data */
        $this->data['error'] = NULL;
        $this->data['charset'] = 'utf-8';
        $this->data['table_data_ajax_path'] = 'admin/report/airtime/star/conciliation/ajax';
        if ($this->data['user_data']->user_type == 'a'):
            /* Companies */
            $this->load->model('admin/companies');
            $companies = $this->companies->getData();
            $this->data['companies_option'] = '';
            foreach ($companies[0]->data as $company) {
                $this->data['companies_option'] .= '<option value="' . $company->company_id . '">' . $company->company_id . ' -- ' . $company->name . '</option>';
            }
        endif;

        /* Load Template */
        $this->template->admin_render('admin/reports/airtime/conciliation', $this->data);
    }


    public function getRawData_star_conciliation()
    {
        $data = $_REQUEST;
        $data = $this->airtime->getStarConciliation($data);
        $this->output->set_content_type('application/json')
            ->set_output(json_encode($data[0]));
    }


    public function index_company_conciliation()
    {
        /* Title Page :: Common */

        $this->page_title->push(lang('menu_reports_company_conciliation'));
        $this->data['pagetitle'] = $this->page_title->show();

        /* Breadcrumbs :: Common */
        $this->breadcrumbs->unshift(1, lang('menu_reports_company_conciliation'), 'admin/report/airtime/company/conciliation');
        $this->data['breadcrumb'] = $this->breadcrumbs->show();

        /* Data */
        $this->data['error'] = NULL;
        $this->data['charset'] = 'utf-8';
        $this->data['table_data_ajax_path'] = 'admin/report/airtime/company/conciliation/ajax';
        if ($this->data['user_data']->user_type == 'a'):
            /* Companies */
            $this->load->model('admin/companies');
            $companies = $this->companies->getData();
            $this->data['companies_option'] = '';
            foreach ($companies[0]->data as $company) {
                $this->data['companies_option'] .= '<option value="' . $company->company_id . '">' . $company->company_id . ' -- ' . $company->name . '</option>';
            }
        endif;

        /* Load Template */
        $this->template->admin_render('admin/reports/airtime/company_conciliation', $this->data);
    }


    public function getRawData_company_conciliation()

    {

        $data = $_REQUEST;

        $data = $this->airtime->getCompanyConciliation($data);

        $this->output->set_content_type('application/json')
            ->set_output(json_encode($data[0]));

    }

}

