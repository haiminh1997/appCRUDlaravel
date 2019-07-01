<?php
namespace App\Http\Controllers\Backend;
use App\Models\Backend\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class ProductController extends Controller
{
    //
    public function index(){
        $products = DB::table('products')->paginate(2);
        $data = array();
        $data['products'] = $products;
        return view('admin.product.index', $data);
    }
    public function create(){
        return view('admin.product.create');
    }
    public function delete($id){
        $productModel = ProductModel::find($id);
        $productModel->delete();
        return redirect("/admin/products");
    }
    public function edit($id){
        $product = ProductModel::find($id);
        $data = array();
        $data['product'] = $product;
        return view('admin.product.edit',$data);
    }
    public function store(Request $request){
        $request->validate([
            'product_name' => 'required|min:5|max:125',
            'product_slug' => 'required',
            'product_description' => 'required',
            'product_price ' => 'required'
        ]);
        $inputs = $request->all();
        $productModel = new ProductModel();
        $productModel->product_name = isset($inputs['product_name'])?$inputs['product_name']:"";
        $productModel->product_slug = isset($inputs['product_slug'])?$inputs['product_slug']:"";
        $productModel->product_description = isset($inputs['product_description'])?$inputs['product_description']:"";
        $productModel->product_price = isset($inputs['product_price'])?$inputs['product_price']:"";

        $productModel->save();
        return redirect('/admin/products');
    }
    public function update($id, Request $request){
        $request->validate([
            'product_' => 'required|min:5|max:125',
            'product_slug' => 'required',
            'product_description' => 'required',
            'product_price ' => 'required'
        ]);
        $inputs = $request->all();
        $productModel = new ProductModel();
        $productModel = ProductModel::find($id);
        $productModel->product_name = isset($inputs['product_name'])?$inputs['product_name']:"";
        $productModel->product_slug = isset($inputs['product_slug'])?$inputs['product_slug']:"";
        $productModel->product_description = isset($inputs['product_description'])?$inputs['product_description']:"";
        $productModel->product_price = isset($inputs['product_price'])?$inputs['product_price']:"";
        $productModel->save();
        return redirect('/admin/products');
    }
}
