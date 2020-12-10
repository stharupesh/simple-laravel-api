<?php

namespace App\Repositories\Car;

use DB;
use App\Models\Car;
use Illuminate\Database\Eloquent\Builder;

class CarRepository implements CarRepositoryInterface
{
    public function getCarsInStock($searchText, $pageLimit)
    {
        return Car::with('make', 'model')
            ->where(function ($query) {
                $query->where('quantity', '>', 0);
            })
            ->where(function ($query) use ($searchText) {
                $query->where('year', $searchText)
                    ->orWhereHas('make', function (Builder $query) use ($searchText) {
                        $query->where('name', 'like', '%' . $searchText . '%');
                    })
                    ->orWhereHas('model', function (Builder $query) use ($searchText) {
                        $query->where('name', 'like', '%' . $searchText . '%');
                    });
            })
            ->paginate($pageLimit);
    }
}
