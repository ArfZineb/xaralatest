@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header py-2">
        <h5 class="mb-0">Ajouter un Client</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('customers.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-2">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" name="nom" value="{{ old('nom') }}" required>
                    @error('nom')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6 mb-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6 mb-2">
                    <label for="telephone" class="form-label">Téléphone</label>
                    <input type="text" class="form-control @error('telephone') is-invalid @enderror" id="telephone" name="telephone" value="{{ old('telephone') }}" required>
                    @error('telephone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6 mb-2">
                    <label for="statut" class="form-label">Statut</label>
                    <select class="form-select @error('statut') is-invalid @enderror" id="statut" name="statut" required>
                        <option value="">Sélectionnez un statut</option>
                        <option value="actif" {{ old('statut') == 'actif' ? 'selected' : '' }}>Actif</option>
                        <option value="inactif" {{ old('statut') == 'inactif' ? 'selected' : '' }}>Inactif</option>
                    </select>
                    @error('statut')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-12 mb-2">
                    <label for="adresse" class="form-label">Adresse</label>
                    <textarea class="form-control @error('adresse') is-invalid @enderror" id="adresse" name="adresse" rows="2" required>{{ old('adresse') }}</textarea>
                    @error('adresse')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex justify-content-between mt-3">
                <a href="{{ route('customers.index') }}" class="btn btn-secondary">Retour</a>
                <button type="submit" class="btn btn-success">Enregistrer</button>
            </div>
        </form>
    </div>
</div>

<style>
    .card {
        max-width: 800px;
        margin: 0 auto;
        background-color: transparent;
        border: none;
    }

    .card-header {
        background-color: transparent;
        border-bottom: 1px solid #dee2e6;
        padding: 0.5rem 1rem;
    }

    .card-body {
        padding: 1rem;
    }

    .form-label {
        font-size: 0.9rem;
        margin-bottom: 0.25rem;
        color: #495057;
    }

    .form-control, .form-select {
        padding: 0.375rem 0.75rem;
        font-size: 0.9rem;
    }

    .btn {
        padding: 0.375rem 0.75rem;
        font-size: 0.9rem;
    }

    .invalid-feedback {
        font-size: 0.8rem;
    }
</style>
@endsection 