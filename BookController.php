namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
public function index()
{
$books = Book::all();
return response()->json($books);
}

public function show($id)
{
$book = Book::find($id);
return response()->json($book);
}

public function store(Request $request)
{
$book = new Book();
$book->judul = $request->input('judul');
$book->pengarang = $request->input('pengarang');
$book->tahun_terbit = $request->input('tahun_terbit');
$book->save();
return response()->json($book);
}

public function update(Request $request, $id)
{
$book = Book::find($id);
$book->judul = $request->input('judul');
$book->pengarang = $request->input('pengarang');
$book->tahun_terbit = $request->input('tahun_terbit');
$book->save();
return response()->json($book);
}

public function destroy($id)
{
$book = Book::find($id);
$book->delete();
return response()->json(['message' => 'Buku berhasil dihapus']);
}
}