# SMS Sender

 By using this package you can send single/bulk sms. This will save your sms submit history to database also.

##### After installing the package run the command below

```angular2
php artisan config:cache
php artisan config:clear
php artisan migrate
php artisan queue:work
```

Browse
```angular2
url/sms
```

### Number input

```angular2
01XXXXXXXXX
01XXXXXXXXX
```
or
```angular2
01XXXXXXXXX,01XXXXXXXXX
```

### .env
```angular2
SMS_HOST=
SMS_API_KEY=
SMS_SENDER_ID=
```
