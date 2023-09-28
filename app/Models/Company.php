<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  protected $table = 'company';
  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
      'name',
      'parent_id',
  ];

  public static function companyTree($data, $parent_id = 0, $level = 0) {
    $result = [];
    foreach ($data as $key => $item) {
      if ($item['parent_id'] == $parent_id) {
        $item['level'] = $level;
        $result[] = $item;
        $child = self::companyTree($data, $item['id'], $level + 1);
        $result = array_merge($result, $child);
      }
    }

    return $result;
  }
}
