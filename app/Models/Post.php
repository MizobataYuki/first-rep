<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'body'//これらのtitleとbody(多分nameのところ)のキーでしか使用できないようにしてる
        ];
    
    public function getPaginateBylimit(int $limit_count=5){
        return $this->orderby('updated_at','DESC')->paginate($limit_count);
    }
}