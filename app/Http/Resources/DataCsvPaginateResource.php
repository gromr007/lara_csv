<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class DataCsvPaginateResource extends ResourceCollection
{

    public static $wrap = 'data';

    public function withResponse($request, $response)
    {
        $arrResponse = json_decode($response->getContent(), true);

        unset($arrResponse['links'], $arrResponse['meta']);

        $response->setContent(json_encode($arrResponse['data']));
    }

    public function toArray($request): array
    {
        return [
            'articles' => $this->collection,
            'count' => $this->count(),
            'pagination' => [
                'per_page' => $this->perPage(),
                'next_page_url' => $this->nextPageUrl(),
                'prev_page_url' => $this->previousPageUrl(),
            ]
        ];
    }

}
