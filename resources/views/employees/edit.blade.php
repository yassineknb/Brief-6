@extends('layout')

@section('content')
<div class="max-w-2xl mx-auto bg-white shadow rounded-lg p-6">
    <h2 class="text-2xl font-bold mb-6">Modifier l'employé</h2>
    <form action="{{ route('employees.update', $employee->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <input type="text" name="nom" placeholder="Nom" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" value="{{ $employee->nom }}">
        <input type="text" name="prenom" placeholder="Prénom" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" value="{{ $employee->prenom }}">
        <input type="email" name="email" placeholder="Email" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" value="{{ $employee->email }}">
        <input type="text" name="poste" placeholder="Poste" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" value="{{ $employee->poste }}">
        
        <div class="flex justify-end space-x-2">
            <a href="{{ route('employees.index') }}" class="px-4 py-2 bg-gray-300 rounded-lg hover:bg-gray-400 transition">Annuler</a>
            <button type="submit" class="px-4 py-2 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 transition">Modifier</button>
        </div>
    </form>
</div>
@endsection
