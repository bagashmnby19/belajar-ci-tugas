<?php

namespace App\Controllers;

use App\Models\ProductCategoryModel;

class ProductCategoryController extends BaseController
{
    protected $product_categories; 

    function __construct()
    {
        $this->product_categories = new ProductCategoryModel();
    }

    public function index()
    {
        $product_categories = $this->product_categories->findAll();
        $data['product_categories'] = $product_categories;

        return view('v_productcategory', $data);
    }

    public function create()
    {
        $dataForm = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'created_at' => date("Y-m-d H:i:s")
        ];

        $this->product_categories->insert($dataForm);

        return redirect('product_categories')->with('success', 'Data Berhasil Ditambah');
    }
    
    public function edit($id)
    {
        $dataProductCategory = $this->product_categories->find($id);

        $dataForm = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'updated_at' => date("Y-m-d H:i:s")
        ];

        $this->product_categories->update($id, $dataForm);

        return redirect()->to('product_categories')->with('success', 'Data Berhasil Diubah');
    }

    public function delete($id)
    {
        $dataProduk = $this->product_categories->find($id);

        $this->product_categories->delete($id);

        return redirect()->to('product_categories')->with('success', 'Data Berhasil Dihapus');
    }
}