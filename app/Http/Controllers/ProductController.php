<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //salvataggio sul database e ridirezione dell' utente
        $form_data = $request->all();
        // dd($form_data);



        // $new_product = new Product();
        // inserendo nel model il fillable in Products.php basta mettere il metodo fill
        // per inserire i valori
        // $new_product->fill($form_data);
        // $new_product->save();


        // $new_product = new Product();
        // $new_product->title = $form_data['title'];
        // $new_product->description = $form_data['description'];
        // $new_product->image = $form_data['image'];
        // $new_product->weight = $form_data['weight'];
        // $new_product->cooking_time = $form_data['cooking_time'];
        // $new_product->type = $form_data['type'];
        // $new_product->save();



        $new_product = Product::create($form_data);

        
        return redirect()->route('products.index');
        // return redirect()->route('products.show', $new_product->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //modifica del singolo prodotto
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //salvataggio e ridirezione dell' utente
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //cancellazione e ridirezione dell' utente
    }
}
