<?php 
use Illuminate\Support\Str;

function userFullName(){
    return auth()->user()->prenom . " " . auth()->user()->name;
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