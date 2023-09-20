<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTerrainStep5 extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'id' => 'required',
            'user_id' => 'required',
            // INFOS GENERALES
            'type_hebergement' => 'required|string',
            'capacite_visiteurs' => 'required|numeric|min:0',
            'surface' => 'required|numeric|min:0',
            'environnement' => 'required|string',
            'equipements' => 'required|string',
            'a_proximite' => 'required|string',
            // DESCRIPTION
            'nom' => 'required|string|max:50',
            'desc_generale' => 'required|string',
            'desc_cadre' => 'required|string',
            'desc_equipement' => 'required|string',
            'annulation' => 'required|string',
            'heure_arrivee' => 'required|string',
            'heure_depart' => 'required|string',
            'regles' => 'required|string',
            'autres_infos' => 'nullable|string',
            // PHOTOS
            'images_principales' => 'nullable',
            'images_cadres' => 'nullable',
            'images_autres' => 'nullable',
            // ADRESSE
            'adresse' => 'nullable|string|max:255',
            // PRIX
            'prix_nuitee' => 'required|numeric|min:0',
            'prix_adulte_supp' => 'required|numeric|min:0',
            'prix_ado_supp' => 'nullable|numeric|min:0',
            'prix_taxe_sejour' => 'nullable|numeric|min:0',
            'lstPrestations' => 'nullable|array',
            'lstPrestations.*.terrain_id' => 'required|numeric',
            'lstPrestations.*.nom' => 'required|string|max:255',
            'lstPrestations.*.prix' => 'required|numeric|min:0',
            'lstPrestations.*.description' => 'nullable|string',
            // CALENDRIER
            'indisponibilites' => 'nullable|string',
            'statut_validation' => 'required|string',
        ];
    }
}
