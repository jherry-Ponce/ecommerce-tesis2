<?php

namespace App\Http\Livewire\Admin\Slider;

use App\Models\Slider;
use Livewire\Component;
use Livewire\WithFileUploads;
class CreateSlider extends Component
{
    use WithFileUploads;
    public $description,$Nombre,$imagen,$estado, $modal = false;

    protected $rules=[
        'Nombre'=>'required',
        'imagen'=>'required',
        'description'=>'required',
    ];

    public function saved(){
        $this->validate();
        
        $imagen=$this->imagen->store('sliders');
       /*  dd($imagen); */
    
        Slider::create([
            'Nombre'=>$this->Nombre,
            'imagen'=>$imagen,
            'descripcion'=>$this->description,
            'estado'=>$this->estado,
        ]);
        $this->reset();
    }



    public function crearModal()
    {
       /*  $this->limpiarCampos(); */
        $this->abrirModal();
        
    }

    public function abrirModal()
    {
        $this->modal = true;
        
    }

    public function cerrarModal()
    {
        $this->modal = false;
        $this->reset();
    }

    public function render()
    {
        $slider=Slider::all();
    /*     dd($slider); */
        return view('livewire.admin.slider.create-slider', compact('slider'))->layout('layouts.admin');
    }
}
