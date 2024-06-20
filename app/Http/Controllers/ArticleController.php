<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function apiIndex()
    {
        return response()->json(Article::paginate(10));
    }

    public function apiShow(Article $article)
    {
        return response()->json($article);
    }

    public function apiStore(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'category' => 'required|max:255',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'published' => 'boolean'
        ]);

        $article = new Article($validatedData);
        $article->published = $request->has('published') ? $request->published : false;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $article->image_path = $path;
        }

        $article->save();

        return response()->json($article, 201);
    }

    public function apiUpdate(Request $request, Article $article)
    {
        \Log::info('===== DÉBUT de apiUpdate =====');
        
        // Log initial des données reçues
        $receivedData = [
            'title' => $request->input('title'),
            'category' => $request->input('category'),
            'content' => $request->input('content'),
            'image' => $request->file('image') ? $request->file('image')->getClientOriginalName() : "Pas d'image téléchargée"
        ];
        \Log::info('Données reçues:', $receivedData);
    
        try {
            // Validation des données
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'category' => 'required|max:255',
                'content' => 'required',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'published' => 'boolean'
            ]);
    
            // Log des données validées
            \Log::info('Données validées:', $validatedData);
    
            // Met à jour l'article
            $article->update($validatedData);
            $article->published = $request->has('published') ? $request->published : false;
            \Log::info('Article mis à jour avec succès:', $article->toArray());
    
            // Gestion de l'image
            if ($request->hasFile('image')) {
                // Log de l'ancienne image si elle existe
                if ($article->image_path) {
                    \Log::info('Chemin de l\'image existante:', [$article->image_path]);
                }
    
                // Supprime l'ancienne image si elle existe
                if ($article->image_path && Storage::exists('public/' . $article->image_path)) {
                    Storage::delete('public/' . $article->image_path);
                    \Log::info('Ancienne image supprimée:', [$article->image_path]);
                }
    
                // Sauvegarde la nouvelle image
                $path = $request->file('image')->store('images', 'public');
                $article->image_path = $path;
    
                // Sauvegarde les informations de l'article avec la nouvelle image
                $article->save();
                \Log::info('Nouveau chemin d\'image enregistré:', [$path]);
            }
    
            \Log::info('===== FIN de apiUpdate =====');
            return response()->json($article);
    
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Log des erreurs de validation
            \Log::error('Erreurs de validation:', $e->errors());
    
            // Renvoye une réponse avec les erreurs de validation
            return response()->json([
                'message' => 'La validation a échoué',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            // Log de toute autre exception
            \Log::error('Exception lors de la mise à jour:', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
    
            // Renvoye une réponse d'erreur générique
            return response()->json([
                'message' => 'Une erreur est survenue lors de la mise à jour',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    
     

    public function apiDestroy(Article $article)
    {
        if ($article->image_path && Storage::exists('public/' . $article->image_path)) {
            Storage::delete('public/' . $article->image_path);
        }

        $article->delete();
        return response()->json(null, 204);
    }
}