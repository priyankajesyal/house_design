<?php

namespace App\Http\Controllers\Admin;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Models\PortfolioImage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Portfolio::all();
        return view('admin/portfolio.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd(Auth::user());
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'images' => 'required'
        ]);

        $data = $request->merge(['user_id' => auth()->guard('admin')->user()->id])->except(['images']);
        $portfolio = Portfolio::create($data);

        if ($request->hasFile('images')) {
            foreach ($request->images as $image) {
                $resp = $portfolio->portfolioImages()->create(['images' => $image]);
            }
        }

        return redirect()->route('portfolio.index')
            ->with('success', 'Portfolio created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Portfolio::with(['portfolioImages'])->find($id);
        return view('admin.portfolio.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = Portfolio::find($id);
        return view('admin.portfolio.edit', compact('data'));
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
        $this->validate($request, [
            'title' => 'required|unique:portfolios,title,' . $id,
            'description' => 'required',
        ]);
        $portfolio = Portfolio::find($id);
        $portfolio->update($request->all());
        if ($request->hasFile('images')) {
            foreach ($request->images as $image) {
                $input = $portfolio->portfolioImages()->create(['images' => $image]);
            }
        }
        return redirect()->route('portfolio.index')
            ->with('success', 'Portfolio Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Portfolio::find($id)->delete();
        return back()->with('error', 'Portfolio has been Deleted successfully');;
    }

    public function imagedelete(Request $request)
    {
        $delete = PortfolioImage::find($request->id)->delete();
        if ($delete) {
            return response()->json(['status' => 'success', 'message' => 'Image has been deleted successfully']);
        }
        return response()->json(['status' => 'error', 'message' => 'Something went wrong']);
    }
}