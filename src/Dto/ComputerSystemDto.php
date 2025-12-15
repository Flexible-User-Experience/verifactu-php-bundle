<?php

declare(strict_types=1);

namespace Flux\VerifactuBundle\Dto;

use Flux\VerifactuBundle\Contract\ComputerSystemInterface;

final readonly class ComputerSystemDto implements ComputerSystemInterface
{
    public function __construct(
        private string $vendorName,
        private string $vendorNif,
        private string $name,
        private string $id,
        private string $version,
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
