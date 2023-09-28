<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderCompany extends Model
{
  protected $table = 'order_company';
  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
      'company_id',
      'order_by_company',
  ];
}
