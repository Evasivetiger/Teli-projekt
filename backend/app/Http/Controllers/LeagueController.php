<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLeagueRequest;
use App\Http\Resources\LeagueResource;
use App\Models\League;
use Illuminate\Http\Request;

class LeagueController extends Controller
{
    public function index(Request $request){
        $league = League::all();

        $orderBy = $request->query('orderBy');
        $order = $request->query('order');

        if(!empty($orderBy) && $orderBy == 'name' && $order == 'asc'){
            $league = $league->sortBy($orderBy);
        }
        elseif(!empty($orderBy) && $orderBy == 'name' && $order == 'desc'){
            $league = $league->sortByDesc($orderBy);
        }

        return LeagueResource::collection($league);
    }
    public function store(StoreLeagueRequest $request){
        $data = $request->validated();
        $newLeague = League::create($data);
        return new LeagueResource($newLeague);
    }
    public function update(int $id, StoreLeagueRequest $request){
        $league = League::findOrFail($id);
        $league->update($request->validated());
        return new LeagueResource($league);
    }
    public function show(int $id){
        return new LeagueResource(League::findOrFail($id));
    }
    public function destroy(int $id){
        $league = League::findOrFail($id);
        $league->delete();
        return response(null, 204);
    }
}
