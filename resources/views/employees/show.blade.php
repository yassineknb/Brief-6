@extends('layout')

@section('content')
<div class="max-w-2xl mx-auto bg-white shadow rounded-lg p-6">
    <h2 class="text-2xl font-bold mb-6">Détails de l'employé</h2>
    <div class="space-y-2">
        <p><span class="font-semibold">Nom :</span> {{ $employee->nom }}</p>
        <p><span class="font-semibold">Prénom :</span> {{ $employee->prenom }}</p>
        <p><span class="font-semibold">Email :</span> {{ $employee->email }}</p>
        <p><span class="font-semibold">Poste :</span> {{ $employee->poste }}</p>
    </div>
    <div class="mt-6 flex justify-end space-x-2">
        <a href="{{ route('employees.index') }}" class="px-4 py-2 bg-gray-300 rounded-lg hover:bg-gray-400 transition">Retour</a>
        <a href="{{ route('employees.edit', $employee->id) }}" class="px-4 py-2 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 transition">Modifier</a>
    </div>
</div>
@endsection
