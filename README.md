# php-excel-file-updater

**PHP script that reads a CSV/Excel file, updates specific columns, and exports a clean, modified version automatically**.

---

## Description

`php-excel-file-updater` is a simple server-side PHP utility designed to automate the bulk editing of CSV and Excel files. It opens an existing file, iterates through each row, applies custom transformations to targeted columns (such as reformatting dates or overwriting values), and saves the result as a new output file — all without any manual intervention. Ideal for data cleanup, batch processing, or quick file migrations.

---

## Tech Stack

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

---

## Installation

Clone the repository and place it in your PHP-enabled server directory:

```bash
git clone https://github.com/Cyrus2401/php-excel-file-updater.git
cd php-excel-file-updater
```

---

## Usage

1. Place your source CSV file in the project root and name it `file_example.csv`
2. Open `index.php` and edit the transformation logic to match your needs:

```php
$data[7] = "Your custom value"; // Targets the 7th column (0-indexed)
```

3. Run the script via your local server:

```
http://localhost/php-excel-file-updater/index.php
```

4. The modified file will be generated as `file_example_fixed.csv` in the project root.

---
