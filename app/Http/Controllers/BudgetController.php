<?php

namespace App\Http\Controllers;

use App\Mail\NewBudgetMail;
use App\Models\Budget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BudgetController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $user_id = auth()->user()->id;
        $budgets = Budget::where('user_id', $user_id)->get();

        return view('budget.index', ['budgets' => $budgets]);
    }

    public function budgetAdmin() {
        $budgets = Budget::all();
        $budgets = Budget::with('user:id,name')->get();

        return view('admin.budget-admin', ['budgets' => $budgets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('budget.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        $data['status'] = "Pendente";
        $budget = Budget::create($data);

        $destinatario = auth()->user()->email;
        Mail::to($destinatario)->send(new NewBudgetMail($budget));
        return redirect()->route('budget')->with('message', 'Agendamento concluido!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Budget $budget) {
        return view("budget.show", ['budget' => $budget]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Budget $budget) {
        $user_id = auth()->user()->id;
        $admin = auth()->user()->is_admin;
        
        if($budget->user_id == $user_id || $admin) {
            return view('budget.edit', ['budget' => $budget]);
        } else {
            return view('access-denied');
        }   
    }

    public function budgetEditAdmin(Budget $budget) {
        $user_id = auth()->user()->id;
        $admin = auth()->user()->is_admin;
        
        if($budget->user_id == $user_id || $admin) {
            return view('admin.budget-edit-admin', ['budget' => $budget]);
        } else {
            return view('access-denied');
        }   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Budget $budget) {
        $user_id = auth()->user()->id;
        $admin = auth()->user()->is_admin;

        if($budget->user_id == $user_id || $admin) {
            $budget->update($request->all());
            return redirect()->route('budget', ['budget' => $budget->id])->with('message', 'Agendamento atualizado!');
        } else {
            return view('access-denied');
        }

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Budget $budget) {
        $user_id = auth()->user()->id;

        if($budget->user_id == $user_id) {
            $budget->delete();
            return redirect()->route('budget');
        } else {
            return view('access-denied');
        }

    }
}
