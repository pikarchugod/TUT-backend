<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BooksController extends Controller
{
    public function index()
    {
        $books = DB::table('books')->get();
        return response()->json($books);
    }

    public function store(Request $request)
    {   
        // 驗證輸入資料
        $validated = $request->validate([
            'title' => 'required|string|max:10',
            'author' => 'required|string|max:10',
            'description' => 'nullable|string|max:20',
            'image' => 'required|string',
            'status' => 'required|string',
        ]);

        // 新增書籍資料到資料庫
        DB::table('books')->insert([
            'title' => $validated['title'],
            'author' => $validated['author'],
            'description' => $validated['description'],
            'image' => $validated['image'],
            'status' => $validated['status'],
            'views' => 0,
            'likes' => 0,
            'favorites' => 0,
            'comments' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json(['message' => '書籍新增成功']);
    }
}
