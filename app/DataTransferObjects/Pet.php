<?php

namespace App\DataTransferObjects;

use App\Models\Enums\PetStatusEnum;

/**
 * @link https://petstore.swagger.io/#/ model
 */
class Pet
{
    public int $id;
    public ?array $category; //todo details, convert to object
    public string $name;
    public array $photoUrls = []; //todo details
    public array $tags = []; //todo details
    public string $status;

    public function __construct(array $data)
    {
        //todo ArrayAccess? JsonSerializable?
        $this->id = $data['id'] ?? 0;
        $this->category = $data['category'] ?? null;
        $this->name = $data['name'];
        $this->photoUrls = $data['photoUrls'] ?? [];
        $this->tags = $data['tags'] ?? [];
        $this->status = $data['status'] ?? PetStatusEnum::available;
    }
}
