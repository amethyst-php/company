<?php

namespace Amethyst\Schemas;

use Amethyst\Managers\LegalEntityManager;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class CompanySchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\TextAttribute::make('name')
                ->setRequired(true)
                ->setUnique(true),
            Attributes\LongTextAttribute::make('description'),
            Attributes\BelongsToAttribute::make('legal_entity_id')
                ->setRelationName('legal_entity')
                ->setRelationManager(LegalEntityManager::class),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
