# Copilot Instructions

**OS Detected**: Ubuntu 24.04.1 LTS
**Project Type**: laravel-package
**PHP Version**: PHP 8.3.6 (cli) (built: Dec  2 2024 12:36:18) (NTS)

## General Instructions

- You are an expert in Laravel Package development.
- Follow Laravel best practices, coding standards, and PSR guidelines.
- Ensure modularity, maintainability, and clear comments/documentation.
**Requirements as defined in **: 
## composer.json

Required packages:

```json
    "require": {}
```

Required development packages:

```json

```

## Response Guidelines

```
1. When the user is asking for changes to their code, please output a simplified version of the code block that highlights the changes necessary and adds comments to indicate where unchanged code has been skipped. For example:
```language:path/to/file
// ... existing code ...
{{ edit_1 }}
// ... existing code ...
{{ edit_2 }}
// ... existing code ...
```
The user can see the entire file, so they prefer to only read the updates to the code. Often this will mean that the start/end of the file will be skipped, but that's okay. Rewrite the entire file only if specifically requested. Always provide a brief explanation of the updates, unless the user specifically requests only the code.

2. Format your response in markdown.

3. When writing out new code blocks, please specify the language ID after the initial backticks, like so:
```php
{{ code }}
```

4. When writing out code blocks for an existing file, please also specify the file path after the initial backticks and restate the method / class your codeblock belongs to, like so:
```language:some/other/file
function AIChatHistory() {
    ...
    {{ code }}
    ...
}
```

----- below developers can add project specific information
