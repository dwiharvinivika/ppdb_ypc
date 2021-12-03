<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormAdminGallery extends Component
{
    use WithFileUploads;

    public $previewImg = '/image/kegiatan/1.jpg';
    public $gallery = null;
    public $url;
    public $nameKegiatan = '';
    public $nameFasilitas = '';
    public $listKategori = [];
    public $kategori;
    public $tags = [];
    public $action;

    public function mount()
    {
        $this->kategori = old('kategori', $this->gallery->kategori??'kegiatan');
        $this->tags = old('tags.*', json_decode($this->gallery->tags??'', true));
        $this->listKategori = setting('kategori_tags');
        $this->action = route('gallery.store');
        if(!is_null($this->gallery)){
            $this->previewImg = asset('galleries/'.$this->gallery->url);
            $this->tags = json_decode($this->gallery->tags, true);
            $this->action = route('gallery.update', $this->gallery);
        }
    }

    public function addKegiatan()
    {
        $this->validate(['nameKegiatan'=>"required"]);
        $this->listKategori['kegiatan'][] = $this->nameKegiatan;
        $this->setKategori();
        $this->reset('nameKegiatan');
    }

    public function deleteKegiatan($i)
    {
        unset($this->listKategori['kegiatan'][$i]);
        $this->setKategori();
    }

    public function addFasilitas()
    {
        $this->validate(['nameFasilitas'=>"required"]);
        $this->listKategori['fasilitas'][] = $this->nameFasilitas;
        $this->setKategori();
        $this->reset('nameFasilitas');
    }

    public function deleteFasilitas($i)
    {
        unset($this->listKategori['fasilitas'][$i]);
        $this->setKategori();
    }

    private function setKategori()
    {
        Setting::updateOrCreate([
            'key' => 'kategori_tags'
        ],[
            'value' => json_encode($this->listKategori)
        ]);
    }

    public function render()
    {
        return view('livewire.form-admin-gallery');
    }
}
