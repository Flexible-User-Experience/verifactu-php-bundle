<?php

declare(strict_types=1);

namespace Flux\VerifactuBundle\Dto;

use Flux\VerifactuBundle\Contract\ComputerSystemInterface;
use Symfony\Component\Validator\Constraints as Assert;

final readonly class ComputerSystemDto implements ComputerSystemInterface
{
    public function __construct(
        #[Assert\NotBlank]
        private string $vendorName,
        #[Assert\NotBlank]
        private string $vendorNif,
        #[Assert\NotBlank]
        private string $name,
        #[Assert\NotBlank]
        private string $id,
        #[Assert\NotBlank]
        private string $version,
        #[Assert\NotBlank]
        private string $installationNumber,
        private bool $onlySupportsVerifactu,
        private bool $supportsMultipleTaxpayers,
        private bool $hasMultipleTaxpayers
    ) {
    }

    public function getVendorName(): string
    {
        return $this->vendorName;
    }

    public function getVendorNif(): string
    {
        return $this->vendorNif;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function getInstallationNumber(): string
    {
        return $this->installationNumber;
    }

    public function isOnlySupportsVerifactu(): bool
    {
        return $this->onlySupportsVerifactu;
    }

    public function isSupportsMultipleTaxpayers(): bool
    {
        return $this->supportsMultipleTaxpayers;
    }

    public function isHasMultipleTaxpayers(): bool
    {
        return $this->hasMultipleTaxpayers;
    }
}
