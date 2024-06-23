<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Notifications\PostReplyNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function sendNotification(): void 
    {
        Auth::loginUsingId(1);
        
        $user = Auth::user();
        $post =$user->posts()->first();

        $delay = now()->addMinutes(1);

        $user->notify((new PostReplyNotification(user: $user, post: $post))->delay($delay));
    }
}
