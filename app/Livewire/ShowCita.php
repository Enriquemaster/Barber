<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class ShowCita extends Component
{
//    public $data;
//    public $error;
//
//    public function mount()
//    {
//        $this->fetchData();
//    }
//
//    public function fetchData()
//    {
//        $curl = curl_init();
//        curl_setopt_array($curl, array(
//          CURLOPT_URL => 'http://localhost:8000/api/listado/',
//          CURLOPT_RETURNTRANSFER => true,
//          CURLOPT_ENCODING => '',
//          CURLOPT_MAXREDIRS => 10,
//          CURLOPT_TIMEOUT => 0,
//          CURLOPT_FOLLOWLOCATION => true,
//          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//          CURLOPT_CUSTOMREQUEST => 'GET',
//        ));
//
//         // Ejecuta la solicitud cURL
//         $response = curl_exec($curl);
//
//         // Maneja errores de cURL
//         if ($response === false) {
//             $this->error = curl_error($curl);
//         } else {
//             $result = json_decode($response, true);
//             if (isset($result['success']) && $result['success'] && isset($result['data'])) {
//                 $this->data = $result['data'];
//             } else {
//                 $this->error = 'Error al obtener los datos de la API.';
//             }
//         }
//         // Cierra la sesión cURL
//        curl_close($curl);
//    }
//
    public function render()
    {
        $citas = User::join('user_cita', 'users.id', '=', 'user_cita.user_id')
            ->join('citas', 'citas.id', '=', 'user_cita.cita_id')
            ->select('users.name as Cliente', 'citas.servicio', 'citas.barbero', 'citas.fecha as Fecha')
            ->get();

        return view('livewire.show-cita',  compact('citas'));
    }
}
