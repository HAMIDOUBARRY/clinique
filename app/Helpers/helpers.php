<?php 
use Illuminate\Support\Str;

function userFullName(){
    $user = auth()->user();

    if ($user) {
        return $user->prenom . " " . $user->name;
    }
    
    // Si l'utilisateur n'est pas authentifié, On peut retourner une valeur par défaut.
    return "Utilisateur Inconnue";
}



function setMenuClass($route, $classe)
{
    $routeActuel=request()->route()->getName();
    if(contains($routeActuel, $route)){
        return $classe;
    }
    return "";
}
function setMenuActive($route)
{
    $routeActuel=request()->route()->getName();
    if($routeActuel === $route){
        return "active";
    }
    return "";
}

function contains($container, $contenu)
{
    return STR::contains($container, $contenu);
}
?>