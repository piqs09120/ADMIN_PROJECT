<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'file_path', 'status', 'uploaded_by'
    ];

    public function uploader() {
        return $this->belongsTo(User::class, 'uploaded_by');
    }

    public function documentRequests() {
        return $this->hasMany(DocumentRequest::class);
    }
}
