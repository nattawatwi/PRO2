<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';

    protected $primaryKey = 'ContactID';

    use HasFactory;

    protected $fillable = [
        'Ct_username',
        'Ct_email',
        'Ct_title',
        'Ct_detail',
        'Ct_date',
    ];
}
