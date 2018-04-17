## try

https://www.slideshare.net/samuelroze/symfony-messenger-queues-workers-more
https://symfony.com/doc/master/components/messenger.html

## Install

```
composer install
php -S 127.0.0.1:8000 -t public
```

### RabbitMq

```
docker run -d --hostname rabbit --name rabbit -p 8080:15672 -p 5672:5672 rabbitmq:3.7.4-management-alpine
# access: guest/guest
```

## Consume Message

```
./bin/console messenger:consume-messages default
```
