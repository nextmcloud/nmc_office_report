This app logs every document opening with Nextcloud Office into a separate log
file `office.log` which is located in the data directory by default.

## Log format

```json
{
  "reqId": "ZKpZBnXYgtA25RWYMO7N",
  "level": 3,
  "time": "2022-10-18T15:05:01+00:00",
  "remoteAddr": "192.168.21.7",
  "user": "admin",
  "app": "no app in context",
  "method": "GET",
  "url": "/index.php/apps/richdocuments/wopi/files/4_oc4sbkr479v0?access_token=C1OOAl2hdd5y8GDPNkeTz96uT45WcLmQ&access_token_ttl=1666141500000",
  "message": "admin opened the file 4",
  "userAgent": "COOLWSD HTTP Agent 22.05.6.3",
  "version": "26.0.0.1",
  "data": {
    "userId": "admin"
  }
}
```

## Configuration

By default the office usage log will be stored as `office.log` within the Nextcloud data directory. However a custom location can be specified by setting the following config.php value:

```
'logfile_office_report' => '/var/log/office.log',
```
