<?php
namespace App\Modules\Inventory\Entity;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property string $code 
 * @property int $id
 */
class Category extends Model
{
  protected $table="my_category";
}

