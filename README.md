
# Running

On your local computer

```
docker-compose up
```

# Testing

## Unit tests

On your local computer

```
(cd tests; composer install)
tests/vendor/bin/phpunit -c tests/
```

## Feature tests

On your local computer

```
(cd tests; composer install)
tests/vendor/bin/behat tests/features
```
