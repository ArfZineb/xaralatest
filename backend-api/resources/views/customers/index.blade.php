@extends('layouts.app')

@section('content')
    <div class="text-center mb-3">
        <h1>Gestion des Clients</h1>
    </div>

    <div class="search-section">
        <div class="row align-items-center">
            <div class="col-md-8">
                <form action="{{ route('customers.index') }}" method="GET" class="d-flex gap-2">
                    <input type="text" name="search" class="form-control" placeholder="Rechercher un client..." value="{{ request('search') }}">
                    <button type="submit" class="btn btn-primary">Rechercher</button>
                </form>
            </div>
            <div class="col-md-4 text-end">
                <a href="{{ route('customers.create') }}" class="btn btn-success">
                    <i class="fas fa-plus"></i> Ajouter un Client
                </a>
            </div>
        </div>
    </div>

    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Adresse</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->nom }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->telephone }}</td>
                        <td>{{ $customer->adresse }}</td>
                        <td>
                            <span class="badge bg-white text-dark">
                                {{ $customer->statut }}
                            </span>
                        </td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('customers.edit', $customer) }}" class="btn btn-sm btn-outline-primary">Modifier</a>
                                <form action="{{ route('customers.destroy', $customer) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce client ?')">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <style>
        .search-section {
            background-color: transparent;
            padding: 0.75rem;
            margin-bottom: 1rem;
        }

        .table-container {
            background-color: transparent;
            padding: 0.5rem;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
            color: white;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
            color: white;
        }

        .btn-outline-primary {
            background-color: white;
            border-color: #0d6efd;
            color: #0d6efd;
        }

        .btn-outline-primary:hover {
            background-color: #f8f9fa;
            border-color: #0b5ed7;
            color: #0b5ed7;
        }

        .btn-outline-danger {
            background-color: white;
            border-color: #dc3545;
            color: #dc3545;
        }

        .btn-outline-danger:hover {
            background-color: #f8f9fa;
            border-color: #bb2d3b;
            color: #bb2d3b;
        }

        .table {
            background-color: transparent;
            margin-bottom: 0;
        }

        .table thead th {
            background-color: transparent;
            border: none;
            color: #495057;
            font-weight: bold;
            padding: 0.5rem;
        }

        .table tbody td {
            border: none;
            vertical-align: middle;
            padding: 0.5rem;
        }

        .table tbody tr {
            border-bottom: 1px solid #dee2e6;
        }

        .badge {
            font-size: 0.9em;
            padding: 0.5em 0.8em;
        }

        .btn-group {
            gap: 5px;
        }

        .form-control {
            padding: 0.375rem 0.75rem;
        }
    </style>
@endsection 