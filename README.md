
# Kirby Block Expansion

Kirby 3 (v3.7.*) plugin with various block types


## Block Types

- Accordion
- Alert
- Description List
- Button


## Installation

```bash
  composer require werbeagentur-maikbartz/kirby-block-expansion
```

```bash
php composer.phar require werbeagentur-maikbartz/kirby-block-expansion
```

## Usage/Examples

```yaml
fields:
layout:
type: layout
layouts:
...
fieldsets:
- accordion
- alert
- button
- descriptionlist
```