<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'discussion-votes' => [
        'update' => [
            'error' => 'Error al actualizar los votos.',
        ],
    ],

    'discussions' => [
        'allow_kudosu' => 'permitir kudosu',
        'beatmap_information' => 'Página del mapa',
        'delete' => 'eliminar',
        'deleted' => 'Eliminado por :editor :delete_time',
        'deny_kudosu' => 'denegar kudosu',
        'edit' => 'editar',
        'edited' => 'Última edición por :editor :update_time',
        'kudosu_denied' => 'Negado de obtener kudosu.',
        'message_placeholder_deleted_beatmap' => 'Esta dificultad ha sido eliminada, por lo que ya no puede ser discutida.',
        'message_placeholder_locked' => 'La discusión para este mapa ha sido desactivada.',
        'message_placeholder_silenced' => "No puedes publicar una discusión mientras estés silenciado.",
        'message_type_select' => 'Seleccionar tipo de comentario',
        'reply_notice' => 'Presione enter para responder.',
        'reply_placeholder' => 'Escribe tu respuesta aquí',
        'require-login' => 'Inicia sesión para publicar o responder',
        'resolved' => 'Resuelto',
        'restore' => 'restaurar',
        'show_deleted' => 'Mostrar eliminados',
        'title' => 'Discusiones',

        'collapse' => [
            'all-collapse' => 'Desplegar todo',
            'all-expand' => 'Expandir todo',
        ],

        'empty' => [
            'empty' => '¡Sin discusiones aún!',
            'hidden' => 'Ninguna discusión coincide con el filtro seleccionado.',
        ],

        'lock' => [
            'button' => [
                'lock' => 'Bloquear discusión',
                'unlock' => 'Desbloquear discusión',
            ],

            'prompt' => [
                'lock' => 'Razón del bloqueo',
                'unlock' => '¿Estás seguro que deseas desbloquear?',
            ],
        ],

        'message_hint' => [
            'in_general' => 'Esta publicación irá a la discusión general del set de mapas. Para moddear este mapa, empieza un mensaje con una marca de tiempo (por ejemplo, 00:12:345).',
            'in_timeline' => 'Para moddear varias marcas de tiempo, publique varias veces (un mensaje por marca de tiempo).',
        ],

        'message_placeholder' => [
            'general' => 'Escribe aquí para publicar en General (:version)',
            'generalAll' => 'Escribe aquí para publicar en General (Todas las dificultades)',
            'timeline' => 'Escribe aquí para publicar en la Línea de tiempo (:version)',
        ],

        'message_type' => [
            'disqualify' => 'Descalificación',
            'hype' => '¡Hype!',
            'mapper_note' => 'Nota',
            'nomination_reset' => 'Reinicio de nominación',
            'praise' => 'Elogio',
            'problem' => 'Problema',
            'review' => 'Revisión',
            'suggestion' => 'Sugerencia',
        ],

        'mode' => [
            'events' => 'Historial',
            'general' => 'General :scope',
            'reviews' => 'Revisiones',
            'timeline' => 'Línea de tiempo',
            'scopes' => [
                'general' => 'Esta dificultad',
                'generalAll' => 'Todas las dificultades',
            ],
        ],

        'new' => [
            'pin' => 'Fijar',
            'timestamp' => 'Marca de tiempo',
            'timestamp_missing' => '¡Usa Ctrl+C en el modo de edición y pega tu mensaje para agregar una marca de tiempo!',
            'title' => 'Nueva Discusión',
            'unpin' => 'Dejar de fijar',
        ],

        'show' => [
            'title' => ':title mapeado por :mapper',
        ],

        'sort' => [
            'created_at' => 'Tiempo de creación',
            'timeline' => 'Línea de tiempo',
            'updated_at' => 'Última actualización',
        ],

        'stats' => [
            'deleted' => 'Eliminado',
            'mapper_notes' => 'Notas',
            'mine' => 'Mío',
            'pending' => 'Pendiente',
            'praises' => 'Elogios',
            'resolved' => 'Resuelto',
            'total' => 'Todo',
        ],

        'status-messages' => [
            'approved' => '¡Este mapa fue aprobado el :date!',
            'graveyard' => "Este mapa no ha sido actualizado desde el :date por lo que fue abandonado...",
            'loved' => '¡Este mapa fue agregado a Amados el :date!',
            'ranked' => '¡Este mapa fue clasificado el :date!',
            'wip' => 'Nota: Este mapa fue marcado como trabajo en proceso por el creador.',
        ],

        'votes' => [
            'none' => [
                'down' => 'No hay votos negativos',
                'up' => 'Aún no hay votos',
            ],
            'latest' => [
                'down' => 'Últimos votos negativos',
                'up' => 'Últimos votos positivos',
            ],
        ],
    ],

    'hype' => [
        'button' => '¡Hypear este mapa!',
        'button_done' => '¡Hypeado!',
        'confirm' => "¿Estás seguro? Esto usará uno de tus :n Hype restantes y no se puede deshacer.",
        'explanation' => '¡Hypea este mapa para hacerlo más visible para la nominación y la clasificación!',
        'explanation_guest' => '¡Inicia sesión y hypea este mapa para hacerlo más visible para la nominación y la clasificación!',
        'new_time' => "Obtendrás otro hype :new_time.",
        'remaining' => 'Te quedan :remaining Hypes.',
        'required_text' => 'Hype: :current/:required',
        'section_title' => 'Tren del Hype',
        'title' => 'Hype',
    ],

    'feedback' => [
        'button' => 'Dejar comentarios',
    ],

    'nominations' => [
        'delete' => 'Eliminar',
        'delete_own_confirm' => '¿Está seguro? El mapa será eliminado y serás redirigido de vuelta a tu perfil.',
        'delete_other_confirm' => '¿Está seguro? El mapa será eliminado y serás redirigido de vuelta al perfil de usuario.',
        'disqualification_prompt' => '¿Motivo de la descalificación?',
        'disqualified_at' => 'Descalificado :time_ago (:reason).',
        'disqualified_no_reason' => 'motivo no especificado',
        'disqualify' => 'Descalificar',
        'incorrect_state' => 'Error al realizar esa acción, intente actualizando la página.',
        'love' => 'Amor',
        'love_confirm' => '¿Te gusta este mapa?',
        'nominate' => 'Nominar',
        'nominate_confirm' => '¿Nominar este mapa?',
        'nominated_by' => 'nominado por :users',
        'not_enough_hype' => "No hay suficiente hype.",
        'qualified' => 'Se estima que se clasificará el :date, si no se encuentran problemas.',
        'qualified_soon' => 'Se estima que se clasificará pronto, si no se encuentran problemas.',
        'required_text' => 'Nominaciones: :current/:required',
        'reset_message_deleted' => 'eliminado',
        'title' => 'Estado de Nominación',
        'unresolved_issues' => 'Todavía hay problemas sin resolver que deben abordarse primero.',

        'reset_at' => [
            'nomination_reset' => 'El proceso de nominación se ha reiniciado :time_ago por :user a causa del nuevo problema :discussion (:message).',
            'disqualify' => 'Descalificado :time_ago por :user a causa del nuevo problema :discussion (:message).',
        ],

        'reset_confirm' => [
            'nomination_reset' => '¿Estás seguro? Publicar un nuevo problema reiniciará todas las nominaciones.',
            'disqualify' => '¿Está seguro? Esto eliminará el mapa de la calificación y restablecerá el proceso de nominación.',
        ],
    ],

    'listing' => [
        'search' => [
            'prompt' => 'escribe en palabras clave...',
            'login_required' => 'Inicie sesión para buscar.',
            'options' => 'Más opciones de búsqueda',
            'supporter_filter' => 'Filtrar por :filters requiere un tag activo de osu!supporter',
            'not-found' => 'no hay resultados',
            'not-found-quote' => '...nop, nada encontrado.',
            'filters' => [
                'general' => 'General',
                'mode' => 'Modo',
                'status' => 'Categorías',
                'genre' => 'Género',
                'language' => 'Idioma',
                'extra' => 'Adicional',
                'rank' => 'Rango conseguido',
                'played' => 'Jugado',
            ],
            'sorting' => [
                'title' => 'Título',
                'artist' => 'Artista',
                'difficulty' => 'Dificultad',
                'favourites' => 'Favoritos',
                'updated' => 'Actualizado',
                'ranked' => 'Tiempo clasificado',
                'rating' => 'Calificación',
                'plays' => 'Veces jugado',
                'relevance' => 'Relevancia',
                'nominations' => 'Nominaciones',
            ],
            'supporter_filter_quote' => [
                '_' => 'Necesitas un :link activo para filtrar por :filters',
                'link_text' => 'tag de osu!supporter',
            ],
        ],
    ],
    'general' => [
        'recommended' => 'Dificultades recomendadas',
        'converts' => 'Incluir mapas convertidos',
    ],
    'mode' => [
        'any' => 'Cualquiera',
        'osu' => 'osu!',
        'taiko' => 'osu!taiko',
        'fruits' => 'osu!catch',
        'mania' => 'osu!mania',
    ],
    'status' => [
        'any' => 'Cualquiera',
        'approved' => 'Aprobados',
        'favourites' => 'Favoritos',
        'graveyard' => 'Abandonados',
        'leaderboard' => 'Tiene tablas de clasificación',
        'loved' => 'Amados',
        'mine' => 'Mis mapas',
        'pending' => 'Pendiente y trabajo en progreso',
        'qualified' => 'Calificados',
        'ranked' => 'Clasificados',
    ],
    'genre' => [
        'any' => 'Cualquiera',
        'unspecified' => 'Sin especificar',
        'video-game' => 'Videojuego',
        'anime' => 'Anime',
        'rock' => 'Rock',
        'pop' => 'Pop',
        'other' => 'Otro',
        'novelty' => 'Novedad',
        'hip-hop' => 'Hip Hop',
        'electronic' => 'Electrónica',
    ],
    'mods' => [
        '4K' => '4K',
        '5K' => '5K',
        '6K' => '6K',
        '7K' => '7K',
        '8K' => '8K',
        '9K' => '9K',
        'AP' => 'Auto Pilot',
        'DT' => 'Doble Time',
        'EZ' => 'Easy Mode',
        'FI' => 'Fade In',
        'FL' => 'Flashlight',
        'HD' => 'Hidden',
        'HR' => 'Hard Rock',
        'HT' => 'Half Time',
        'MR' => 'Espejo',
        'NC' => 'Nightcore',
        'NF' => 'No Fail',
        'NM' => 'Sin mods',
        'PF' => 'Perfecto',
        'Relax' => 'Relax',
        'SD' => 'Muerte Súbita',
        'SO' => 'Spun Out',
        'TD' => 'Dispositivo touch',
    ],
    'language' => [
        'any' => 'Cualquiera',
        'english' => 'Inglés',
        'chinese' => 'Chino',
        'french' => 'Francés',
        'german' => 'Alemán',
        'italian' => 'Italiano',
        'japanese' => 'Japonés',
        'korean' => 'Coreano',
        'spanish' => 'Español',
        'swedish' => 'Sueco',
        'instrumental' => 'Instrumental',
        'other' => 'Otro',
    ],
    'played' => [
        'any' => 'Cualquiera',
        'played' => 'Jugado',
        'unplayed' => 'No jugado',
    ],
    'extra' => [
        'video' => 'Contiene vídeo',
        'storyboard' => 'Contiene storyboard',
    ],
    'rank' => [
        'any' => 'Cualquiera',
        'XH' => 'SS Plateada',
        'X' => 'SS',
        'SH' => 'S Plateada',
        'S' => 'S',
        'A' => 'A',
        'B' => 'B',
        'C' => 'C',
        'D' => 'D',
    ],
    'panel' => [
        'playcount' => 'Veces jugado: :count',
        'favourites' => 'Favoritos: :count',
    ],
];
