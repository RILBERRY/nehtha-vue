<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\QueryBuilder\QueryBuilder;
class BaseController extends Controller
{
    protected $model;
    protected $allowedIncludes;
    protected $allowedFilters;
    protected $allowedSorts;
    protected $relation;

    public function index()
    {
        $data =  QueryBuilder::for($this->model)
        ->with($this->relation)
        ->allowedFilters($this->allowedFilters)
        ->allowedIncludes($this->allowedIncludes)
        ->allowedSorts($this->allowedIncludes)
        ->simplePaginate(10);
        return response()->json($data, Response::HTTP_OK );
    }


    public function store(Request $request)
    {
        $model = app()->make($this->model);
        $validatedData = $request->validate($model->storeRules());
        $data = $model::create( $validatedData );
        return response()->json($data, Response::HTTP_OK );


    }


    public function show($id)
    {
        $data = $this->model::findOrFail($id);
        return response()->json($data, Response::HTTP_OK );

    }


    public function update(Request $request, $id)
    {
        $model = app()->make($this->model);
        $validatedData = $request->validate($model->updateRules(),$request->only($model->dataCol));
        $modelData = $model->findOrFail($id);
        $modelData->update($validatedData);
        return response()->json($modelData, Response::HTTP_OK );

    }

    public function destroy($id)
    {
        $model = app()->make($this->model);
        $modelData = $model->findOrFail($id);
        $modelData->delete();
        return response(null, 204);
    }

}
