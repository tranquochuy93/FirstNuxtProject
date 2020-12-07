<?php

namespace App\Services;

use App\Repositories\StaffRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class StaffService
{
  private $staffRepository;

  public function __construct(StaffRepository $staffRepository) {
    $this->staffRepository = $staffRepository;
  }
  
  public function add(array $data) {

  }

  public function getByEmail($email) {
    return $this->staffRepository->getByEmail($email);
  }
}
