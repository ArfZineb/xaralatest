<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerWebController extends Controller
{
    public function index(Request $request)
    {
        $query = Customer::query();
        
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where(function($q) use ($search) {
                $q->where('nom', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('telephone', 'like', "%{$search}%");
            });
        }
        
        $customers = $query->orderBy('created_at', 'desc')->get();
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|unique:customers',
            'telephone' => 'required|string|max:20',
            'adresse' => 'required|string',
            'statut' => 'required|in:actif,inactif'
        ]);

        Customer::create($validated);
        return redirect()->route('customers.index')->with('success', 'Client créé avec succès');
    }

    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email,' . $customer->id,
            'telephone' => 'required|string|max:20',
            'adresse' => 'required|string',
            'statut' => 'required|in:actif,inactif'
        ]);

        $customer->update($validated);
        return redirect()->route('customers.index')->with('success', 'Client mis à jour avec succès');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index')->with('success', 'Client supprimé avec succès');
    }
} 