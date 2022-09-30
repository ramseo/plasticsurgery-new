<?php

namespace App\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Controller;
use App\Models\Budget;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Yajra\DataTables\DataTables;
use Log;
use Flash;

class BudgetController extends Controller
{
    use Authorizable;

    public function index($typeId, Request $request)
    {
        if ($request->ajax()) {
            $budgets = Budget::where('type_id', $typeId)->select(['id', 'filter', 'min', 'max']);
            return Datatables::of($budgets)
                ->addIndexColumn()
                ->addColumn('action', function ($budget) {
                    $btn = '<a href="' . route("backend.budget.edit", $budget->id) . '" class="btn btn-sm btn-primary mt-1" data-toggle="tooltip" title="Edit Service"><i class="fas fa-wrench"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('backend.budget.index')->with('typeId', $typeId);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($typeId)
    {
        Log::info(label_case('Budget Create | User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return view("backend.budget.create", compact('typeId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store($typeId, Request $request)
    {
        // code
        $request->validate([
            'filter' => 'required|string',
        ]);
        // code
        $budget = Budget::create($request->all());
        Flash::success("<i class='fas fa-check'></i> New Budget Added")->important();
        Log::info(label_case('budget Store | ' . $budget->name . '(ID:' . $budget->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return redirect("admin/budget/$typeId");
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $budget = Budget::findOrFail($id);

        $getDataArray = getData('budgets', 'id', $id);
        $typeId = $getDataArray->type_id;

        Log::info(label_case('Budget Edit | ' . $budget->name . '(ID:' . $budget->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return view('backend.budget.edit', compact('budget', 'typeId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        // code
        $request->validate([
            'filter' => 'required|string',
        ]);
        // code
        $budget = Budget::findOrFail($id);
        $budget->update($request->all());
        Flash::success("<i class='fas fa-check'></i> Budget Updated Successfully")->important();
        Log::info(label_case('Budget Update | ' . $budget->name . '(ID:' . $budget->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return redirect("admin/budget/" . $budget->type_id);
    }
}
