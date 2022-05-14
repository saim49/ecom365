<?php

namespace App\Controllers;
use App\Models\ProductModel;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\API\ResponseTrait;
use App\Controllers\BaseController;

class Products extends BaseController
{
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger){
        parent::initController($request, $response, $logger);
        date_default_timezone_set('Asia/Karachi');
        $this->ProductModel = new ProductModel();
        helper(['form', 'url']);

    }
    public function index()
    {
        // return view('welcome_message');
        $data['title'] = 'Product List';
        $data['products'] = "nav-expanded nav-active";
        $data['product_list'] = "nav-active";
        $data['main_content'] = "products/productList";
        // $data['category_list_js'] = $this->Commonmodel->Get_all_record("inv_category");
        return view($data['main_content'], $data);
    }
    public function product_list(){
    	$ProductModel =model('App\Models\ProductModel');
        $limit = $this->request->getVar('length');
        $start = $this->request->getVar('start');
        $totalData = count($ProductModel->findAll());
        $totalFiltered = $totalData;

        if (empty($this->request->getVar('search')['value'])) {
        	$products = $ProductModel->findAll($limit,$start);
        } else {
            $search = $this->request->getVar('search')['value'];

            $products = $ProductModel->product_search($limit, $start, $search, $cat);

            $totalFiltered = $ProductModel->product_search_count($search, $cat);
        }
        // echo"<pre>";print_r($products);exit();

        $data = array();
        if (!empty($products)) {
            foreach ($products as $product) {
                $nestedData['name'] = $product['name'];
                $nestedData['image'] = $product['name'];
                $nestedData['category'] = $product['cat_id'];
                $nestedData['sub_category'] = $product['subcat_id'];
                $nestedData['price'] = $product['price'];
                $nestedData['status'] = $product['status'];
                $nestedData['Action'] = $product['status'];
                $data[] = $nestedData;

            }
        }
        $json_data = array(
            "draw" => intval($this->request->getVar('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data,
        );
        echo json_encode($json_data);
    }
}