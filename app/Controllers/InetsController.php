<?php

namespace App\Controllers;

use App\Models\InetModel;

class InetsController extends BaseController
{
    public function index()
    {
        $model = new InetModel();
        $data['inets'] = $model->findAll();

        return view('inets_list', $data);
    }

    public function create()
    {
        return view('inets/create');
    }

    public function store()
    {
        $model = new InetModel();

        $data = [
            'inet_name' => $this->request->getPost('inet_name'),
            'inet_price' => $this->request->getPost('inet_price')
        ];

        $model->insert($data);

        return redirect()->to('/inets');
    }

    public function edit($inet_id)
    {
        $model = new InetModel();
        $data['inet'] = $model->where('inet_id', $inet_id)->first();

        return view('inets/edit', $data);
    }

    public function update($inet_id)
    {
        $model = new InetModel();

        $data = [
            'inet_name' => $this->request->getPost('inet_name'),
            'inet_price' => $this->request->getPost('inet_price')
        ];

        $model->where('inet_id', $inet_id)->set($data)->update();

        return redirect()->to('/inets');
    }

    public function delete($inet_id)
    {
        $model = new InetModel();

        $model->where('inet_id', $inet_id)->delete();

        return redirect()->to('/inets');
    }
}
