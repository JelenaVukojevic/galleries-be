<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Comment extends Model
{
	protected $fillable = [
		'content', 'gallery_id', 'user_id',
	];
	public static function getSingleGalleryComments($id){
		return self::where('gallery_id',$id)->with('user')->get();
	}
	public function gallery(){
		return $this->belongsTo('App\Gallery', 'gallery_id', 'id');
	}
	public function user(){
		return $this->belongsTo('App\User', 'user_id', 'id');
	}
}