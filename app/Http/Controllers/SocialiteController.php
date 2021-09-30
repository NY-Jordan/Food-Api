<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    protected $providers = [ "google", "github", "facebook" ]; // liste des fournisseurs
    
    public function redirect (Request $request) {

        $provider = $request->provider; //recupère le fournisseur utilisé

        if (in_array($provider, $this->providers)) { //verifie s'il fait partie de la liste de nos fournisseurs 
            return Socialite::driver($provider)->redirect(); // si oui redirection vers le fournisseur
        }
        abort(404); // si non erreur 404
    }

    public function callback (Request $request) {

        $provider = $request->provider; //recupère le fournisseur utilisé
        if (in_array($provider, $this->providers)) { // verifie si il est dans la liste de nos  fournisseurs
            $data = Socialite::driver($request->provider)->user(); // si oui on récupère les infos fournies par le fournseur
            $email = $data->getEmail(); //email
            $name = $data->getName() ?? $data->nickname; //name en utilisant le format en fonction du fournisseur utilisé
            $user = User::where("email", $email)->first(); //verifie  si l'email est dans notre base de données
            if (isset($user)) { // si oui on change son son et on sauvegarde
                $user->name = $name;
                $user->save();
            } else { // si non on cree un nouveau utilisateur  etg olln saugarde
                    $user = User::create([
                    'name' => $name,
                    'email' => $email,
                    'password' => bcrypt("Jordan237") 
                    ]);
            }

            Auth::login($user);// puis on authentifie l'utilisateuur
            if (auth()->check()) return redirect(route('home')); // et on le redirige vers la home page 

         } 
         abort(404); // si non erreur 404
    }
}
