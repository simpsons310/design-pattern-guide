<?php

namespace App\MVCPattern\Controllers;

use App\MVCPattern\Core\Controller;
use App\MVCPattern\Core\Request;
use App\MVCPattern\Core\View;
use App\MVCPattern\Models\Data;

class DataController extends Controller
{
    public function list()
    {
        $data = new Data();
        $dataList = $data->getAll();
        View::render('list.php', ['data' => $dataList]);
    }

    public function createForm()
    {
        View::render('form.php', [
            'mode' => 'create',
            'name' => null,
            'age' => null,
            'phone' => null
        ]);
    }

    public function create(Request $request)
    {
        $data = new Data();
        $requestData = $request->request();
        $data->create([
            'name' => $requestData['name'],
            'age' => $requestData['age'],
            'phone' => $requestData['phone']
        ]);
        $this->redirect('list');
    }

    public function updateForm(Request $request)
    {
        $data = new Data();
        $id = $request->query()['id'];
        $formData = $data->get($id);
        View::render('form.php', [
            'mode' => 'update',
            'id' => $id,
            'name' => $formData['name'],
            'age' => $formData['age'],
            'phone' => $formData['phone']
        ]);
    }

    public function update(Request $request)
    {
        $data = new Data();
        $requestData = $request->request();
        $data->update($requestData['id'], [
            'name' => $requestData['name'],
            'age' => $requestData['age'],
            'phone' => $requestData['phone'],
        ]);
        $this->redirect('list');
    }

    public function delete(Request $request)
    {
        $data = new Data();
        $id = $request->request()['id'];
        $data->delete($id);
        $this->redirect('list');
    }
}
