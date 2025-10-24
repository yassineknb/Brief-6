@extends('layout')

@section('content')
<div class="max-w-2xl mx-auto bg-white shadow rounded-lg p-6">
    <h2 class="text-2xl font-bold mb-6">Ajouter un employé</h2>
    <form action="{{ route('employees.store') }}" method="POST" class="space-y-4">
        @csrf
        <input type="text" name="nom" placeholder="Nom" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" value="{{ old('nom') }}">
        <input type="text" name="prenom" placeholder="Prénom" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" value="{{ old('prenom') }}">
        <input type="email" name="email" placeholder="Email" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" value="{{ old('email') }}">
        <input type="text" name="poste" placeholder="Poste" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" value="{{ old('poste') }}">
        
        <div class="flex justify-end space-x-2">
            <a href="{{ route('employees.index') }}" class="px-4 py-2 bg-gray-300 rounded-lg hover:bg-gray-400 transition">Annuler</a>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">Ajouter</button>
        </div>
    </form>
</div>
@endsection
