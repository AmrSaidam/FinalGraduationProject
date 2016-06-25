<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Session;

class SaleController extends Controller
{
    function makeSale(Request $request)
    {


        $request->session()->flash('quantityError' ,'لاتوجد كمية كافية في المتجر ');

        $product = array();
        $product = [
            'productName' => $request->input('productName'),
            'productAmount' => $request->input('productAmount'),
            'productTotal' => $request->input('productSum')
        ];
//        \Illuminate\Support\Facades\Session::put('quantityError' ,['لاتوجد كمية كافية في المتجر ']);
      return redirect('/dashboard/SalePoint')->with('quantityError' ,'لاتوجد كمية كافية في المتجر ');

      //$this->saveSaleInvoiceProduct($product , $request);



    }

    private function saveSaleInvoiceProduct($productArray ,$request)
    {

        $arraySize = count($productArray);
        for ($counter = 0; $counter < $arraySize; $counter++) {
            if ($productArray['productName'][$counter] != "") {
                $Product = Product::where('Name', $productArray['productName'][$counter])->get();

                $allProductUnits = @$Product[0]['numberOfUnitInCartoon'] * @$Product[0]['WholeQuantity'];
                if($productArray['productAmount'][$counter] > $allProductUnits)
                {

                    echo 'Amr';

//                   return Redirect::to('/dashboard/SalePoint')
//                        ->header('Cache-Control', 'no-store, no-cache, must-revalidate');


                     return redirect('dashboard');//;->back()->with('quantityError' ,['لاتوجد كمية كافية في المتجر ']);

                }
                $numberOfUnitsAfterDiscarding = $allProductUnits - $productArray['productAmount'][$counter];
                $numberOfCartoonAfterDiscarding = $numberOfUnitsAfterDiscarding / @$Product[0]['numberOfUnitInCartoon'];

                DB::table('products')->where('Product_ID', @$Product[0]['Product_ID'])->update(array('WholeQuantity' => $numberOfCartoonAfterDiscarding,
                    'SingleUnitAmount' => $numberOfUnitsAfterDiscarding));
            }
        }

    }

    private function checkCartoons($product, $productAmount, $singleAmount)
    {

        if ($productAmount < @$product[0]['numberOfUnitInCartoon']) {
            DB::table('products')->where('Product_ID', $product[0]['Product_ID'])
                ->update(array('SingleUnitAmount' => $singleAmount));
            return 'Done1';
        } else if ($productAmount > @$product[0]['numberOfUnitInCartoon']) {
            echo $tempAmount = $productAmount - $product[0]['numberOfUnitInCartoon'];
            if ($product[0]['WholeQuantity'] != 0) {
                $wholeQuantity = @$product[0]['WholeQuantity'] - 1;
                DB::table('products')->where('Product_ID', @$product[0]['Product_ID'])
                    ->update(array('SingleUnitAmount' => ($product[0]['numberOfUnitInCartoon'] - $tempAmount), 'WholeQuantity' => $wholeQuantity));
                return '@@#########fuck';
            } else {
                return 'You do not have enough amount in your store';
            }
        } else {
            $wholeQuantity = @$product[0]['WholeQuantity'] - 1;
            DB::table('products')->where('Product_ID', @$product[0]['Product_ID'])
                ->update(array('SingleUnitAmount' => @$product[0]['numberOfUnitInCartoon'], 'WholeQuantity' => $wholeQuantity));
            return 'Done2';

        }

    }

}
