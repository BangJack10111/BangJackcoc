<?php

namespace App\Http\Controllers;

use App\Models\BangCOC;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BangCOCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // GET SEARCH KEYWORD
        $keyword = $request->get('search');
        // DEFINE ITEM PER PAGE
        $perPage = 8;

        if (!empty($keyword)) {
            //CASE SEARCH, show some
            $BangCOC = BangCOC::where('title', 'LIKE', "%$keyword%")
                // ->orWhere('content', 'LIKE', "%$keyword%")
                // ->orWhere('price', 'LIKE', "%$keyword%")
                // ->orWhere('cost', 'LIKE', "%$keyword%")
                // ->orWhere('photo', 'LIKE', "%$keyword%")
                // ->orWhere('stock', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            // CASE NOT SEARCH, show all
            $BangCOC = BangCOC::latest()->paginate($perPage);
        }

        return view('BangCOC.index', compact('BangCOC'));
        // return view('product.index2', compact('products'));
        // return view('products.index',compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
        return view('BangCOC.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            // 'photo' => 'required',
        ]);

        // GET ALL DATA SUBMIT FROM <form></form>
        $requestData = $request->all();

        // FOR UPLOAD
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('', 'public');
            $requestData['photo'] = url(Storage::url($path));
        }

        //CREATE A RECORD
        BangCOC::create($requestData);

        return redirect('BangCOC')->with('success', 'BangCOC created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //QUERY by id
        $BangCOC = BangCOC::findOrFail($id);

        return view('BangCOC.show', compact('BangCOC'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //QUERY by id
        $BangCOC = BangCOC::findOrFail($id);

        return view('BangCOC.edit', compact('BangCOC'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //validation
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'photo' => 'required',
        ]);

        // GET ALL DATA SUBMIT FROM <form></form>
        $requestData = $request->all();

        // FOR UPLOAD A NEW FILE WITHOUT DELETE THE OLD FILE
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('', 'public');
            $requestData['photo'] = url(Storage::url($path));
        }

        //UPDATE A RECORD
        $BangCOC = BangCOC::findOrFail($id);
        $BangCOC->update($requestData);

        return redirect('BangCOC')->with('success', 'BangCOC updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //DELETE by id
        BangCOC::destroy($id);

        return redirect('BangCOC')->with('success', 'BangCOC deleted successfully.');
    }
}