<?php

namespace App\Http\Controllers\Admin;

use App\Models\Portfolio;
use Illuminate\Http\Request;
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
        $data=Portfolio::all();
        return view('admin/portfolio.index',compact('data'));
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
            'price' => 'required',
            'images' => 'required'
        ]);

         $data = $request->merge(['user_id'=>auth()->guard('admin')->user()->id])->except(['images']);
        // dd($data);
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
        // dd($request->all());

        $data = $request->except(['images']);
        $portfolio = Portfolio::find($id)->update($data);

        if ($request->hasFile('images')) {

            foreach ($request->images as $image) {
                $resp = $portfolio->portfolioImages()->find($id)->update(['images' => $image]);
                // dd($resp);
            }
        }

        return redirect()->route('portfolio.index')
            ->with('success', 'Portfolio created successfully');
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
        return back();
    }
}