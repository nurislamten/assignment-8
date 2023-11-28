
Route::get('/profile/{id}', 'ProfileController@index');




namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfileController extends Controller
{
    public function index(Request $request, $id)
    {
        $name = "Donald Trump";
        $age = "75";

        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        $cookie = cookie('access_token', '123-XYZ', 1, '/', $request->server('SERVER_NAME'), false, true);
        return response()->json($data)->withCookie($cookie)->setStatusCode(200);
    }
}