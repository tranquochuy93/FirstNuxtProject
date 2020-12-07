<?php

namespace App\Repositories;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class StaffRepository
{
  private $staffModel;

  public function __construct(Staff $staffModel) {
    $this->staffModel = $staffModel;
  }
  
  public function add(array $data) {

  }

  public function getByEmail($email) {
    return $this->staffModel::where('email', $email)->first();
  }
}
