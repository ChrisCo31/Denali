<?php
/**
 * Classe qui charge les differentes classes d'objet et evite le recours au require
 */
class Autoloader
{
    /**
     *utilisation de la fonction spl_autoload_register pour enregister les fonctions
     * @return True en cas de succes / False en cas d'erreur
     */
    static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
    /**
     *  Charge une classe
     * @param $class = le nom de la classe à charger
     * @return  Pas de valeur retourné
     */
    static function autoload($class)
    {
        require_once __DIR__.'\\'.$class.'.php';
    }
}
