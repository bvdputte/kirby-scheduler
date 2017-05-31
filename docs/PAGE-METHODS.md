# Page Methods

You don't need to use the page methods. They are pure helper functions.

## $page->isScheduled()

Return `true` if the page is `scheduled`, else `false`.
Scheduled is whenever the scheduled field has been filled in.

```php
if( $page->isScheduled() ) {
  echo 'This page is scheduled';
}
```

## $page->isUnscheduled()

Return `true` if the page is `unscheduled`, else `false`.
Unscheduled is whenever the scheduled field is empty.

```php
if( $page->isUnscheduled() ) {
  echo 'This page is unscheduled';
}
```

## $page->isScheduledPublishable()

Return `true` if the page is `scheduledPublishable`, else `false`.
ScheduledPublishable is whenever the scheduled field value is earlier then the current time.

```php
if( $page->isScheduledPublishable() ) {
  echo 'This page should be visible';
}
```

## $page->getScheduled()

Return the scheduled as timestamp.

```php
echo 'Scheduled: ' . $page->getScheduled();
```

### $page->getScheduled('date')

Return the scheduled as date string.

```php
echo 'Scheduled: ' . $page->getScheduled('date');
```

### $page->getScheduled('time')

Return the scheduled as time string.

```php
echo 'Scheduled: ' . $page->getScheduled('time');
```
