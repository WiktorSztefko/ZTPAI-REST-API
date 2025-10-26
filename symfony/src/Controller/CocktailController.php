<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class CocktailController extends AbstractController
{
    private array $cocktails = [
        [
            'name' => 'Old Fashioned',

            'description' => 'Jest to jeden z najstarszych koktajli świata. Jego historia sięga początku XVIII wieku. Wtedy też zaczęły pojawiać się pierwsze bittersy, czyli dodatki (przyprawy) do drinków, które do dziś cieszą się rosnącą popularnością. Jest uważany za prawdziwą ikonę sztuki barmańskiej i fundament współczesnej kultury koktajlowej.',

            'fun_fact' => 'Koktajl prezydencki – Harry S. Truman i jego żona Bess byli wielkimi fanami Old Fashioned, często serwując go na przyjęciach w Białym Domu.',

            'image' => "old fashioned.jpeg",
            'difficulty_level' => '1',

            'preparation_instruction' => 'Pierwsze 3 składniki do szklanicy. Mieszamy dokładnie. Dodajemy lód i mieszamy ponownie. Wlewamy do rock glass na lodzie. Wycinamy zest z pomarańczy. Ściskamy zest zewnętrzną stroną w stronę koktajlu. Podpalamy zest i wrzucamy do koktajlu.'
        ],
        [
            'name' => 'Lynchburg Lemonade',

            'description' => 'Lynchburg Lemonade jest idealnym rozwiązaniem dla osób, które lubią whiskey amerykańską, w tym przypadku Tennessee - Jack Daniel\'s - i nie wiedzą jaki można zrobić z niej koktail. Nazwa Lynchburg pochodzi od miejscowości, w której powstaje Jack, zamieniając Jacka na Jim Beama, robi nam się Clermont Lemonade. Jeśli koktail jest zbyt wytrawny, możecie dodać odrobinę syropu cukrowego.',

            'fun_fact' => 'W latach 80. Jack Daniel\'s pozwał właściciela baru z Kalifornii, Tony’ego Masona, który twierdził, że sam stworzył przepis na Lynchburg Lemonade i że firma ukradła mu pomysł. Sprawa trafiła do sądu, gdzie Mason rzeczywiście wygrał odszkodowanie, choć dużo mniejsze niż żądał.',

            'image' => 'lynchburg lemonade.jpeg',
            'difficulty_level' => '5',

            'preparation_instruction' => 'Do szklanki, a najlepiej słoika dekoracyjnego, wsypujemy lód. Wlewamy po kolei wszystkie składniki, mieszając. Robimy top z napoju gazowanego.'
        ]
    ];

    #[Route('/api/cocktails', name: 'get_cocktails', methods: ['GET'])]
    public function getCocktails(): JsonResponse
    {
        $json = json_encode($this->cocktails, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); // zachowanie polskich znaków

        return new JsonResponse(
            $json,
            200,
            ['Content-Type' => 'application/json; charset=utf-8'],
            true // to już jest zakodowany JSON"
        );
    }

    
}
