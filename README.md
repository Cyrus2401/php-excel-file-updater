# php-excel-file-updater

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge\&logo=php\&logoColor=white)

## Description

A lightweight PHP utility for reading a CSV file, updating specific columns, and automatically generating a corrected output file. This project is designed for developers and administrators who need to perform bulk CSV processing without complex setup or dependencies.

## Features

* Read an existing CSV file (`file_example.csv`)
* Iterate through rows and update targeted columns
* Generate a new output file (`file_example_fixed.csv`)
* Includes sample files for quick testing

## Technologies Used

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge\&logo=php\&logoColor=white)

## Installation

1. Copy the project into a directory accessible by your PHP server.
2. Ensure PHP is installed and properly configured on your machine.
3. Place the source CSV file in the project directory as `file_example.csv`, or update the file path in `index.php`.

```bash
cd /var/www/html/php-excel-file-updater
```

## Usage

1. Open `index.php`.
2. Customize the transformation logic as needed, for example:

```php
$data[7] = "Written by Cyrus"; // Updates the 8th column (index 7)
```

3. Access the script through your web server:

```text
http://localhost/php-excel-file-updater/index.php
```

4. The processed file will be generated as:

```text
file_example_fixed.csv
```

## Project Structure

* `index.php` — Main CSV processing script
* `file_example.csv` — Sample source file
* `file_example_fixed.csv` — Generated output file
* `file_example.xls` — Additional sample spreadsheet included in the project

## License

This project is licensed under the MIT License.
