<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reservation;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class ReservationController extends Controller
{
  public function __construct() {
      $this->middleware('auth');
  }

  public function index() {
    // $categories = Foodreservation::All();
    $reservations = Reservation::paginate(1);
    return view('admin/reservations/all', [
      'reservations' => $reservations
    ]);
  }

  public function create() {
    $reservations = Reservation::All();
    return view('admin/reservations/create', [
      'reservations' => $reservations
    ]);
    }

    public function store() {
      // return request()->all();
      request()->validate([
        'fname' => ['required', 'string'],
        'lname' => ['required', 'string'],
        'email' => ['required', 'string'],
        'phone_number' => ['required', 'string'],
        'guests_total' => ['required', 'integer'],
        'time' => ['required', 'string'],
      ]);

      $reservation = new Reservation();
      $reservation->fname = request('fname');
      $reservation->lname = request('lname');
      $reservation->email = request('email');
      $reservation->phone_number = request('phone_number');
      $reservation->guests_total = request('guests_total');
      $reservation->time = request('time');
      $reservation->save();
        return redirect('/admin/reservations');
      }

  public function edit($id) {

    $reservation = Reservation::find($id);
    return view('admin/reservations/edit', [
      'reservation' => $reservation
    ]);
    }

    public function update($id) {
      request()->validate([
        'fname' => ['required', 'string'],
        'lname' => ['required', 'string'],
        'email' => ['required', 'string'],
        'phone_number' => ['required', 'string'],
        'guests_total' => ['required', 'integer'],
        'time' => ['required', 'string'],
      ]);

      $reservation = Reservation::find($id);
      $reservation->fname = request('fname');
      $reservation->lname = request('lname');
      $reservation->email = request('email');
      $reservation->phone_number = request('phone_number');
      $reservation->guests_total = request('guests_total');
      $reservation->time = request('time');
      $reservation->save();
        return redirect('/admin/reservations');
      }

      public function delete($id) {
        $reservation = Reservation::find($id);
        $reservation->delete();
        return redirect('/admin/reservations');
      }
}
