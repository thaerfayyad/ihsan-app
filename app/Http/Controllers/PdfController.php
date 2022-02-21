<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    //

    public function generate_pdf()
    {
      // retrei;ve all records from db
    //   $items = Product::all();
      $data['items']= Product::all();
      // share data to view
    //   view()->share('products',$items);
      $pdf = PDF::loadView('cms.products.pdf',$data);
      // download PDF file with download method
      return $pdf->stream('products.pdf');
    }
}
