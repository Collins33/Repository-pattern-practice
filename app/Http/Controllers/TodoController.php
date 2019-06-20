<?php

namespace App\Http\Controllers;
use App\Repository\TodoInterface;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    private $todo;

    public function __construct(TodoInterface $todo)
    {
        $this->todo = $todo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->todo->getAll();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        $data = ['text'=>$request->text, 'user_id'=>$request->user_id, 'completed'=>$request->completed];
        return $this->todo->createAll($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->todo->showAll($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {   
        $data = ['text'=>$request->text, 'user_id'=>$request->user_id, 'completed'=>$request->completed];
        return $this->todo->updateAll($id, $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->todo->deleteAll($id);
    }
}
