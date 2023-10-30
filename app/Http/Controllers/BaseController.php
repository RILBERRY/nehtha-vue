<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return $data;
    }


    public function store(Request $request)
    {
        $model = app()->make($this->model);
        $validatedData = $request->validate($model->storeRules());
        $data = $model::create( $validatedData );
        return $data;

    }


    public function show($id)
    {
        $data = $this->model::findOrFail($id);
        return $data;
    }


    public function update(Request $request, $id)
    {
        $model = app()->make($this->model);
        $validatedData = $request->validate($model->updateRules());
        $modelData = $model->findOrFail($id);
        $data = $modelData->update( $validatedData );
        return $data;
    }

    public function destroy($id)
    {
        $model = app()->make($this->model);
        $modelData = $model->findOrFail($id);
        $modelData->delete();
        return response(null, 204);
    }

}
