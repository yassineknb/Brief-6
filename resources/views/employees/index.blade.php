@extends('layout')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-3xl font-bold text-gray-900">Liste des employés</h2>
    <a href="{{ route('employees.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">Ajouter un employé</a>
</div>

<div class="bg-white shadow rounded-lg overflow-hidden">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Prénom</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Poste</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($employees as $employee)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">{{ $employee->nom }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $employee->prenom }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $employee->email }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $employee->poste }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-right space-x-2">
                    <a href="{{ route('employees.show', $employee->id) }}" class="text-green-600 hover:text-green-800">Voir</a>
                    <a href="{{ route('employees.edit', $employee->id) }}" class="text-yellow-600 hover:text-yellow-800">Modifier</a>
                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Supprimer cet employé ?')">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
