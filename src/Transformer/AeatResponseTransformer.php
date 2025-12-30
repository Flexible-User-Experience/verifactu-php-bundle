<?php

declare(strict_types=1);

namespace Flux\VerifactuBundle\Transformer;

use Flux\VerifactuBundle\Dto\AeatResponseDto;
use josemmo\Verifactu\Models\Responses\AeatResponse;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\SerializerInterface;

final readonly class AeatResponseTransformer extends BaseTransformer
{
    public const FORMAT_JSON = 'json';

    public function __construct(
        private SerializerInterface $serializer,
    ) {
    }

    public function transformModelToDto(AeatResponse $model): AeatResponseDto
    {
        return new AeatResponseDto(
            csv: $model->csv,
            submittedAt: $model->submittedAt,
            waitSecond: $model->waitSeconds,
            status: $model->status,
            items: $model->items,
        );
    }

    /**
     * @throws ExceptionInterface
     */
    public function transformDtoToJson(AeatResponseDto $dto): string
    {
        return $this->serializer->serialize($dto, self::FORMAT_JSON);
    }

    /**
     * @throws ExceptionInterface
     */
    public function transformJsonToDto(string $json): AeatResponseDto
    {
        return $this->serializer->deserialize($json, AeatResponseDto::class, self::FORMAT_JSON);
    }
}
