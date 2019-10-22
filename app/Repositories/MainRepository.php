<?php


namespace App\Repositories;


use App\Contracts\MainInterface;
use App\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Exception;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class MainRepository implements MainInterface
{
    public function index($user_id) {
        // TODO: Implement index() method.

        try {
            $user = User::find($user_id);
            if ($user) {

                $file = public_path('images/users/' . $user->id . '.jpg');

                if (File::exists($file)) $user->image = asset('images/users/' . $user->id . '.jpg');
                else $user->image = asset('images/users/default-avatar.jpg');

                return view('pages.view', compact('user'));
            } else abort(404);

        } catch (NotFoundHttpException $e) {
            Log::error('Not Found Exception');
            abort(404);
        } catch (Exception $e) {
            Log::error('Server Error');
            abort(500);
        }

    }
}
