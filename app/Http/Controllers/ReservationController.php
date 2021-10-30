<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hall;
use App\Models\Menu;
use App\Models\Room;
use App\Models\Service;
use App\Models\Reservation;
use App\Models\RoomReservation;
use App\Models\ServiceReservation;
use App\Models\MenuReservation;
use App\Models\HallReservation;

use App\Models\LaundryReservation;
use App\Models\PersonalTrainerReservation;
use App\Models\DinnerTableReservation;
use App\Models\BeautySalonReservation;
use App\Models\GYMReservation;
use App\Models\SwimmingPoolReservation;

class ReservationController extends Controller{

    public function __construct(){

    }

    public function index(){

    }

    public function room(Request $request){
        $room = Room::where('name' , '=', $request->input('room'))->first();

        //Reservation
        $reservation = new Reservation;
        $reservation->reservation_name = $request->input('name');
        $reservation->phone_number = $request->input('contact');
        $reservation->arrival = $request->input('arrival');
        $reservation->save();

        //Reserving Room
        $roomReserve = new RoomReservation;
        $roomReserve->room_id = $room->id;
        $roomReserve->reservation_id = $reservation->id;
        $roomReserve->departure = $request->input('departure');
        $roomReserve->number_of_adults = $request->input('adults');
        $roomReserve->number_of_children = $request->input('kids');
        $roomReserve->status = 0;
        $roomReserve->remark = $request->input('remark');
        $roomReserve->save();

        return redirect()->route('reserve.thankyou',$reservation->id)
                ->with('success','Room Reserved');
    }

    public function hall(Request $request){
        $hall = Hall::where('name' , '=', $request->input('hall'))->first();

        //Reservation
        $reservation = new Reservation;
        $reservation->reservation_name = $request->input('name');
        $reservation->phone_number = $request->input('contact');
        $reservation->arrival = $request->input('arrival');
        $reservation->save();

        //Reserving hall
        $hallReserve = new HallReservation;
        $hallReserve->hall_id = $hall->id;
        $hallReserve->reservation_id = $reservation->id;
        $hallReserve->departure = $request->input('departure');
        $hallReserve->status = 0;
        $hallReserve->remark = $request->input('remark');
        $hallReserve->save();

        return redirect()->route('reserve.thankyou',$reservation->id)
                ->with('success','Conference Hall Reserved');
    }

    public function menu(Request $request){
        $menu = Menu::find($request->input('menuID'));

        //Reservation
        $reservation = new Reservation;
        $reservation->reservation_name = $request->input('name');
        $reservation->phone_number = $request->input('contact');
        $reservation->arrival = $request->input('arrival');
        $reservation->save();

        //Reserving menu
        $menuReserve = new MenuReservation;
        $menuReserve->menu_id = $menu->id;
        $menuReserve->reservation_id = $reservation->id;
        $menuReserve->isTable = $request->input('isTable');
        $menuReserve->ordered_by = $request->input('orderedBy');
        $menuReserve->status = 0;
        $menuReserve->remark = $request->input('remark');
        $menuReserve->save();

        return redirect()->route('reserve.thankyou',$reservation->id)
                ->with('success','Conference Menu Reserved');
    }

    public function service(Request $request){
        //Reservation
        $reservation = new Reservation;
        $reservation->reservation_name = $request->input('name');
        $reservation->phone_number = $request->input('contact');
        $reservation->arrival = $request->input('arrival');
        $reservation->save();

        $serviceReserve = new ServiceReservation;
        $serviceReserve->service_id = $request->input('service');
        $serviceReserve->reservation_id = $reservation->id;
        $serviceReserve->status = 0;
        $serviceReserve->remark = $request->input('remark');
        $serviceReserve->save();

        return redirect()->route('reserve.thankyou',$reservation->id)
                ->with('success','Service Reserved');

    }

