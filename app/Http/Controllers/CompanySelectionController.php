<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanySelectionController extends Controller
{
    public function showSelectionPage()
    {
        $user = Auth::user();

        // Supondo que o usuário tenha um relacionamento com múltiplas empresas
        $companies = $user->companies; // Certifique-se de que o relacionamento está configurado no modelo User

        // Renderiza a página de seleção de empresa
        return view('contract.select-company', compact('companies'));
    }

    public function handleSelection(Request $request)
    {
        $request->validate([
            'company_id' => 'required|exists:companies,id',
        ]);

        $companyId = $request->input('company_id');

        // Armazene a empresa selecionada na sessão ou em outro local apropriado
        session(['selected_company_id' => $companyId]);

        // Redireciona para o painel da empresa selecionada
        return redirect('/admin'); // ou a rota específica do painel da empresa
    }
}
