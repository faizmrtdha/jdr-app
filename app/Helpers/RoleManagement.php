<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

function RoleAuthoration($target){
  $db = DB::table('users')
  // ->select('users.id', 'users.username', 'roles.role-name')
  ->select($target)
  // ->distinct()
  ->leftJoin('roles', 'users.role_id', '=', 'roles.id')
  ->where('users.id', Auth::user()->id)
  ->get();
  // return (array) $db[0]["cm-view"];
  return $db[0]->{$target};
}


function RoleName($id){
  $db = DB::table('users')
  ->select('roles.role-name')
  ->leftJoin('roles', 'users.role_id', '=', 'roles.id')
  ->where('users.role_id', $id)
  ->get();
  return $db[0]->{'role-name'};
}