    public function laundry(Request $request){
        //Reservation
        $reservation = new Reservation;
        $reservation->reservation_name = $request->input('name');
        $reservation->phone_number = $request->input('contact');
        $reservation->arrival = $request->input('arrival');
        $reservation->save();

        $serviceReserve = new LaundryReservation;
        $serviceReserve->service_id = $request->input('service');
        $serviceReserve->reservation_id = $reservation->id;
        $serviceReserve->room_number = $request->input('roomNum');
        $serviceReserve->room_code = $request->input('roomCode');
        $serviceReserve->status = 0;
        $serviceReserve->remark = $request->input('remark');
        $serviceReserve->save();

        return redirect()->route('reserve.thankyou',$reservation->id)
                ->with('success','Laundry Reserved');

    }

    public function beauty(Request $request){
        //Reservation
        $reservation = new Reservation;
        $reservation->reservation_name = $request->input('name');
        $reservation->phone_number = $request->input('contact');
        $reservation->arrival = $request->input('arrival');
        $reservation->save();

        $serviceReserve = new BeautySalonReservation;
        $serviceReserve->service_id = $request->input('service');
        $serviceReserve->reservation_id = $reservation->id;
        $serviceReserve->isMale = $request->input('sex');
        $serviceReserve->status = 0;
        $serviceReserve->remark = $request->input('remark');
        $serviceReserve->save();

        return redirect()->route('reserve.thankyou',$reservation->id)
                ->with('success','Beauty Salon Reserved');

    }

    public function gym(Request $request){
        //Reservation
        $reservation = new Reservation;
        $reservation->reservation_name = $request->input('name');
        $reservation->phone_number = $request->input('contact');
        $reservation->arrival = $request->input('arrival');
        $reservation->save();

        $serviceReserve = new GYMReservation;
        $serviceReserve->service_id = $request->input('service');
        $serviceReserve->reservation_id = $reservation->id;
        $serviceReserve->status = 0;
        $serviceReserve->remark = $request->input('remark');
        $serviceReserve->save();

        return redirect()->route('reserve.thankyou',$reservation->id)
                ->with('success','GYM Reserved');

    }

    public function pool(Request $request){
        //Reservation
        $reservation = new Reservation;
        $reservation->reservation_name = $request->input('name');
        $reservation->phone_number = $request->input('contact');
        $reservation->arrival = $request->input('arrival');
        $reservation->save();

        $serviceReserve = new SwimmingPoolReservation;
        $serviceReserve->service_id = $request->input('service');
        $serviceReserve->reservation_id = $reservation->id;
        $serviceReserve->status = 0;
        $serviceReserve->remark = $request->input('remark');
        $serviceReserve->save();

        return redirect()->route('reserve.thankyou',$reservation->id)
                ->with('success','Swimming Pool Reserved');

    }

    public function table(Request $request){
        //Reservation
        $reservation = new Reservation;
        $reservation->reservation_name = $request->input('name');
        $reservation->phone_number = $request->input('contact');
        $reservation->arrival = $request->input('arrival');
        $reservation->save();

        $serviceReserve = new DinnerTableReservation;
        $serviceReserve->service_id = $request->input('service');
        $serviceReserve->reservation_id = $reservation->id;
        $serviceReserve->status = 0;
        $serviceReserve->remark = $request->input('remark');
        $serviceReserve->save();

        return redirect()->route('reserve.thankyou',$reservation->id)
                ->with('success','Dinner Table Reserved');

    }

    public function trainer(Request $request){
        //Reservation
        $reservation = new Reservation;
        $reservation->reservation_name = $request->input('name');
        $reservation->phone_number = $request->input('contact');
        $reservation->arrival = $request->input('arrival');
        $reservation->save();

        $serviceReserve = new PersonalTrainerReservation;
        $serviceReserve->service_id = $request->input('service');
        $serviceReserve->reservation_id = $reservation->id;
        $serviceReserve->status = 0;
        $serviceReserve->remark = $request->input('remark');
        $serviceReserve->save();

        return redirect()->route('reserve.thankyou',$reservation->id)
                ->with('success','Personal Trainer Reserved');

    }

    public function thankyou($reservationID){
        $data['reservation'] = Reservation::find($reservationID);
        return view('thankyou',$data);
    }

    public function reserveRoomDone($rrID){
        $reservation = RoomReservation::find($rrID);
        $reservation->status = 1;
        $reservation->save();

        return redirect()->back()->with('success','Guest is done');
    }

