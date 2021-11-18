<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Logs;
use App\Models\Posts;
use Flash;
use Response;

class PostController extends Controller {
    public $successStatus = 200;

    public function getAllPosts() {
        $post = Posts::all();

        return response()->json()($post, $this->succesStatus);
    }
}