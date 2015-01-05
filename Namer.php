<?php
/**
 * Created by PhpStorm.
 * User: Rudak
 * Date: 06/12/2014
 * Time: 11:06
 */

namespace Rudak\UtilsBundle;


class Namer
{

    public static function getFirstName($capital = true)
    {
        $firstNames = self::getAvailableFirstNames();
        if (true === $capital) {
            return ucfirst(strtolower($firstNames[array_rand($firstNames)]));
        } else {
            return strtolower($firstNames[array_rand($firstNames)]);
        }
    }

    public static function getLastName($capital = true)
    {
        $lastNames = self::getAvailableLastNames();
        if (true === $capital) {
            return ucfirst(strtolower($lastNames[array_rand($lastNames)]));
        } else {
            return strtolower($lastNames[array_rand($lastNames)]);
        }
    }

    private static function getAvailableFirstNames()
    {
        return array(
            'frederic', 'cedric', 'paul', 'frank', 'bruno', 'arnaud', 'richard', 'romain', 'samuel',
            'Marc', 'Cyril', 'Luc', 'Loris', 'Roman', 'Leandre',
            'Jonas', 'Alan', 'Max', 'Albin', 'Dimitri', 'Ronan', 'Gianni',
            'Andy', 'Guilhem', 'Sebastien', 'Romeo', 'Fabio', 'Andreas',
            'Luka', 'Bruno', 'Maximilien', 'Jordan', 'Matthias', 'Sofiane',
            'Donovan', 'Ludovic', 'Ange', 'Calvin', 'Nolann', 'Elio', 'Emmanuel',
            'Sam', 'Alex', 'Maxens', 'Noan', 'Ulysse', 'Stanislas', 'Bryan',
            'Emilien', 'Oscar', 'Arsene', 'Matisse', 'Cyprien', 'Elouan', 'Yoann',
            'Eloi', 'Lorenzo', 'Flavio', 'FranÇois', 'Jonathan', 'Elliot', 'Mattheo',
            'Joris', 'Xavier', 'Johan', 'Kyllian', 'Edouard', 'Gauthier', 'Emeric',
            'Pablo', 'Tanguy', 'Ilian', 'Tony', 'Ewan', 'Justin', 'Joan', 'Malo',
            'Jean', 'Melvin', 'Erwann', 'Anatole', 'Augustin', 'Eliot', 'Florent',
            'Flavien', 'Teo', 'Vincent', 'Gaspard', 'Adam', 'David', 'Alban', 'Lois',
            'Thibaut', 'Olivier', 'Yann', 'Charles', 'Amaury', 'Noam', 'Sasha', 'Jean',
            'Owen', 'Charly', 'Loan', 'Mateo', 'Luca', 'Lilian', 'Matthieu',
            'Julian', 'Nino', 'Mathieu', 'Gaetan', 'Ewen', 'Mae', 'Alban',
            'Gaspard', 'Charles', 'Oscar', 'Mahe', 'Louka', 'Antoine', 'Enzo', 'Axel',
            'Thomas', 'Nolan', 'Timeo', 'Sacha', 'Maxime', 'Mathis', 'Baptiste', 'Tom',
            'Mael', 'Theo', 'Ethan', 'Paul', 'Nathan', 'Leo', 'Raphael', 'Arthur',
            'Gabriel', 'Clement', 'Jules', 'Lucas', 'Hugo');
    }

    private static function getAvailableLastNames()
    {
        return array(
            'HUET', 'LANGLOIS', 'LEMAIRE', 'CHARPENTIER', 'PREVOST', 'BARON', 'MEYER',
            'ROYER', 'RIVIERE', 'STEWART', 'DANIEL', 'DESCHAMPS', 'HUBERT', 'LEROUX',
            'MEUNIER', 'MARY', 'MULLER', 'GRAND', 'LACROIX', 'WRIGHT', 'MARIE', 'PHILIPPE',
            'BAILLY', 'MISS', 'LOUIS', 'ROLLAND', 'ALLEN', 'CAMPBELL', 'JOLY', 'DUFOUR',
            'CHARLES', 'LECLERC', 'RENARD', 'GAILLARD', 'DUMONT', 'PELLETIER', 'BERGER',
            'HILL', 'ADAM', 'WALKER', 'GUILLAUME', 'ROGER', 'RENAUD', 'OLIVIER', 'SCOTT',
            'BOUCHER', 'GEORGE', 'THOMPSON', 'PICARD', 'DUMAS', 'BRETON', 'BOURGEOIS',
            'GAUTHIER', 'ROCHE', 'LUCAS', 'COLIN', 'PARIS', 'JEAN', 'JAMES', 'LEFEVRE',
            'MOORE', 'HALL', 'DUVAL', 'BRUNET', 'LEGRAND', 'ADAMS', 'NOEL', 'ROUSSEL',
            'TAYLOR', 'AUBERT', 'PIERRE', 'DENIS', 'BOYER', 'WHITE', 'ARNAUD', 'FONTAINE',
            'FABRE', 'BARBIER', 'BLANCHARD', 'CLARK', 'WILSON', 'GERARD', 'FRANCOIS', 'BRUN',
            'ROBIN', 'NICOLAS', 'CLEMENT', 'MATHIEU', 'GIRAUD', 'WILLIAMS', 'PERRIN', 'JOHN',
            'MASSON', 'LEFEBVRE', 'MORIN', 'LEROY', 'FAURE', 'DUPONT', 'CHEVALIER', 'DAVIS',
            'MARCHAND', 'MILLER', 'MERCIER', 'BONNET', 'GAUTIER', 'VINCENT', 'ANDRE', 'MOREL',
            'GUERIN', 'JONES', 'ROUSSEAU', 'GARNIER', 'JOHNSON', 'FOURNIER', 'BLANC', 'LAMBERT',
            'GIRARD', 'LAURENT', 'BERTRAND', 'ROY', 'DAVID', 'BROWN', 'HENRY', 'SIMON',
            'MOREAU', 'DUBOIS', 'DURAND', 'RICHARD', 'MICHEL', 'ROBERT', 'PETIT', 'ROUX',
            'BERNARD', 'THOMAS', 'SMITH', 'MARTIN');
    }
}
