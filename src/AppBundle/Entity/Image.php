<?php

declare(strict_types=1);

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
 *     collectionOperations={},
 *     iri="http://schema.org/ImageObject",
 *     itemOperations={
 *         "get"={
 *             "method"="GET",
 *         },
 *     },
 * )
 *
 * @ORM\Entity
 */
class Image extends Media
{
}
