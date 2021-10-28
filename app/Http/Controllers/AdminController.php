<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Service;
use App\Models\Role;
use App\Models\User;

class AdminController extends Controller{

    public function __construct(){

    }

    public function index(){
        return view('admin.home');
    }

    public function dashboard(){
        return view('admin.home');
    }

    public function services(){
        $this->authorize('can_view_services');
        $data['services'] = Service::with('reservations.reservation')->get();
        return view('admin.services', $data);
    }

    public function rooms(){
        $this->authorize('can_view_rooms');
        $data['rooms'] = Room::with('reservations.reservation')->get();
        return view('admin.rooms', $data);
    }

    public function users(){
        $this->authorize('can_view_users');
        $data['roles'] = Role::all();
        $data['users'] = User::all();
        return view('admin.users',$data);
    }



    public function waiting4Rooms(){
        $this->authorize('can_view_room_reservations');
        $data['roomReservations'] = Room::with('reservations.reservation')
                            ->leftJoin('room_reservations', 'room_reservations.room_id', '=', 'rooms.id')
                            ->leftJoin('reservations', 'reservations.id', '=', 'room_reservations.reservation_id')
                            ->get();

        $data['rooms'] = Room::with('reservations.reservation')->get();
        return view('admin.waiting.rooms', $data);
    }

    public function waiting4Services(){
        $this->authorize('can_view_service_reservations');
        $data['serviceReservations'] = Service::with('reservations.reservation')
                            ->leftJoin('service_reservations', 'service_reservations.service_id', '=', 'services.id')
                            ->leftJoin('reservations', 'reservations.id', '=', 'service_reservations.reservation_id')
                            ->get();
        // echo "<pre>";
        // print_r($data['services']);

        return view('admin.waiting.services', $data);
    }

    public function waiting4PersonalTranier(){
        $this->authorize('can_view_personal_trainer_reservations');
        $data['personalTrainerReservations'] = Service::where('services.id',Service::IS_PERSONAL_TRAINER)
                            ->with('reservations.reservation')
                            ->leftJoin('service_reservations', 'service_reservations.service_id', '=', 'services.id')
                            ->leftJoin('reservations', 'reservations.id', '=', 'service_reservations.reservation_id')
                            ->get();

         return view('admin.waiting.trainer', $data);
    }

    public function waiting4DinnerTable(){
        $this->authorize('can_view_dinner_table_reservations');
        $data['dinnerTableReservations'] = Service::where('services.id',Service::IS_DINNER_TABLE)
                            ->with('reservations.reservation')
                            ->leftJoin('service_reservations', 'service_reservations.service_id', '=', 'services.id')
                            ->leftJoin('reservations', 'reservations.id', '=', 'service_reservations.reservation_id')
                            ->get();

        // $data['dinnerTableReservations'] = $dinnerTable->sortBy('arrival')->values()->all();

        return view('admin.waiting.table', $data);
    }
}
