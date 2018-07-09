<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use Cart;
class ShoppingCartController extends Controller
{
    public function index(){
    	return view('admin.vendas.items_pedido')
    	->with('produtos',Produto::all());
    }

    public function addCarrinho($id){
    	$produto=Produto::find($id);

    	$cart=Cart::add([
    		'id'=>$produto->produto_id,
    		'name'=>$produto->nome,
    		'qty'=>1,
    		'price'=>$produto->preco
    	]);

    	Cart::associate($cart->rowId,'App\Produto');

    	return redirect()->back();
    }

    public function removerItem($id){

    	$produto=Produto::find($id);

    	$cart=Cart::remove($id);

    	return redirect()->back();
    }

    public function removerItens(){

    	$cart=Cart::destroy();
    	return redirect()->back();
    }


     public function reduzirItem($id,$qty){

     	Cart::update($id,$qty-1);
     	return redirect()->back();
     }



     public function aumentarItem($id,$qty){
     	Cart::update($id,$qty+1);
     	return redirect()->back();
     }
}
