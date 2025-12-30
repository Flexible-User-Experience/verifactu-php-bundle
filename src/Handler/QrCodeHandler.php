<?php

declare(strict_types=1);

namespace Flux\VerifactuBundle\Handler;

use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Exception\ValidationException;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Writer\Result\ResultInterface;
use Flux\VerifactuBundle\Dto\AeatResponseDto;

final readonly class QrCodeHandler
{
    /**
     * @throws \RuntimeException
     * @throws ValidationException
     */
    public function buildQrCodeAsPngImageFromAeatResponseDto(AeatResponseDto $aeatResponseDto): ResultInterface
    {
        if (is_null($aeatResponseDto->getCsv())) {
            throw new \RuntimeException('AEAT CSV response can not be null');
        }
        $writer = new PngWriter();
        $qrCode = new QrCode(
            data: $aeatResponseDto->getCsv(),
            encoding: new Encoding('UTF-8'),
            errorCorrectionLevel: ErrorCorrectionLevel::Low,
            size: 300,
            margin: 10,
            roundBlockSizeMode: RoundBlockSizeMode::Margin,
            foregroundColor: new Color(0, 0, 0),
            backgroundColor: new Color(255, 255, 255)
        );
        $result = $writer->write($qrCode);
        $writer->validateResult($result, $aeatResponseDto->getCsv());

        return $result;
    }
}
