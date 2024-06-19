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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048'
        ]);

        $article = new Article($validatedData);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $article->image_path = $path;
        }

        $article->save();

        return response()->json($article, 201);
    }


    public function apiUpdate(Request $request, Article $article)
    {
        // Log initial des données reçues
        $receivedData = [
            'title' => $request->input('title'),
            'category' => $request->input('category'),
            'content' => $request->input('content'),
            'image' => $request->file('image') ? $request->file('image')->getClientOriginalName() : 'No image uploaded'
        ];
        \Log::info('Received data:', $receivedData);
    
        try {
            // Validation des données
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'category' => 'required|max:255',
                'content' => 'required',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048'
            ]);
    
            // Log des données validées
            \Log::info('Validated data:', $validatedData);
    
            // Mise à jour de l'article
            $article->update($validatedData);
            \Log::info('Article updated successfully:', $article->toArray());
    
            // Gestion de l'image
            if ($request->hasFile('image')) {
                // Log de l'ancienne image si elle existe
                if ($article->image_path) {
                    \Log::info('Existing image path:', [$article->image_path]);
                }
    
                // Supprimer l'ancienne image si elle existe
                if ($article->image_path && Storage::exists('public/' . $article->image_path)) {
                    Storage::delete('public/' . $article->image_path);
                    \Log::info('Old image deleted:', [$article->image_path]);
                }
    
                // Sauvegarder la nouvelle image
                $path = $request->file('image')->store('images', 'public');
                $article->image_path = $path;
    
                // Sauvegarder les informations de l'article avec la nouvelle image
                $article->save();
                \Log::info('New image path saved:', [$path]);
            }
    
            return response()->json($article);
    
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Log des erreurs de validation
            \Log::error('Validation errors:', $e->errors());
    
            // Renvoyer une réponse avec les erreurs de validation
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            // Log de toute autre exception
            \Log::error('Exception during update:', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
    
            // Renvoyer une réponse d'erreur générique
            return response()->json([
                'message' => 'An error occurred during the update process',
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