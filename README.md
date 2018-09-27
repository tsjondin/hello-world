# Running

On your local computer

```bash
docker-compose up
```

# Development

## Installing requirements

```bash
composer install
```

## Testing

### Unit tests

```bash
vendor/bin/phpunit -c tests/
```

### Feature tests

```bash
vendor/bin/behat features
```
