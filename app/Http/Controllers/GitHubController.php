<?php namespace App\Http\Controllers;
use App\Hook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;

class GithubController extends Controller
{
  private $client;
  /*
   * Github username
   *
   * @var string
   * */
  private $username;
  public function __construct(\Github\Client $client)
  {
    $this->client = $client;
  }
  public function index()
  {
    return view('index'); //Simply call the index view
  }//index

  public function info(Request $request)
  {
    try {
      $username = $request->get('name'); //Get the username via request
      $repos = $this->client->api('user')->repositories($username); //retireves user Repositories
      $userinfo = $this->client->api('user')->show($username); //retrieves user info
      return view('info', compact('repos', 'username', 'userinfo')); //call the info view passing the necessary information to be displayed
    } catch (\RuntimeException $e) {
        return view('errors/git');
    }
  }//info
}