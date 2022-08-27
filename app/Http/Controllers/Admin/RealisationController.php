<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Realisation;
use Illuminate\Http\Request;

class RealisationController extends Controller
{
    private $upload_path = 'uploads/Admin/Realisations';

    public function destroy (Realisation $realisation){

        $realisation->delete();

        if (file_exists(public_path($this->upload_path."/$realisation->name"))){
            unlink(public_path($this->upload_path."/$realisation->name"));
        }

        return response()->json(['success' => 'Suppression effectué avec succès']);
    }
}
