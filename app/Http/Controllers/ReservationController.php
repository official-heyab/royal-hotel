<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Service;
use App\Models\Reservation;
use App\Models\RoomReservation;
use App\Models\ServiceReservation;

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

    public function thankyou($reservationID){
        $data['reservation'] = Reservation::find($reservationID);
        return view('thankyou',$data);
     }


}
