<?php
/**
 * Class ImageConverter
 */
class ImageConverter {
    /**
     * @var array Allowed image formats
     */
    private $allowedFormats = ['png', 'jpg', 'jpeg'];

    /**
     * Convert an image to binary data.
     *
     * @param string $imagePath Path to the image file.
     * @return string Binary image data or error message.
     */
    public function imageToBinary($imagePath): ?string {
        $extension = strtolower(pathinfo($imagePath, PATHINFO_EXTENSION));

        if (!in_array($extension, $this->allowedFormats, true)) {
            return "Unsupported image format.";
        }

        $imageBinary = file_get_contents($imagePath);

        return $imageBinary;
    }

    /**
     * Save binary data as an image file.
     *
     * @param string $binaryData Binary image data.
     * @param string $outputPath Path to save the image file.
     * @return string Success message or error message.
     */
    public function saveBinaryAsImage($binaryData, $outputPath): string {
        if (file_put_contents($outputPath, $binaryData) === false) {
            return "Failed to save the image.";
        }

        return "Image converted successfully and saved as: $outputPath";
    }
}

if (count($argv) < 3) {
    echo "Usage: php ImageConverter.php -c <image_path> OR php ImageConverter.php -r <binary_path>\n";
    exit(1);
}

$action = $argv[1];
$filePath = $argv[2];

$converter = new ImageConverter();

if ($action === "-c") {
    // Convert an image to binary
    $binaryImage = $converter->imageToBinary($filePath);

    if (strpos($binaryImage, "Error") === false) {
        $outputPath = pathinfo($filePath, PATHINFO_FILENAME) . ".bin";
        $result = $converter->saveBinaryAsImage($binaryImage, $outputPath);
        echo $result . "\n";
    } else {
        echo $binaryImage;
    }
} elseif ($action === "-r") {
    // Recover an image from binary
    $binaryData = file_get_contents($filePath);

    if ($binaryData !== false) {
        $outputPath = pathinfo($filePath, PATHINFO_FILENAME) . ".jpg";
        $result = $converter->saveBinaryAsImage($binaryData, $outputPath);
        echo $result . "\n";
    } else {
        echo "Failed to read binary data from file.\n";
    }
} else {
    echo "Invalid action. Use -c to convert an image or -r to recover an image.\n";
    exit(1);
}
?>
