<?php
/**
 * Data structure for 10 Target Pests - PHP 8
 */

declare(strict_types=1);

function get_pests_data(): array {
    return [
        [
            'id' => 'punaises-de-lit',
            'name' => 'Punaises de lit',
            'subtitle' => 'Éradication totale dans les chambres et logements',
            'category' => 'Parasites',
            'danger' => 'Critique',
            'description' => 'Les punaises de lit se multiplient très rapidement et résistent aux insecticides classiques. Leurs piqûres provoquant démangeaisons vives et insomnies.',
            'symptoms' => [
                'Plaques de piqûres alignées sur la peau au réveil',
                'Petites taches noires ou traces de sang sur les draps',
                'Présence de peaux de mue près de la tête de lit'
            ],
            'risks' => [
                'Troubles sévères du sommeil et anxiété',
                'Infections cutanées dues aux grattages',
                'Propagation rapide à l\'ensemble du bâtiment'
            ],
            'method' => 'Traitement combiné chimique certifié Certibiocide et/ou thermique de choc. Pulvérisation des refuges et traitement des fissures.'
        ],
        [
            'id' => 'cafards-blattes',
            'name' => 'Cafards et blattes',
            'subtitle' => 'Destruction des colonies de blattes en cuisine et locaux',
            'category' => 'Insects',
            'danger' => 'Critique',
            'description' => 'Les blattes (germaniques, orientales) prolifèrent dans la chaleur et l\'humidité. Elles souillent les aliments et propagent des bactéries.',
            'symptoms' => [
                'Vue de cafards en journée (forte infestation)',
                'Présence d\'excréments noirs sous forme de petites crottes',
                'Odeur rance forte caractéristiques'
            ],
            'risks' => [
                'Contamination bactérienne (Salmonelle, E. coli)',
                'Déclenchement d\'allergies et d\'asthme',
                'Fermeture administrative pour les commerces'
            ],
            'method' => 'Gel appât professionnel haute appétence sans odeur ni évacuation nécessaire, combiné avec nébulisation spécifique.'
        ],
        [
            'id' => 'souris-rats',
            'name' => 'Souris et rats',
            'subtitle' => 'Dératisation complète, appâtage sécurisé et rebouchage',
            'category' => 'Rodents',
            'danger' => 'Critique',
            'description' => 'Rats et souris causent d\'importants dégâts matériels en rongeant câbles et isolants, tout en présentant un risque sanitaire majeur.',
            'symptoms' => [
                'Bruits de grattage dans les cloisons ou faux plafonds la nuit',
                'Traces de crottes allongées près de la nourriture',
                'Traces de gras le long des plinthes et murs'
            ],
            'risks' => [
                'Transmission de la leptospirose et salmonellose',
                'Risque d\'incendie par court-circuit (câbles rongés)',
                'Degradation de l\'isolation'
            ],
            'method' => 'Postes d\'appâtage sécurisés sous clé, pièges mécaniques pros, et colmatage hermétique des voies de passage (inox/grillage).'
        ],
        [
            'id' => 'fourmis',
            'name' => 'Fourmis',
            'subtitle' => 'Éradication des fourmilières dans les habitations et jardins',
            'category' => 'Insects',
            'danger' => 'Moyen',
            'description' => 'Les fourmis s\'infiltrent à la recherche de sucre, formant des colonnes ininterrompues qui envahissent cuisines et terrasses.',
            'symptoms' => [
                'Lignes ininterrompues vers les sources de nourriture',
                'Petits tas de sciure sous les plinthes',
                'Présence de fourmis ailées au printemps'
            ],
            'risks' => [
                'Contamination des denrées sucrées',
                'Dégâts dans les structures en bois',
                'Inconfort pour les habitants et clients'
            ],
            'method' => 'Gel micro-gouttes agissant par effet retard pour empoisonner la reine et détruire la fourmilière à la racine.'
        ],
        [
            'id' => 'guepes-frelons',
            'name' => 'Guêpes et frelons',
            'subtitle' => 'Destruction de nids de guêpes, frelons européens et asiatiques',
            'category' => 'Flying',
            'danger' => 'Critique',
            'description' => 'Les nids de guêpes et frelons représentent un danger mortel en cas de piqûres multiples ou de choc anaphylactique.',
            'symptoms' => [
                'Allées et venues d\'insectes vers un même point',
                'Nid visible sous toiture, volet roulant ou haie',
                'Bourdonnement important dans les combles'
            ],
            'risks' => [
                'Choc anaphylactique potentiellement mortel',
                'Agressivité forte à proximité du nid',
                'Impossibilité de profiter du jardin'
            ],
            'method' => 'Injection de produit foudroyant directement au cœur du nid grâce à une perche télescopique haute hauteur.'
        ],
        [
            'id' => 'puces',
            'name' => 'Puces',
            'subtitle' => 'Traitement anti-puces pour parquets et moquettes',
            'category' => 'Parasites',
            'danger' => 'Élevé',
            'description' => 'Apportées par les animaux domestiques, les puces piquent aux chevilles et s\'installent dans les fentes de parquet.',
            'symptoms' => [
                'Démangeaisons intenses aux chevilles et mollets',
                'Petits insectes sautant sur le sol ou draps',
                'Points noirs dans le pelage des animaux'
            ],
            'risks' => [
                'Allergies cutanées et surinfections',
                'Prolifération rapide des larves dans le sol',
                'Gêne constante'
            ],
            'method' => 'Pulvérisation d\'un régulateur de croissance (IGR) et biocide choc couvrant l\'ensemble des sols.'
        ],
        [
            'id' => 'mouches-moucherons',
            'name' => 'Mouches et moucherons',
            'subtitle' => 'Contrôle des invasions de mouches et moucherons',
            'category' => 'Flying',
            'danger' => 'Moyen',
            'description' => 'Prolifèrent près des poubelles et canalisations, causant une gêne visuelle et un risque d\'hygiène.',
            'symptoms' => [
                'Insectes volants constants autour des éviers',
                'Présence de larves près des déchets',
                'Traces noires sur les fenêtres'
            ],
            'risks' => [
                'Transport de microbes vers les aliments',
                'Gêne pour les restaurants et commerces',
                'Sensation d\'insalubrité'
            ],
            'method' => 'Traitement des canalisations, pulvérisation de rémanent sur les zones de repos.'
        ],
        [
            'id' => 'mites',
            'name' => 'Mites',
            'subtitle' => 'Éradication des mites vestimentaires et alimentaires',
            'category' => 'Insects',
            'danger' => 'Moyen',
            'description' => 'Mites de vêtements (dévorant la laine) ou alimentaires (polluant farine et céréales) nécessitent un traitement ciblé.',
            'symptoms' => [
                'Petits trous dans les vêtements en laine',
                'Petits papillons volants le soir',
                'Fils de soie dans les paquets de céréales'
            ],
            'risks' => [
                'Destruction de textiles coûteux',
                'Pertes de stocks alimentaires',
                'Prolifération cachée dans les placards'
            ],
            'method' => 'Micro-nébulisation des placards, pose de pièges à phéromones professionnels.'
        ],
        [
            'id' => 'araignees',
            'name' => 'Araignées',
            'subtitle' => 'Traitement préventif et curatif dans les caves et pièces',
            'category' => 'Insects',
            'danger' => 'Moyen',
            'description' => 'Une invasion massive d\'araignées dans les caves, garages ou pièces à vivre génère phobie et toiles répétées.',
            'symptoms' => [
                'Accumulation de toiles aux plafonds',
                'Présence récurrente dans les pièces d\'eau',
                'Nids d\'araignées au printemps'
            ],
            'risks' => [
                'Anxiété forte pour les arachnophobes',
                'Impression d\'abandon des locaux',
                'Piqûres occasionnelles'
            ],
            'method' => 'Pulvérisation périphérique d\'un répulsif biocide rémanent sur les ouvertures, caves et combles.'
        ],
        [
            'id' => 'moustiques',
            'name' => 'Moustiques',
            'subtitle' => 'Traitement anti-moustique tigre pour jardins et terrasses',
            'category' => 'Flying',
            'danger' => 'Élevé',
            'description' => 'Le moustique tigre (Aedes albopictus) est très présent en Île-de-France et Marseille. Il pique jour et nuit.',
            'symptoms' => [
                'Bourdonnements et piqûres douloureuses',
                'Boutons rouges et démangeaisons vives',
                'Larves nageant dans les eaux stagnantes'
            ],
            'risks' => [
                'Vecteur potentiel de maladies (Dengue, Chikungunya)',
                'Nuits agitées et dégradation du confort',
                'Impossibilité de profiter de l\'extérieur'
            ],
            'method' => 'Traitement larvicide des eaux stagnantes + pulvérisation d\'une barrière biocide sur la végétation de repos.'
        ]
    ];
}
