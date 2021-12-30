<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|\Illuminate\View\View
     */
    public function index()
    {
        $brands = Brand::paginate(20);
        return view('admin.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
        Brand::create($request->all());
        $request->session()->flash('success', 'Бренд добавлен');
        return redirect()->route('brands.index');
    }




    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('admin.brands.edit', compact('brand'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $brand = Brand::find($id);
        $brand->update($request->all());
        return redirect()->route('brands.index')->with('success', 'Изменения сохранены');


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        // или Category::destroy($id);
        return redirect()->route('brands.index')->with('success', 'Бренд удален');

    }
}
