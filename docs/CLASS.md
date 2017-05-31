# CLass

## Autopublish

Used to make invisible pages visible based upon the value in the scheduled field.
```php
<?php echo scheduler::redirect(); ?>
```

### How?

This should be run from inside the plugin to ensure to run on cached pages. Use the config option for it:

```php
c::set('plugin.scheduler.autopublish', true);
```

## Controller helper

You don't need to use the controller helper function. It's just a help function.

**On top of your `header.php` add this:**

```php
<?php echo scheduler::redirect(); ?>
```

It will redirect to the error page, if the current page is `isScheduledPublishable`.

### Alternatives

The above solution may not seem so nice to everyone. If you want, you can put the helper function inside a controller.
