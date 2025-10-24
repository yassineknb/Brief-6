@extends('layout')

@section('content')
<h2 class="text-xl font-semibold text-gray-800 mb-4">Détails de l’employé</h2>

<div class="bg-white shadow p-6 rounded space-y-2">
    <p><strong>Nom :</strong> {{ $employee->nom }}</p>
    <p><strong>Prénom :</strong> {{ $employee->prenom }}</p>
    <p><strong>Email :</strong> {{ $employee->email }}</p>
    <p><strong>Poste :</strong> {{ $employee->poste }}</p>
</div>

<div class="mt-4 flex space-x-2">
    <a href="{{ route('employees.edit', $employee) }}" class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600">Modifier</a>
    <a href="{{ route('employees.index') }}" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Retour</a>
</div>
@endsection