    public function reserveRoomCallback($rrID){
        $reservation = RoomReservation::find($rrID);
        $reservation->status = 0;
        $reservation->save();

        return redirect()->back()->with('success','Guest came back');
    }

    public function reserveMenuDone($mrID){
        $reservation = MenuReservation::find($mrID);
        $reservation->status = 1;
        $reservation->save();

        return redirect()->back()->with('success','Guest is done');
    }

    public function reserveMenuCallback($mrID){
        $reservation = MenuReservation::find($mrID);
        $reservation->status = 0;
        $reservation->save();

        return redirect()->back()->with('success','Guest came back');
    }

    public function reserveHallDone($hrID){
        $reservation = HallReservation::find($hrID);
        $reservation->status = 1;
        $reservation->save();

        return redirect()->back()->with('success','Guest is done');
    }

    public function reserveHallCallback($hrID){
        $reservation = HallReservation::find($hrID);
        $reservation->status = 0;
        $reservation->save();

        return redirect()->back()->with('success','Guest came back');
    }

    public function reserveServiceDone($serviceID, $reservationID){
        if($serviceID==Service::IS_LAUNDRY){
            $reservation = LaundryReservation::where([
                ["reservation_id","=",$reservationID],
                ["status","=",0]
            ])->get()[0];
        } else if($serviceID==Service::IS_PERSONAL_TRAINER){
            $reservation = PersonalTrainerReservation::where([
                ["reservation_id","=",$reservationID],
                ["status","=",0]
            ])->get()[0];
        } else if($serviceID==Service::IS_DINNER_TABLE){
            $reservation = DinnerTableReservation::where([
                ["reservation_id","=",$reservationID],
                ["status","=",0]
            ])->get()[0];
        } else if($serviceID==Service::IS_BEAUTY_SALON){
            $reservation = BeautySalonReservation::where([
                ["reservation_id","=",$reservationID],
                ["status","=",0]
            ])->get()[0];
        } else if($serviceID==Service::IS_GYM){
            $reservation = GYMReservation::where([
                ["reservation_id","=",$reservationID],
                ["status","=",0]
            ])->get()[0];
        } else if($serviceID==Service::IS_SWIMMING_POOL){
            $reservation = SwimmingPoolReservation::where([
                ["reservation_id","=",$reservationID],
                ["status","=",0]
            ])->get()[0];
        } else {
            $reservation = ServiceReservation::where([
                ["reservation_id","=",$reservationID],
                ["status","=",0]
            ])->get()[0];
        }
        // echo "<pre>";
        // print_r($reservation);

        $reservation->status = 1;
        $reservation->save();

        return redirect()->back()->with('success','Guest is done');
    }

    public function reserveServiceCallback($serviceID, $reservationID){
        if($serviceID==Service::IS_LAUNDRY){
            $reservation = LaundryReservation::where([
                ["reservation_id","=",$reservationID],
                ["status","=",1]
            ])->get()[0];
        } else if($serviceID==Service::IS_PERSONAL_TRAINER){
            $reservation = PersonalTrainerReservation::where([
                ["reservation_id","=",$reservationID],
                ["status","=",1]
            ])->get()[0];
        } else if($serviceID==Service::IS_DINNER_TABLE){
            $reservation = DinnerTableReservation::where([
                ["reservation_id","=",$reservationID],
                ["status","=",1]
            ])->get()[0];
        } else if($serviceID==Service::IS_BEAUTY_SALON){
            $reservation = BeautySalonReservation::where([
                ["reservation_id","=",$reservationID],
                ["status","=",1]
            ])->get()[0];
        } else if($serviceID==Service::IS_GYM){
            $reservation = GYMReservation::where([
                ["reservation_id","=",$reservationID],
                ["status","=",1]
            ])->get()[0];
        } else if($serviceID==Service::IS_SWIMMING_POOL){
            $reservation = SwimmingPoolReservation::where([
                ["reservation_id","=",$reservationID],
                ["status","=",1]
            ])->get()[0];
        } else {
            $reservation = ServiceReservation::where([
                ["reservation_id","=",$reservationID],
                ["status","=",1]
            ])->get()[0];
        }

        $reservation->status = 0;
        $reservation->save();

        return redirect()->back()->with('success','Guest came back');
    }


}
