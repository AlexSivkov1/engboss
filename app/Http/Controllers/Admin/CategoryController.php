<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|\Illuminate\View\View
     */
    public function index()
    {
        $categories = Category::paginate(20);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
     /*   $request->validate([
            'title' => 'required',
        ]);
        Category::create($request->all());
        $request->session()->flash('success', 'Категория добавлена');
        return redirect()->route('categories.index');


        {*/

            $request->validate([

                'title' => 'required',
//                'description' => 'required',
//                'content' => 'required',
//                'category_id' => 'required|integer',
                'thumbnail' => 'nullable|image',
//                'brand_id' => 'nullable',
            ]);

            $data = $request->all();

            $data['thumbnail'] = Category::uploadImage($request);

            $category = Category::create($data);


            return redirect()->route('categories.index')->with('success', 'Категория добавлена');

        }







    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));

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
          /*  'description' => 'required',
            'content' => 'required',
            'price' => 'required',
            'category_id' => 'required|integer',*/
            'thumbnail'=> 'nullable|image',

        ]);
        $category = Category::find($id);
        $data = $request->all();

        if($file = Category::uploadImage($request, $category->thumbnail)){
            $data['thumbnail'] = $file;
        }
        $category->update($data);


        return redirect()->route('categories.index')->with('success', 'Изменения сохранены');






    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        Storage::delete($category->thumbnail);
        $category->delete();



        // или Category::destroy($id);
        return redirect()->route('categories.index')->with('success', 'Категория удалена');






    }
}
