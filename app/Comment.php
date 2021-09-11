<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'comment', 'comment_name', 'comment_date','comment_product_id','comment_parent_comment','comment_status'
    ];
    protected $primaryKey = 'comment_id';
 	protected $table = 'tbl_comment';

 	public function product(){
 		return $this->belongsTo('App\Product','comment_product_id');
 	}
//    public function delete_comment($comment_product_id){
//        DB::table('tbl_comment')->where('comment_id',$comment_product_id)->delete();
//        Session::put('message','Xóa bình luận thành công');
//        return Redirect::to('list_comment');
//    }
}
