<?php

namespace App\Service;

use phpDocumentor\Reflection\Types\Array_;

class ServiceBatailleNavale implements ServiceInterface
{

    private array $carte = [];
    private array $ligne = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l');
    private int $tailleBateau = 0;
    private array $bateaux = [];

    public function creationCarte(): void
    {
        for ($i = 0; $i < 12; $i++) {
            $this->carte[] = $this->ligne;
        }

        echo '<pre>';
        print_r($this->carte);
        echo '</pre>';
    }

    public function creationBateau(): void
    {

        $this->creationCarte();

        for ($i = 0; $i < 3; $i++) {
            $this->bateaux[$i] = $this->tailleBateau = rand(1,3);

            echo "Bateau " . ($i + 1) . ": \n";
            do {
                $x = readline("Coordonnée X (0-11) : ");
                $y = readline("Coordonnée Y (0-11) : ");

                // Vérifier si la case est déjà occupée
                if (isset($this->carte[$x][$y])) {
                    echo "Erreur : Cette case est déjà occupée par un autre bateau. Veuillez choisir une autre case.\n";
                }
            } while (!isset($this->carte[$x][$y]));

            // Ajouter les coordonnées du bateau dans le tableau
            $this->bateaux[] = ["x" => $x, "y" => $y];
        }

        for ($i = 0; $i < 3; $i++) {
            echo $this->bateaux[$i];
        }

        echo '<pre>';
        print_r($this->carte);
        echo '</pre>';
    }
}
