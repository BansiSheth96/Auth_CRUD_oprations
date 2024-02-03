<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estern_usersModel extends Model
{
    use HasFactory;
    protected $table = 'estern_user_list';
    protected $fillable = ['first_name','last_name','user_email','contact_no','postcode','confirm_pswd','file_upload','hobbies','gender','role']; 
}
