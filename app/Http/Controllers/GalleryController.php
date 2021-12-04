<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required|string',
            'kategori' => 'required|in:kegiatan,fasilitas',
            'tags' => 'required|array',
            'url' => 'required|image'
        ]);
        $name = $validate['title'].'-'.date('Y-m-d').'.'.$request->file('url')->getClientOriginalExtension();
        $validate['url'] = $name;
        $validate['tags'] = json_encode($validate['tags']);
        $request->file('url')->move('galleries/', $name);
        Gallery::create($validate);
        return redirect('admin/gallery')->with('success', 'Foto berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show($kategori)
    {
        $tags = setting('kategori_tags')[$kategori];
        $galleries = Gallery::where('kategori', $kategori)->get();
        return view('gallery', compact('tags', 'galleries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $validate = $request->validate([
            'title' => 'required|string',
            'kategori' => 'required|in:kegiatan,fasilitas',
            'tags' => 'required|array',
            'url' => 'nullable|image'
        ]);
        $oldUrl = $gallery->url;
        $gallery->update(array_merge($validate, ['tags'=>json_encode($validate['tags'])]));
        if($request->hasFile('url')){
            if(file_exists(public_path('galleries/'.$oldUrl))){
                unlink(public_path('galleries/'.$oldUrl));
            }
            $file = $request->file('url');
            $name = $validate['title'].date('Y-m-d').'.'.$file->getClientOriginalExtension();
            $file->move('galleries/', $name);
            $gallery->update(['url'=>$name]);
        }
        return redirect('admin/gallery')->with('success', 'Foto berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        if(file_exists(public_path('galleries/'.$gallery->url))){
            unlink(public_path('galleries/'.$gallery->url));
        }
        $gallery->delete();
        return back()->with('success', 'Foto berhasil dihapus');
    }
}
