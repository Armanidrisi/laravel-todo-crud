<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

/**
* TodoController handles the CRUD operations for Todo objects.
*/
class TodoController extends Controller
{
  /**
  * Display Homepage Of Todo App
  *
  * @return \Illuminate\Http\Response
  */
  public function index() {
    $data = Todo::all();
    return view('index', ['todos' => $data]);
  }

  /**
  * Store a newly created todo in database
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request) {
    $validatedData = $request->validate([
    'title' => 'required|max:255',
    'description' => 'required',
    ]);

    // Check if the form data is valid
    if ($validatedData) {
      // If the data is valid, create a new Todo object and save it to the database
      $todo = new Todo;
      $todo->title = $validatedData['title'];
      $todo->description = $validatedData['description'];
      $todo->save();
    }

    $data = Todo::all();
    return view('index', ['todos' => $data]);
  }

  /**
  * Remove the specified todo from database.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id) {
    $todo = Todo::find($id);
    if ($todo) {
      $todo->delete();
      return redirect()->route('todo.home');
    } else {
      return redirect()->route('todo.home');
    }
  }

  /**
  * Display the specified todo for editing.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show_update($id) {
    $data = Todo::find($id);
    return view('edit', ['todo' => $data]);
  }

  /**
  * Update the specified todo in database.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function handle_update(Request $request, $id) {
    $todo = (object) $request->all();
    $validatedData = $request->validate([
    'title' => 'required|max:255',
    'description' => 'required',
    ]);
        // Check if the form data is valid
    if ($validatedData) {
      $oldtodo = Todo::find($id);
            // If the data is valid, update the object and save it to the database
      if ($oldtodo) {
        $oldtodo->title = $request->input('title');
        $oldtodo->description = $request->input('description');
        $oldtodo->save();
        return redirect()->route('todo.home');
      } else {
        return redirect()->route('todo.home');
      }
    }
    return view('edit', ['todo' => $todo]);
  }
}