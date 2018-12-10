<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function books()
    {
        # Author has many Books
        # Define a one-to-many relationship.
        return $this->hasMany('App\Book');
    }

    public function getFullName() {

       return $this->first_name . ' ' . $this->last_name;

        }

        public static function getForDropdown(){
            return self::orderBy('last_name')->select('id', 'first_name', 'last_name' )->get();}


    }
