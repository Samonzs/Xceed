<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TermsAndConditions extends Model
{

    use HasFactory;

    protected $table = 'clientSiteDetails';

    protected $fillable = ['Terms and Conditions'];

}
