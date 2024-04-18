<?php

namespace App\Livewire;

use App\Models\Comment as ModelsComment;
use Livewire\Component;

class Comment extends Component
{
    public $nama;
    public $ucapan;
    public $dataUcapans;
    public function store()
    {

        $rules = [
            'nama' => 'required',
            'ucapan' => 'required',
        ];
        $pesan = [
            'nama.required' => 'nama harus diisi',
            'ucapan.required' => 'ucapan harus diisi',
        ];
        $validated = $this->validate($rules, $pesan);
        ModelsComment::create($validated);
        session()->flash('message', 'ucapan terkirim');
    }
    public function render()
    {
        $this->dataUcapans = ModelsComment::orderByRaw('created_at ASC')->get();
        return view('livewire.comment');
    }
}
