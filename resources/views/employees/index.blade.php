@extends('layout')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-xl font-semibold text-gray-800">Liste des employés</h2>
    <a href="{{ route('employees.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Ajouter un employé</a>
</div>

@if(session('success'))
<div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">{{ session('success') }}</div>
@endif

<table class="min-w-full bg-white shadow rounded overflow-hidden">
    <thead class="bg-gray-100">
        <tr>
            <th class="px-6 py-3 text-left text-gray-600 font-medium">Nom</th>
            <th class="px-6 py-3 text-left text-gray-600 font-medium">Prénom</th>
            <th class="px-6 py-3 text-left text-gray-600 font-medium">Email</th>
            <th class="px-6 py-3 text-left text-gray-600 font-medium">Poste</th>
            <th class="px-6 py-3 text-right text-gray-600 font-medium">Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($employees as $employee)
        <tr class="border-b">
            <td class="px-6 py-4">{{ $employee->nom }}</td>
            <td class="px-6 py-4">{{ $employee->prenom }}</td>
            <td class="px-6 py-4">{{ $employee->email }}</td>
            <td class="px-6 py-4">{{ $employee->poste }}</td>
            <td class="px-6 py-4 text-right space-x-2">
                <a href="{{ route('employees.edit', $employee) }}" class="text-yellow-600 hover:underline">Modifier</a>
                <form action="{{ route('employees.destroy', $employee) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Supprimer cet employé ?')">Supprimer</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="px-6 py-4 text-center text-gray-500">Aucun employé trouvé.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
