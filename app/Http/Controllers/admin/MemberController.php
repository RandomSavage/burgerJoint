<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller {

  public function __construct() {
      $this->middleware('auth');
  }

  public function index() {
    // $members = Member::All();
    $members = Member::paginate(10);
    return view('admin/members/all', [
      'members' => $members
    ]);
  }

  public function delete($id) {
    $member = Member::find($id);
    $member->delete();
    return redirect('/admin/members');
  }
}

// if you want crud in admin section configure routes below
  // public function create() {
  //
  //   return view('admin/food-members/create');
  //   }

    // public function store() {
    //   // return request()->all();
    //   request()->validate([
    //     'title' => ['required', 'string', 'max:255'],
    //     'description' => ['required', 'string'],
    //     'image_url' => ['required', 'string']
    //   ]);
    //
    //   $member = new Member();
    //   $member->title = request('title');
    //   $member->description = request('description');
    //   $member->image_url = request('image_url');
    //   $member->save();
    //     return "Thank You";
    //     return redirect('/admin/members');
    //   }

  // public function edit($id) {
  //
  //   $member = Member::find($id);
  //   return view('admin/members/edit', [
  //     'member' => $member
  //   ]);
  //   }
  //
  //   public function update($id) {
  //     request()->validate([
  //       'title' => ['required', 'string', 'max:255'],
  //       'description' => ['required', 'string'],
  //       'image_url' => ['required', 'string']
  //     ]);
  //
  //     $member = Member::find($id);
  //     $member->title = request('title');
  //     $member->description = request('description');
  //     $member->image_url = request('image_url');
  //     $member->save();
  //
  //     return redirect('/admin/members');
  //
  //     }
