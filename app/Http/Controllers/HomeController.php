<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\visit;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   /* public function index()
    {
        return view('backend.Dashboard');
    }*/

    public function index(Request $request)
    {
      function get_client_ip()
{
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    } else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    } else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    } else if (isset($_SERVER['HTTP_FORWARDED'])) {
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    } else if (isset($_SERVER['REMOTE_ADDR'])) {
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    } else {
        $ipaddress = 'UNKNOWN';
    }

    return $ipaddress;
}
$PublicIP = get_client_ip();
$json     = file_get_contents("http://ipinfo.io/$PublicIP/geo");
$json     = json_decode($json, true);


// get user's IP address

function getUserIpAddr() {

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {

        $ip = $_SERVER['HTTP_CLIENT_IP'];

    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];

    } else {

        $ip = $_SERVER['REMOTE_ADDR'];

    }

    return $ip;

}

$ip_address = getUserIpAddr();

//echo $ip_address;
 

$url = "https://api.ipgeolocationapi.com/geolocate/$ip_address";

$ch = curl_init();  

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_URL, $url);

$response = curl_exec($ch);

$arr_result = json_decode($response);



//====view

$ip  = $json['ip'];
$city     = $json['city'];
$region   = $json['region'];
$loc     = $json['loc'];
$timezone     = $json['timezone'];
$postal     = $json['postal'];

$name=$arr_result->name;
 
        





$vists = DB::table('visits')->where('ip',$ip)->first();
if (!$vists) {
       $data= new visit;
        $data['ip']=$ip;
        $data['city']=$city;
        $data['postal']=$postal;
        $data['region']=$region;
        $data['loc']=$loc;
        $data['name']=$name;
        $data['timezone']=$timezone;
        $data->save();
}
else{
    //echo $vists;
}



$visitorsco = DB::table('visits')->count();
$team = DB::table('teams')->count();
$project = DB::table('galleries')->count();

$tite= "Home";
        return view('fontend.home',compact('visitorsco','team','project','tite'));
    }

public function about()
{
    $visitorsco = DB::table('visits')->count();
$team = DB::table('teams')->count();
$project = DB::table('galleries')->count();
    $tite= "About";
    return view('fontend.about-page',compact('visitorsco','team','project','tite'));
}

public function Pricing()
{
    $visitorsco = DB::table('visits')->count();
$team = DB::table('teams')->count();
$project = DB::table('galleries')->count();
    $tite= "Pricing";
    return view('fontend.pricing',compact('visitorsco','team','project','tite'));
}
public function Contact()
{
    $visitorsco = DB::table('visits')->count();
$team = DB::table('teams')->count();
$project = DB::table('galleries')->count();
    $tite= "Contact";
    return view('fontend.contact',compact('visitorsco','team','project','tite'));
}

public function model_video()
{
  $tite= "Video";
    return view('fontend.modal-video',compact('tite'));
} 



    
}
