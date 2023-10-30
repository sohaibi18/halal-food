<?php

namespace App\Http\Controllers;

use App\Http\Requests\CountryCreateRequest;
use App\Models\CountryModel;
use http\Message;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mysql_xdevapi\Schema;
use PhpParser\Node\Stmt\Return_;

class CountryController extends Controller
{

    public function store(CountryCreateRequest $request)
    {
        CountryModel::create([
            'user_id' => Auth::user()->id,
            'Country' => $request->Country,
            'Code' => $request->Code,
        ]);
        return redirect('/country/show')->with('message', 'Data Saved Successfully');


    }

    public function index()
    {
        $data = CountryModel::paginate(10);
        return view('country.index', ['countries' => $data]);


    }

    public function edit(CountryModel $id)
    {

        return view('country.edit', ['data' => $id]);


    }

    public function update($id, Request $request)
    {
        CountryModel::where('id', $id)
            ->update([
                'Country' => $request->Country,
                'Code' => $request->Code,
            ]);
        return redirect('/country/show')->with('message', 'Data Updated Successfully');

    }

    public function delete(CountryModel $id)
    {

        return view('country.delete', ['data' => $id]);


    }

    public function destroy($id, Request $request): RedirectResponse
    {

        CountryModel::where('id', $id)
            ->delete();

        return redirect('/country/show')->with('message', 'Data Deleted Successfully');
    }


}
