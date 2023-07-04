<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use App\Models\InetModel;

class CustomersController extends BaseController
{
    public function index()
    {
        // AMBIL DATA
        $model = new CustomerModel();

        // Join ke tabel inets
        $builder = $model->db->table('customers');
        $builder->select('customers.*, inets.inet_name as inet');
        $builder->join('inets', 'inets.inet_id = customers.inet', 'left');
        $data['customers'] = $builder->get()->getResultArray();

        return view('customers_list', $data);
    }

    public function create()
    {
        $model = new InetModel();
        $data['inets'] = $model->findAll();
        return view('customers/create', $data);
    }

    public function store()
    {
        $model = new CustomerModel();

        $data = [
            'customer_name' => $this->request->getPost('customer_name'),
            'email' => $this->request->getPost('email'),
            'inet' => $this->request->getPost('inet')
        ];

        $model->insert($data);

        return redirect()->to('/customers');
    }

    public function edit($customer_id)
    {
        $model = new CustomerModel();
        // $data['customer'] = $model->find('customer_id',$customer_id);
        $data['customer'] = $model->where('customer_id', $customer_id)->first();

        $inetModel = new InetModel();
        $data['inets'] = $inetModel->findAll();

        return view('customers/edit', $data);
    }

    public function update($customer_id)
    {
        $model = new CustomerModel();

        $data = [
            'customer_name' => $this->request->getPost('customer_name'),
            'email' => $this->request->getPost('email'),
            'inet' => $this->request->getPost('inet')
        ];
        $model->where('customer_id', $customer_id)->set($data)->update();

        return redirect()->to('/customers');
    }

    public function delete($customer_id)
    {
        $model = new CustomerModel();
        $model->where('customer_id', $customer_id)->delete();

        return redirect()->to('/customers');
    }
}
