@extends('layout')

@section('content')
<h2 class="text-xl font-semibold text-gray-800 mb-4">Modifier un employé</h2>

@if ($errors->any())
<div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
    <ul class="list-disc pl-5">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('employees.update', $employee) }}" method="POST" class="bg-white shadow p-6 rounded space-y-4">
    @csrf
    @method('PUT')
    <div>
        <label class="block text-gray-700 mb-1">Nom</label>
        <input type="text" name="nom" value="{{ old('nom', $employee->nom) }}" class="w-full border-gray-300 rounded px-3 py-2 focus:ring-blue-500 focus:border-blue-500">
    </div>
    <div>
        <label class="block text-gray-700 mb-1">Prénom</label>
        <input type="text" name="prenom" value="{{ old('prenom', $employee->prenom) }}" class="w-full border-gray-300 rounded px-3 py-2 focus:ring-blue-500 focus:border-blue-500">
    </div>
    <div>
        <label class="block text-gray-700 mb-1">Email</label>
        <input type="email" name="email" value="{{ old('email', $employee->email) }}" class="w-full border-gray-300 rounded px-3 py-2 focus:ring-blue-500 focus:border-blue-500">
    </div>
    <div>
        <label class="block text-gray-700 mb-1">Poste</label>
        <input type="text" name="poste" value="{{ old('poste', $employee->poste) }}" class="w-full border-gray-300 rounded px-3 py-2 focus:ring-blue-500 focus:border-blue-500">
    </div>
    <div class="flex justify-end">
        <a href="{{ route('employees.index') }}" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400 mr-2">Annuler</a>
        <button type="submit" class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600">Modifier</button>
    </div>
</form>
@endsection
