<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Banner::all();
        return view('admin.banners.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerRequest $request)
    {

        $input = $request->merge(['user_id' => auth()->guard('admin')->user()->id])->except(['image']);
        // dd($input);
        if ($image = $request->file('image')) {

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $request->file('image')->storeAs('public/banner', $profileImage);
            $input['image'] = "$profileImage";
        }
        Banner::create($input);

        return redirect()->route('banners.index')
            ->with('success', 'banner created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Banner::where('id', $id)->get();
        return view('admin.banners.show', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Banner::find($id);
        return view('admin.banners.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { {
            $data = Validator::make($request->all(), [
                'title' => 'required|unique:banners,title,' . $id,

            ]);
            if ($data->fails()) {
                return response(['status' => 'error', 'message' => $data->errors()->all()], 400);
            }
            $input = $request->all();

            if ($image = $request->file('image')) {

                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $request->file('image')->storeAs('public/banner', $profileImage);
                $input['image'] = "$profileImage";
            } else {
                unset($input['image']);
            }
            $product = Banner::find($id);
            $product->update($input);

            return redirect()->route('banners.index')
                ->with('success', 'Banner updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Banner::where('id', $id)->delete();
        return back()->with('error', 'Banner has been deleted successfully!');
    }
}