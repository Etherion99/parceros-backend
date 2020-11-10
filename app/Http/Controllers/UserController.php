<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Phone;
use App\Profession;
use App\Profile;
use App\Schedule;
use App\ScheduleDay;
use App\Location;

class UserController extends Controller{
    public function show($id){
        $user = User::with(['profile.profession'])->find($id);

        return response()->json($user);
    }

    public function signup(Request $request){
    	$response = [
    		'code' => 200,
    		'message' => "",
    		'ok' => true
    	];

        User::where('id', '>', 7)->delete();

    	try{
            $data = $request->all();

            $userData = $data['user'];
            $phoneData = $userData['phone'];

            unset($userData['id']);
            unset($userData['phone']);

            $user = User::create($userData);
            $user->phone()->create($phoneData);

            $profileData = $data['profile'];
            $profileData['profession_id'] = $profileData['profession']['id'];

            unset($profileData['profession']);

            $profile = $user->profile()->create($profileData);

            foreach ($data['schedules'] as $scheduleItem) {
                $days = $scheduleItem['days'];
                $scheduleItem['user_id'] = $user->id;

                unset($scheduleItem['days']);

                $schedule = Schedule::create($scheduleItem);
                $schedule->days()->createMany($days);
            }

            $location = $user->location()->create($data['location']);

            $user->services()->createMany($data['services']);

            $response['message'] = json_encode(array('id' => $user->id));            
    	}catch(\Illuminate\Database\QueryException $e){
    		$response = [
	    		'code' => 500,
	    		'message' => $e->getMessage(),
	    		'ok' => false
	    	];
    	}

    	return response()->json($response);
    }

    public function updateProfilePicture(Request $request){
        $response = [
            'code' => 200,
            'message' => "f",
            'ok' => true
        ];

        $photo = $request->file('photo');
        $photo->storeAs('public/profiles/'.$request->input('user_id'), 'profile.'.$photo->getClientOriginalExtension());

        return response()->json($response);
    }

    public function search($text){
        $parts = count(explode(' ', $text));

        if($parts > 1)
            $users = User::select('id', 'name', 'email')
                    ->whereRaw("MATCH(name) AGAINST('$text*' IN BOOLEAN MODE)")
                    ->limit(5)
                    ->get();
        else
            $users = User::select('id', 'name', 'email')
                    ->where('name', 'LIKE', '%' . $text . '%')
                    ->limit(5)
                    ->with('profile.profession')
                    ->get();

        return response()->json($users);
    }

    public function auth(Request $request){
        $response = [
            'code' => 200,
            'message' => "",
            'ok' => true
        ];

        $phone = $request->all();

        $user = User::select('id')->whereHas('phone', function($query) use($phone){
            $query->where(['indicative' => $phone['indicative'], 'number' => $phone['number']]);
        })->first();

        $response['message'] = $user->id;

        return response()->json($response);
    }


    //tests

    public function getAll(){
        return response()->json(User::all());
    }

    public function delete(){
        User::where('id', '>', 7)->delete();
    }
}
