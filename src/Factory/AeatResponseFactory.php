<?php

declare(strict_types=1);

namespace Flux\VerifactuBundle\Factory;

use Flux\VerifactuBundle\Contract\AeatResponseInterface;
use Flux\VerifactuBundle\Transformer\AeatResponseTransformer;
use Flux\VerifactuBundle\Validator\ContractsValidator;
use josemmo\Verifactu\Models\Responses\AeatResponse;

final readonly class AeatResponseFactory
{
    public function __construct(
        private AeatResponseTransformer $aeatResponseTransformer,
        private ContractsValidator $validator,
    ) {
    }

    public function makeValidatedAeatResponseDtoFromModel(AeatResponse $model): AeatResponseInterface
    {
        $validatedAeatResponseDto = $this->aeatResponseTransformer->transformModelToDto($model);
        $this->validator->validate($validatedAeatResponseDto);

        return $validatedAeatResponseDto;
    }
}
