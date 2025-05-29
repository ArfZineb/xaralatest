<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Clients</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e3f2fd;
        }
        .table-container {
            background-color: transparent;
            padding: 20px;
            border-radius: 8px;
            box-shadow: none;
        }
        .table {
            margin-bottom: 0;
            background-color: white;
            border: 1px solid #90caf9;
        }
        .table thead th {
            background-color: #bbdefb;
            border: 1px solid #90caf9;
            color: #1976d2;
            font-weight: 600;
        }
        .table tbody td {
            border: 1px solid #90caf9;
            vertical-align: middle;
            background-color: white;
        }
        .table tbody tr:hover td {
            background-color: #e3f2fd;
        }
        .badge {
            font-size: 0.875rem;
            padding: 0.5em 0.75em;
        }
        .btn-group {
            gap: 0.5rem;
        }
        .btn-sm {
            padding: 0.25rem 0.5rem;
        }
        .form-control {
            border-radius: 4px;
            border: 1px solid #90caf9;
            padding: 0.375rem 0.75rem;
            background-color: white;
        }
        .form-control:focus {
            border-color: #1976d2;
            box-shadow: 0 0 0 0.2rem rgba(25,118,210,0.25);
            background-color: white;
        }
        .search-section {
            background-color: transparent;
            padding: 20px;
            border-radius: 8px;
            box-shadow: none;
            margin-bottom: 20px;
            border: none;
        }
        .btn-add {
            background-color: #1976d2;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            text-decoration: none;
            display: inline-block;
        }
        .btn-add:hover {
            background-color: #1565c0;
            color: white;
        }
        .btn-primary {
            background-color: #1976d2;
            border-color: #1976d2;
        }
        .btn-primary:hover {
            background-color: #1565c0;
            border-color: #1565c0;
        }
    </style>
</head>
<body>
    <div class="container py-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 