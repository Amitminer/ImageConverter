# ImageConverter 

The ImageConverter tool provides a command-line interface (CLI) for converting images to binary data and vice versa. Below, you'll find detailed information on how to use the CLI tool.

### Prerequisites

- **PHP**: Ensure that PHP is installed on your system.
- **Command-Line Access**: You should have access to a command-line interface (e.g., Terminal, Command Prompt).

### Installation

To use the ImageConverter tool, you can install it via Composer by running the following command in your project's root directory:

```sh
composer require amitxd/imageconverter
```

This command downloads the ImageConverter package and its dependencies, making it available for use in your project. After installation, you can use the CLI tool as described below.

### Convert an Image to Binary

To convert an image to binary data, use the following command:

```sh
php vendor/bin/ImageConverter.php -c <image_path>
```

Replace `<image_path>` with the path to the image you want to convert. For example:

```sh
php vendor/bin/ImageConverter.php -c myimage.jpg
```

The binary data will be saved as "myimage.bin" in the same directory where the CLI command was executed.

### Recover an Image from Binary

To recover an image from binary data, use the following command:

```sh
php vendor/bin/ImageConverter.php -r <binary_path>
```

Replace `<binary_path>` with the path to the binary file you want to convert back to an image. For example:

```sh
php vendor/bin/ImageConverter.php -r myimage.bin
```

The recovered image will be saved as "myimage.jpg" in the same directory where the CLI command was executed.

## Example Usage

Here are some example usages of the ImageConverter CLI tool:

- **Convert an image to binary**:

  ```sh
  php vendor/bin/ImageConverter.php -c image.jpg
  ```

  This command will convert "image.jpg" to binary data and save it as "image.bin."

- **Recover an image from binary**:

  ```sh
  php vendor/bin/ImageConverter.php -r image.bin
  ```

  This command will recover an image from "image.bin" and save it as "image.jpg."

## Command-Line Help

You can display a help message and list of available commands by running the ImageConverter tool without any arguments:

```sh
php vendor/bin/ImageConverter.php
```

This will show you the available options and usage instructions.

Please note that the CLI usage examples assume that Composer's vendor binaries directory is in your system's PATH. If it's not, you may need to adjust the path to the ImageConverter CLI script accordingly.