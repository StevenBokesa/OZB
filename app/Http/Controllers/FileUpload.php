<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class FileUpload extends Controller
{
    // Return a view for uploading a product
    public function createForm(){
        return view('product_upload');
      }
    // Function for posting the product on the database
      public function fileUpload(Request $req){
            $req->validate([
            'file' => 'required|mimes:jpg,jpeg,png,csv,txt,xlx,xls,pdf|max:2048'
            ]);
            $productModel = new Product; 
            if($req->file()) {
                $fileName = time().'_'.$req->file->getClientOriginalName();
                $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
                $productModel->name = time().'_'.$req->file->getClientOriginalName();
                $productModel->description = $req->description;
                $productModel->price = $req->price;
                $productModel->image = '/storage/' . $filePath;
                $productModel->save();
                return back()
                ->with('success','Product has been uploaded.')
                ->with('file', $fileName);
            }
       }
}
