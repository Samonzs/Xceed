<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lov extends Model
{
    use HasFactory;
    protected $table = 'VariationDetails';
    protected $primaryKey = 'id';    
    protected $fillable = ['firstName','lastName','staff_email','clientEmail','phoneNumber','date','companyName','abn','addressLine','suburb','postcode','jobReferenceNumber','orderNumber','siteName','siteAddressLine','siteAddressState','sitePostcode','variationDescription','totalCost','variationDateRequest', 'createdBy', 'signatureUpload', 'approveStatus'];

}
