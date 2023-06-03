<?php

namespace App\DataFixtures;

use App\Entity\Movies;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movies = new Movies();
        $movies->setTitle('Strażnicy Galaktyki: Volume 3');
        $movies->setDescription('Wciąż wstrząśnięty utratą Gamory, Peter Quill zbiera swój zespół by obronić wszechświata – misja, która może oznaczać koniec Strażników, jeśli się nie powiedzie.');
        $manager->persist($movies);

        $movies2 = new Movies();
        $movies2->setTitle('Daredevil:Season1');
        $movies2->setDescription('Niewidomy prawnik, mając wyczulone pozostałe zmysły, zwalcza przestępczość na ulicach Nowego Jorku jako zamaskowany superbohater.');
        $manager->persist($movies2);

        $movies3 = new Movies();
        $movies3->setTitle('Teoria wielkiego podrywu');
        $movies3->setDescription('Dla Leonarda i Sheldona nie ma tajemnic w naukach ścisłych czy grach komputerowych. W relacjach damsko-męskich nie radzą sobie w ogóle.');
        $manager->persist($movies3);

        $manager->flush();
    }
}
