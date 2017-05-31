# Config

## Field key

If you want to use another field name than `schedule`, you need to add an option for it.

```php
c::set( 'plugin.scheduled.pages.field.key', 'schedule' ); // `schedule` is default
```

## Autopublish

If you'ld like to use the kirby "visible" and "invisible" methods for pages + cache etc, you can opt-in for the autopublish feature. This bypasses the cache and automatically invalidates it when pages are published.

```php
c::set('plugin.scheduler.autopublish', true);
```

_Downside / side effect:_ This gets run on each page view in the site, even when pages are cached.

## Parent folder

Since autopublish gets run on each page load (even when cached), I decided to narrow its scope to a folder.
This is also needed to count its visible children to make the to-publish page visible (via sort).

```php
c::set('plugin.scheduler.folderuid', 'news');
```

## Time zone

Be sure to include the time zone in the config or the autopublish time will be based upon kirby's UTC default.

```php
c::set('timezone','Europe/Brussels');
```
