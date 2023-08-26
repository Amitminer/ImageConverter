# ImageConverter

A simple PHP-based command-line tool for converting images to binary data and vice versa.

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Usage](#usage)
- [Installation](#installation)
- [API Documentation](#api-documentation)
- [Contributing](#contributing)
- [License](#license)

## Introduction

The ImageConverter tool allows you to convert image files to binary data and recover images from binary data. It provides a command-line interface for easy conversion.

## Features

- Convert an image file to binary data.
- Recover an image from binary data.
- Supports popular image formats (PNG, JPG, JPEG).
- Simple and easy-to-use command-line interface.

## Usage

### Prerequisites

- PHP installed on your system.
- Command-line access.

### Convert an Image to Binary

To convert an image to binary data, use the following command:

```sh
php ImageConverter.php -c <image_path>
```

Example:

```sh
php ImageConverter.php -c myimage.jpg
```

The binary data will be saved as "myimage.bin" in the same directory.

### Recover an Image from Binary

To recover an image from binary data, use the following command:

```sh
php ImageConverter.php -r <binary_path>
```

Example:

```sh
php ImageConverter.php -r myimage.bin
```

The image will be saved as "myimage.jpg" in the same directory.

## Installation

1. Clone this repository to your local machine:

```sh
git clone https://github.com/Amitminer/ImageConverter.git
```

2. Change directory to the project folder:

```sh
cd ImageConverter
```

3. Run the ImageConverter using PHP as described in the [Usage](#usage) section.

## API Documentation

The ImageConverter tool does not have a traditional API but can be accessed via the command-line interface. Please refer to the [Usage](#usage) section for details on how to use it.

## Contributing

Contributions are welcome! If you have ideas for improvements or new features, please open an issue or submit a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---