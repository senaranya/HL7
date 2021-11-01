* Contributions are more than welcome!
* Please review [issues](https://github.com/senaranya/HL7/issues) if you want to pick up from existing tickets. New tickets/features/CRs/PRs are welcome!
* The goal of this library is to keep it generic and minimal. The focus should only be on basic HL7-related operations like creation/parsing/sending/receiving etc. No project-specific business logic should be included.
* This library follows PSR-12 standards for coding style. You may use [phpcs](https://github.com/squizlabs/PHP_CodeSniffer#getting-started) to verify your code.
* Add unit tests for code changes/updates. There are a number of existing tests, follow those as reference
* Contributors are requested to add or update phpdoc for any new or existing methods being worked on. After updating/adding, please update the API documentation as well (details below)

##### Generate/update API documentation (in Markdown format) from docblocks
* Install [clean/phpdoc-md](https://github.com/clean/phpdoc-md): `composer require --dev clean/phpdoc-md`
* Update _.phpdoc-md_ if a new class is added
* Issue `vendor/bin/phpdoc-md`. This generates .md files under doc/ folder
