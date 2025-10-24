<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // Afficher la liste des employés
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    // Afficher le formulaire pour créer un employé
    public function create()
    {
        return view('employees.create');
    }

    // Enregistrer un nouvel employé
    public function store(Request $request)
    {
        $request->validate([
            'nom'    => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email'  => 'required|email|unique:employees,email',
            'poste'  => 'required|string|max:255',
        ]);

        Employee::create($request->all());

        return redirect()->route('employees.index')
                         ->with('success', 'Employé ajouté avec succès !');
    }

    // Afficher un employé spécifique
    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    // Afficher le formulaire pour modifier un employé
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    // Mettre à jour un employé
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'nom'    => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email'  => 'required|email|unique:employees,email,'.$employee->id,
            'poste'  => 'required|string|max:255',
        ]);

        $employee->update($request->all());

        return redirect()->route('employees.index')
                         ->with('success', 'Employé modifié avec succès !');
    }

    // Supprimer un employé
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')
                         ->with('success', 'Employé supprimé avec succès !');
    }
}
