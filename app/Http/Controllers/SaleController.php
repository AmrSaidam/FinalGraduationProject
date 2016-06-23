<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
    function makeSale(Request $request)
    {
        $product = array();
        $product = [
            'productName' => $request->input('productName'),
            'productAmount' => $request->input('productAmount'),
            'productTotal' => $request->input('productSum')
        ];
        echo $this->saveSaleInvoiceProduct($product);


    }

    private function saveSaleInvoiceProduct($productArray)
    {
        $arraySize = count($productArray);
        for ($counter = 0; $counter < $arraySize; $counter++) {
            if ($productArray['productName'][$counter] != "") {
                $Product = Product::where('Name', $productArray['productName'][$counter])->get();
                echo $numberOfAmount = @$Product[0]['SingleUnitAmount'];
                echo '\n Number of Unit in Cartoon ' . @$Product[0]['numberOfUnitInCartoon'] . '\n ';
                $singleAmount = $numberOfAmount - $productArray['productAmount'][$counter];
                echo 'all number' . $allProductUnits = @$Product[0]['numberOfUnitInCartoon'] * @$Product[0]['WholeQuantity'];
                echo '<br>' . $numberOfUnitsAfterDiscarding = $allProductUnits - $productArray['productAmount'][$counter];
                $numberOfCartoonAfterDiscarding = $numberOfUnitsAfterDiscarding / @$Product[0]['numberOfUnitInCartoon'];

                if ($numberOfCartoonAfterDiscarding > @$Product[0]['numberOfUnitInCartoon']) {
                    $singleUnitAmount = $numberOfCartoonAfterDiscarding - @$Product[0]['numberOfUnitInCartoon'];
                    $numberWithFraction = $singleUnitAmount;
                    echo'<br>singleUnitAmount is '.ceil($singleUnitAmount);
                    echo '<br> fraction is '.($numberWithFraction - ceil($singleUnitAmount));
                    echo'<br>wholeQuantity is '.ceil($numberOfCartoonAfterDiscarding);

                }
//                if ($productArray['productAmount'][$counter] > @$Product[0]['numberOfUnitInCartoon'] ||
//                    $productArray['productAmount'][$counter] < @$Product[0]['SingleUnitAmount']) {
//                    $allProductSaleAmount = $productArray['productAmount'][$counter];
//                } else {
//                    $allProductSaleAmount = $numberOfAmount + $productArray['productAmount'][$counter];
//                }
//
//                echo 'productName ' . $productArray['productName'][$counter];
//                echo $this->checkCartoons($Product, $allProductSaleAmount, $singleAmount) . '\n';
            }
        }

        return 'Done';
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
