<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Role;
use App\Models\User;

use App\Models\Service;
use App\Models\Menu;
use App\Models\Hall;

class AdminController extends Controller{

    public function __construct(){

    }

    public function index(){
        return view('admin.home');
    }

    public function dashboard(){
        return view('admin.home');
    }

    public function menu(){
        $this->authorize('can_view_food_menu');
        $data['menu'] = Menu::with('reservations.reservation')->get();
        return view('admin.menu', $data);
    }

    public function halls(){
        $this->authorize('can_view_conference_halls');
        $data['halls'] = Hall::with('reservations.reservation')->get();
        return view('admin.halls', $data);
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
        // echo "<pre>";
        // print_r($data['roomReservations']);

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
        // print_r($data['serviceReservations']);

        return view('admin.waiting.services', $data);
    }

    public function waiting4PersonalTranier(){
        $this->authorize('can_view_personal_trainer_reservations');
        $data['personalTrainerReservations'] = Service::where('services.id',Service::IS_PERSONAL_TRAINER)
                            ->leftJoin('personal_trainer_reservations', 'personal_trainer_reservations.service_id', '=', 'services.id')
                            ->leftJoin('reservations', 'reservations.id', '=', 'personal_trainer_reservations.reservation_id')
                            ->get();
        // echo "<pre>";
        // print_r($data['personalTrainerReservations']);

        return view('admin.waiting.trainer', $data);
    }

    public function waiting4DinnerTable(){
        $this->authorize('can_view_dinner_table_reservations');
        $data['dinnerTableReservations'] = Service::where('services.id',Service::IS_DINNER_TABLE)
                            ->leftJoin('dinner_table_reservations', 'dinner_table_reservations.service_id', '=', 'services.id')
                            ->leftJoin('reservations', 'reservations.id', '=', 'dinner_table_reservations.reservation_id')
                            ->get();

        // $data['dinnerTableReservations'] = $dinnerTable->sortBy('arrival')->values()->all();

        return view('admin.waiting.table', $data);
    }

    public function waiting4GYM(){
        $this->authorize('can_view_gym_reservations');
        $data['gymReservations'] = Service::where('services.id',Service::IS_GYM)
                            ->leftJoin('gym_reservations', 'gym_reservations.service_id', '=', 'services.id')
                            ->leftJoin('reservations', 'reservations.id', '=', 'gym_reservations.reservation_id')
                            ->get();

        return view('admin.waiting.gym', $data);
    }

    public function waiting4SwimmingPool(){
        $this->authorize('can_view_swimming_pool_reservations');
        $data['swimmingPoolReservations'] = Service::where('services.id',Service::IS_SWIMMING_POOL)
                            ->leftJoin('swimming_pool_reservations', 'swimming_pool_reservations.service_id', '=', 'services.id')
                            ->leftJoin('reservations', 'reservations.id', '=', 'swimming_pool_reservations.reservation_id')
                            ->get();

        return view('admin.waiting.pool', $data);
    }

    public function waiting4BeautySalon(){
        $this->authorize('can_view_beauty_salon_reservations');
        $data['beautySalonReservations'] = Service::where('services.id',Service::IS_BEAUTY_SALON)
                            ->leftJoin('beauty_salon_reservations', 'beauty_salon_reservations.service_id', '=', 'services.id')
                            ->leftJoin('reservations', 'reservations.id', '=', 'beauty_salon_reservations.reservation_id')
                            ->get();

        return view('admin.waiting.beauty', $data);
    }

    public function waiting4Laundry(){
        $this->authorize('can_view_laundry_reservations');
        $data['laundryReservations'] = Service::where('services.id',Service::IS_LAUNDRY)
                            ->leftJoin('laundry_reservations', 'laundry_reservations.service_id', '=', 'services.id')
                            ->leftJoin('reservations', 'reservations.id', '=', 'laundry_reservations.reservation_id')
                            ->get();

        return view('admin.waiting.laundry', $data);
    }

    public function waiting4Menu(){
        $this->authorize('can_view_menu_reservations');
        $data['menus'] = Menu::with('reservations.reservation')->get();
        return view('admin.waiting.menu', $data);
    }

    public function waiting4Halls(){
        $this->authorize('can_view_conference_hall_reservations');
        $data['halls'] = Hall::with('reservations.reservation')->get();
        return view('admin.waiting.halls', $data);
    }
}
