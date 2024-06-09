namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
public function index()
{
$categories = Category::all();
return response()->json($categories);
}

public function show($id)
{
$category = Category::find($id);
return response()->json($category);
}

public function store(Request $request)
{
$category = new Category();
$category->nama_kategori = $request->input('nama_kategori');
$category->save();
return response()->json($category);
}

public function update(Request $request, $id)
{
$category = Category::find($id);
$category->nama_kategori = $request->input('nama_kategori');
$category->save();
return response()->json($category);
}

public function destroy($id)
{
$category = Category::find($id);
$category->delete();
return response()->json(['message' => 'Kategori berhasil dihapus']);
}
}