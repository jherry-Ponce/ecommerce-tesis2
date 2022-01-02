<?php

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
class SearchUsers extends Component
{
    public $nombre,$TipoDoc,$doc,$telf,$correo;


    public function search(){
        $token= config('services.apisunat.token');
        $urldni =config('services.apisunat.urldni');
        $urlruc =config('services.apisunat.urlruc');
        /* dd($urldni.$this->doc); */
        if ($this->TipoDoc == 'DNI') {
           // Iniciar llamada a API
            
             $response= Http::withHeaders([
                'Referer' => ' https://apis.net.pe/consulta-dni-api',
                'Authorization' => 'Bearer ' . $token
            ])->get($urldni.$this->doc);
        } else {
            $response= Http::withHeaders([
                'Referer' => 'http://apis.net.pe/api-ruc',
                'Authorization' => 'Bearer ' . $token
            ])->get($urlruc.$this->doc);
        }
        
                // Datos listos para usar
        $persona = ($response->json());
        dd($persona);
            
    }
    
    public function render()
    {
        return view('livewire.admin.users.search-users')->layout('layouts.admin');
    }
}
